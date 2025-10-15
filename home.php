<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jeweluxe - Home</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
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
          <li class="nav-item"><a class="nav-link" href="contactus.php">Contact Us</a></li>
          <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#cartModal">🛒 Cart</a></li>
          <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#accountModal">👤 Account</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HERO -->
  <header class="text-center text-white py-5 bg-dark" style="background:url(Video/wallpaper.jpg) center/cover no-repeat;">
    <div class="container">
      <h1 class="display-4">Welcome to Jeweluxe</h1>
      <p class="lead">Your journey to exquisite jewelry starts here!</p>
      <div class="mt-4">
        <a href="products.php" class="btn btn-primary btn-lg me-3">Explore Collection</a>
        <a href="about.php" class="btn btn-outline-light btn-lg">Learn More</a>
      </div>
    </div>
  </header>

  <!-- FEATURED PRODUCTS SECTION -->
  <section class="py-5 bg-light">
    <div class="container">
      <h2 class="text-center mb-5">Featured Products</h2>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm">
            <div class="card-body p-0">
              <video class="card-img-top" style="height: 500px; object-fit: cover;" autoplay muted loop playsinline>
                <source src="Video/necklace.mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>
              <div class="p-3 text-center">
                <h5 class="card-title">Elegant Necklaces</h5>
                <p class="card-text">Discover our stunning collection of necklaces crafted with precision and elegance.</p>
                <a href="products.php" class="btn btn-primary">View Collection</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm">
            <div class="card-body p-0">
              <video class="card-img-top" style="height: 500px; object-fit: cover;" autoplay muted loop playsinline>
                <source src="Video/earring.mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>
              <div class="p-3 text-center">
                <h5 class="card-title">Beautiful Earrings</h5>
                <p class="card-text">Adorn yourself with our exquisite earrings designed to complement your style.</p>
                <a href="products.php" class="btn btn-primary">View Collection</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm">
            <div class="card-body p-0">
              <video class="card-img-top" style="height: 500px; object-fit: cover;" autoplay muted loop playsinline>
                <source src="Video/bracelet.mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>
              <div class="p-3 text-center">
                <h5 class="card-title">Stylish Bracelets</h5>
                <p class="card-text">Complete your look with our sophisticated bracelets for every occasion.</p>
                <a href="products.php" class="btn btn-primary">View Collection</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- QUICK LINKS SECTION -->
  <section class="py-5">
    <div class="container">
      <h2 class="text-center mb-5">Quick Access</h2>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card h-100 text-center">
            <div class="card-body">
              <i class="fas fa-gem fa-3x text-primary mb-3"></i>
              <h5 class="card-title">Shop Jewelry</h5>
              <p class="card-text">Discover our stunning collection of rings, necklaces, earrings, and more.</p>
              <a href="products.php" class="btn btn-primary">Browse Products</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100 text-center">
            <div class="card-body">
              <i class="fas fa-info-circle fa-3x text-primary mb-3"></i>
              <h5 class="card-title">About Us</h5>
              <p class="card-text">Learn about our story, craftsmanship, and commitment to quality.</p>
              <a href="about.php" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100 text-center">
            <div class="card-body">
              <i class="fas fa-envelope fa-3x text-primary mb-3"></i>
              <h5 class="card-title">Contact Us</h5>
              <p class="card-text">Get in touch with our team for any questions or assistance.</p>
              <a href="contactus.php" class="btn btn-primary">Contact Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

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

  <!-- Shopping Cart Modal -->
  <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="cartModalLabel">🛒 Shopping Cart</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Empty Cart Content -->
          <div id="emptyCart" class="text-center py-5">
            <div class="mb-4">
              <i class="fas fa-shopping-cart fa-4x text-muted"></i>
            </div>
            <h4 class="text-muted mb-3">Your cart is empty</h4>
            <p class="text-muted mb-4">Looks like you haven't added any items to your cart yet.</p>
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
              Continue Shopping
            </button>
          </div>
          
          <!-- Cart Items Content (hidden by default) -->
          <div id="cartItems" style="display: none;">
            <div class="cart-item-list">
              <!-- Cart items will be populated here via JavaScript -->
            </div>
            <div class="cart-summary mt-4 pt-4 border-top">
              <div class="d-flex justify-content-between">
                <strong>Total: <span id="cartTotal">₱0.00</span></strong>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer" id="cartFooter" style="display: none;">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success">Proceed to Checkout</button>
        </div>
      </div>
    </div>
  </div>

  <!-- FOOTER -->
  </div>
  <footer class="bg-light text-dark text-center py-3">
    <p class="mb-0">© 2025 Jeweluxe | Exquisite Jewelry for You</p>
  </footer>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

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

      // Login form submission
      $('#loginForm').submit(function(e) {
        e.preventDefault();
        const email = $('#loginEmail').val();
        const password = $('#loginPassword').val();
        
        if (email && password) {
          // Simulate login process
          alert('Login successful! Welcome to Jeweluxe!');
          $('#accountModal').modal('hide');
          // You can add actual login logic here
        } else {
          alert('Please fill in all fields.');
        }
      });

      // Registration form submission
      $('#registerForm').submit(function(e) {
        e.preventDefault();
        const firstName = $('#firstName').val();
        const lastName = $('#lastName').val();
        const email = $('#registerEmail').val();
        const username = $('#username').val();
        const password = $('#registerPassword').val();
        const confirmPassword = $('#confirmPassword').val();
        const agreeTerms = $('#agreeTerms').is(':checked');
        
        if (!firstName || !lastName || !email || !username || !password || !confirmPassword) {
          alert('Please fill in all fields.');
          return;
        }
        
        if (password !== confirmPassword) {
          alert('Passwords do not match.');
          return;
        }
        
        if (password.length < 8) {
          alert('Password must be at least 8 characters long.');
          return;
        }
        
        if (!agreeTerms) {
          alert('Please agree to the Terms and Conditions.');
          return;
        }
        
        // Simulate registration process
        alert('Account created successfully! Welcome to Jeweluxe!');
        $('#registerModal').modal('hide');
        // You can add actual registration logic here
      });

      // Cart modal functionality
      $('#cartModal').on('show.bs.modal', function() {
        displayCartModal();
      });

      function displayCartModal() {
        let cart = JSON.parse(localStorage.getItem('jeweluxe_cart')) || [];
        
        if (cart.length === 0) {
          $('#emptyCart').show();
          $('#cartItems').hide();
          $('#cartFooter').hide();
        } else {
          $('#emptyCart').hide();
          $('#cartItems').show();
          $('#cartFooter').show();
          updateCartModalDisplay();
        }
      }

      function updateCartModalDisplay() {
        let cart = JSON.parse(localStorage.getItem('jeweluxe_cart')) || [];
        let cartHtml = '';
        let subtotal = 0;
        
        cart.forEach(function(item, index) {
          subtotal += item.price * (item.quantity || 1);
          cartHtml += `
            <div class="card mb-3">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-md-2">
                    <img src="${item.image}" alt="${item.name}" class="img-fluid rounded" style="height: 60px; object-fit: cover;">
                  </div>
                  <div class="col-md-4">
                    <h6 class="mb-1">${item.name}</h6>
                    <small class="text-muted">SKU: ${item.sku || 'N/A'}</small>
                  </div>
                  <div class="col-md-2">
                    <span class="fw-bold">₱${item.price.toFixed(2)}</span>
                  </div>
                  <div class="col-md-2">
                    <div class="input-group">
                      <button class="btn btn-outline-secondary btn-sm" type="button" onclick="updateQuantity(${index}, -1)">-</button>
                      <input type="number" class="form-control form-control-sm text-center" value="${item.quantity || 1}" min="1" max="10" onchange="updateQuantity(${index}, 0, this.value)">
                      <button class="btn btn-outline-secondary btn-sm" type="button" onclick="updateQuantity(${index}, 1)">+</button>
                    </div>
                  </div>
                  <div class="col-md-2 text-end">
                    <span class="fw-bold">₱${((item.quantity || 1) * item.price).toFixed(2)}</span>
                    <br>
                    <button class="btn btn-outline-danger btn-sm mt-1" onclick="removeFromCart(${index})">
                      <i class="fas fa-trash"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          `;
        });
        
        $('.cart-item-list').html(cartHtml);
        $('#cartTotal').text('₱' + subtotal.toFixed(2));
      }

      // Global functions for cart management
      window.updateQuantity = function(index, change, newValue) {
        let cart = JSON.parse(localStorage.getItem('jeweluxe_cart')) || [];
        if (newValue !== undefined) {
          cart[index].quantity = parseInt(newValue);
        } else {
          cart[index].quantity = (cart[index].quantity || 1) + change;
        }
        if (cart[index].quantity < 1) {
          cart[index].quantity = 1;
        }
        localStorage.setItem('jeweluxe_cart', JSON.stringify(cart));
        updateCartModalDisplay();
      };

      window.removeFromCart = function(index) {
        let cart = JSON.parse(localStorage.getItem('jeweluxe_cart')) || [];
        cart.splice(index, 1);
        localStorage.setItem('jeweluxe_cart', JSON.stringify(cart));
        displayCartModal();
      };
    });
  </script>

</body>
</html>
