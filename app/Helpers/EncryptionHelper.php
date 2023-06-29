<?php

namespace App\Helpers;

use Illuminate\Support\Facades\File;

class EncryptionHelper
{
    /**
     * Encrypt a given value.
     *
     * @param  string  $data
     * @param  string  $key
     * @param  string  $cipherAlgorithm
     * @return string
     */
    public static function encrypt($data, $key, $cipherAlgorithm = 'AES-256-CBC')
    {
        $ivLength = openssl_cipher_iv_length($cipherAlgorithm);
        $iv = openssl_random_pseudo_bytes($ivLength);

        $encrypted = openssl_encrypt($data, $cipherAlgorithm, $key, OPENSSL_RAW_DATA, $iv);

        $encrypted = base64_encode($iv . $encrypted);

        return $encrypted;
    }

    /**
     * Decrypt a given value.
     *
     * @param  string  $encryptedData
     * @param  string  $key
     * @param  string  $cipherAlgorithm
     * @return string|null
     */
    public static function decrypt($encryptedData, $key, $cipherAlgorithm = 'AES-256-CBC')
    {
        $encryptedData = base64_decode($encryptedData);

        $ivLength = openssl_cipher_iv_length($cipherAlgorithm);
        $iv = substr($encryptedData, 0, $ivLength);

        $decrypted = openssl_decrypt(substr($encryptedData, $ivLength), $cipherAlgorithm, $key, OPENSSL_RAW_DATA, $iv);

        return $decrypted ?: null;
    }
}
