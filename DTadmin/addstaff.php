<?php include 'inc/header.php'; ?>

	<ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a><i class="fa fa-angle-right"></i>Student Admition Form</li>
    </ol>
<div class="grid-form1 clearfix">
	<h3>ভর্তি ফরম</h3>
	    <div class="tab-content">
		<div class="tab-pane active" id="horizontal-form">

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = mysqli_real_escape_string($db->link, $_POST['name']);
    $fname = mysqli_real_escape_string($db->link, $_POST['fname']);
    $p_gram = mysqli_real_escape_string($db->link, $_POST['p_gram']);
    $p_word = mysqli_real_escape_string($db->link, $_POST['p_word']);
    $p_sdistrict = mysqli_real_escape_string($db->link, $_POST['p_sdistrict']);
    $p_district = mysqli_real_escape_string($db->link, $_POST['p_district']);
    $old_edu = mysqli_real_escape_string($db->link, $_POST['old_edu']);
    $old_edu_a = mysqli_real_escape_string($db->link, $_POST['old_edu_a']);
    $subject = mysqli_real_escape_string($db->link, $_POST['subject']);
    $section = mysqli_real_escape_string($db->link, $_POST['section']);
    $type = mysqli_real_escape_string($db->link, $_POST['type']);
    $stu_id = mysqli_real_escape_string($db->link, $_POST['stu_id']);
    $dob = mysqli_real_escape_string($db->link, $_POST['dob']);
    $blood = mysqli_real_escape_string($db->link, $_POST['blood']);
    $mname = mysqli_real_escape_string($db->link, $_POST['mname']);
    $t_gram = mysqli_real_escape_string($db->link, $_POST['t_gram']);
    $t_word = mysqli_real_escape_string($db->link, $_POST['t_word']);
    $t_sdistrict = mysqli_real_escape_string($db->link, $_POST['t_sdistrict']);
    $t_district = mysqli_real_escape_string($db->link, $_POST['t_district']);
    $mobile = mysqli_real_escape_string($db->link, $_POST['mobile']);
    $nid = mysqli_real_escape_string($db->link, $_POST['nid']);
    $location = mysqli_real_escape_string($db->link, $_POST['location']);
    $match = mysqli_real_escape_string($db->link, $_POST['match']);
    $a_class = mysqli_real_escape_string($db->link, $_POST['a_class']);
    $bord = mysqli_real_escape_string($db->link, $_POST['bord']);
    $gpa = mysqli_real_escape_string($db->link, $_POST['gpa']);
    $s_info = mysqli_real_escape_string($db->link, $_POST['s_info']);

    $permited  = array('jpg', 'jpeg', 'png', 'gif');
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_temp = $_FILES['image']['tmp_name'];

    $div = explode('.', $file_name);
    $file_ext = strtolower(end($div));
    $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
    $uploaded_image = "uploads/".$unique_image;

    if ($name == "" || $fname == "" || $section == "" || $mobile == "" || $type == "" || $location == "" || $subject == "" || $stu_id == "") {
        echo "<span class='error'>লাল চিহ্ন ঘড় গুলো পূরন করতে হবে!!....</span>";
    }else {
         $mailquery = "SELECT * FROM staff_list WHERE stu_id = '$stu_id' limit 1 ";
         $mailcheck = $db->select($mailquery);
        if ($mailcheck != false) {
             echo "<span class='error'>এই আইডি আগে ব্যবহার হয়েছে!!....</span>";
         } elseif ($file_size >1048567) {
     echo "<span class='error'>Image Size should be less then 1MB!
     </span>";
    } elseif (in_array($file_ext, $permited) === false) {
     echo "<span class='error'>You can upload only:-"
     .implode(', ', $permited)."</span>";
    } else{
    move_uploaded_file($file_temp, $uploaded_image);

 $query = "INSERT INTO staff_list(
 name,
 fname,
 p_gram,
 p_word,
p_sdistrict,
p_district,
 old_edu,
 old_edu_a,
 subject,
 section,
 type,
 stu_id,
 dob,
 blood,
 mname,
 t_gram,
 t_word,
t_sdistrict,
t_district,
 mobile,
 nid,
 location,
 match,
a_class,
 bord,
 gpa,     
 s_info,
 image
 )VALUES('$name','$fname','$p_gram','$p_word','$p_sdistrict','$p_district','$old_edu','$old_edu_a','$subject','$section','$type','$stu_id','$dob','$blood','$mname','$t_gram','$t_word','$t_sdistrict', '$t_district','$mobile','$nid','$location','$match','$a_class','$bord','$gpa','$s_info','$uploaded_image')";

   $inserted_rows = $db->insert($query);
    if ($inserted_rows) {
     echo "<span class='success'>ভর্তী সম্পূর্ণ হয়েছে!.
     </span>";
    }else {
     echo "<span class='error'>ভর্তী সম্পূর্ণ হয়নি! !</span>";
    }
    }

   } } ?>





  
