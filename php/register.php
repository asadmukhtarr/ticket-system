<?php include('includes/header.php'); ?>

<!-- Centered Register Form -->
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
  <div class="card p-4 shadow" style="width: 100%; max-width: 450px;">
    <h3 class="text-center mb-4"> <i class="fa fa-user-plus"></i> Register</h3>
    <form action="actions/register.php" method="POST">
      <!-- Full Name -->
      <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fa fa-user"></i></span>
          <input type="text" name="name" class="form-control" id="name" placeholder="Enter full name" required>
        </div>
      </div>

      <!-- Email -->
      <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fa fa-envelope"></i></span>
          <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required>
        </div>
      </div>

      <!-- Password -->
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fa fa-lock"></i></span>
          <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required>
        </div>
      </div>

      <!-- Confirm Password -->
      <div class="mb-3">
        <label for="confirm_password" class="form-label">Confirm Password</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fa fa-lock"></i></span>
          <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Confirm password" required>
        </div>
      </div>
      <label>You have not account? <a href="index.php">Login Here</a></label>
      <button type="submit" class="btn btn-success w-100 mt-2">Register</button>
    </form>
  </div>
</div>

<?php include('includes/footer.php'); ?>
