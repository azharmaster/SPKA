<?php
session_start();


$_SESSION['alogin'] == "";
session_unset();
//session_destroy();

$_SESSION['errmsg'] = "Anda telah berjaya log keluar";
?>
<script language="javascript">
    document.location = "index.php";
</script>