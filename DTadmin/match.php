<?php include 'inc/header.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Student List
        <small>all Student here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Student List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      
            <!-- /.box-header -->
<div class="panel panel-body">
	<form action="" method="post" class="form-horizontal">
   <div class="col-md-4 form-group2 group-mail">
   	 <div class="col-md-6">
         <label class="control-label">শাখাঃ</label>
		<select name="bording" class="form-control" id="dob-day">
				  <option>বডিং পছন্দ করুন</option>
				  <option value="বডিং এর খাবে">বডিং এর খাবে</option>
				  <option value="বডিং এর খাবেনা">বডিং এর খাবেনা</option>

		</select>
   </div>
   	<div class="col-md-6">
         <label class="control-label">শাখাঃ</label>
		<select name="section" class="form-control" id="dob-day">
		  <option>শাখা পছন্দ করুন</option>
		  <option value="Male">বালক</option>
		  <option value="Female">বালিকা</option>
		  <option value="Nurani">নূরাণী</option>
		</select>
   </div>
  
    <div class="col-md-2">
		<button name="submit" class="btn-primary btn">Submit</button>
	</div>
	</div>	
</form>
</div>
  <?php 
      $sl = 0;
       if(isset($_POST['submit'])){
       $section = $_POST['section'];
       $bording = $_POST['bording'];
    ?> 
     <div class="box">
            <div class="box-header">
              <h3 class="box-title">Student List</h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  	<th>ক্র নং</th>
					<th>নাম</th>
					<th>বাবার নাম</th>
					<th>বাবার মোবা</th>
					<th>শ্রেণী</th>
					<th>অবস্থা</th>
					<th>গাড়ী</th>
					<th>ছবি</th>
					<th>Actions</th>
                </tr>
                </thead>
                <tbody>
 	<?php 
		 $query = "SELECT * FROM student_list WHERE section ='$section' AND bording = '$bording'";
		 $stulist = $db->select($query);
		 if ($stulist) {
		 	$i=0;
		 	while ($result = $stulist->fetch_assoc()) {
		 		$i++;
	?>             
                <tr>
                  	<td><?php echo $i?></td>
          					<td><?php echo $result['name_e'];?></td>
          					<td><?php echo $result['fname_e'];?></td>
          					<td><?php echo $result['f_mobile'];?></td>
          					<td><?php echo $result['a_class'];?></td>
          					<td><?php echo $result['location'];?></td>
          					<td><?php echo $result['car'];?></td>
          					<td><img width="60" height="60" src="<?php echo $result['image'];?>"></td>
                    <td>
                        <ul class="todo-list">
                          <li>
                  <!-- drag handle -->
                  <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                  </span>
                  <!-- General tools such as edit or delete-->
                  <div class="tools">
                    <a href="stuview.php?student_id=<?php echo $result['id'];?>"><i class="fa fa-eye"></i></a>
                    <a href=""><i class="fa fa-edit"></i></a>
                    <a onclick="return confirm('Are your sure to Delete!')" href="deletstu.php?delstu_id=<?php echo $result['id'];?>"><i class="fa fa-trash-o"></i></a>
                  </div>
                </li>
                    </td>
                </tr>
                 <?php } } }?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include 'inc/sidebar.php';?>
<?php include 'inc/footer.php';?>
