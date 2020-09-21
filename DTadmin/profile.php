<?php include 'inc/header.php'; ?>
<?php
    $userid   = session::get('userId');
    $userrole = session::get('userRole');
?>

	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Member Form</li>
        </ol>
  <div class="grid-form1">
  	       <h3>Member Profile</h3>

 <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = mysqli_real_escape_string($db->link, $_POST['name']);
        $village = mysqli_real_escape_string($db->link, $_POST['village']);
        $subdistrict = mysqli_real_escape_string($db->link, $_POST['subdistrict']);
        $district = mysqli_real_escape_string($db->link, $_POST['district']);
        $mobile = mysqli_real_escape_string($db->link, $_POST['mobile']);
        $email = mysqli_real_escape_string($db->link, $_POST['email']);


    $permited  = array('jpg', 'jpeg', 'png', 'gif');
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_temp = $_FILES['image']['tmp_name'];

    $div = explode('.', $file_name);
    $file_ext = strtolower(end($div));
    $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
    $uploaded_image = "uploads/".$unique_image;

    if ($name == "" || $village == "" || $subdistrict == "" || $district == "" || $email == "" || $mobile == "") {
        echo "<span class='error'>Field must be empty!!....</span>";
    } else {
    if (!empty($file_name)) {
   

    if ($file_size >1048567) {
     echo "<span class='error'>Image Size should be less then 1MB!
     </span>";
    } elseif (in_array($file_ext, $permited) === false) {
     echo "<span class='error'>You can upload only:-"
     .implode(', ', $permited)."</span>";
    } else{
     move_uploaded_file($file_temp, $uploaded_image);
    $query ="UPDATE tbl_user
            SET
            name    = '$name',  
            village  = '$village', 
            subdistrict   = '$subdistrict', 
            image  = '$uploaded_image', 
            district = '$district', 
            mobile   = '$mobile',
            email =  '$email'  
            WHERE id = '$userid'";

    $updated_rows = $db->update($query);
    if ($updated_rows) {
     echo "<span class='success'>Data Updated Successfully.
     </span>";
    }else {
     echo "<span class='error'>Data Not Updated !</span>";
    }
}

} else {
    $query ="UPDATE tbl_user
            SET
            name    = '$name',  
            village  = '$village', 
            subdistrict   = '$subdistrict', 
            district = '$district', 
            mobile   = '$mobile',
            email =  '$email'  
            WHERE id = '$userid'";
    $updated_rows = $db->update($query);
    if ($updated_rows) {
     echo "<span class='success'>Data Updated Successfully.
     </span>";
    }else {
     echo "<span class='error'>Data Not Updated !</span>";
    }
}
}

} ?>     <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">

<?php 
     $query = "SELECT * FROM tbl_user WHERE id='$userid' AND role='$userrole'";
     $getuser = $db->select($query);
        if ($getuser) {
        while ($result = $getuser->fetch_assoc()) {
       
?>			
							<form action="" method="post" class="form-horizontal">
								<div class="form-group">
									<div class="col-sm-4">
									</div>
									<div class="col-sm-8">
											<img class="img-responsive img-thumbnail"  width="240" height="250" src="<?php echo $result['image'];?>"><br/>
                        <input type="file" name="image"/>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Name</label>
									<div class="col-sm-8">
										<input type="text" name="name" class="form-control1" id="focusedinput" value="<?php echo $result['name'];?>">
									</div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Username</label>
									<div class="col-sm-8">
										<input type="text" name="username" class="form-control1" id="focusedinput" value="<?php echo $result['username'];?>">
									</div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Village/Word No.</label>
									<div class="col-sm-8">
										<input type="text" name="village" class="form-control1" id="focusedinput" value="<?php echo $result['village'];?>">
									</div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Sub District</label>
									<div class="col-sm-8">
										<input type="text" name="subdistrict" class="form-control1" id="focusedinput" value="<?php echo $result['subdistrict'];?>">
									</div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">District</label>
									<div class="col-sm-8">
										<input type="text" name="district" class="form-control1" id="focusedinput" value="<?php echo $result['district'];?>">
									</div>
								</div>

						<div class="form-group">
							<label class="col-md-2 control-label">Email Address</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" name="email" class="form-control1" value="<?php echo $result['email'];?>">
								</div>
							</div>
						</div>

							<div class="form-group">
							<label class="col-md-2 control-label">Member Mobile</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa  fa-phone"></i>
									</span>
									<input type="mobile" name="mobile" class="form-control1" id="exampleInputmobile1" value="<?php echo $result['mobile'];?>">
								</div>
							</div>
						</div>

						<div class="panel-footer">
							<div class="row">
								<div class="col-sm-8 col-sm-offset-2">
									<input type="submit" name="submit" Value="Updated">
									<button class="btn-default btn"><a href="memberlist.php">Cancel</a> </button>
								</div>
							</div>
				 		</div>
					</form>
					<?php } }?>
  </div>
 	</div>
 	<!--//grid-->


<?php include 'inc/footer.php'; ?>