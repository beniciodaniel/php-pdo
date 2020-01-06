<?php

class Erro
{
    public static function trataErro (Exception $exception)
    {
        if (DEBUG) {
            echo '<pre>';
            print_r($exception);
            echo '</pre>';
        } else {
            include 'erro.php';
        }
        exit;
    }
}