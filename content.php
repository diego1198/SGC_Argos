<?php
require_once "config/database.php";

if (empty($_SESSION['username']) && empty($_SESSION['password'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
else {
	if ($_GET['module'] == 'dashboard') {
		include "pages/dashboard/view.php";
	}

	elseif ($_GET['module'] == 'clientes') {
		include "pages/clientes/view.php";
	}
}
?>