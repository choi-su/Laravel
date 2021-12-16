<?php
namespace App; //app/과 같은취급

class FirstClass //클래스선언

{
    public function CodeTest()
    {
        return "FirstClass::CodeTest called";
    }

    public static function sCodeTest()
    {
        return "FirstClass::sCodeTest called";
    }
}