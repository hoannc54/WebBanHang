<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 11/3/2015
 * Time: 9:17 PM
 */

class MySql {
    protected $_query; //Thuộc tính protected thì có thêm _ trước tên

    public function __construct(){ //__construct() là phương thức "magic" do PHP cung cấp
        //Connect
        $connection = mysql_pconnect(Config::DB_SERVER, Config::DB_USERNAME, Config::DB_PASSWORD) or die('Not connected DB');
        $dbSelected = mysql_select_db(Config::DB_DATABASE, $connection) or die('Not selected DB');

        //Set UTF8
        mysql_query('SET NAMES UTF8', $connection);
    }

    public function query($sql){
        return $this -> _query = mysql_query($sql);
    }

    public function fetch(){
        return mysql_fetch_assoc($this -> _query);
    }
}
?>