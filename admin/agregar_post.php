<?php include 'includes/header.php'?>
<?php 
	//instanciando
	$db = new DataBase();
	if(isset($_POST['submit'])){
		$title = mysqli_real_escape_string($db->link, $_POST['title']);
		$body = mysqli_real_escape_string($db->link, $_POST['body']);
		$category = mysqli_real_escape_string($db->link, $_POST['category']);
		$author = mysqli_real_escape_string($db->link, $_POST['author']);
		$tags = mysqli_real_escape_string($db->link, $_POST['tags']);
		//validar que este lleno
		if($title =='' || $body =='' || $author=='' ){
			$error = 'Please fill all the required fields.';
		}else{
			$query = "INSERT INTO Posts (categoria, titulo, body, autor, etiquetas) 
					VALUES('$category', '$title', '$body', '$author', '$tags')";
			$insert_row = $db->insert($query);
		}
	}
?>
<?php 
	//query para las categorias
	$query = "SELECT * FROM Categorias";
	//ejecutar query
	$categories = $db->select($query);
?>
	<form role="form" method="post" action="agregar_post.php">
  	<div class="form-group">
    	<label>Post Title</label>
    	<input name="title" type="text" class="form-control" placeholder="Enter title" >
  	</div>
  	<div class="form-group">
    	<label>Body</label>
    	<textarea name="body" class="form-control" placeholder="Type your post..."></textarea>
  	</div>
    <div class="form-group">
    	<label>Categorie</label>
    	<select name="category" class="form-control" >
        <?php while($row = $categories->fetch_assoc()) : ?>
			<?php if($row['id'] == $post['category']){
				$selected = 'selected';
			} else {
				$selected = '';
			}
			?>	
			<option <?php echo $selected; ?> value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
		<?php endwhile; ?>
		</select>
  	</div>
    <div class="form-group">
    	<label>Author</label>
    	<input name="author" type="text" class="form-control" placeholder="enter author name">
  	</div>
    <div class="form-group">
    	<label>Tags</label>
    	<input name="tags" type="text" class="form-control" placeholder="enter tags">
  	</div>
    <div>
  		<input type="submit" class="btn btn-success" name="submit" value="Submit">
  		<a href="index.php" class="btn btn-danger">Cancel</a>
	</div>
    <br>
    </form>
<?php include 'includes/footer.php'; ?>