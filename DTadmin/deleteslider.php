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
    if (!isset($_GET['delslider']) || $_GET['delslider'] == NULL ) {
       header("Location :sliderlist.php");
    } else {
        $sliderid = $_GET['delslider'];

         $query = "SELECT * FROM dbl_slider WHERE id='$sliderid'";
    	 $getData = $db->select($query);
    	 if ($getData) {
    	 	while ($delimg = $getData->fetch_assoc()) {
    	 		$dellinl = $delimg['image'];
    	 		unlink($dellinl);
    	 }
    	}

    	$delquery = "DELETE FROM dbl_slider WHERE id='$sliderid'";
    	 $delData = $db->delete($delquery);
    	 if ($delData) {
    	 	echo "<script>alert('Slider Delete Successfully.')</script>";
    	 	echo "<script>window.location = 'sliderlist.php'</script>";
    	 } else {
    	 	echo "<script>alert('Slider Not Delete Successfully.')</script>";
    	 	echo "<script>window.location = 'sliderlist.php'</script>";
    	 }

    }
?>

 