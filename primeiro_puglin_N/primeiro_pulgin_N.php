<?php
/*
* Plugin Name: Meu Primeiro Pugl-in N
* Plugin URI: https://sp.senac.br
* Description: Este é um plug-in desenvolvido por mim.
* Version: 0.0.1
* Author: Sarinha Venenosa
* Author URI: https://github.com/NaranoNVA
* License: CC BY
*/

add_filter( 'login_errors', 'altera_msg_login' );

function altera_msg_login(){

    return 'Credenciais inválidas';
}