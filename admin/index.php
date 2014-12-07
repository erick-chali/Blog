<?php include 'includes/header.php'?>
<?php 
	//objeto db
	$db = new DataBase;
	
	$query = "SELECT Posts.*, Categorias.nombre FROM Posts INNER JOIN Categorias ON Posts.categoria = Categorias.id ORDER BY date DESC";
	
	$posts = $db->select($query);
	
	$query = "SELECT * FROM Categorias ORDER BY nombre DESC";
	$categories = $db->select($query);
?>
	<table class="table table-hover">
    	<tr>
        	<th>POST ID</th>
            <th>POST TITLE</th>
            <th>CATEGORY</th>
            <th>AUTHOR</th>
            <th>DATE</th>
        </tr>
        <?php while($row = $posts->fetch_assoc()):?>
        	<tr>
        	<td><?php echo $row['id']?></td>
            <td><a href="editar_post.php?id=<?php echo $row['id']?>"><?php echo $row['titulo']?></td>
            <td><?php echo $row['nombre']?></td>
            <td><?php echo $row['autor']?></td>
            <td><?php echo formatDate($row['date']); ?></td>
        	</tr>
		<?php endwhile;?>
    </table>
    <table class="table table-hover">
    	<tr>
        	<th>CATEGORY ID</th>
            <th>CATEGORY NAME</th>
        </tr>
	    <?php while($row = $categories->fetch_assoc()):?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><a href="editar_categoria.php?id=<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></a></td>
            </tr>
        <?php endwhile; ?>
    </table>
<?php include 'includes/footer.php'?>        
        
