<?php include '../config/config.php';?>
<?php include '../librerias/database.php'; ?>
<?php include '../helpers/format_helper.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>BLOG | Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/custom.css" rel="stylesheet">

  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="index.php">Dashboard</a>
          <a class="blog-nav-item" href="agregar_post.php">Add Posts</a>
          <a class="blog-nav-item" href="agregar_categoria.php">Add Categorie</a>
          <a class="blog-nav-item pull-right" href="http://localhost/Blog/index.php">Go to Blog</a>
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
      	<div class="logo"><img src="../images/logo.png" /></div>
        <h1 class="blog-title">PHP Blog Admin Area</h1>
        <p class="lead blog-description">Be part of the comunity, share your inner side.</p>
        <h2></h2>
      </div>

      <div class="row">

        <div class="col-sm-12 blog-main">
        <?php if(isset($_GET['msg'])):?>
        	<div class="alert alert-success"><?php echo htmlentities($_GET['msg']); ?></div>
		<?php elseif(isset($_GET['msgdel'])):?>
			<div class="alert alert-danger"><?php echo htmlentities($_GET['msgdel']); ?></div>
		<?php endif;?>