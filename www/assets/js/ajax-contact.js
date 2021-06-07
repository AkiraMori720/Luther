$(function () {

	// Get the form.
	var form = $("#contact-form");

	// Get the messages div.
	var formMessages = $(".form-message");

	// Set up an event listener for the contact form.
	$(form).submit(function (e) {
		// Stop the browser from submitting the form.
		e.preventDefault();

		// Serialize the form data.
		var formData = $(form).serialize();

		// Submit the form using AJAX.
		$.ajax({
			type   : "POST",
			url    : $(form).attr("action"),
			data   : formData,
			headers: {
				accept: "application/json"
			}
		})
			.done(function (response) {
				if (response.error === 1) {
					// Make sure that the formMessages div has the 'error' class.
					$(formMessages).removeClass("success");
					$(formMessages).addClass("error");
				} else {
					// Make sure that the formMessages div has the 'success' class.
					$(formMessages).removeClass("error");
					$(formMessages).addClass("success");
					// Clear the form.
					$("#contact-form input,#contact-form textarea").val("");
				}

				// Set the message text.
				$(formMessages).text(response.msg);

			})
			.fail(function (data) {
				// Make sure that the formMessages div has the 'error' class.
				$(formMessages).removeClass("success");
				$(formMessages).addClass("error");

				// Set the message text.
				if (data.response.msg !== "") {
					$(formMessages).text(data.response.msg);
				} else {
					$(formMessages).text("Oops! An error occured and your message could not be sent.");
				}
			});
	});

});
