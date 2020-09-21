<?php include 'inc/header.php'; ?>
<div class="agile-tables">
		  <h3>Post List</h3> 
<div class="table-responsive">          
  
 <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th width="5%">No</th>
			<th width="15%">Post Title</th>
			<th width="15">Description</th>
			<th width="10%">Category</th>
			<th width="10%">Image</th>
			<th width="10%">Aurhor</th>
			<th width="10%">Tags</th>
			<th width="10%">Date</th>
			<th width="15%">Action</th>
		</tr>
	</thead>
	<tbody>
	<?php 
		 $query = "SELECT tbl_post.*, tbl_category.cname FROM tbl_post INNER JOIN tbl_category ON tbl_post.cat = tbl_category.id ORDER By tbl_post.title DESC";
		 $post = $db->select($query);
		 if ($post) {
		 	$i=0;
		 	while ($result = $post->fetch_assoc()) {
		 		$i++;
	?>		
		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $result['title'];?></td>
			<td><?php echo $fm->textShorten($result['body'], 70);?></td>
			<td> <?php echo $result['cname'];?></td>
			<td><img src="<?php echo $result['image'];?>" width="60" height="40"></td>
			<td><?php echo $result['author'];?></td>
			<td><?php echo $result['tags'];?></td>
			<td> <?php echo $fm->formatDate($result['date']);?></td>

			<td>
				<button type="button" class="btn btn-success btn-xs dt-edit">
					<a href="viewpost.php?viewpostid=<?php echo $result['id'];?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
				</button>
				<?php if (session::get('userId') == $result['userid'] || session::get('userRole') == '0') { ?>
				<button type="button" class="btn btn-info btn-xs dt-edit"><a href="editpost.php?editpostid=<?php echo $result['id'];?>">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
				</button>
				<button type="button" class="btn btn-danger btn-xs dt-delete"><a onclick="return confirm('Are your sure to Delete!')" href="deletepost.php?delpostid=<?php echo $result['id'];?>">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
				</button>
				<?php	} ?>
			</td>
		</tr>
           
 <?php } } ?>
   
	</tbody>
</table>
</div>
</div>
<?php include 'inc/footer.php';?>