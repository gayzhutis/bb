<?php /* Index file for miniShop2 plugin */
return array(
            'xpdo_meta_map' => array(
                        'msProductData' => require_once dirname(__FILE__) .'/msproductdata.map.inc.php'
            )
            ,'manager' => array(
                        'msProductData' => MODX_ASSETS_URL . 'components/minishop2/plugins/mainproducts/msproductdata.js'
            )
);