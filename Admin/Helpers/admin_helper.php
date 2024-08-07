<?php

if ( ! function_exists("yesno") ) {

    function yesno(bool $value): string 
    {

        return $value ?"si":"no";
    }
}