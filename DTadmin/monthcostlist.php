<?php include 'inc/header.php'; ?>
<div class="agile-tables">
		  <h3>Member List</h3>
<div class="tab-pane active" id="horizontal-form">
  <form action="" method="post" class="form-horizontal">
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
<div class="clearfix"></div>     
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
             $month = $_POST['month'];
      ?>          
  <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
 

  
    <tr>
      <th>No</th>
      <th>Name</th>
      <th>V No</th>
      <th>Description</th>
      <th>Totle</th>
      <th>Date</th>
    </tr>
  </thead>
  <tbody>
<?php 
     $query = "SELECT * FROM cost WHERE month ='$month' order by id desc";
     $userlist = $db->select($query);
     if ($userlist) {
      $i=0;
      $sl = 0;
      $ssum =0;
      $csum =0;
      $osum =0;
      $tsum =0;
      while ($result = $userlist->fetch_assoc()) {
        $i++;
  ?> 

    <tr>
      <td><?php echo $i?></td>
      <td><?php echo $result['name'];?></td>
      <td><?php echo $result['rnong'];?></td>
      <td><?php echo $result['description'];?></td>
      <td><?php echo $result['ttaka'];?></td>
      <td><?php echo $result['date'];?></td>
    </tr>
    <?php 
        $tsum = $tsum + $result['ttaka'];
           
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
      <td><b>Totle: <?php echo $tsum ?> </b></td>
    </tr>
   </tfoot>
     <?php
         } }?>
</table>
</div>
</div>
<?php include 'inc/footer.php'; ?>