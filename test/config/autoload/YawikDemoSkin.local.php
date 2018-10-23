<?php

if (!\YawikDemoSkin\Module::$isLoaded) {
    return array();
}

/**
 * The location of the Piwik Code.
 */
return array('view_manager' => array(
        'template_map' => array(
                        'piwik' => __DIR__ . '/../../../view/piwik.phtml'
                )
        ),
         'acl' => array(
                         'rules' => array(
                             // guests are allowed to see a list of companies.
                             'guest' => array(
                                 'deny' => array(
                                     'route/lang/organizations',
                                 ),
                             ),
                         ),
                     ),
       );
