<?php
class DB
{
    public $con;
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "assignment2db";

    function __construct()
    {
        $this->con = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
        mysqli_query($this->con, "SET NAMES 'utf8'");
    }
}
