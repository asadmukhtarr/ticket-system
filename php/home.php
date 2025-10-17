<?php 
  include('includes/header.php');  // already included ..
  if(empty($_SESSION['name'])){
      header('Location:index.php');
  }
?>
  <!-- Welcome Message -->
  <div class="container welcome-box d-flex justify-content-center align-items-center flex-column text-center mt-2">
    <i class="fa fa-smile-o fa-5x text-success mb-4"></i>
    <h1 class="mb-3">Welcome <?php echo $_SESSION['name']; ?></h1>
    <p class="lead">You have successfully logged in. Enjoy your stay!</p>
    <a href="actions/logout.php" class="btn btn-outline-primary mt-4"><i class="fa fa-sign-out"></i> Logout</a>
  </div>
<?php include('includes/footer.php'); ?>
