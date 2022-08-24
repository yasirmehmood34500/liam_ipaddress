<?php include "inc/programming.php";
$dele=$conn->query("DELETE FROM data_list WHERE id > 0");
echo "<script>window.location='view.php'</script>";
 ?>
