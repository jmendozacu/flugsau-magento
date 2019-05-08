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
 * @BackendForm
 */
class Customweb_Twint_BackendOperation_Form_Setup extends Customweb_Payment_BackendOperation_Form_Abstract {

	public function getTitle(){
		return Customweb_I18n_Translation::__("Setup");
	}

	public function getElementGroups(){
		return array(
			$this->getSetupGroup() 
		);
	}

	private function getSetupGroup(){
		$group = new Customweb_Form_ElementGroup();
		$group->setTitle(Customweb_I18n_Translation::__("Short Installation Instructions:"));
		
		$control = new Customweb_Form_Control_Html('description', 
				Customweb_I18n_Translation::__(
						'This is a brief installation instruction of the main and most important installation steps. It is important that you strictly follow the check-list. Only by doing so, the secure usage in correspondence with all security regulations can be guaranteed.'));
		$element = new Customweb_Form_WideElement($control);
		$group->addElement($element);
		
		$control = new Customweb_Form_Control_Html('steps', $this->createOrderedList($this->getSteps()));
		$element = new Customweb_Form_WideElement($control);
		$group->addElement($element);
		
		$group->addElement($element);
		
		return $group;
	}

	private function getSteps(){
		return array(
			Customweb_I18n_Translation::__('Enter the System ID into the corresponding field.'),
			Customweb_I18n_Translation::__(
					'Create a certificate and transform it into a PEM file (see manual). Copy the content of this file to the certificate field. Add the password for the certificate to the corresponding field.'),
			Customweb_I18n_Translation::__(
					'We recommend you to configure the cron job for your shop if you have not already. More information can be found in the manual that is part of the downloaded files.'),
			Customweb_I18n_Translation::__('Activate the payment method Twint.') 
		);
	}

	private function createOrderedList(array $steps){
		$list = '<ol>';
		foreach ($steps as $step) {
			$list .= "<li>$step</li>";
		}
		$list .= '</ol>';
		return $list;
	}
}