<?php 
    include '../lib/Session.php';
    Session::checkSession();  
?>
<?php include '../config/config.php'; ?>
<?php include '../lib/Database.php'; ?>

<?php
    $db = new Database();
?>

<?php
    if (!isset($_GET['deletstu']) || $_GET['deletstu'] == NULL ) {
       header("Location :studentlist.php");
    } else {
        $deletstu = $_GET['deletstu'];

         $query = "SELECT * FROM student_list WHERE id='$deletstu'";
    	 $getData = $db->select($query);
    	 if ($getData) {
    	 	while ($delimg = $getData->fetch_assoc()) {
    	 		$dellinl = $delimg['image'];
    	 		unlink($dellinl);
    	 }
    	}

    	$delquery = "DELETE FROM student_list WHERE id='$deletstu'";
    	 $delData = $db->delete($delquery);
    	 if ($delData) {
    	 	echo "<script>alert('Data Delete Successfully.')</script>";
    	 	echo "<script>window.location = 'studentlist.php'</script>";
    	 } else {
    	 	echo "<script>alert('Data Not Delete Successfully.')</script>";
    	 	echo "<script>window.location = 'studentlist.php'</script>";
    	 }

    }
?>

 