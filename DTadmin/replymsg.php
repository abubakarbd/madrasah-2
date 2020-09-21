<?php include 'inc/header.php'; ?>

    <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a><i class="fa fa-angle-right"></i>Replay</li>
        </ol>
<?php
    if (!isset($_GET['msgid']) || $_GET['msgid'] == NULL ) {
       header("Location :inbox.php");
    } else {
        $id = $_GET['msgid'];
    }
?>
  <div class="grid-form1">
    <h3>Replay Massage</h3>
        <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
       $toEmail   = $fm->validation($_POST['toEmail']);
       $fromEmail = $fm->validation($_POST['fromEmail']);
       $subject   = $fm->validation($_POST['subject']);
       $massage   = $fm->validation($_POST['massage']);

       $sentmail = mail($toEmail, $subject, $massage, $fromEmail);
       if ($sentmail) {
           echo "<span class='success'>Massage Sent Successfully.
     </span>";
       }else{
        echo "<span class='error'>Massage Sent Successfully.
     </span>";
       }
   } ?>
        <div class="tab-content">
            <div class="tab-pane active" id="horizontal-form">
        <div class="block">  

 
                <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
        <div class="block">               
         <form action="" method="post">
<?php 
 $query = "SELECT * FROM tbl_contact WHERE id = '$id'";
 $contact = $db->select($query);
 if ($contact) {
    $i=0;
    while ($result = $contact->fetch_assoc()) {
        $i++;
?>
    
                         <div class="form-group">
                            <label class="col-md-2 control-label">To</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa  fa-envelope-o"></i>
                                    </span>
                                    <input type="text" name="toEmail" class="form-control1" id="exampleInputmobile1" value="<?php echo $result['email']; ?>">
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-md-2 control-label">From</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa  fa-reply"></i>
                                    </span>
                                    <input type="text" name="fromEmail" class="form-control1" id="exampleInputmobile1" placeholder="Place Enter Your Email Address! ">
                                </div>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="col-md-2 control-label">Subject</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa  fa-list"></i>
                                    </span>
                                    <input type="text" name="subject" class="form-control1" id="exampleInputmobile1" placeholder="Place Enter Your Subject ">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Massage</label>
                            <div class="col-md-8">
                                <div class="input-group">                           
                                    <span class="input-group-addon">
                                        <i class="fa fa-comments-o"></i>
                                    </span>
                                    <textarea style="height: 100px;" name="massage" id="txtarea1" cols="80" rows="8" class="form-control1">
                                    </textarea>
                                </div>
                            </div>
                        </div>

                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <button name="submit" class="btn-primary btn">Sent</button>
                                </div>
                            </div>
                        </div>
                    <?php } }?>
                    </form>
  </div>
    </div>
    <!--//grid-->
<?php include 'inc/footer.php'; ?>