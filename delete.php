<?php include "inc/programming.php";
$dele=$conn->query("DELETE FROM data_list WHERE id > 0");
if ($dele) {
	rmdir("upload");
}
echo "<script>window.location='view.php'</script>";
 ?>
