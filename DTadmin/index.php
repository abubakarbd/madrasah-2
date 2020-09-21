<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php 
               $query = "SELECT * FROM student_list WHERE id=id order by id desc";
               $contact = $db->select($query);
               if ($contact) {
                  $count = mysqli_num_rows($contact);
                  echo $count;
               }else{
                  echo "(0)";
               }
          ?></h3>

              <h4>সকল ছাত্র/ছাত্রি</h4>
            </div>
            <div class="icon">
              <i class="fa fa-group"></i>
            </div>
            <a href="#" class="small-box-footer">সকল তথ্য <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php 
     $query = "SELECT * FROM student_list WHERE section='Male' order by id desc";
     $contact = $db->select($query);
     if ($contact) {
        $count = mysqli_num_rows($contact);
        echo $count;
     }else{
        echo "(0)";
     }
?></h3>

              <h4>সকল ছাত্র</h4>
            </div>
            <div class="icon">
              <i class="fa fa-group"></i>
            </div>
            <a href="#" class="small-box-footer">সকল তথ্য <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php 
     $query = "SELECT * FROM student_list WHERE section='Female' order by id desc";
     $contact = $db->select($query);
     if ($contact) {
        $count = mysqli_num_rows($contact);
        echo $count;
     }else{
        echo "(0)";
     }
?></h3>

              <h4>সকল ছাত্রী</h4>
            </div>
            <div class="icon">
              <i class="fa fa-group"></i>
            </div>
            <a href="#" class="small-box-footer">সকল তথ্য <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php 
     $query = "SELECT * FROM student_list WHERE section = 'Nurani' order by id desc";
     $contact = $db->select($query);
     if ($contact) {
        $count = mysqli_num_rows($contact);
        echo $count;
     }else{
        echo "0";
     }
?></h3>

              <h4>নূরাণীর সকল ছাত্র/ছাত্রি</h4>
            </div>
            <div class="icon">
              <i class="fa fa-group"></i>
            </div>
            <a href="#" class="small-box-footer">সকল তথ্য <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php 
     $query = "SELECT * FROM deposit order by id desc";
     $userlist = $db->select($query);
     if ($userlist) {
      $tsum =0;
      while ($result = $userlist->fetch_assoc()) {
        $tsum = $tsum + $result['totle'];}
echo $tsum; 
  }?></h3>

              <h4>মোট আয়</h4>
            </div>
            <div class="icon">
              <i class="fa fa-money"></i>
            </div>
            <a href="#" class="small-box-footer">সকল তথ্য <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php 
     $query = "SELECT * FROM cost order by id desc";
     $userlist = $db->select($query);
     if ($userlist) {
      $tsum =0;
      while ($result = $userlist->fetch_assoc()) {
        $tsum = $tsum + $result['ttaka'];}
echo $tsum; 
  }?></h3>
              <h4>মোট খরচ</h4>
            </div>
            <div class="icon">
              <i class="fa fa-minus-square"></i>
            </div>
            <a href="#" class="small-box-footer">সকল তথ্য <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php 
     $query = "SELECT * FROM deposit WHERE month = 'May' order by id desc";
     $userlist = $db->select($query);
     if ($userlist) {
      $tsum =0;
      while ($result = $userlist->fetch_assoc()) {
        $tsum = $tsum + $result['totle'];}
echo $tsum; 
  }?></h3>

              <h4>মাসিক আয়</h4>
            </div>
            <div class="icon">
              <i class="fa fa-money"></i>
            </div>
            <a href="#" class="small-box-footer">সকল তথ্য <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php 
     $query = "SELECT * FROM cost WHERE month = 'May' order by id desc";
     $userlist = $db->select($query);
     if ($userlist) {
      $tsum =0;
      while ($result = $userlist->fetch_assoc()) {
        $tsum = $tsum + $result['ttaka'];}
echo $tsum; 
  }else{
        echo "0";
     }?></h3>

              <h4>মাসিক খরচ</h4>
            </div>
            <div class="icon">
              <i class="fa fa-minus-square"></i>
            </div>
            <a href="#" class="small-box-footer">সকল তথ্য <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php 
     $query = "SELECT * FROM deposit WHERE month = 'May' order by id desc";
     $userlist = $db->select($query);
     if ($userlist) {
      $tsum =0;
      while ($result = $userlist->fetch_assoc()) {
        $dsum = $tsum + $result['totle'];}
        $dsum; 
  }

