<?php include 'includes/header.php'; ?>
<?php 
	$id = $_GET['id'];
	//instanciando
	$db = new DataBase();
	
	//query
	$query = "SELECT * FROM Posts where id=".$id;
	//ejecutar query
	$post = $db->select($query);
	$post = $post->fetch_assoc();
	//query para las categorias
	$query = "SELECT * FROM Categorias";
	//ejecutar query
	$categories = $db->select($query);
?>
<div class="blog-post">
	<h2 class="blog-post-title"><?php echo $post['titulo']?></h2>
    <p class="blog-post-meta"><?php echo $post['date'];?> by <a href="#"><?php echo $post['autor']; ?></a></p>
    
    <?php echo $post['body']; ?>
            
</div><!-- /.blog-post -->

<?php include 'includes/footer.php'; ?>