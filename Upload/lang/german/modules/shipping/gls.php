<?php
/* --------------------------------------------------------------
   2014-03-16 Tobias Wissen wissen.tobias@gmail.com
   based on:

   
   flat.php 2008-07-27 gambio
   Gambio OHG
   http://www.gambio.de
   Copyright (c) 2008 Gambio OHG
   Released under the GNU General Public License (Version 2)
   [http://www.gnu.org/licenses/gpl-2.0.html]
   --------------------------------------------------------------


   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(flat.php,v 1.6 2003/02/16); www.oscommerce.com 
   (c) 2003	 nextcommerce (flat.php,v 1.4 2003/08/13); www.nextcommerce.org
   (c) 2003 XT-Commerce - community made shopping http://www.xt-commerce.com ($Id: flat.php 899 2005-04-29 02:40:57Z hhgag $)

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/
global $gmLangFileMaster;
//$gmLangFileMaster->define_lang_file_content('lang/german/modules/shipping/gls.php');


define('MODULE_SHIPPING_GLS_TEXT_TITLE', 'GLS Versand');
define('MODULE_SHIPPING_GLS_TEXT_DESCRIPTION', 'Pauschale Versandkosten für Versand mit GLS Versand');
define('MODULE_SHIPPING_GLS_TEXT_WAY', 'Versicherter Versand mit GLS zu Ihnen.');

define('MODULE_SHIPPING_GLS_STATUS_TITLE' , 'GLS pauschal Versand aktivieren');
define('MODULE_SHIPPING_GLS_STATUS_DESC' , 'M&ouml;chten Sie GLS pauschal Versand anbieten?');
define('MODULE_SHIPPING_GLS_ALLOWED_TITLE' , 'Erlaubte Versandzonen');
define('MODULE_SHIPPING_GLS_ALLOWED_DESC' , 'Geben Sie <b>einzeln</b> die Zonen an, in welche ein Versand möglich sein soll. (z.B. AT,DE (lassen Sie dieses Feld leer, wenn Sie alle Zonen erlauben wollen))');
define('MODULE_SHIPPING_GLS_COST_TITLE' , 'Versandkosten');
define('MODULE_SHIPPING_GLS_COST_DESC' , 'Versandkosten für alle Bestellungen unter dieser Versandmethode.');
define('MODULE_SHIPPING_GLS_TAX_CLASS_TITLE' , 'Steuerklasse');
define('MODULE_SHIPPING_GLS_TAX_CLASS_DESC' , 'Folgende Steuerklasse an Versandkosten anwenden.');
define('MODULE_SHIPPING_GLS_ZONE_TITLE' , 'Versandzone');
define('MODULE_SHIPPING_GLS_ZONE_DESC' , 'Wenn eine Zone ausgew&auml;hlt ist, wird diese Versandmethode ausschliseslich f&uuml;r diese Zone angewendet.');
define('MODULE_SHIPPING_GLS_SORT_ORDER_TITLE' , 'Sortierreihenfolge');
define('MODULE_SHIPPING_GLS_SORT_ORDER_DESC' , 'Reihenfolge der Anzeige');

?>