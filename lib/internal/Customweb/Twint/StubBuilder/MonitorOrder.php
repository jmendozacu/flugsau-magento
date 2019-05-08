<?php

/**
 *  * You are allowed to use this API in your web application.
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
 *
 * @author Sebastian Bossert
 */
class Customweb_Twint_StubBuilder_MonitorOrder extends Customweb_Twint_StubBuilder_Abstract {
	private $id;

	public function __construct(Customweb_DependencyInjection_IContainer $container, $id){
		parent::__construct($container);
		$this->id = $id;
	}

	public function build(){
		//@formatter:off
		$stub = Customweb_Twint_Stubs_Ch_Twint_Service_Merchant_Types_V2_MonitorOrderRequestElement::_()
						->setMerchantInformation($this->getMerchantInformation())
						->setOrderUUID(Customweb_Twint_Stubs_Ch_Twint_Service_Base_Types_V2_UuidType::_()->set($this->id));
		//@formatter:on
		return $stub;
	}

}