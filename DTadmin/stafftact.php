
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




