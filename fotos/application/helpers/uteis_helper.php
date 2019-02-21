<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
  | -------------------------------------------------------------------------
  | Site Helper
  | -------------------------------------------------------------------------
  | Desenvolvido por Bruno Almeida
  |
 */

/**
 * url_amigavel
 * 
 * Retira acentos, substitui espaço por - e
 * deixa tudo minúsculo
 * 
 *
 * @param	string
 * @return	string
 */
function removeAcentos($string) {

    return preg_replace(array("/(á|à|ã|â|ä)/", "/(Á|À|Ã|Â|Ä)/", "/(é|è|ê|ë)/", "/(É|È|Ê|Ë)/", "/(í|ì|î|ï)/", "/(Í|Ì|Î|Ï)/", "/(ó|ò|õ|ô|ö)/", "/(Ó|Ò|Õ|Ô|Ö)/", "/(ú|ù|û|ü)/", "/(Ú|Ù|Û|Ü)/", "/(ñ)/", "/(Ñ)/", "/(ç)/", "/(Ç)/"), explode(" ", "a A e E i I o O u U n N c C"), $string);
}

/**
 * explode_t
 * 
 * Faz o explode em PHP, usa a função trim em cada índice do array e monta o array novamente
 * 
 *
 * @param	string, string
 * @return	array
 */
function explode_t($delimitador, $string) {
    $explode = explode($delimitador, $string);
    $array = array();
    foreach ($explode as $item) {
        $array[] = trim($item);
    }
    return $array;
}

/**
 * data_br
 * 
 * Converte uma data no formato mysql para o formato brasileiro
 * 
 *
 * @param	string
 * @return	string
 */
function data_br($data_bd) {
    return implode('/', array_reverse(explode('-', $data_bd)));
}

/**
 * data_bd
 * 
 * Converte uma data no formato brasileiro para o formato mysql
 * 
 *
 * @param	string
 * @return	string
 */
function data_bd($data_br) {
    return implode('-', array_reverse(explode('/', $data_br)));
}

/**
 * limitar_texto
 * 
 * Remove todas as tags HTML e limita os caractéres do texto, adicionando ... se for maior que o limite
 * 
 *
 * @param	string, int
 * @return	string
 */
function limitar_texto($texto, $limit) {
    $texto = strip_tags($texto);
    if (strlen($texto) > $limit) {
        return substr($texto, 0, $limit) . '...';
    } else {
        return substr($texto, 0, $limit);
    }
}

/**
 * enviar_email
 * 
 * Faz o envio de e-mail
 * 
 *
 * @param	string, string, string/array
 * @return	boolean
 */
function enviar_email($destinatarios, $assunto, $corpo, $anexo = null) {
    $CI = & get_instance();
    $config['charset'] = 'utf-8';
    $config['mailtype'] = 'html';
    $config['protocol'] = 'smtp';
    $config['smtp_host'] = 'ssl://smtp.gmail.com';
    $config['smtp_port'] = '465';
    $config['smtp_timeout'] = '30';
    $config['smtp_user'] = 'erlanio.freire@urca.br';
    $config['smtp_pass'] = '******';
    $config['newline'] = "\r\n";

    $CI->load->library('email', $config);

    $CI->email->set_newline("\r\n");
    $CI->email->from('', 'auroranoticias.com.br');
    $CI->email->subject($assunto);
    $CI->email->message($corpo);
    $CI->email->to($destinatarios);
    $filename = $anexo;
    $CI->email->attach($filename);

    return $CI->email->send();
}


function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
 



/* End of file site_helper.php */
/* Location: ./application/helpers/helper.php */
