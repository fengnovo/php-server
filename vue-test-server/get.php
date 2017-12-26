<?php
	header('Access-Control-Allow-Origin:*');
	$userName = trim($_REQUEST['userName']);
	$passWord = trim($_REQUEST['passWord']);

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
