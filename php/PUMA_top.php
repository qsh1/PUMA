<?php
    header("Content-Type:text/html;charset=UTF-8");
    $id = $_POST['id'];
    $conn = new mysqli('localhost','root','','puma','3306');
    $conn->query("SET CHARACTER SET 'utf8'");//读库   
    $conn->query("SET NAMES 'utf8'");//写库 
    if($id >= 8){
        $sql = "SELECT * FROM puma_commodity WHERE id < $id";
        $result = $conn -> query($sql);
        $row = $result -> fetch_all(); 
    }else{
        $sql = "SELECT * FROM puma_commodity WHERE id = $id";
        $result = $conn -> query($sql);
        $row = $result -> fetch_assoc(); 
    }
    if($row){
        $json = array("msg" => "","code" => "200","data" => $row);
    }else{
        $json = array("msg" => "失败", "code" => "0");
    }
    echo json_encode($json);
?>