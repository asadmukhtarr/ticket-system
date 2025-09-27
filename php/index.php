<?php include('includes/header.php'); ?>

<!-- Centered Login Form -->
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
  <div class="card p-4 shadow" style="width: 100%; max-width: 400px;">
    <h3 class="text-center mb-4"> <i class="fa fa-users"></i> Login</h3>
    <form action="login_process.php" method="POST">
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fa fa-user"></i></span>
          <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required>
        </div>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fa fa-lock"></i></span>
          <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required>
        </div>
      </div>
      <label>You have not account? <a href="register.php">Register Here</a></label>
      <button type="submit" class="btn btn-primary w-100 mt-1">Login</button>
    </form>
  </div>
</div>

<?php include('includes/footer.php'); ?>
