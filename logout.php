<?php
session_start();
?>
<?php
#xoa session
session_unset();
session_destroy();
header("Location: index.php");
exit();
?>