<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">


<div class="col-sm-12">
	<div class="col-sm-6">
       <div class="col-md-12 form-group2 group-mail">
             <label class="control-label">নামঃ</label>
            <div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-user"></i>
				</span>
				<input type="text" name="name" class="form-control1" id="focusedinput" placeholder="নাম (ইংরেজী)">
			</div>
       </div>

		<div class="col-md-12 form-group2 group-mail">
             <label class="control-label">পিতার নাম (ইংরেজী)</label>
            <div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-user"></i>
				</span>
				<input type="text" name="fname" class="form-control1" id="focusedinput" placeholder="পিতার নাম (ইংরেজী)">
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
				<input type="text" name="p_gram" class="form-control1" id="focusedinput" placeholder="গ্রাম">
			</div>
       </div>

       <div class="col-md-6 form-group2 group-mail">
             <label class="control-label">ওয়াডঃ</label>
            <div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-bookmark"></i>
				</span>
				<input type="text" name="p_word" class="form-control1" id="focusedinput" placeholder="ওয়াড">
			</div>
       </div>

       <div class="col-md-6 form-group2 group-mail">
             <label class="control-label">উপজেলাঃ</label>
            <div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-bookmark"></i>
				</span>
				<input type="text" name="p_sdistrict" class="form-control1" id="focusedinput" placeholder="উপজেলা">
			</div>
       </div>

       <div class="col-md-6 form-group2 group-mail">
             <label class="control-label">জেলাঃ</label>
            <div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-bookmark"></i>
				</span>
				<input type="text" name="p_district" class="form-control1" id="focusedinput" placeholder="জেলা">
			</div>
       </div>

		<div class="col-md-12 form-group2 group-mail">
             <label class="control-label">পূর্ববর্তী প্রতিষ্ঠানের নামঃ</label>
            <div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-book"></i>
				</span>
				<input type="text" name="old_edu" class="form-control1" id="focusedinput" placeholder="পূর্ববর্তী প্রতিষ্ঠানের নাম">
			</div>
       </div>

        <div class="col-md-12 form-group2 group-mail">
             <label class="control-label">ঠিকানাঃ</label>
            <div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-bookmark"></i>
				</span>
				<input type="text" name="old_edu_a" class="form-control1" id="focusedinput" placeholder="ঠিকানা">
			</div>
       </div>
       <div class="col-md-4 form-group2 group-mail">
             <label class="control-label">বিষয়ঃ</label>
            <select name="subject" id="dob-day">
			  <option>বিষয় পছন্দ করুন</option>
			  <option value="Arabic">আরবী</option>
			  <option value="Generale">সাধারণ</option>
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

   <div class="col-md-4 form-group2 group-mail">
         <label class="control-label">ধরণঃ</label>
        
		<select name="type" id="dob-day">
		  <option>ধরণ পছন্দ করুন</option>
		  <option value="Emploay">Emploay</option>
		  <option value="Teacher">Teacher</option>
		</select>
   </div>

      <div class="col-md-4 form-group2 group-mail">
         <label class="control-label">আইডি নং</label>
        
		<div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-lightbulb-o"></i>
			</span>
			<input type="text" name="stu_id" class="form-control1" id="focusedinput" placeholder="আইডি নং">
		</div>
   </div>

   <div class="col-md-8 form-group2 group-mail">
         <label class="control-label">ছবিঃ</label>
        <div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-picture-o"></i>
			</span>
			<input type="file" name="image" class="form-control1" id="focusedinput">
		</div>
   </div>
</div>

