<?php

namespace DELIVERY\App\Views;

use OZONE\OZ\Core\BaseService;
use OZONE\OZ\Router\RouteInfo;
use OZONE\OZ\Router\Router;

final class DYService extends BaseService
{
	/**
	 * @param \OZONE\OZ\Router\RouteInfo $r
	 */
	public function contactFormRoute(RouteInfo $r)
	{
		// Get the form fields and remove whitespace.
		$name    = strip_tags(trim($r->getFormField('name', null)));
		$name    = str_replace(["\r", "\n"], [" ", " "], $name);
		$email   = filter_var(trim($r->getFormField('email', null)), FILTER_SANITIZE_EMAIL);
		$message = trim($r->getFormField('message', null));

		// Check that data was sent to the mailer.
		if (empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$this->getResponseHolder()
				 ->setError("Please complete the form and try again.");

			return;
		}

		// Set the recipient email address.
		$recipient = "contact@luthorr.com";

		// Set the email subject.
		$subject = "New contact from $name";

		// Build the email content.
		$email_content = "Name: $name\n";
		$email_content .= "Email: $email\n\n";
		$email_content .= "Message:\n$message\n";

		// Build the email headers.
		$email_headers = "From: Luthorr Admin <dev@luthorr.com>";

		// Send the email.
		if (mail($recipient, $subject, $email_content, $email_headers)) {
			$this->getResponseHolder()
				 ->setDone("Thank You! Your message has been sent.");
		} else {
			$this->getResponseHolder()
				 ->setError("Oops! Something went wrong and we couldn't send your message.");
		}
	}

	/**
	 * @inheritdoc
	 */
	public static function registerRoutes(Router $router)
	{
		$router->post('/contact-form[/]', function (RouteInfo $r) {
			$i = new self($r->getContext());

			$i->contactFormRoute($r);

			return $i->respond();
		}, [
			'route:name' => 'dl:contact-form'
		]);
	}
}