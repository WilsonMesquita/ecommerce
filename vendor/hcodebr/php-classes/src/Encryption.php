<?php

namespace Hcode;

class Encryption {

    const SECRET = "senha de 16 caracteres aqui";
    const CIPHER = "aes-256-cbc";

    public static function Encrypt($str, $base = true) {        

        /*$ivlen = openssl_cipher_iv_length(self::CIPHER);
        $iv = openssl_random_pseudo_bytes($ivlen);
        $ciphertext = openssl_encrypt($str, self::CIPHER, self::SECRET, $options=0, $iv);
        $dados = array('iv'=>$iv, 'text'=>$ciphertext);

        return ($base) ? base64_encode(serialize($dados)) : serialize($dados);*/

    }
    public static function Decrypt($str, $base = true) {

        $result = base64_decode($result);
     $code = mb_substr($result, openssl_cipher_iv_length('aes-256-cbc'), null, '8bit');
     $iv = mb_substr($result, 0, openssl_cipher_iv_length('aes-256-cbc'), '8bit');;
     $idrecovery = openssl_decrypt($code, 'aes-256-cbc', User::SECRET, 0, $iv);

        /*$str = ($base) ? base64_decode($str) : $str;
        $code = mb_substr($str, openssl_cipher_iv_length(self::CIPHER), null, '8bit');
        $iv = mb_substr($str, 0, openssl_cipher_iv_length(self::CIPHER), '8bit');

        return openssl_decrypt($code, self::CIPHER, self::SECRET, 0, $iv);*/
        
    }
}

?>