<?php
namespace PHPPlugin\ApiServices\Cards\RequestModels;

class BaseCard
{
	protected $_name;
	protected $_expiryMonth;
	protected $_expiryYear;
	protected $_billingDetails;

	/**
	 * @return mixed
	 */
	public function getName ()
	{
		return $this->_name;
	}

	/**
	 * @param mixed $name
	 */
	public function setName ( $name )
	{
		$this->_name = $name;
	}

	/**
	 * @return mixed
	 */
	public function getExpiryMonth ()
	{
		return $this->_expiryMonth;
	}

	/**
	 * @param mixed $expiryMonth
	 */
	public function setExpiryMonth ( $expiryMonth )
	{
		$this->_expiryMonth = $expiryMonth;
	}

	/**
	 * @return mixed
	 */
	public function getExpiryYear ()
	{
		return $this->_expiryYear;
	}

	/**
	 * @param mixed $expiryYear
	 */
	public function setExpiryYear ( $expiryYear )
	{
		$this->_expiryYear = $expiryYear;
	}

	/**
	 * @return mixed
	 */
	public function getBillingDetails ()
	{
		return $this->_billingDetails;
	}

	/**
	 * @param mixed $billingDetails
	 */
	public function setBillingDetails ( \PHPPlugin\ApiServices\SharedModels\Address $billingDetails )
	{
		$this->_billingDetails = $billingDetails;
	}
}