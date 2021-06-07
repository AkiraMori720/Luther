<?php

/**
 * Auto generated file
 *
 * WARNING: please don't edit.
 *
 * Proudly With: gobl v1.5.0
 * Time: 1622529633
 */


namespace DELIVERY\App\Db\Base;

use Gobl\ORM\ORM;
use Gobl\ORM\ORMEntityBase;
use DELIVERY\App\Db\DYCompaniesQuery as DYCompaniesQueryReal;

use OZONE\OZ\Db\OZUsersController as OZUsersControllerRealR;
use DELIVERY\App\Db\DYEmployeesController as DYEmployeesControllerRealR;
use DELIVERY\App\Db\DYDeliverersController as DYDeliverersControllerRealR;
use DELIVERY\App\Db\DYProductsController as DYProductsControllerRealR;


/**
 * Class DYCompany
 */
abstract class DYCompany extends ORMEntityBase
{
	const TABLE_NAME = 'dy_companies';

	const COL_ID = 'company_id';
	const COL_OWNER_ID = 'company_owner_id';
	const COL_TYPE = 'company_type';
	const COL_NAME = 'company_name';
	const COL_SHORT_DESCRIPTION = 'company_short_description';
	const COL_DESCRIPTION = 'company_description';
	const COL_IMAGE = 'company_image';
	const COL_DATA = 'company_data';
	const COL_ADD_TIME = 'company_add_time';
	const COL_UPDATE_TIME = 'company_update_time';
	const COL_VALID = 'company_valid';

	/**
	 * @var \OZONE\OZ\Db\OZUser
	 */
	protected $_r_owner;


	/**
	 * DYCompany constructor.
	 *
	 * @param bool $is_new true for new entity false for entity fetched
	 *                     from the database, default is true
	 * @param bool $strict Enable/disable strict mode
	 */
	public function __construct($is_new = true, $strict = true)
	{
		parent::__construct(
			ORM::getDatabase('DELIVERY\App\Db'),
			$is_new,
			$strict,
			self::TABLE_NAME,
			DYCompaniesQueryReal::class
		);
	}

	/**
	 * OneToOne relation between `dy_companies` and `oz_users`.
	 *
	 * @return null|\OZONE\OZ\Db\OZUser
	 * @throws \Throwable
	 */
	public function getOwner()
	{
		if (!isset($this->_r_owner)) {
			$filters = [];
			if(!is_null($v = $this->getOwnerId())){
				$filters['user_id'] = $v;
			}
			if (empty($filters)){
				return null;
			}

			$m = new OZUsersControllerRealR();
			$this->_r_owner = $m->getItem($filters);
		}

		return $this->_r_owner;
	}

	/**
	 * OneToMany relation between `dy_companies` and `dy_employees`.
	 *
	 * @param array	$filters  the row filters
	 * @param int|null $max	  maximum row to retrieve
	 * @param int	  $offset   first row offset
	 * @param array	$order_by order by rules
	 * @param int|bool $total	total rows without limit
	 *
	 * @return \DELIVERY\App\Db\DYEmployee[]
	 * @throws \Throwable
	 */
	function getEmployees($filters = [], $max = null, $offset = 0, $order_by = [], &$total = false)
	{
		if(!is_null($v = $this->getId())){
			$filters['employee_company_id'] = $v;
		}
		if (empty($filters)){
			return [];
		}

		$ctrl = new DYEmployeesControllerRealR();

		return $ctrl->getAllItems($filters, $max, $offset, $order_by, $total);
	}

	/**
	 * OneToMany relation between `dy_companies` and `dy_deliverers`.
	 *
	 * @param array	$filters  the row filters
	 * @param int|null $max	  maximum row to retrieve
	 * @param int	  $offset   first row offset
	 * @param array	$order_by order by rules
	 * @param int|bool $total	total rows without limit
	 *
	 * @return \DELIVERY\App\Db\DYDeliverer[]
	 * @throws \Throwable
	 */
	function getDeliverers($filters = [], $max = null, $offset = 0, $order_by = [], &$total = false)
	{
		if(!is_null($v = $this->getId())){
			$filters['deliverer_company_id'] = $v;
		}
		if (empty($filters)){
			return [];
		}

		$ctrl = new DYDeliverersControllerRealR();

		return $ctrl->getAllItems($filters, $max, $offset, $order_by, $total);
	}

	/**
	 * OneToMany relation between `dy_companies` and `dy_products`.
	 *
	 * @param array	$filters  the row filters
	 * @param int|null $max	  maximum row to retrieve
	 * @param int	  $offset   first row offset
	 * @param array	$order_by order by rules
	 * @param int|bool $total	total rows without limit
	 *
	 * @return \DELIVERY\App\Db\DYProduct[]
	 * @throws \Throwable
	 */
	function getProducts($filters = [], $max = null, $offset = 0, $order_by = [], &$total = false)
	{
		if(!is_null($v = $this->getId())){
			$filters['product_company_id'] = $v;
		}
		if (empty($filters)){
			return [];
		}

		$ctrl = new DYProductsControllerRealR();

		return $ctrl->getAllItems($filters, $max, $offset, $order_by, $total);
	}

