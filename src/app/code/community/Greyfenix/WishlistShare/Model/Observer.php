<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Magento
 *
 * DISCLAIMER
 *
 * This custom module is owned by Greyfenix Media and it licensed under greyfenix.com.au
 * Please do not modify this file cause you will lose the modified when upgrading it
 *
 * @category  Module
 * @package   WishlistShare
 * @author    Dimas Putra <dp@greyfenix.com.au>
 * @copyright Greyfenix adapt MIT license
 * @license   Greyfenix http://greyfenix.com.au/
 * @link      http://greyfenix.com.au/
 */

/**
 * Greyfenix WishlistShare observer to run on predispatch controller
 *
 * @package    Greyfenix_WishlistShare
 * @author     Dimas Putra <dp@greyfenix.com.au>
 */
class Greyfenix_WishlistShare_Model_Observer
{
    /**
     * Set the parameters that causing the link redirect to 404 page
     *
     * @param $observer
     */
    public function addAllCartEmail($observer)
    {
        // determine the request
        $request = Mage::app()->getRequest();

        // set the form_key if not exist
        if (!$request->getParam('form_key')) {
            $request->setParam('form_key', Mage::getSingleton('core/session')->getFormKey());
        }

        // set the qty to be json data if not exist
        if (!$request->getParam('qty')) {
            $request->setParam('qty', json_encode(array()));
        }
    }
}