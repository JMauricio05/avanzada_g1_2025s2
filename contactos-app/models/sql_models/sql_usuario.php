<?php
namespace App\Models\SQLModels;

class SqlUsuario
{
    public static function selectByUserPwd()
    {
        return "select * from usuarios where username=? and password=?";
    }
}