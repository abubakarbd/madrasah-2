
 <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name_b = mysqli_real_escape_string($db->link, $_POST['name_b']);
        $name_e = mysqli_real_escape_string($db->link, $_POST['name_e']);
        $fname_b = mysqli_real_escape_string($db->link, $_POST['fname_b']);
        $fname_e = mysqli_real_escape_string($db->link, $_POST['fname_e']);
        $mname_b = mysqli_real_escape_string($db->link, $_POST['mname_b']);
        $mname_e = mysqli_real_escape_string($db->link, $_POST['mname_e']);
        $p_gram = mysqli_real_escape_string($db->link, $_POST['p_gram']);
        $p_word = mysqli_real_escape_string($db->link, $_POST['p_word']);
        $p_sdistrict = mysqli_real_escape_string($db->link, $_POST['p_sdistrict']);
        $p_district = mysqli_real_escape_string($db->link, $_POST['p_district']);
        $c_name = mysqli_real_escape_string($db->link, $_POST['c_name']);
        $c_relation = mysqli_real_escape_string($db->link, $_POST['c_relation']);
        $c_mobile = mysqli_real_escape_string($db->link, $_POST['c_mobile']);
        $a_class = mysqli_real_escape_string($db->link, $_POST['a_class']);
        $division = mysqli_real_escape_string($db->link, $_POST['division']);
        $old_edu = mysqli_real_escape_string($db->link, $_POST['old_edu']);
        $old_edu_a = mysqli_real_escape_string($db->link, $_POST['old_edu_a']);
        $dob = mysqli_real_escape_string($db->link, $_POST['dob']);
        $mark = mysqli_real_escape_string($db->link, $_POST['mark']);
        $level = mysqli_real_escape_string($db->link, $_POST['level']);
        $blood = mysqli_real_escape_string($db->link, $_POST['blood']);
        $f_job = mysqli_real_escape_string($db->link, $_POST['f_job']);
        $fjob_ad = mysqli_real_escape_string($db->link, $_POST['fjob_ad']);
        $f_mobile = mysqli_real_escape_string($db->link, $_POST['f_mobile']);
        $f_nid = mysqli_real_escape_string($db->link, $_POST['f_nid']);
        $m_job = mysqli_real_escape_string($db->link, $_POST['m_job']);
        $mjob_ad = mysqli_real_escape_string($db->link, $_POST['mjob_ad']);
        $m_mobile = mysqli_real_escape_string($db->link, $_POST['m_mobile']);
        $m_nid = mysqli_real_escape_string($db->link, $_POST['m_nid']);
        $t_gram = mysqli_real_escape_string($db->link, $_POST['t_gram']);
        $t_word = mysqli_real_escape_string($db->link, $_POST['t_word']);
        $t_sdistrict = mysqli_real_escape_string($db->link, $_POST['t_sdistrict']);
        $t_district = mysqli_real_escape_string($db->link, $_POST['t_district']);
        $c_address = mysqli_real_escape_string($db->link, $_POST['c_address']);
        $c_nid = mysqli_real_escape_string($db->link, $_POST['c_nid']);
        $location = mysqli_real_escape_string($db->link, $_POST['location']);
        $car = mysqli_real_escape_string($db->link, $_POST['car']);
        $bording = mysqli_real_escape_string($db->link, $_POST['bording']);
        $old_class = mysqli_real_escape_string($db->link, $_POST['old_class']);
        $bord = mysqli_real_escape_string($db->link, $_POST['bord']);
        $gpa = mysqli_real_escape_string($db->link, $_POST['gpa']);
        $s_info = mysqli_real_escape_string($db->link, $_POST['s_info']);
        $section = mysqli_real_escape_string($db->link, $_POST['section']);
        $stu_id = mysqli_real_escape_string($db->link, $_POST['stu_id']);

    $permited  = array('jpg', 'jpeg', 'png', 'gif');
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_temp = $_FILES['image']['tmp_name'];

    $div = explode('.', $file_name);
    $file_ext = strtolower(end($div));
    $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
    $uploaded_image = "uploads/".$unique_image;

    if ($name_e == "" || $fname_e == "" || $mname_e == "" || $f_mobile == "" || $a_class == "" || $location == "" || $car == "" || $section == "" || $stu_id == "") {
        echo '<div class="col-md-1"></div><div class="alert alert-info alert-dismissible col-md-6 ">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> Alert!</h4>
                লাল চিহ্ন ঘড় গুলো পূরন করতে হবে!!
              </div>';
    }else {
         $mailquery = "SELECT * FROM student_list WHERE stu_id = '$stu_id' limit 1 ";
         $mailcheck = $db->select($mailquery);
        if ($mailcheck != false) {
             echo '<div class="col-md-1"></div><div class="alert alert-info alert-dismissible col-md-6 ">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> Alert!</h4>
                এই আইডি আগে ব্যবহার হয়েছে!!
              </div>';
         } elseif ($file_size >1048567) {
     echo "<span class='error'>Image Size should be less then 1MB!
     </span>";
    } elseif (in_array($file_ext, $permited) === false) {
     echo "<span class='error'>You can upload only:-"
     .implode(', ', $permited)."</span>";
    } else{
    move_uploaded_file($file_temp, $uploaded_image);

 $query = "INSERT INTO student_list(
 name_b,
 name_e,
 fname_b,
 fname_e,
 mname_b,
 mname_e,
 p_gram,
 p_word,
p_sdistrict,
p_district,
c_name,
c_relation,
c_mobile,
a_class,
 division,
 old_edu,
 old_edu_a,
 dob,
 mark,
 level,
 blood,
 f_job,
fjob_ad,
 f_mobile,
 f_nid,
 m_job,
 mjob_ad,
 m_mobile,
 m_nid,
 t_gram,
 t_word,
t_sdistrict,
t_district,
c_address,
c_nid,
 location,
 car,
 bording,
 old_class,
 bord,
 gpa,
 s_info,
 section,
 stu_id,
 image
 )VALUES('$name_b','$name_e','$fname_b','$fname_e','$mname_b','$mname_e','$p_gram','$p_word','$p_sdistrict','$p_district','$c_name', '$c_relation','$c_mobile','$a_class','$division','$old_edu','$old_edu_a','$dob','$mark','$level','$blood','$f_job','$fjob_ad','$f_mobile','$f_nid','$m_job','$mjob_ad','$m_mobile','$m_nid','$t_gram','$t_word','$t_sdistrict', '$t_district','$c_address','$c_nid','$location','$car','$bording','$old_class','$bord','$gpa','$s_info','$section','$stu_id','$uploaded_image')";

   $inserted_rows = $db->insert($query);
    if ($inserted_rows) {
     echo '<div class="col-md-1"></div><div class="alert alert-success alert-dismissible col-md-6 ">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> Alert!</h4>
                ভর্তী সম্পূর্ণ হয়েছে!.
              </div>';
    }else {
     echo '<div class="col-md-1"></div><div class="alert alert-info alert-dismissible col-md-6 ">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> Alert!</h4>
                ভর্তী সম্পূর্ণ হয়নি!
              </div>';
    }
    }

   } } ?>




