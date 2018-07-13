<?php
    header("Content-Type:text/html;charset=UTF-8");
        $surname = $_POST['surname'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $affirm_password = $_POST['affirm_password'];
        $postbox = $_POST['postbox'];
        $sex = $_POST['sex'];
    $conn = new mysqli('localhost','root','','puma','3306');
    $sql = "INSERT INTO puma_enroll (surname,phone,password,affirm_password,postbox,sex)VALUES('$surname','$phone','$password','$affirm_password','$postbox','$sex')";
    $row = $conn -> query($sql);
    if ($row) {
		$json = array("msg" => "","code" => "200");
	} else {
		$json = array("msg" => "注册失败","code" => "0");
	}
	echo json_encode($json);
?>