	/**
	 * Getter for column `dy_companies`.`id`.
	 *
	 * @return int the real type is: int
	 */
	public function getId()
	{
		$column = self::COL_ID;
		$v = $this->$column;

		if( $v !== null){
			$v = (int)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_companies`.`id`.
	 *
	 * @param int $id
	 *
	 * @return static
	 */
	public function setId($id)
	{
		$column = self::COL_ID;
		$this->$column = $id;

		return $this;
	}

	/**
	 * Getter for column `dy_companies`.`owner_id`.
	 *
	 * @return string the real type is: bigint
	 */
	public function getOwnerId()
	{
		$column = self::COL_OWNER_ID;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_companies`.`owner_id`.
	 *
	 * @param string $owner_id
	 *
	 * @return static
	 */
	public function setOwnerId($owner_id)
	{
		$column = self::COL_OWNER_ID;
		$this->$column = $owner_id;

		return $this;
	}

	/**
	 * Getter for column `dy_companies`.`type`.
	 *
	 * @return string the real type is: string
	 */
	public function getType()
	{
		$column = self::COL_TYPE;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_companies`.`type`.
	 *
	 * @param string $type
	 *
	 * @return static
	 */
	public function setType($type)
	{
		$column = self::COL_TYPE;
		$this->$column = $type;

		return $this;
	}

	/**
	 * Getter for column `dy_companies`.`name`.
	 *
	 * @return string the real type is: string
	 */
	public function getName()
	{
		$column = self::COL_NAME;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_companies`.`name`.
	 *
	 * @param string $name
	 *
	 * @return static
	 */
	public function setName($name)
	{
		$column = self::COL_NAME;
		$this->$column = $name;

		return $this;
	}

	/**
	 * Getter for column `dy_companies`.`short_description`.
	 *
	 * @return string the real type is: string
	 */
	public function getShortDescription()
	{
		$column = self::COL_SHORT_DESCRIPTION;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_companies`.`short_description`.
	 *
	 * @param string $short_description
	 *
	 * @return static
	 */
	public function setShortDescription($short_description)
	{
		$column = self::COL_SHORT_DESCRIPTION;
		$this->$column = $short_description;

		return $this;
	}

	/**
	 * Getter for column `dy_companies`.`description`.
	 *
	 * @return string the real type is: string
	 */
	public function getDescription()
	{
		$column = self::COL_DESCRIPTION;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_companies`.`description`.
	 *
	 * @param string $description
	 *
	 * @return static
	 */
	public function setDescription($description)
	{
		$column = self::COL_DESCRIPTION;
		$this->$column = $description;

		return $this;
	}

	/**
	 * Getter for column `dy_companies`.`image`.
	 *
	 * @return string the real type is: string
	 */
	public function getImage()
	{
		$column = self::COL_IMAGE;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_companies`.`image`.
	 *
	 * @param string $image
	 *
	 * @return static
	 */
	public function setImage($image)
	{
		$column = self::COL_IMAGE;
		$this->$column = $image;

		return $this;
	}

	/**
	 * Getter for column `dy_companies`.`data`.
	 *
	 * @return string the real type is: string
	 */
	public function getData()
	{
		$column = self::COL_DATA;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_companies`.`data`.
	 *
	 * @param string $data
	 *
	 * @return static
	 */
	public function setData($data)
	{
		$column = self::COL_DATA;
		$this->$column = $data;

		return $this;
	}

	/**
	 * Getter for column `dy_companies`.`add_time`.
	 *
	 * @return string the real type is: bigint
	 */
	public function getAddTime()
	{
		$column = self::COL_ADD_TIME;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_companies`.`add_time`.
	 *
	 * @param string $add_time
	 *
	 * @return static
	 */
	public function setAddTime($add_time)
	{
		$column = self::COL_ADD_TIME;
		$this->$column = $add_time;

		return $this;
	}

	/**
	 * Getter for column `dy_companies`.`update_time`.
	 *
	 * @return string the real type is: bigint
	 */
	public function getUpdateTime()
	{
		$column = self::COL_UPDATE_TIME;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_companies`.`update_time`.
	 *
	 * @param string $update_time
	 *
	 * @return static
	 */
	public function setUpdateTime($update_time)
	{
		$column = self::COL_UPDATE_TIME;
		$this->$column = $update_time;

		return $this;
	}

	/**
	 * Getter for column `dy_companies`.`valid`.
	 *
	 * @return bool the real type is: bool
	 */
	public function getValid()
	{
		$column = self::COL_VALID;
		$v = $this->$column;

		if( $v !== null){
			$v = (bool)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_companies`.`valid`.
	 *
	 * @param bool $valid
	 *
	 * @return static
	 */
	public function setValid($valid)
	{
		$column = self::COL_VALID;
		$this->$column = $valid;

		return $this;
	}

}
