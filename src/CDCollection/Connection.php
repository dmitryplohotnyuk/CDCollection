<?php

namespace CDCollection;

class Connection
{
    public static function getConnection()
    {
        $db_host = 'mylove01.mysql.tools';
        $db_name = 'mylove01_collect';
        $db_user = 'mylove01_collect';
        $db_password = '8d5o(@J9iR';
        return  mysqli_connect($db_host, $db_user, $db_password, $db_name);
    }
}