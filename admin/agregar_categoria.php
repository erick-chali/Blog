<?php include 'includes/header.php'?>
<?php 
	//instanciando
	$db = new DataBase();
	if(isset($_POST['submit'])){
		$category = mysqli_real_escape_string($db->link, $_POST['category_name']);
		//validar que este lleno
		if($category == ''){
			$error = 'Please fill all the required fields.';
		}else{
			$query = "INSERT INTO Categorias (nombre) VALUES('$category')";
			$insert_row = $db->insert($query);
		}
	}
?>
	<form role="form" method="post" action="agregar_categoria.php">
  	<div class="form-group">
    	<label>Category Name</label>
    	<input type="text" class="form-control" placeholder="Enter category name" name="category_name">
  	</div>
  	
    <div>
  		<input type="submit" class="btn btn-success" name="submit" value="Submit">
  		<a href="index.php" class="btn btn-danger">Cancel</a>
	</div>
    <br>
    </form>
<?php include 'includes/footer.php'; ?>