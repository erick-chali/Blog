<?php include 'includes/header.php'?>
<?php 
	$id = $_GET['id'];
	//instanciando
	$db = new DataBase();
	//query para las categorias
	$query = "SELECT * FROM Categorias WHERE id=".$id;
	//ejecutar query
	$categories = $db->select($query);
	$categorie = $categories->fetch_assoc();
?>
<?php 
	//instanciando
	$db = new DataBase();
	if(isset($_POST['submit'])){
		$category_name = mysqli_real_escape_string($db->link, $_POST['category_name']);
		//validar que este lleno
		if($category_name ==''){
			$error = 'Please fill all the required fields.';
		}else{
			$query = "UPDATE Categorias SET nombre = '$category_name' WHERE id =".$id;
			$update_row = $db->update($query);
		}
	}
?>
<?php 
	if(isset($_POST['delete'])){
		$query = "DELETE FROM Categorias WHERE id=".$id;
		$delete_row = $db->delete($query);
	}
?>
	<form role="form" method="post" action="editar_categoria.php?id=<?php echo $id; ?>">
  	<div class="form-group">
    	<label>Category Name</label>
    	<input type="text" class="form-control" name="category_name" value="<?php echo $categorie['nombre']; ?>">
  	</div>
  	
    <div>
  		<input type="submit" class="btn btn-success" name="submit" value="Save">
        <input type="submit" class="btn btn-warning" name="delete" value="Delete">
  		<a href="index.php" class="btn btn-danger">Cancel</a>
	</div>
    <br>
    </form>
<?php include 'includes/footer.php'; ?>