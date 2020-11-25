<?php
/*
* Plugin Name: Crud Feliz
* Plugin URI: https://sp.senac.br
* Description: Este é um crud desenvolvido por mim para testar.
* Version: 0.0.1
* Author: Sarinha Venenosa
* Author URI: https://github.com/NaranoNVA
* License: CC BY
*/

if( !defined('WPINC') ) exit;

register_activation_hook(__FILE__, 'create_table');

function create_table(){

    global $wpdb; 

$wpdb->query(" CREATE TABLE {$wpdb->prefix}agenda
                            ( id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                              nome VARCHAR(255) NOT NULL,
                              whatsapp BIGINT UNSIGNED NOT NULL)");
}