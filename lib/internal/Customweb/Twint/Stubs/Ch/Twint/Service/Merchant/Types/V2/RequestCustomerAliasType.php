<?php
/**
 * You are allowed to use this API in your web application.
 *
 * Copyright (C) 2018 by customweb GmbH
 *
 * This program is licenced under the customweb software licence. With the
 * purchase or the installation of the software in your application you
 * accept the licence agreement. The allowed usage is outlined in the
 * customweb software licence which can be found under
 * http://www.sellxed.com/en/software-license-agreement
 *
 * Any modification or distribution is strictly forbidden. The license
 * grants you the installation in one application. For multiuse you will need
 * to purchase further licences at http://www.sellxed.com/shop.
 *
 * See the customweb software licence agreement for more details.
 *
*/

/**
 * @XmlType(name="RequestCustomerAliasType", namespace="http://service.twint.ch/merchant/types/v2")
 */ 
class Customweb_Twint_Stubs_Ch_Twint_Service_Merchant_Types_V2_RequestCustomerAliasType extends Customweb_Twint_Stubs_Org_W3_XMLSchema_String {
	/**
	 * @return Customweb_Twint_Stubs_Ch_Twint_Service_Merchant_Types_V2_RequestCustomerAliasType
	 */
	public static function NONE() {
		return Customweb_Twint_Stubs_Ch_Twint_Service_Merchant_Types_V2_RequestCustomerAliasType::_()->set('NONE');
	}
	
	/**
	 * @return Customweb_Twint_Stubs_Ch_Twint_Service_Merchant_Types_V2_RequestCustomerAliasType
	 */
	public static function LIST_COUPONS() {
		return Customweb_Twint_Stubs_Ch_Twint_Service_Merchant_Types_V2_RequestCustomerAliasType::_()->set('LIST_COUPONS');
	}
	
	/**
	 * @return Customweb_Twint_Stubs_Ch_Twint_Service_Merchant_Types_V2_RequestCustomerAliasType
	 */
	public static function RECURRING_PAYMENT() {
		return Customweb_Twint_Stubs_Ch_Twint_Service_Merchant_Types_V2_RequestCustomerAliasType::_()->set('RECURRING_PAYMENT');
	}
	
	public function __construct() {
		parent::__construct();
	}
	
	/**
	 * @return Customweb_Twint_Stubs_Ch_Twint_Service_Merchant_Types_V2_RequestCustomerAliasType
	 */
	public static function _() {
		$i = new Customweb_Twint_Stubs_Ch_Twint_Service_Merchant_Types_V2_RequestCustomerAliasType();
		return $i;
	}
	
}