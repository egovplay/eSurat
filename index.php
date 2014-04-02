<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">

	<title>SISTEM INFORMASI SURAT</title>

	<link rel="stylesheet" type="text/css" href="assets/easyui.css"/>
	<link rel="stylesheet" type="text/css" href="assets/icon.css"/>
	<link rel="stylesheet" type="text/css" href="assets/style-1.css"/>

	<script type="text/javascript" src="assets/jquery.min.js"></script>
	<script type="text/javascript" src="assets/jquery.easyui.min.js"></script>
	<script type="text/javascript" src="assets/app.js"></script>
	<meta name="robots" content="noindex, nofollow">

</head>
<body class="easyui-layout">

        <div data-options="region:'north',border:false" style="height:100px">
			<div class="head-logo">	
				<div class="head-title">
					Sistem Informasi Database Surat
				</div>
				<div class="head-subtitle">
					Kantor Perpustakaan dan Arsip Pemerintah Kota Mojokerto
				</div>
				<div class="head-xtitle">
					Jl. Gajah Mada 149 Kota Mojokerto 0321-321640
				</div>
			</div>
			
		</div>		
		
        <div data-options="region:'west',split:true,border:false"  style="width:230px;padding:0px;">
			<div class="easyui-layout" data-options="fit:true">
                <div id="x-menu"data-options="region:'north',border:true,collapsible:false,iconCls:'icon-app-menu'" title="Main Menu"style="height:400px">
				 <ul class="easyui-tree">
					<li data-options="iconCls:'icon-locked'">Main Menu Terkunci
					</li>
				</ul>
				
				</div>
                <div id="x-tool"title="Status" data-options="region:'center',iconCls:'icon-application',border:true">
					<ul class="iconlist">
						<li class="user-edit"><a href="#">Edit Profil</a></li>
						<li class="user-pass"><a href="#">Ubah Password</a></li>
						<li class="user-logout"><a href="#">Log Out</a></li>
					</ul>
				</div>
                <div id="x-status" data-options="region:'south',border:true" style="height:22px">
					<span id="x-status-left" class="left offline">
						Offline
					</span>
					<span id="x-status-right" class="right">
						No User Online
					</span>
				</div>
            </div>
		</div>
        <div id="x-content" data-options="region:'center'" title="Main Page">
            
        </div>
		<div id="x-dialog"/>

</body>
</html>
<?php
if(!isset($_SESSION['auth'])) {
?>
<script type="text/javascript">
login();
</script>
<?php
} else {

}
?>