<?php include 'inc/header.php'; ?>

	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Member Form</li>
        </ol>
  <div class="grid-form1">
  	       <h3>Deposit</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form action="" method="post" class="form-horizontal">
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name_e 		 = $fm->validation($_POST['name_e']);
        $stu_id       = $fm->validation($_POST['stu_id']);
        $month       = $fm->validation($_POST['month']);
        $type       = $fm->validation($_POST['type']);
        $matchtk  = $fm->validation($_POST['matchtk']);
        $hosteltk       = $fm->validation($_POST['hosteltk']);
        $totle       = $fm->validation($_POST['totle']);
        $roll 		 = $fm->validation($_POST['roll']);
        $a_class       = $fm->validation($_POST['a_class']);
        $section       = $fm->validation($_POST['section']);
        $batontk  = $fm->validation($_POST['batontk']);
        $cartk       = $fm->validation($_POST['cartk']);
        $examtk       = $fm->validation($_POST['examtk']);
        $regtk  = $fm->validation($_POST['regtk']);
        $other       = $fm->validation($_POST['other']);
        $totto       = $fm->validation($_POST['totto']);


        $name_e = mysqli_real_escape_string($db->link, $name_e);
        $stu_id     = mysqli_real_escape_string($db->link, $stu_id);
        $month     = mysqli_real_escape_string($db->link, $month);
        $type     = mysqli_real_escape_string($db->link, $type);
        $matchtk     = mysqli_real_escape_string($db->link, $matchtk);
        $hosteltk     = mysqli_real_escape_string($db->link, $hosteltk);
        $totle     = mysqli_real_escape_string($db->link, $totle);
        $roll = mysqli_real_escape_string($db->link, $roll);
        $a_class     = mysqli_real_escape_string($db->link, $a_class);
        $section     = mysqli_real_escape_string($db->link, $section);
        $batontk     = mysqli_real_escape_string($db->link, $batontk);
        $cartk     = mysqli_real_escape_string($db->link, $cartk);
        $examtk     = mysqli_real_escape_string($db->link, $examtk);
        $regtk     = mysqli_real_escape_string($db->link, $regtk);
        $other     = mysqli_real_escape_string($db->link, $other);
        $totto     = mysqli_real_escape_string($db->link, $totto);

            if(empty($name_e) || empty($month)|| empty($roll) || empty($a_class) || empty($section) || empty($stu_id) || empty($totle)){
                echo "<span class='error'>File must be empty !!....</span>";
            }else {
            $query = "INSERT INTO deposit(name_e, stu_id, month, type, matchtk, hosteltk, totle, roll, a_class,section, batontk, cartk, examtk,regtk, other, totto) VALUES('$name_e', '$stu_id', '$month', '$type', '$matchtk', '$hosteltk', '$totle','$roll', '$a_class','$section', '$batontk', '$cartk', '$examtk', '$regtk', '$other', '$totto')";
            $catinsert = $db->insert($query);
            if ($catinsert) {
                echo "<span class='success'>User Created Successfully. !!....</span>";
            } else {
                echo "<span class='error'>User Not Created  !!....</span>";
            }
        }
    }
?>  



<div class="col-sm-12">
	<div class="col-sm-6">
		<div class="col-md-8 form-group2 group-mail">
             <label class="control-label">শিক্ষার্থীর নাম</label>
           <select name="name_e">
           	<option value="">Select Student</option>
                <?php 
     $query = "SELECT * FROM student_list order by id desc";
     $userlist = $db->select($query);
     if ($userlist) {
      $i=0;
      while ($result = $userlist->fetch_assoc()) {
        $i++;
  ?>  
              <option value="<?php echo $result['name_e'];?>"><?php echo $result['name_e'];?></option>
<?php } } ?> 
           </select>
       </div>

       <div class="col-md-4 form-group2 group-mail">
             <label class="control-label">শিক্ষার্থীর আইডি</label>
           <select name="stu_id">
           	<option value="">Select Student ID</option>
                <?php 
     $query = "SELECT * FROM student_list order by id desc";
     $userlist = $db->select($query);
     if ($userlist) {
      $i=0;
      while ($result = $userlist->fetch_assoc()) {
        $i++;
  ?>  
              <option value="<?php echo $result['stu_id'];?>"><?php echo $result['stu_id'];?></option>
<?php } } ?> 
           </select>
       </div>

<div class="clearfix"> </div>
        <div class="col-md-6 form-group2 group-mail">
          <label class="control-label">মাস</label>
        <select name="month">
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

        <div class="col-md-6 form-group2 group-mail">
          <label class="control-label">বেতনের ধরন</label>
        <select name="type">
        	<option value="">ধরন বাছাই করুন</option>
        	<option value="চলতি মাস">চলতি মাস</option>
        	<option value="বকেয়া মাস">বকেয়া মাস</option>
        </select>
        </div>
<div class="clearfix"> </div>

