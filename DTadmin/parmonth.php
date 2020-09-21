<?php include 'inc/header.php'; ?>

	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Member Form</li>
        </ol>

<div class="agile-tables">
		  <h3>Member List</h3>
		    	         	<div class="tab-pane active" id="horizontal-form">
	<form action="" method="post" class="form-horizontal">
		 <div class="col-md-12 form-group2 group-mail">
              <label class="control-label">Member List</label>
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
           $month = $_POST['month'];
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
     $query = "SELECT * FROM deposit WHERE month ='$month'";
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
         } }?>
</table>
</div>
</div>
<?php include 'inc/footer.php'; ?>