<!-- Right Site-->
<div class="col-sm-6">

	<div class="col-md-6 form-group2 group-mail">
    	<label class="control-label">জন্ম তারিখ - জন্ম সনদ অনুযায়ীঃ</label>
        <div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-calendar"></i>
			</span>
			<input type="text" name="dob" class="form-control1" id="focusedinput" placeholder="01/01/1997">
		</div>
    </div>

    <div class="col-md-6 form-group2 group-mail">
    	<label class="control-label">রক্তের গ্রপঃ</label>
        <div class="input-group">
			<span class="input-group-addon">
				<i class="glyphicon glyphicon-tint"></i>
			</span>
			<input type="text" name="blood" class="form-control1" id="focusedinput" placeholder="গ্রক্তের গ্রপ">
		</div>
    </div>

         <div class="col-md-12 form-group2 group-mail">
             <label class="control-label">মাতার নাম (ইংরেজী)</label>
            <div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-user"></i>
				</span>
				<input type="text" name="mname" class="form-control1" id="focusedinput" placeholder="মাতার নাম (ইংরেজী)">
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
			<input type="text" name="t_gram" class="form-control1" id="focusedinput" placeholder="গ্রাম">
		</div>
    </div>

    <div class="col-md-6 form-group2 group-mail">
    	<label class="control-label">ওয়াডঃ</label>
        <div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-bookmark"></i>
			</span>
			<input type="text" name="t_word" class="form-control1" id="focusedinput" placeholder="ওয়াড">
		</div>
    </div>

    <div class="col-md-6 form-group2 group-mail">
    	<label class="control-label">উপজেলাঃ</label>
        <div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-bookmark"></i>
			</span>
			<input type="text" name="t_sdistrict" class="form-control1" id="focusedinput" placeholder="উপজেলা">
		</div>
    </div>

    <div class="col-md-6 form-group2 group-mail">
    	<label class="control-label">জেলাঃ</label>
        <div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-bookmark"></i>
			</span>
			<input type="text" name="t_district" class="form-control1" id="focusedinput" placeholder="জেলা">
		</div>
    </div>

        <div class="col-md-6 form-group2 group-mail">
    	<label class="control-label">মোবাইলঃ</label>
        <div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-phone"></i>
			</span>
			<input type="text" name="mobile" class="form-control1" id="focusedinput" placeholder="মোবাইল">
		</div>
    </div>

    <div class="col-md-6 form-group2 group-mail">
    	<label class="control-label">ভোটার আইডি নং</label>
        <div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-ticket"></i>
			</span>
			<input type="text" name="nid" class="form-control1" id="focusedinput" placeholder="ভোটার আইডি নং">
		</div>
    </div>

    <div class="col-md-6 form-group2 group-mail">
         <label class="control-label">অবস্থানের বিবারনঃ</label>
			
			<select name="location" id="dob-day">
				  <option>অবস্থান পছন্দ করুন</option>
				  <option value="Hostil">আবাসিক</option>
				  <option value="Home">অনাবাসিক</option>
			</select>
   </div>

   <div class="col-md-6 form-group2 group-mail">
         <label class="control-label">বডিং এর খাবার</label>
        <select name="match" id="dob-day">
				  <option>বডিং পছন্দ করুন</option>
				  <option value="বডিং এর খাবে">বডিং এর খাবে</option>
				  <option value="বডিং এর খাবেনা">বডিং এর খাবেনা</option>
			</select>
   </div>

   <div class="col-md-4 form-group2 group-mail">
         <label class="control-label">শিক্ষাগত যোগ্যতাঃ</label>
		<select name="a_class" id="dob-day">
				  <option>শিক্ষাগত যোগ্যতাঃ</option>
				  <option value="SSC">SSC</option>
				  <option value="HHC">HHC</option>
				  <option value="Play">প্লে</option>
				  <option value="Nurserie">নার্সারী</option>
				  <option value="one">প্রথম জামাত</option>
				  <option value="two">দ্বিতীয় জামাত</option>
				  <option value="three">তৃতীয় জামাত</option>
			</select>
		
   </div>

   <div class="col-md-4 form-group2 group-mail">
         <label class="control-label">বোর্ড</label>
       <select name="bord" id="dob-day">
		  <option>বোর্ড পছন্দ করুন</option>
		  <option value="Madrasah">মাদরাসা</option>
		  <option value="Barisal">বরিশাল</option>
		  <option value="Dhaka">ঢাকা</option>
		  <option value="দিনাচপুর">দিনাচপুর</option>
		  <option value="চিটাগং">চিটাগং</option>
		  <option value="রাজশাহি">রাজশাহি</option>
		  <option value="যশর">যশর</option>
		  <option value="কুমিল্লা">কুমিল্লা</option>
		  <option value="সিলেট">সিলেট</option>
		  <option value="টেকনিকাল">টেকনিকাল</option>
	</select>
   </div>

   <div class="col-md-4 form-group2 group-mail">
         <label class="control-label">প্রাপ্ত জিপিএঃ</label>
        <div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-font"></i>
			</span>
			<input type="text" name="gpa" class="form-control1" id="focusedinput" placeholder="প্রাপ্ত জিপিএঃ">
		</div>
   </div>

   <div class="col-md-12 form-group2 group-mail">
         <label class="control-label">বিশেষ তথ্যঃ</label>
        <div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-question-circle"></i>
			</span>
			<input type="text" name="s_info" class="form-control1" id="focusedinput" placeholder="বিশেষ তথ্য">
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
</div>
  </div>
 	</div>
 	<!--//grid-->
<?php include 'inc/footer.php'; ?>