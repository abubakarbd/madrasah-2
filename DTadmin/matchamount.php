<?php include 'inc/header.php'; ?>
<div class="agile-tables">
      <h3>Student List</h3> 

<div class="table-responsive">           
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
<?php -
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