$query = "SELECT * FROM cost WHERE month = 'May' order by id desc";
     $userlist = $db->select($query);
     if ($userlist) {
      $tsum =0;
      while ($result = $userlist->fetch_assoc()) {
        $tsum = $tsum + $result['ttaka'];}
        $tsum; 
  }
  $dvidet = $dsum - $tsum;
  echo $dvidet;
     ?></h3>

              <h4>চলতি মাসের টাকা</h4>
            </div>
            <div class="icon">
              <i class="fa fa-money"></i>
            </div>
            <a href="#" class="small-box-footer">সকল তথ্য <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php 

   $query = "SELECT * FROM deposit order by id desc";
     $userlist = $db->select($query);
     if ($userlist) {
      $tsum =0;
      while ($result = $userlist->fetch_assoc()) {
        $tsum = $tsum + $result['totle'];}
$tsum;
}
$query = "SELECT * FROM cost order by id desc";
     $userlist = $db->select($query);
     if ($userlist) {
      $csum =0;
      while ($result = $userlist->fetch_assoc()) {
        $csum = $csum + $result['ttaka'];} 
  }
  $dvidet = $tsum - $csum;
  echo $dvidet;
     ?></h3>

              <h4>মোট টাকা</h4>
            </div>
            <div class="icon">
              <i class="fa fa-money"></i>
            </div>
            <a href="#" class="small-box-footer">সকল তথ্য <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php 
     $query = "SELECT * FROM staff_list WHERE type = 'Teacher' order by id desc";
     $userlist = $db->select($query);
     if ($userlist) {
      $tsum =0;
      while ($result = $userlist->fetch_assoc()) {
        $tsum = $tsum + $result['ttaka'];}
echo $tsum; 
  }else{
        echo "0";
     }?></h3>

              <h4>সকল শিক্ষক/শিক্ষীকা</h4>
            </div>
            <div class="icon">
              <i class="fa fa-group"></i>
            </div>
            <a href="#" class="small-box-footer">সকল তথ্য <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php 
     $query = "SELECT * FROM staff_list WHERE type = 'Emploay' order by id desc";
     $userlist = $db->select($query);
     if ($userlist) {
      $tsum =0;
      while ($result = $userlist->fetch_assoc()) {
        $tsum = $tsum + $result['ttaka'];}
echo $tsum; 
  }else{
        echo "0";
     }?></h3>

              <h4>সকল কর্ম চারি কর্ম কর্তা</h4>
            </div>
            <div class="icon">
              <i class="fa fa-group"></i>
            </div>
            <a href="#" class="small-box-footer">সকল তথ্য <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <!-- TO DO List -->
          <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">To Do List</h3>

              <div class="box-tools pull-right">
                <ul class="pagination pagination-sm inline">
                  <li><a href="#">&laquo;</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
              <ul class="todo-list">
                <li>
                  <!-- drag handle -->
                  <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <!-- checkbox -->
                  <input type="checkbox" value="">
                  <!-- todo text -->
                  <span class="text">Design a nice theme</span>
                  <!-- Emphasis label -->
                  <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                  <!-- General tools such as edit or delete-->
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text">Make the theme responsive</span>
                  <small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text">Let theme shine like a star</span>
                  <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text">Let theme shine like a star</span>
                  <small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text">Check your messages and notifications</span>
                  <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text">Let theme shine like a star</span>
                  <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix no-border">
              <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
            </div>
          </div>
          <!-- /.box -->

          <!-- quick email widget -->
          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Quick Email</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
              <form action="#" method="post">
                <div class="form-group">
                  <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="Subject">
                </div>
                <div>
                  <textarea class="textarea" placeholder="Message"
                            style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
              </form>
            </div>
            <div class="box-footer clearfix">
              <button type="button" class="pull-right btn btn-default" id="sendEmail">Send
                <i class="fa fa-arrow-circle-right"></i></button>
            </div>
          </div>

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">
          <!-- Calendar -->
          <div class="box box-solid bg-green-gradient">
            <div class="box-header">
              <i class="fa fa-calendar"></i>

              <h3 class="box-title">Calendar</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="#">Add new event</a></li>
                    <li><a href="#">Clear events</a></li>
                    <li class="divider"></li>
                    <li><a href="#">View calendar</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <!--The calendar -->
              <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.box-body -->
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include 'inc/footer.php'; ?>
<?php include 'inc/con_sidebar.php'; ?>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
</body>
</html>
