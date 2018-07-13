<?php
    header("Content-Type:text/html;charset=UTF-8");
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $coon = new mysqli('localhost','root','','puma','3306');
    $sql = "SELECT * FROM puma_enroll WHERE phone = '$phone' and password = '$password'";
    $result = $coon -> query($sql);
    $row = $result -> fetch_assoc();
    if($row){
        $json = array("msg" => "","code" => "200");
    }else{
        $json = array("msg" => "用户名或密码错误", "code" => "0");
    }
    echo json_encode($json);
?>