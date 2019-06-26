<?php

namespace CDCollection;

class Connection
{
    public static function getConnection()
    {
        $db_host = '192.168.10.10';
        $db_name = 'cdcollection';
        $db_user = 'homestead';
        $db_password = 'secret';
        return  mysqli_connect($db_host, $db_user, $db_password, $db_name);
    }
}