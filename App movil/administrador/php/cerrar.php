<?php
	session_start();
  session_destroy();
	print "<script>alert(\"Cerraste sesión.\");window.location='../../login.php';</script>";
	?>
<script language="javascript">location.href = "../../login.php";</script>