<div class="col-md-6 form-group2 group-mail">
	         <label class="control-label">বডিং চার্জ</label>
			<div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-lightbulb-o"></i>
				</span>
				<input type="text" name="matchtk" class="form-control1" id="focusedinput" placeholder="বডিং চার্জ">
			</div>
		</div>

		<div class="col-md-6 form-group2 group-mail">
	         <label class="control-label">আবাসিক</label>
			<div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-lightbulb-o"></i>
				</span>
				<input type="text" name="hosteltk" class="form-control1" id="focusedinput" placeholder="আবাসিক">
			</div>
		</div>

<div class="clearfix"> </div>
		<div class="col-md-12 form-group2 group-mail">
	         <label class="control-label">মোট টাকা</label>
			<div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-lightbulb-o"></i>
				</span>
				<input type="text" name="totle" class="form-control1" id="focusedinput" placeholder="মোট টাকা">
			</div>
		</div>


	</div>


	<div class="col-sm-6">
		 <div class="col-md-4 form-group2 group-mail">
             <label class="control-label">শিক্ষার্থীর রোল</label>
            <div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-user"></i>
				</span>
				<input type="text" name="roll" class="form-control1" id="focusedinput" placeholder="শিক্ষার্থীর রোল">
			</div>
       </div>

       <div class="col-md-4 form-group2 group-mail">
             <label class="control-label">শ্রেণী</label>
            <select name="a_class" id="a_class">
				  <option>শ্রেণি পছন্দ করুন</option>
				  <option value="hefz">হিফজ</option>
				  <option value="najara">নাজেরা</option>
				  <option value="প্লে">প্লে</option>
				  <option value="নার্সারী">নার্সারী</option>
				  <option value="one">প্রথম জামাত</option>
				  <option value="two">দ্বিতীয় জামাত</option>
				  <option value="three">তৃতীয় জামাত</option>
				  <option value="four">চতুর্থ শ্রেণি</option>
				  <option value="five">পঞ্চম শ্রেণি</option>
				  <option value="six">সষ্ঠ শ্রেণি</option>
				  <option value="seven">সপ্তম শ্রেণি</option>
				  <option value="eight">অস্টম শ্রেণি</option>
				  <option value="nine">নবম শ্রেণি</option>
				  <option value="ten">দশম শ্রেণি</option>
			</select>
       </div>
       <div class="col-md-4 form-group2 group-mail">
         <label class="control-label">শাখাঃ</label>
        
			<select name="section" id="dob-day">
		  <option>শাখা পছন্দ করুন</option>
		  <option value="Male">বালক</option>
		  <option value="Female">বালিকা</option>
		  <option value="Nurani">নূরাণী</option>
		</select>
   		</div>
<div class="clearfix"> </div>
		<div class="col-md-6 form-group2 group-mail">
	         <label class="control-label">বেতন</label>
			<div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-lightbulb-o"></i>
				</span>
				<input type="text" name="batontk" class="form-control1" id="focusedinput" placeholder="বেতন">
			</div>
		</div>
		<div class="col-md-6 form-group2 group-mail">
	         <label class="control-label">গাড়ি ভাড়া</label>
			<div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-lightbulb-o"></i>
				</span>
				<input type="text" name="cartk" class="form-control1" id="focusedinput" placeholder="গাড়ি ভাড়া">
			</div>
		</div>
<div class="clearfix"> </div>
		<div class="col-md-4 form-group2 group-mail">
	         <label class="control-label">পরিক্ষার ফি</label>
			<div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-lightbulb-o"></i>
				</span>
				<input type="text" name="examtk" class="form-control1" id="focusedinput" placeholder="পরিক্ষার ফি">
			</div>
		</div>

		<div class="col-md-4 form-group2 group-mail">
	         <label class="control-label">রেজীষ্টশন ফি</label>
			<div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-lightbulb-o"></i>
				</span>
				<input type="text" name="regtk" class="form-control1" id="focusedinput" placeholder=">রেজীষ্টশন ফি">
			</div>
		</div>

		<div class="col-md-4 form-group2 group-mail">
	         <label class="control-label">অনন্য</label>
			<div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-lightbulb-o"></i>
				</span>
				<input type="text" name="other" class="form-control1" id="focusedinput" placeholder="অনন্য">
			</div>
		</div>
<div class="clearfix"> </div>
<div class="col-md-12 form-group2 group-mail">
	         <label class="control-label">মন্তব্য</label>
			<div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-lightbulb-o"></i>
				</span>
				<input type="text" name="totto" class="form-control1" id="focusedinput" placeholder="মন্তব্য">
			</div>
		</div>
	</div>
		<div class="clearfix"> </div>
		<div class="panel-footer">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<button name="submit" class="btn-primary btn">Submit</button>
					<button class="btn-default btn">Cancel</button>
					<button class="btn-inverse btn">Reset</button>
				</div>
			</div>
 		</div>

 	</div>
	</form>
  </div>
 </div>
 	<!--//grid-->

		<div class="clearfix"> </div>

<?php include 'inc/footer.php'; ?>