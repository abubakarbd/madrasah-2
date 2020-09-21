<div class="sidebar clear">
				<div class="samesidebar clear">
					<h2>Catagory</h2>
					<ul>

<?php 
 $query = "select * from tbl_category";
 $Catagory = $db->select($query);
 if ($Catagory) {
 	while ($result = $Catagory->fetch_assoc()) {
?>
	<li><a href="posrs.php?Catagory=<?php echo $result['id'];?>"><?php echo $result['cname'];?></a></li>
	<?php } } else { ?>
	<li>No Catagory</li>
	<?php } ?>
					</ul>
					
				</div>
				
				<div class="samesidebar clear">
					<h2> Popular Articles</h2>
<?php 
	 $query = "select * from tbl_post order by rand() limit 5";
	 $post = $db->select($query);
	 if ($post) {
	 	while ($result = $post->fetch_assoc()) {

?>
					<div class="popular clear">

						<a href="post.php?id=<?php echo $result['id'];?>"><h3> <?php echo $result['title'];?> </h3></a>
						<a href="post.php?id=<?php echo $result['id'];?>"><img src="admin/<?php echo $result['image'];?>" alt="Post Image"/></a>
						<?php echo $fm->textShorten($result['body'],100);?>

					</div>
	<?php } } else{ header('Location:404.php');}?>					
					 
					
				</div>
				
				<div class="samesidebar clear">
					<h2>Popular Video</h2>
					<iframe width="100%" height="150px" src="https://www.youtube.com/embed/v4SVKLTVNS8" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
	