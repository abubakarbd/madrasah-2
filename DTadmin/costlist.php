<?php include 'inc/header.php'; ?>
<div class="agile-tables">
		  <h3>Member List</h3> 
<div class="table-responsive">          
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
     $query = "SELECT * FROM cost order by id desc";
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
         } ?>
</table>
</div>
</div>
<?php include 'inc/footer.php'; ?>