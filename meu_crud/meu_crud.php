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

register_deactivation_hook( __FILE__, 'apagar_tabela');

function apagar_tabela(){

    global $wpdb;

    $wpdb->query(" DROP TABLE {$wpdb->prefix}agenda ");

}

add_action( 'admin_menu', 'crud_personalizado' );

function crud_personalizado(){

    add_menu_page( 'Configuração do Puglin',
                    'Meu CRUD',
                    'administrator',
                    'lista-agenda',
                    'abre_config',
                    'dashicons-smiley');

}

function abre_config(){

    global $wpdb;

    if( isset($_GET['apagar']) ){
        
        $id = preg_replace('/\D/', '', $_GET['apagar']);

        $wpdb->query(" DELETE FROM  {$wpdb->prefix}agenda where id = $id");
    }

    if( isset($_POST['submit']) ){
        if( $_POST['submit'] == 'Gravar' ){

            $wpdb->query(
                $wpdb->prepare( " INSERT INTO {$wpdb->prefix}agenda
                ( nome, whatsapp ) VALUES ( %s, %d )", $_POST['nome'], $_POST['whatsapp'] ));

        }
    }

    $contatos = $wpdb->get_results(" SELECT * FROM  {$wpdb->prefix}agenda ");

    include 'lista_tpl.php';
}

