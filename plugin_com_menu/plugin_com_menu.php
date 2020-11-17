<?php
/*
* Plugin Name: Plugin Com Menu
* Plugin URI: https://sp.senac.br
* Description: Este é um plug-in desenvolvido por mim para testar menus laterais.
* Version: 0.0.1
* Author: Sarinha Venenosa
* Author URI: https://github.com/NaranoNVA
* License: CC BY
*/


add_action( 'admin_menu', 'menu_personalizado' );

function menu_personalizado(){

    add_menu_page( 'Configuração do Puglin',
                    'Plugin com Menu',
                    'administrator',
                    'plugin-menu-config',
                    'abrir_config',
                    'dashicons-buddicons-activity');

    add_submenu_page( 'plugin-menu-config',
                      'SubMenu',
                      'SubMenu1',
                      'administrator',
                      'plugin-submenu',
                      'abrir_config_sub' );                
}

function abrir_config(){
    include 'plugin_menu_config_tpl.php';
}

function abrir_config_sub(){
    include 'plugin_submenu_tpl.php';
}