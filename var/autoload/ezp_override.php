<?php
/**
 * Autoloader definition for eZ Publish Kernel overrides files.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version //autogentag//
 * @package kernel
 *
 */

return array(
      'eZContentFunctionCollection'   => 'extension/nxc_powercontent/modules/content/ezcontentfunctioncollection.php',
      'eZContentOperationCollection'  => 'extension/nxc_powercontent/modules/content/ezcontentoperationcollection.php',
      'eZCurrencyConverter'           => 'extension/bcwebshop/modules/shop/classes/ezcurrencyconverter.php',
      'eZCurrencyData'                => 'extension/bcwebshop/modules/shop/classes/ezcurrencydata.php',
      'eZDefaultConfirmOrderHandler'  => 'extension/bcwebshop/confirmorderhandlers/ezdefaultconfirmorderhandler.php',
      'eZECBHandler'                  => 'extension/bcwebshop/modules/shop/classes/exchangeratehandlers/ezecb/ezecbhandler.php',
      'eZExchangeRatesUpdateHandler'  => 'extension/bcwebshop/modules/shop/classes/exchangeratehandlers/ezexchangeratesupdatehandler.php',
      'eZExecution'                   => 'extension/bcwebshop/kernel/classes/kerneloverride/lib/ezutils/classes/ezexecution.php',
      'eZMultiPriceData'              => 'extension/bcwebshop/modules/shop/classes/ezmultipricedata.php',
      'eZPaymentCallbackChecker'      => 'extension/bcwebshop/modules/shop/classes/ezpaymentcallbackchecker.php',
      'eZPaymentGateway'              => 'extension/bcwebshop/modules/shop/classes/ezpaymentgateway.php',
      'eZPaymentObject'               => 'extension/bcwebshop/modules/shop/classes/ezpaymentobject.php',
      'eZRedirectGateway'             => 'extension/bcwebshop/modules/shop/classes/ezredirectgateway.php',
      'eZShopFunctionCollection'      => 'extension/bcwebshop/modules/shop/ezshopfunctioncollection.php',
      'eZShopFunctions'               => 'extension/bcwebshop/modules/shop/classes/ezshopfunctions.php',
      'eZShopOperationCollection'     => 'extension/bcwebshop/modules/shop/ezshopoperationcollection.php',
      'eZSimplePrice'                 => 'extension/bcwebshop/modules/shop/classes/ezsimpleprice.php',
      'eZUserShopAccountHandler'      => 'extension/bcwebshop/shopaccounthandlers/ezusershopaccounthandler.php',
      'ezpContentPublishingBehaviour' => 'extension/nxc_powercontent/modules/content/ezcontentpublishingbehaviour.php',
    );

?>
