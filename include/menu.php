<?php
session_start();
include ("database.php");
if(!isset($_SESSION['auth'])) {
	header("location:index.php");
}
$opt = isset($_REQUEST['opt']) ? $_REQUEST['opt'] : null;
function get_child_menu($a,$b)
{
	$rs = mysql_query("SELECT 
				count(a.userid) 
				FROM 
				role_menu_group b 
				INNER JOIN m_user a ON a.role = b.group_id 
				INNER JOIN m_menu c ON c.id = b.menu_id 
				where c.parent_id=$a and a.userid='$b'");

	$row = mysql_fetch_array($rs);

	return $row[0] > 0 ? true : false;
}
if ($opt == 'view')
	{

		$id = isset($_POST['id']) ? bigintval($_POST['id']) : 0;
		$result = array();
		$rs = mysql_query("select * from xx_vv_data_hibah where parent=0 and thn=2013");
		while($row = mysql_fetch_array($rs)){
			array_push($result, $row);
		}
		 
		echo json_encode($result);

	}