<?php

function createCategory(){
    $category= $_POST['category'];
    $sql = "INSERT INTO categories (title) VALUES ('$category')";
    if (mysqli_query(conn(),$sql)){

        return true;
    }
    return false;
}
function showAlert($type,$message){
    return "<p class='alert alert-$type'>$message</p>";
}

function categories(){
    $sql = "SELECT * FROM categories";
    $query= mysqli_query(conn(),$sql);
    $rows=[];
    while ($row= mysqli_fetch_object($query)){
        array_push($rows,$row);
    }
    return $rows;

}


function category($id){
    $sql = "SELECT * FROM categories WHERE id=$id";
    $query = mysqli_query(conn(),$sql);

    return mysqli_fetch_object($query);
}

function updateCategory(){
    $id = $_POST['id'];
    $category= $_POST['category'];

    $sql = "UPDATE categories SET title='$category' WHERE id=$id";
    if (mysqli_query(conn(),$sql)){
        return true;
    }
    return false;
}
function deleteCategory($id){
    $sql= "DELETE FROM categories WHERE id= $id";

    if (mysqli_query(conn(),$sql)){
        return true;
    }
    return false;
}

function runQuery($sql){
    if (mysqli_query(conn(),$sql)){
        return true;
    }
    return false;
}

function register(){
    $name= $_POST['fname'];
    $name.= " ". $_POST['lname'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $sql = "INSERT INTO users(name,email,password) VALUES ('$name','$email','$password')";
    runQuery($sql);
}