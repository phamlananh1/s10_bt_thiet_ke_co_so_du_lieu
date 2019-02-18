<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2019-02-12
 * Time: 09:50
 */
require "CategoryDB.php";
require "Category.php";

class CategoryController
{
    public $categoryDB;
    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=bai11b", "root", "123456");
        $this->categoryDB = new CategoryDB($connection->connect());
        $conn = $connection->connect();
    }
    public function index(){
        $customers = $this->categoryDB->getAll();
        include 'list.php';
    }

}