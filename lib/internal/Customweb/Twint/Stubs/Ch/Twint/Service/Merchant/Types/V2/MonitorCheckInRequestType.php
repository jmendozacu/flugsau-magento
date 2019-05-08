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
 * @XmlType(name="MonitorCheckInRequestType", namespace="http://service.twint.ch/merchant/types/v2")
 */ 
class Customweb_Twint_Stubs_Ch_Twint_Service_Merchant_Types_V2_MonitorCheckInRequestType {
	/**
	 * @XmlElement(name="MerchantInformation", type="Customweb_Twint_Stubs_Ch_Twint_Service_Base_Types_V2_MerchantInformationType", namespace="http://service.twint.ch/merchant/types/v2")
	 * @var Customweb_Twint_Stubs_Ch_Twint_Service_Base_Types_V2_MerchantInformationType
	 */
	private $merchantInformation;
	
	/**
	 * @XmlElement(name="CustomerRelationUuid", type="Customweb_Twint_Stubs_Ch_Twint_Service_Base_Types_V2_UuidType", namespace="http://service.twint.ch/merchant/types/v2")
	 * @var Customweb_Twint_Stubs_Ch_Twint_Service_Base_Types_V2_UuidType
	 */
	private $customerRelationUuid;
	
	/**
	 * @XmlElement(name="PairingUuid", type="Customweb_Twint_Stubs_Ch_Twint_Service_Base_Types_V2_UuidType", namespace="http://service.twint.ch/merchant/types/v2")
	 * @var Customweb_Twint_Stubs_Ch_Twint_Service_Base_Types_V2_UuidType
	 */
	private $pairingUuid;
	
	/**
	 * @XmlValue(name="WaitForResponse", simpleType=@XmlSimpleTypeDefinition(typeName='boolean', typeNamespace='http://www.w3.org/2001/XMLSchema', type='Customweb_Twint_Stubs_Org_W3_XMLSchema_Boolean'), namespace="http://service.twint.ch/merchant/types/v2")
	 * @var boolean
	 */
	private $waitForResponse;
	
	public function __construct() {
	}
	
	/**
	 * @return Customweb_Twint_Stubs_Ch_Twint_Service_Merchant_Types_V2_MonitorCheckInRequestType
	 */
	public static function _() {
		$i = new Customweb_Twint_Stubs_Ch_Twint_Service_Merchant_Types_V2_MonitorCheckInRequestType();
		return $i;
	}
	/**
	 * Returns the value for the property merchantInformation.
	 * 
	 * @return Customweb_Twint_Stubs_Ch_Twint_Service_Base_Types_V2_MerchantInformationType
	 */
	public function getMerchantInformation(){
		return $this->merchantInformation;
	}
	
	/**
	 * Sets the value for the property merchantInformation.
	 * 
	 * @param Customweb_Twint_Stubs_Ch_Twint_Service_Base_Types_V2_MerchantInformationType $merchantInformation
	 * @return Customweb_Twint_Stubs_Ch_Twint_Service_Merchant_Types_V2_MonitorCheckInRequestType
	 */
	public function setMerchantInformation($merchantInformation){
		if ($merchantInformation instanceof Customweb_Twint_Stubs_Ch_Twint_Service_Base_Types_V2_MerchantInformationType) {
			$this->merchantInformation = $merchantInformation;
		}
		else {
			throw new BadMethodCallException("Type of argument merchantInformation must be Customweb_Twint_Stubs_Ch_Twint_Service_Base_Types_V2_MerchantInformationType.");
		}
		return $this;
	}
	
	
	/**
	 * Returns the value for the property customerRelationUuid.
	 * 
	 * @return Customweb_Twint_Stubs_Ch_Twint_Service_Base_Types_V2_UuidType
	 */
	public function getCustomerRelationUuid(){
		return $this->customerRelationUuid;
	}
	
	/**
	 * Sets the value for the property customerRelationUuid.
	 * 
	 * @param Customweb_Twint_Stubs_Ch_Twint_Service_Base_Types_V2_UuidType $customerRelationUuid
	 * @return Customweb_Twint_Stubs_Ch_Twint_Service_Merchant_Types_V2_MonitorCheckInRequestType
	 */
	public function setCustomerRelationUuid($customerRelationUuid){
		if ($customerRelationUuid instanceof Customweb_Twint_Stubs_Ch_Twint_Service_Base_Types_V2_UuidType) {
			$this->customerRelationUuid = $customerRelationUuid;
		}
		else {
			throw new BadMethodCallException("Type of argument customerRelationUuid must be Customweb_Twint_Stubs_Ch_Twint_Service_Base_Types_V2_UuidType.");
		}
		return $this;
	}
	
	
	/**
	 * Returns the value for the property pairingUuid.
	 * 
	 * @return Customweb_Twint_Stubs_Ch_Twint_Service_Base_Types_V2_UuidType
	 */
	public function getPairingUuid(){
		return $this->pairingUuid;
	}
	
	/**
	 * Sets the value for the property pairingUuid.
	 * 
	 * @param Customweb_Twint_Stubs_Ch_Twint_Service_Base_Types_V2_UuidType $pairingUuid
	 * @return Customweb_Twint_Stubs_Ch_Twint_Service_Merchant_Types_V2_MonitorCheckInRequestType
	 */
	public function setPairingUuid($pairingUuid){
		if ($pairingUuid instanceof Customweb_Twint_Stubs_Ch_Twint_Service_Base_Types_V2_UuidType) {
			$this->pairingUuid = $pairingUuid;
		}
		else {
			throw new BadMethodCallException("Type of argument pairingUuid must be Customweb_Twint_Stubs_Ch_Twint_Service_Base_Types_V2_UuidType.");
		}
		return $this;
	}
	
	
	/**
	 * Returns the value for the property waitForResponse.
	 * 
	 * @return Customweb_Twint_Stubs_Org_W3_XMLSchema_Boolean
	 */
	public function getWaitForResponse(){
		return $this->waitForResponse;
	}
	
	/**
	 * Sets the value for the property waitForResponse.
	 * 
	 * @param boolean $waitForResponse
	 * @return Customweb_Twint_Stubs_Ch_Twint_Service_Merchant_Types_V2_MonitorCheckInRequestType
	 */
	public function setWaitForResponse($waitForResponse){
		if ($waitForResponse instanceof Customweb_Twint_Stubs_Org_W3_XMLSchema_Boolean) {
			$this->waitForResponse = $waitForResponse;
		}
		else {
			$this->waitForResponse = Customweb_Twint_Stubs_Org_W3_XMLSchema_Boolean::_()->set($waitForResponse);
		}
		return $this;
	}
	
	
	
}