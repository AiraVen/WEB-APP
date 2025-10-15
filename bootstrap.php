<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jeweluxe - Bootstrap</title>

  <!-- Bootstrap CSS (comment out to see plain HTML) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery CDN -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <!-- Validation Script -->
  <script src="js/validation.js"></script>
  <!-- Custom CSS -->
  <link href="styles.css" rel="stylesheet">
</head>
<body>
  <div class="main-content">

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
  <a class="navbar-brand text-start" href="home.php">← Jeweluxe</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item"><span class="nav-link active" style="cursor:default;">Home</span></li>
          <li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>
          <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
          <li class="nav-item"><a class="nav-link" href="contactus.php">Contact</a></li>
          <li class="nav-item"><a class="nav-link" href="cart.php">🛒 Cart</a></li>
          <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#accountModal">👤 Account</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HERO -->
  <header class="text-center text-white py-5 bg-dark" style="background:url(Video/wallpaper.jpg) center/cover no-repeat;">
    <div class="container">
      <h1 class="display-4">Shine Bright with Jeweluxe</h1>
      <p class="lead">Discover timeless jewelry for every occasion!</p>
      <div class="mt-4">
        <a href="products.php" class="btn btn-primary btn-lg me-3">Shop Collection</a>
        <a href="about.php" class="btn btn-outline-light btn-lg">Learn More</a>
      </div>
    </div>
  </header>

  <!-- FEATURED SECTION -->
  <section class="py-5">
    <div class="container">
      <h2 class="text-center mb-5">Why Choose Jeweluxe?</h2>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="text-center">
            <i class="fas fa-gem fa-3x text-primary mb-3"></i>
            <h4>Premium Quality</h4>
            <p>Each piece is crafted with the finest materials and attention to detail.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="text-center">
            <i class="fas fa-shipping-fast fa-3x text-primary mb-3"></i>
            <h4>Fast Shipping</h4>
            <p>Quick and secure delivery to your doorstep worldwide.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="text-center">
            <i class="fas fa-heart fa-3x text-primary mb-3"></i>
            <h4>Customer Love</h4>
            <p>Join thousands of satisfied customers who trust Jeweluxe.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PRODUCTS -->
  <section class="py-100">
    <div class="container">
      <h2 class="text-center mb-10" style="
        font-size: 1.8rem;
        font-weight: bold;
        color: #8B4513;
        letter-spacing: 2px;
        align-items: center;
      ">
        Featured Products
      </h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card h-100">
            <video src="Video/bracelet.mp4" class="card-img-top" autoplay muted loop poster="" style="width:100%;height:auto;">
            </video>
            <div class="card-body">
              <h5 class="card-title">Bracelet</h5>
              <p class="card-text">₱2,345.00</p>
              <a href="#" class="btn btn-primary w-100">Add to Cart</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100">
            <video src="Video/earring.mp4" class="card-img-top" autoplay muted loop poster="" style="width:100%;height:auto;">
            </video>
            <div class="card-body">
              <h5 class="card-title">Earrings</h5>
              <p class="card-text">₱1,600.00</p>
              <a href="#" class="btn btn-primary w-100">Add to Cart</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100">
            <video src="Video/necklace.mp4" class="card-img-top" autoplay muted loop poster="" style="width:100%;height:auto;">
            </video>
            <div class="card-body">
              <h5 class="card-title">Necklace</h5>
              <p class="card-text">₱2,499.00</p>
              <a href="#" class="btn btn-primary w-100">Add to Cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  </div>
  <footer class="bg-light text-dark text-center py-3">
    <p class="mb-0">© 2025 Jeweluxe | Exquisite Jewelry for You</p>
  </footer>

  <!-- Account Modal (Login) -->
  <div class="modal fade" id="accountModal" tabindex="-1" aria-labelledby="accountModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="accountModalLabel">👤 Account Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="loginForm">
            <div class="mb-3">
              <label for="loginEmail" class="form-label">Email Address</label>
              <input type="email" class="form-control" id="loginEmail" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
              <label for="loginPassword" class="form-label">Password</label>
              <div class="input-group">
                <input type="password" class="form-control" id="loginPassword" placeholder="Enter your password" data-required="true">
                <button class="btn btn-outline-secondary" type="button" id="toggleLoginPassword">
                  <i class="fas fa-eye" id="loginPasswordIcon"></i>
                </button>
              </div>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="rememberMe">
              <label class="form-check-label" for="rememberMe">
                Remember me
              </label>
            </div>
            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-primary">Sign In</button>
            </div>
          </form>
          <hr class="my-4">
          <div class="text-center">
            <p class="mb-3">Don't have an account yet?</p>
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#registerModal" data-bs-dismiss="modal">
              Create New Account
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Registration Modal -->
  <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="registerModalLabel">📝 Create New Account</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="registerForm">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstName" placeholder="Enter your first name" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastName" placeholder="Enter your last name" required>
              </div>
            </div>
            <div class="mb-3">
              <label for="registerEmail" class="form-label">Email Address</label>
              <input type="email" class="form-control" id="registerEmail" placeholder="Enter your email address" required>
            </div>
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" placeholder="Choose a username" required>
            </div>
            <div class="mb-3">
              <label for="registerPassword" class="form-label">Password</label>
              <div class="input-group">
                <input type="password" class="form-control" id="registerPassword" placeholder="Create a password" data-required="true">
                <button class="btn btn-outline-secondary" type="button" id="toggleRegisterPassword">
                  <i class="fas fa-eye" id="registerPasswordIcon"></i>
                </button>
              </div>
              <div class="form-text">Password must be at least 8 characters long.</div>
            </div>
            <div class="mb-3">
              <label for="confirmPassword" class="form-label">Confirm Password</label>
              <div class="input-group">
                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your password" data-required="true">
                <button class="btn btn-outline-secondary" type="button" id="toggleConfirmPassword">
                  <i class="fas fa-eye" id="confirmPasswordIcon"></i>
                </button>
              </div>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="agreeTerms" required>
              <label class="form-check-label" for="agreeTerms">
                I agree to the <a href="#" class="text-primary">Terms and Conditions</a>
              </label>
            </div>
            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-success">Create Account</button>
            </div>
          </form>
          <hr class="my-4">
          <div class="text-center">
            <p class="mb-3">Already have an account?</p>
            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#accountModal" data-bs-dismiss="modal">
              Sign In Instead
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
  <!-- jQuery Account Functionality -->
  <script>
    $(document).ready(function() {
      // Password toggle functionality
      $('#toggleLoginPassword').click(function() {
        const passwordField = $('#loginPassword');
        const icon = $('#loginPasswordIcon');
        
        if (passwordField.attr('type') === 'password') {
          passwordField.attr('type', 'text');
          icon.removeClass('fa-eye').addClass('fa-eye-slash');
        } else {
          passwordField.attr('type', 'password');
          icon.removeClass('fa-eye-slash').addClass('fa-eye');
        }
      });
      
      $('#toggleRegisterPassword').click(function() {
        const passwordField = $('#registerPassword');
        const icon = $('#registerPasswordIcon');
        
        if (passwordField.attr('type') === 'password') {
          passwordField.attr('type', 'text');
          icon.removeClass('fa-eye').addClass('fa-eye-slash');
        } else {
          passwordField.attr('type', 'password');
          icon.removeClass('fa-eye-slash').addClass('fa-eye');
        }
      });
      
      $('#toggleConfirmPassword').click(function() {
        const passwordField = $('#confirmPassword');
        const icon = $('#confirmPasswordIcon');
        
        if (passwordField.attr('type') === 'password') {
          passwordField.attr('type', 'text');
          icon.removeClass('fa-eye').addClass('fa-eye-slash');
        } else {
          passwordField.attr('type', 'password');
          icon.removeClass('fa-eye-slash').addClass('fa-eye');
        }
      });
      
      // Auto-trim spaces on input
      $('input[type="text"], input[type="email"]').on('blur', function() {
        $(this).val($(this).val().trim());
      });
      
      // Disable browser validation messages
      $('input[required]').on('invalid', function(e) {
        e.preventDefault();
      });
      
      // Handle login form submission
      $('#loginForm').on('submit', function(e) {
        e.preventDefault();
        
        let isValid = true;
        const email = $('#loginEmail').val().trim();
        const password = $('#loginPassword').val();
        
        if (!email) {
          $('#loginEmail').addClass('is-invalid');
          if (!$('#loginEmail').siblings('.invalid-feedback').length) {
            $('#loginEmail').after('<div class="invalid-feedback">This field is required</div>');
          }
          isValid = false;
        } else {
          const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          if (!emailRegex.test(email)) {
            $('#loginEmail').addClass('is-invalid');
            if (!$('#loginEmail').siblings('.invalid-feedback').length) {
              $('#loginEmail').after('<div class="invalid-feedback">Please enter a valid email address</div>');
            }
            isValid = false;
          }
        }
        
        if (!password) {
          $('#loginPassword').addClass('is-invalid');
          if (!$('#loginPassword').siblings('.invalid-feedback').length) {
            $('#loginPassword').after('<div class="invalid-feedback">This field is required</div>');
          }
          isValid = false;
        }
        
        if (isValid) {
          $('#loginForm button[type="submit"]').text('Signing in...').prop('disabled', true);
          
          setTimeout(() => {
            alert('Login successful! Welcome back.');
            $('#accountModal').modal('hide');
            $('#loginForm')[0].reset();
            $('#loginForm button[type="submit"]').text('Sign In').prop('disabled', false);
            $('.is-invalid').removeClass('is-invalid');
            $('.invalid-feedback').remove();
          }, 1500);
        }
      });
      
      // Handle registration form submission
      $('#registerForm').on('submit', function(e) {
        e.preventDefault();
        $(this).data('submitted', true);
        
        let isValid = true;
        const firstName = $('#firstName').val().trim();
        const lastName = $('#lastName').val().trim();
        const email = $('#registerEmail').val().trim();
        const username = $('#username').val().trim();
        const password = $('#registerPassword').val();
        const confirmPassword = $('#confirmPassword').val();
        
        $('.is-invalid').removeClass('is-invalid');
        $('.invalid-feedback').remove();
        
        if (!firstName) {
          $('#firstName').addClass('is-invalid');
          $('#firstName').after('<div class="invalid-feedback">This field is required</div>');
          isValid = false;
        }
        
        if (!lastName) {
          $('#lastName').addClass('is-invalid');
          $('#lastName').after('<div class="invalid-feedback">This field is required</div>');
          isValid = false;
        }
        
        if (!email) {
          $('#registerEmail').addClass('is-invalid');
          $('#registerEmail').after('<div class="invalid-feedback">This field is required</div>');
          isValid = false;
        } else {
          const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          if (!emailRegex.test(email)) {
            $('#registerEmail').addClass('is-invalid');
            $('#registerEmail').after('<div class="invalid-feedback">Please enter a valid email address</div>');
            isValid = false;
          }
        }
        
        if (!username) {
          $('#username').addClass('is-invalid');
          $('#username').after('<div class="invalid-feedback">This field is required</div>');
          isValid = false;
        } else {
          const allowedSpecialChars = /^[a-zA-Z0-9@._]+$/;
          if (!allowedSpecialChars.test(username)) {
            $('#username').addClass('is-invalid');
            $('#username').after('<div class="invalid-feedback">Only letters, numbers, \'@\', \'_\', and \'.\' are allowed in Username</div>');
            isValid = false;
          }
        }
        
        if (!password) {
          $('#registerPassword').addClass('is-invalid');
          $('#registerPassword').after('<div class="invalid-feedback">This field is required</div>');
          isValid = false;
        } else if (password.length < 8) {
          $('#registerPassword').addClass('is-invalid');
          $('#registerPassword').after('<div class="invalid-feedback">Password must be at least 8 characters long</div>');
          isValid = false;
        }
        
        if (!confirmPassword) {
          $('#confirmPassword').addClass('is-invalid');
          $('#confirmPassword').after('<div class="invalid-feedback">This field is required</div>');
          isValid = false;
        } else if (password !== confirmPassword) {
          $('#confirmPassword').addClass('is-invalid');
          $('#confirmPassword').after('<div class="invalid-feedback">Passwords do not match</div>');
          isValid = false;
        }
        
        if (!$('#agreeTerms').is(':checked')) {
          $('#agreeTerms').addClass('is-invalid');
          if (!$('#agreeTerms').siblings('.invalid-feedback').length) {
            $('#agreeTerms').after('<div class="invalid-feedback">You must agree to the terms and conditions</div>');
          }
          isValid = false;
        } else {
          $('#agreeTerms').removeClass('is-invalid');
          $('#agreeTerms').siblings('.invalid-feedback').remove();
        }
        
        if (isValid) {
          $('#registerForm button[type="submit"]').text('Creating Account...').prop('disabled', true);
          
          setTimeout(() => {
            alert('Account created successfully! You can now sign in.');
            $('#registerModal').modal('hide');
            $('#registerForm')[0].reset();
            $('#registerForm button[type="submit"]').text('Create Account').prop('disabled', false);
            $('.is-invalid').removeClass('is-invalid');
            $('.invalid-feedback').remove();
            $('#registerForm').removeData('submitted');
          }, 2000);
        }
      });
      
      // Clear validation on modal close
      $('.modal').on('hidden.bs.modal', function() {
        $(this).find('.is-invalid').removeClass('is-invalid');
        $(this).find('.invalid-feedback').remove();
        $(this).find('input').val('');
        $('#registerForm').removeData('submitted');
      });
    });
  </script>

</body>
</html>