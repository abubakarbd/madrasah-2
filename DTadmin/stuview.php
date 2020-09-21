<?php include 'inc/header.php'; ?>

	<ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a><i class="fa fa-angle-right"></i>Student Admition Form</li>
    </ol>

<?php
	if (!isset($_GET['student_id']) || $_GET['student_id'] == NULL ) {
	   header("Location :studentlist.php");
	} else {
	    $student_id = $_GET['student_id'];
	}
?>

<div class="grid-form1 clearfix">
	<h3>ভর্তি ফরম</h3>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo "<script>window.location = 'studentlist.php';</script>";
    }
?>
	    <div class="tab-content">
		<div class="tab-pane active" id="horizontal-form">
<?php 
     $query = "SELECT * FROM student_list WHERE id='$student_id' order by id desc";
     $getstu = $db->select($query);
        while ($sturesult = $getstu->fetch_assoc()) {
?> 

<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
<div class="col-sm-12">
	<div class="form-group">
		<div class="col-sm-4">
		</div>
		<div class="col-sm-8">
				<img class="img-responsive img-thumbnail"  width="240" height="250" src="<?php echo $sturesult['image'];?>">
		</div>
	</div>
	<div class="col-sm-6">
		<div class="col-md-12 form-group2 group-mail">
             <label class="control-label">শিক্ষার্থীর নাম (বাংলা)</label>
            <div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-user"></i>
				</span>
				<input type="text" name="name_b" class="form-control1" id="focusedinput" readonly value="<?php echo $sturesult['name_b'];?>">
			</div>
       </div>

       <div class="col-md-12 form-group2 group-mail">
             <label class="control-label">শিক্ষার্থীর নাম (ইংরেজী)</label>
            <div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-user"></i>
				</span>
				<input type="text" name="name_e" class="form-control1" id="focusedinput" readonly value="<?php echo $sturesult['name_e'];?>">
			</div>
       </div>

       <div class="col-md-12 form-group2 group-mail">
             <label class="control-label">পিতার নাম (বাংলা)</label>
            <div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-user"></i>
				</span>
				<input type="text" name="fname_b" class="form-control1" id="focusedinput" value="<?php echo $sturesult['fname_b'];?>">
			</div>
       </div>

       <div class="col-md-12 form-group2 group-mail">
             <label class="control-label">পিতার নাম (ইংরেজী)</label>
            <div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-user"></i>
				</span>
				<input type="text" name="fname_e" class="form-control1" id="focusedinput" value="<?php echo $sturesult['fname_e'];?>">
			</div>
       </div>

       <div class="col-md-12 form-group2 group-mail">
             <label class="control-label">মাতার নাম (বাংলা)</label>
           <div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-user"></i>
				</span>
				<input type="text" name="mname_b" class="form-control1" id="focusedinput" value="<?php echo $sturesult['mname_b'];?>">
			</div>
       </div>

       <div class="col-md-12 form-group2 group-mail">
             <label class="control-label">মাতার নাম (ইংরেজী)</label>
            <div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-user"></i>
				</span>
				<input type="text" name="mname_e" class="form-control1" id="focusedinput" value="<?php echo $sturesult['mname_e'];?>">
			</div>
       </div>

		<div class="col-md-12 form-group2 group-mail">
           স্থায়ী ঠিকানাঃ
       </div>

       <div class="col-md-6 form-group2 group-mail">
             <label class="control-label">গ্রামঃ</label>
            <div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-bookmark"></i>
				</span>
				<input type="text" name="p_gram" class="form-control1" id="focusedinput" value="<?php echo $sturesult['p_gram'];?>">
			</div>
       </div>

       <div class="col-md-6 form-group2 group-mail">
             <label class="control-label">ওয়াডঃ</label>
            <div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-bookmark"></i>
				</span>
				<input type="text" name="p_word" class="form-control1" id="focusedinput" value="<?php echo $sturesult['p_word'];?>">
			</div>
       </div>

       <div class="col-md-6 form-group2 group-mail">
             <label class="control-label">উপজেলাঃ</label>
            <div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-bookmark"></i>
				</span>
				<input type="text" name="p_sdistrict" class="form-control1" id="focusedinput" value="<?php echo $sturesult['p_sdistrict'];?>">
			</div>
       </div>

       <div class="col-md-6 form-group2 group-mail">
             <label class="control-label">জেলাঃ</label>
            <div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-bookmark"></i>
				</span>
				<input type="text" name="p_district" class="form-control1" id="focusedinput" value="<?php echo $sturesult['p_district'];?>">
			</div>
       </div>

       <div class="col-md-12 form-group2 group-mail">
             <label class="control-label">যোগাযোগ রক্ষাকারী অভিভাবকের নামঃ</label>
            <div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-user"></i>
				</span>
				<input type="text" name="c_name" class="form-control1" id="focusedinput" value="<?php echo $sturesult['c_name'];?>">
			</div>
       </div>

       <div class="col-md-6 form-group2 group-mail">
             <label class="control-label">সম্পর্কঃ</label>
            <div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-user"></i>
				</span>
				<input type="text" name="c_relation" class="form-control1" id="focusedinput" value="<?php echo $sturesult['c_relation'];?>">
			</div>
       </div>

       <div class="col-md-6 form-group2 group-mail">
             <label class="control-label">মোবাইলঃ</label>
            <div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-phone"></i>
				</span>
				<input type="text" name="c_mobile" class="form-control1" id="focusedinput" value="<?php echo $sturesult['c_mobile'];?>">
			</div>
       </div>

           <div class="col-md-6 form-group2 group-mail">
             <label class="control-label">যে শ্রেণীতে ভর্থী হতে ইচ্ছুকঃ</label>
            <div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-ticket"></i>
			</span>
			<input type="text" name="a_class" class="form-control1" id="focusedinput" value="<?php echo $sturesult['a_class'];?>">
		</div>
       </div>

       <div class="col-md-6 form-group2 group-mail">
             <label class="control-label">বিভাগঃ</label>
         <div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-ticket"></i>
			</span>
			<input type="text" name="division" class="form-control1" id="focusedinput" value="<?php echo $sturesult['division'];?>">
		</div>
       </div>

        <div class="col-md-12 form-group2 group-mail">
             <label class="control-label">পূর্ববর্তী প্রতিষ্ঠানের নামঃ</label>
            <div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-book"></i>
				</span>
				<input type="text" name="old_edu" class="form-control1" id="focusedinput" value="<?php echo $sturesult['old_edu'];?>">
			</div>
       </div>

        <div class="col-md-12 form-group2 group-mail">
             <label class="control-label">ঠিকানাঃ</label>
            <div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-bookmark"></i>
				</span>
				<input type="text" name="old_edu_a" class="form-control1" id="focusedinput" value="<?php echo $sturesult['old_edu_a'];?>">
			</div>
       </div>
</div>

<!-- Right Site-->
<div class="col-sm-6">

	<div class="col-md-6 form-group2 group-mail">
    	<label class="control-label">জন্ম তারিখ - জন্ম সনদ অনুযায়ীঃ</label>
        <div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa--calendar"></i>
			</span>
			<input type="text" name="dob" class="form-control1" id="focusedinput" value="<?php echo $sturesult['dob'];?>">
		</div>
    </div>

    <div class="col-md-6 form-group2 group-mail">
    	<label class="control-label">বিশেষ চিহ্নঃ</label>
        <div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-check"></i>
			</span>
			<input type="text" name="mark" class="form-control1" id="focusedinput" value="<?php echo $sturesult['mark'];?>">
		</div>
    </div>

    <div class="col-md-6 form-group2 group-mail">
    	<label class="control-label">উচ্চতা</label>
        <div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-plus"></i>
			</span>
			<input type="text" name="level" class="form-control1" id="focusedinput" value="<?php echo $sturesult['level'];?>">
		</div>
    </div>


    <div class="col-md-6 form-group2 group-mail">
    	<label class="control-label">রক্তের গ্রপঃ</label>
        <div class="input-group">
			<span class="input-group-addon">
				<i class="glyphicon glyphicon-tint"></i>
			</span>
			<input type="text" name="blood" class="form-control1" id="focusedinput" value="<?php echo $sturesult['blood'];?>">
		</div>
    </div>

<!-- পিতার অংশ-->
    <div class="col-md-6 form-group2 group-mail">
    	<label class="control-label">পেশাঃ</label>
        <div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-user-md"></i>
			</span>
			<input type="text" name="f_job" class="form-control1" id="focusedinput" value="<?php echo $sturesult['f_job'];?>">
		</div>
    </div>

    <div class="col-md-6 form-group2 group-mail">
    	<label class="control-label">কর্ম স্থান</label>
        <div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-bookmark"></i>
			</span>
			<input type="text" name="fjob_ad" class="form-control1" id="focusedinput" value="<?php echo $sturesult['fjob_ad'];?>">
		</div>
    </div>

    <div class="col-md-6 form-group2 group-mail">
    	<label class="control-label">মোবাইলঃ</label>
        <div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-phone"></i>
			</span>
			<input type="text" name="f_mobile" class="form-control1" id="focusedinput" value="<?php echo $sturesult['f_mobile'];?>">
		</div>
    </div>

    <div class="col-md-6 form-group2 group-mail">
    	<label class="control-label">ভোটার আইডি নং</label>
        <div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-ticket"></i>
			</span>
			<input type="text" name="f_nid" class="form-control1" id="focusedinput" value="<?php echo $sturesult['f_nid'];?>">
		</div>
    </div>

    	<!-- মাতার অংশ-->
    <div class="col-md-6 form-group2 group-mail">
    	<label class="control-label">পেশাঃ</label>
        <div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-user-md"></i>
			</span>
			<input type="text" name="m_job" class="form-control1" id="focusedinput" value="<?php echo $sturesult['m_job'];?>">
		</div>
    </div>

    <div class="col-md-6 form-group2 group-mail">
    	<label class="control-label">কর্ম স্থান</label>
        <div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-bookmark"></i>
			</span>
			<input type="text" name="mjob_ad" class="form-control1" id="focusedinput" value="<?php echo $sturesult['mjob_ad'];?>">
		</div>
    </div>

    <div class="col-md-6 form-group2 group-mail">
    	<label class="control-label">মোবাইলঃ</label>
        <div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-phone"></i>
			</span>
			<input type="text" name="m_mobile" class="form-control1" id="focusedinput" value="<?php echo $sturesult['m_mobile'];?>">
		</div>
    </div>

    <div class="col-md-6 form-group2 group-mail">
    	<label class="control-label">ভোটার আইডি নং</label>
        <div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-ticket"></i>
			</span>
			<input type="text" name="m_nid" class="form-control1" id="focusedinput" value="<?php echo $sturesult['m_nid'];?>">
		</div>
    </div>

		<!-- বর্তমান ঠিকানা-->
	 <div class="col-md-12 form-group2 group-mail">
    	বর্তমান ঠিকানাঃ
	</div>
    <div class="col-md-6 form-group2 group-mail">
    	<label class="control-label">গামঃ</label>
        <div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-bookmark"></i>
			</span>
			<input type="text" name="t_gram" class="form-control1" id="focusedinput" value="<?php echo $sturesult['t_gram'];?>">
		</div>
    </div>

    <div class="col-md-6 form-group2 group-mail">
    	<label class="control-label">ওয়াডঃ</label>
        <div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-bookmark"></i>
			</span>
			<input type="text" name="t_word" class="form-control1" id="focusedinput" value="<?php echo $sturesult['t_word'];?>">
		</div>
    </div>

    <div class="col-md-6 form-group2 group-mail">
    	<label class="control-label">উপজেলাঃ</label>
        <div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-bookmark"></i>
			</span>
			<input type="text" name="t_sdistrict" class="form-control1" id="focusedinput" value="<?php echo $sturesult['t_sdistrict'];?>">
		</div>
    </div>

    <div class="col-md-6 form-group2 group-mail">
    	<label class="control-label">জেলাঃ</label>
        <div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-bookmark"></i>
			</span>
			<input type="text" name="t_district" class="form-control1" id="focusedinput" value="<?php echo $sturesult['t_district'];?>">
		</div>
    </div>

	<div class="col-md-12 form-group2 group-mail">
    	<label class="control-label">ঠিকানাঃ</label>
        <div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-bookmark"></i>
			</span>
			<input type="text" name="c_address" class="form-control1" id="focusedinput" value="<?php echo $sturesult['c_address'];?>">
		</div>
    </div>

    <div class="col-md-12 form-group2 group-mail">
    	<label class="control-label">ভোটার আইডি নং</label>
        <div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-ticket"></i>
			</span>
			<input type="text" name="c_nid" class="form-control1" id="focusedinput" value="<?php echo $sturesult['c_nid'];?>">
		</div>
    </div>

    <div class="col-md-6 form-group2 group-mail">
         <label class="control-label">অবস্থানের বিবারনঃ</label>
		<div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-ticket"></i>
			</span>
			<input type="text" name="location" class="form-control1" id="focusedinput" value="<?php echo $sturesult['location'];?>">
		</div>
   </div>

   <div class="col-md-6 form-group2 group-mail">
         <label class="control-label">গাড়ির অবস্থাঃ</label>
        <div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-ticket"></i>
			</span>
			<input type="text" name="car" class="form-control1" id="focusedinput" value="<?php echo $sturesult['car'];?>">
		</div>
   </div>

   <div class="col-md-4 form-group2 group-mail">
         <label class="control-label">শ্রেণিঃ</label>
<div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-ticket"></i>
			</span>
			<input type="text" name="old_class" class="form-control1" id="focusedinput" value="<?php echo $sturesult['old_class'];?>">
		</div>
		
   </div>

   <div class="col-md-4 form-group2 group-mail">
         <label class="control-label">বোর্ড</label>
<div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-ticket"></i>
			</span>
			<input type="text" name="bord" class="form-control1" id="focusedinput" value="<?php echo $sturesult['bord'];?>">
		</div>
   </div>

   <div class="col-md-4 form-group2 group-mail">
         <label class="control-label">প্রাপ্ত জিপিএঃ</label>
        <div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-font"></i>
			</span>
			<input type="text" name="gpa" class="form-control1" id="focusedinput" value="<?php echo $sturesult['gpa'];?>">
		</div>
   </div>

   <div class="col-md-12 form-group2 group-mail">
         <label class="control-label">শিক্ষার্থীর বিষয়ে বিশেষ তথ্যঃ</label>
        <div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-question-circle"></i>
			</span>
			<input type="text" name="s_info" class="form-control1" id="focusedinput" value="<?php echo $sturesult['s_info'];?>">
		</div>
   </div>
</div>

<div class="col-md-12">
   <div class="col-md-4 form-group2 group-mail">
         <label class="control-label">শাখাঃ</label>
     <div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-ticket"></i>
			</span>
			<input type="text" name="section" class="form-control1" id="focusedinput" value="<?php echo $sturesult['section'];?>">
		</div>
   </div>

   <div class="col-md-4 form-group2 group-mail">
         <label class="control-label">আইডি নং</label>
        
		<div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-lightbulb-o"></i>
			</span>
			<input type="text" name="stu_id" class="form-control1" id="focusedinput" value="<?php echo $sturesult['stu_id'];?>">
		</div>
   </div>

   </div>
<div class="clearfix"></div>
<div class="panel-footer">
	<div class="row">
		<div class="col-sm-12 col-sm-offset-2">
			<button name="submit" class="btn-primary btn">Submit</button>
			<button class="btn-default btn">Cancel</button>
			<button class="btn-inverse btn">Reset</button>
		</div>
	</div>
</div>

</div>
</form>
<?php } ?>
</div>
  </div>
 	</div>
 	<!--//grid-->
<?php include 'inc/footer.php'; ?>