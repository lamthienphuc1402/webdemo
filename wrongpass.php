<?php
session_start();
$_SESSION['login']=="";

session_unset();
$_SESSION['action1']="*Invalid username or password";
?>
<script language="javascript">
document.location="login.php";
</script>
