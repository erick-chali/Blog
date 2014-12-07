<?php include 'includes/header.php'; ?>
<?php 
	//instanciando
	$db = new DataBase();
	
	if(isset($_GET['id'])){
		$category = $_GET['id'];
		//query
		$query = "SELECT * FROM Posts WHERE categoria=".$category." ORDER BY id DESC";
		//ejecutar query
		$posts = $db->select($query);
	}else{
		//query
		$query = "SELECT * FROM Posts ORDER BY id DESC";
		//ejecutar query
		$posts = $db->select($query);
	}
	
	//query para las categorias
	$query = "SELECT * FROM Categorias";
	//ejecutar query
	$categories = $db->select($query);
?>
<?php if($posts) :?>
	<!--Ciclo que va a ir poniendo uno a uno los posts que haya en la base de datos.-->
	<?php while($row = $posts->fetch_assoc()): ?>
          <div class="blog-post">
            <h2 class="blog-post-title"><?php echo $row['titulo']; ?></h2>
            <p class="blog-post-meta"> <?php echo formatDate($row['date']); ?> by <a href="#"> <?php echo $row['autor']; ?> </a></p>
            
            	<?php echo shortText($row['body']); ?>
            
          	<a class="readmore" href="post.php?id=<?php echo urlencode($row['id']); ?>">Read More</a>
          </div><!-- /.blog-post -->
	<?php endwhile; ?>
          

          
<?php else : ?>
	<!--Si no hubieran posts nos los indica.-->
	<p>There are no posts to show yet.</p>
<?php endif; ?>

<?php include 'includes/footer.php'; ?>