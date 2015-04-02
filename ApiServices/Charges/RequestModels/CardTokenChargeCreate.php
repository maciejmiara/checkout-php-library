<?php
/**
 * Created by PhpStorm.
 * User: dhiraj.gangoosirdar
 * Date: 3/17/2015
 * Time: 11:31 AM
 */

namespace PHPPlugin\ApiServices\Charges\RequestModels;


class CardTokenChargeCreate extends \PHPPlugin\ApiServices\Charges\RequestModels\BaseCharge
{
	private $_cardToken;

	/**
	 * @return mixed
	 */
	public function getCardToken ()
	{
		return $this->_cardToken;
	}

	/**
	 * @param mixed $cardToken
	 */
	public function setCardToken ( $cardToken )
	{
		$this->_cardToken = $cardToken;
	}
}