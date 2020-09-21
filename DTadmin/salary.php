<?php include 'inc/header.php'; ?>

	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Salary</li>
        </ol>
  <div class="grid-form1">
  	       <h3>Salary</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form action="" method="post" class="form-horizontal">
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $fm->validation($_POST['name']);
        $rnong     = $fm->validation($_POST['rnong']);
        $ttaka     = $fm->validation($_POST['ttaka']);
        $description     = $fm->validation($_POST['description']);
        $month     = $fm->validation($_POST['month']);


        $name = mysqli_real_escape_string($db->link, $name);
        $rnong     = mysqli_real_escape_string($db->link, $rnong);
        $ttaka     = mysqli_real_escape_string($db->link, $ttaka);
        $description     = mysqli_real_escape_string($db->link, $description);
        $month     = mysqli_real_escape_string($db->link, $month);

            if(empty($name) || empty($ttaka)|| empty($description)|| empty($month)){
                echo "<span class='error'>File must be empty !!....</span>";
            } else {
            $query = "INSERT INTO cost(name,rnong,ttaka,description,month) VALUES('$name','$rnong','$ttaka','$description','$month')";
            $catinsert = $db->insert($query);
            if ($catinsert) {
                echo "<span class='success'>User Created Successfully. !!....</span>";
            } else {
                echo "<span class='error'>User Not Created  !!....</span>";
            }
        }
    }
?>  


							 <div class="clearfix"> </div>
					            <div class="vali-form">
					            <div class="col-md-4 form-group1">
					              <label class="control-label">ব্যক্তির নাম</label>
					              <input type="text" name="name" placeholder="ব্যক্তির নাম" required="">
					            </div>
					            <div class="col-md-4 form-group2 group-mail">
					              <label class="control-label">কোন মাসের ব্যতোন</label>
					              <select name="rnong" required="">
						        	<option value="">Select Month</option>
						        	<option value="January">January</option>
						        	<option value="February">February</option>
						        	<option value="March">March</option>
						        	<option value="April">April</option>
						        	<option value="May">May</option>
						        	<option value="June">June</option>
						        	<option value="July">July</option>
						        	<option value="August">August</option>
						        	<option value="September">September</option>
						        	<option value="October">October</option>
						        	<option value="November">November</option>
						        	<option value="December">December</option>
						        </select>
					            </div>
					            <div class="col-md-4 form-group1 form-last">
					              <label class="control-label">মোট টাকা</label>
					              <input type="text" name="ttaka" placeholder="Other Amount" required="">
					            </div>
					            <div class="clearfix"> </div>
					            </div>

					             <div class="clearfix"> </div>
					            <div class="vali-form">
					            <div class="col-md-6 form-group2 group-mail">
					              <label class="control-label">বিবরণ</label>
					              <select name="description" required="">
						        	<option value="">Select Description</option>
						        	<option value="Teacher">Teacher</option>
						        	<option value="Jobholders">Jobholders</option>
						        	<option value="Drivers">Drivers</option>
						        </select>
					            </div>
					            <div class="col-md-6 form-group2 group-mail">
						          <label class="control-label">মাস</label>
						        <select name="month" required="">
						        	<option value="">Select Month</option>
						        	<option value="January">January</option>
						        	<option value="February">February</option>
						        	<option value="March">March</option>
						        	<option value="April">April</option>
						        	<option value="May">May</option>
						        	<option value="June">June</option>
						        	<option value="July">July</option>
						        	<option value="August">August</option>
						        	<option value="September">September</option>
						        	<option value="October">October</option>
						        	<option value="November">November</option>
						        	<option value="December">December</option>
						        </select>
						        </div>
					            <div class="clearfix"> </div>
					            </div>
						
						<div class="panel-footer">
							<div class="row">
								<div class="col-sm-8 col-sm-offset-2">
									<button name="submit" class="btn-primary btn">Submit</button>
									<button class="btn-default btn">Cancel</button>
									<button class="btn-inverse btn">Reset</button>
								</div>
							</div>
				 		</div>
					</form>
  </div>
 </div>
 	<!--//grid-->


<?php include 'inc/footer.php'; ?>