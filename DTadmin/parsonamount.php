<?php include 'inc/header.php'; ?>
<div class="agile-tables">
      <h3>Student Salary</h3> 

<div class="tab-pane active" id="horizontal-form">
  <form action="" method="post" class="form-horizontal">
     <div class="col-md-6 form-group2 group-mail">
              <label class="control-label">Student List</label>
            <select name="name_e">
              <option value="">Select Student</option>
<?php 
     $query = "SELECT * FROM Student_list order by id desc ";
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
            <div class="col-md-6 form-group2 group-mail">
              <label class="control-label">শ্রেণি পছন্দ করুন</label>
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
<div class="clearfix"></div>
<div class="panel-footer">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <button name="submit" class="btn-primary btn">Submit</button>
      <button class="btn-default btn">Cancel</button>
    </div>
  </div>
</div>
</form>
</div> 

<div class="table-responsive">          
   <?php 
      $sl = 0;
               if(isset($_POST['submit'])){
             $name_e = $_POST['name_e'];
             $a_class = $_POST['a_class'];
      ?> 
  <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
 

  
    <tr>
      <th>No</th>
      <th>Name</th>
      <th>Class</th>
      <th>Month</th>
      <th>Baton</th>
      <th>Match</th>
      <th>Hostel</th>
      <th>Gari</th>
      <th>Totle</th>
      <th>Date</th>
    </tr>
  </thead>
  <tbody>
<?php 
     $query = "SELECT * FROM deposit WHERE name_e ='$name_e' AND a_class = '$a_class' order by id desc";
     $userlist = $db->select($query);
     if ($userlist) {
      $i=0;
      $sl = 0;
      $ssum =0;
      $csum =0;
      $osum =0;
      $tsum =0;
      $gsum =0;
      while ($result = $userlist->fetch_assoc()) {
        $i++;
  ?> 

    <tr>
      <td><?php echo $i?></td>
      <td><?php echo $result['name_e'];?></td>
      <td><?php echo $result['a_class'];?></td>
      <td><?php echo $result['month'];?></td>
      <td><?php echo $result['batontk'];?></td>
      <td><?php echo $result['matchtk'];?></td>
      <td><?php echo $result['hosteltk'];?></td>
      <td><?php echo $result['cartk'];?></td>
      <td><?php echo $result['totle'];?></td>
      <td><?php echo $result['date'];?></td>
    </tr>
    <?php 
        $ssum = $ssum + $result['batontk'];
        $csum = $csum + $result['matchtk'];
        $osum = $osum + $result['hosteltk'];
        $gsum = $gsum + $result['cartk'];
        $tsum = $tsum + $result['totle'];
           
            ?>  
<?php
         } ?>

</tbody>
<tfoot>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><b>Baton: <?php echo $ssum ?></b></td>
      <td><b>Match: <?php echo $csum ?></b></td>
      <td><b>Hostel: <?php echo $osum ?></b></td>
      <td><b>Gari: <?php echo $gsum ?> </b></td>
      <td><b>Totle: <?php echo $tsum ?> </b></td>
      <td></td>
    </tr>
   </tfoot>
     <?php
         } } ?>
</table>
</div>
</div>
<?php include 'inc/footer.php';?>