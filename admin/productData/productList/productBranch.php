﻿<?php
session_start();
if ( isset( $_SESSION[ 'staff_login' ] ) == false ) {
	print 'ログインされていません。<br/>';
	print '<a href="../../staffLogin/staffLogin.php">ログイン画面へ</a>';
	exit();
} else {
	print $_SESSION[ 'staff_kanji' ];
	print 'さんログイン中<br/>';
	print '<br/>';
}
?>
<?php

$code = $_POST[ 'code' ];

if ( isset( $_POST[ 'add' ] ) == true ) {
	header( 'Location:../productUpload/productAdd.php' );
	exit();
}

if ( isset( $_POST[ 'delete' ] ) == true ) {
	if ( isset( $_POST[ 'code' ] ) == false ) {
		header( 'Location:productNg.php' );
		exit();
	} else {
		header( 'Location:productDelete.php?code=' . $code );
		exit();
	}
}
?>