<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2019-02-12
 * Time: 09:52
 */
require "Category.php";
class CategoryDB
{
public $connect;

public function __construct($connect)
{
    $this->connect = $connect;
}
public function getAll()
{
    //chuan bi cau lenh sql
    $sql = "SELECT * FROM Category";
    $stmt = $this->connect->prepare($sql);
    //thuc thi cau lenh
    $stmt->execute();
    //lay du lieu tra ve
    $result = $stmt->fetchAll();
    // chuyen du lieu tra ve dang object, moi ddoi tuong object laf mot category
    $categories = [];
    foreach ($result as $row){
        $category = new Category($row['name']);
        $category->id = $row['id'];
        $catagories[] = $category;
    }

    return $categories;
}
}