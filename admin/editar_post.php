<?php include 'includes/header.php'?>
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
			$query = "UPDATE Posts SET 
						categoria = '$category',
						titulo = '$title',
						body = '$body',
						autor = '$author',
						etiquetas = '$tags'
						WHERE id =".$id;
			$insert_row = $db->update($query);
		}
	}
?>
<?php 
	if(isset($_POST['delete'])){
		$query = "DELETE FROM Categorias WHERE id=".$id;
		$delete_row = $db->delete($query);
	}
?>
	<form role="form" method="post" action="editar_post.php?id=<?php echo $id; ?>">
  	<div class="form-group">
    	<label>Post Title</label>
    	<input type="text" class="form-control" name="title" value="<?php echo $post['titulo']; ?>">
  	</div>
  	<div class="form-group">
    	<label>Body</label>
    	<textarea name="body" class="form-control" ><?php echo $post['body']; ?></textarea>
  	</div>
    <div class="form-group">
    	<label>Category</label>
    	<select name="category" class="form-control">
        <?php while($row = $categories->fetch_assoc()):?>
        	<?php 
			if($row['id']==$post['categoria']){
            	$selected = 'selected';
			}else{
				$selected = '';
			}
			?>
  			<option value="<?php echo $row['id']; ?>" <?php echo $selected; ?>><?php echo $row['nombre']?></option>
        <? endwhile;?>
		</select>
  	</div>
    <div class="form-group">
    	<label>Author</label>
    	<input type="text" class="form-control" name="author" placeholder="enter author name" value="<?php echo $post['autor']; ?>">
  	</div>
    <div class="form-group">
    	<label>Tags</label>
    	<input type="text" class="form-control" name="tags" placeholder="enter author name" value="<?php echo $post['etiquetas']; ?>">
  	</div>
    <div>
  		<input type="submit" class="btn btn-success" name="submit" value="Update">
        <input type="submit" class="btn btn-warning" name="delete" value="Delete">
  		<a href="index.php" class="btn btn-danger">Cancel</a>
	</div>
    <br>
    </form>
<?php include 'includes/footer.php'; ?>