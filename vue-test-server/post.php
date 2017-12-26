<?php
	header('Access-Control-Allow-Origin:*');
	$userName = trim($_POST['userName']);
	$passWord = trim($_POST['passWord']);

	if($userName != '' && $passWord != '')
	{
        $json = array('errCode' => '0', 'data' => array('userName' => $userName, 'passWord' => $passWord));
    }
    else
    {
    	$json = array('errCode' => '0', 'data' => '消息不存在');
	}
	echo json_encode($json);
?>
