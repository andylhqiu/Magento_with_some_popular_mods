<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category	CosmoCommerce
 * @package 	CosmoCommerce_Bankcomm
 * @copyright	Copyright (c) 2009-2014 CosmoCommerce,LLC. (http://www.cosmocommerce.com)
 * @contact :
 * T: +86-021-66346672
 * L: Shanghai,China
 * M:sales@cosmocommerce.com
 */
class CosmoCommerce_Bankcomm_Model_Source_Logistics_Payment
{

    public function toOptionArray()
    {
        return array(
            array('value' => 'BUYER_PAY', 'label' => Mage::helper('bankcomm')->__('BUYER_PAY')),
            array('value' => 'SELLER_PAY', 'label' => Mage::helper('bankcomm')->__('SELLER_PAY')),
            array('value' => 'BUYER_PAY_AFTER_RECEIVE', 'label' => Mage::helper('bankcomm')->__('BUYER_PAY_AFTER_RECEIVE')),
        );
    }
}



