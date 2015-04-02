<?php
/**
 * Created by PhpStorm.
 * User: dhiraj.gangoosirdar
 * Date: 3/19/2015
 * Time: 7:48 AM
 */

namespace PHPPlugin\ApiServices\Customers\ResponseModels;


class CustomerList
{
	private $_object;
	private $_count;
	private $_data;

    public function __construct($response)
    {
	    $this->_setCount ( $response->getCount() );
	    $this->_setData ( $response->getData() );
	    $this->_setObject ( $response->getObject() );
    }

	/**
	 * @return mixed
	 */
	public function getCount ()
	{
		return $this->_count;
	}

	/**
	 * @return mixed
	 */
	public function getData ()
	{
		return $this->_data;
	}

	/**
	 * @return mixed
	 */
	public function getObject ()
	{
		return $this->_object;
	}

	/**
	 * @param mixed $count
	 */
	private function _setCount ( $count )
	{
		$this->_count = $count;
	}

	/**
	 * @param mixed $data
	 */
	private function _setData ( $data )
	{
		$dataArray = $data->toArray();
		foreach($dataArray as $customer){
			$this->_data[] = $this->getCustomer($customer);
		}
	}

	/**
	 * @param mixed $object
	 */

	private function _setObject ( $object )
	{
		$this->_object = $object;
	}

	private function getCustomer ( $customer )
	{
		$dummyObjCart = new \CheckoutApi_Lib_RespondObj();
		$dummyObjCart->setConfig($customer);
		$cardObg = new \PHPPlugin\ApiServices\Customers\ResponseModels\Customer($dummyObjCart);
		return $cardObg;
	}

}