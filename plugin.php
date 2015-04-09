<?php
/*
Plugin Name: et_appchase
Plugin URI:
Description: Quick Wordpress WebApps
Status:
Version: 0.1
Author: JJ Rohrer
Author URI:
Bitbucket URI: https://bitbucket.org/jjrohrer/et-appchase
Depends:
*/


class ClsEtAppChaseBootstrap {
    function __construct() {
        // =========================== Bootstrap -BEGIN- =======================================================
        register_activation_hook(__FILE__, function()  {
            if (!is_plugin_active('plugin-dependencies/plugin-dependencies.php')) {
                print "This plugin (".plugin_basename(__FILE__)."}) requires the <a target='_TOP' href='http://mini.local/Sites/wordpress_stuff/ET-AppChase-003/wp-admin/plugin-install.php?tab=plugin-information&plugin=plugin-dependencies&TB_iframe=true&width=772&height=1188'>plugin-dependencies</a> plugin to work.";
                exit;
            }
        });
        // =========================== Bootstrap -END- =========================================================
        require_once(__DIR__.'/plugin.inc.php');
    }
}



new ClsEtAppChaseBootstrap();