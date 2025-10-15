<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jeweluxe - Products</title>

  <!-- Bootstrap CSS -->
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
          <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
          <li class="nav-item"><span class="nav-link active" style="cursor:default;">Products</span></li>
          <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
          <li class="nav-item"><a class="nav-link" href="contactus.php">Contact</a></li>
          <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#cartModal">🛒 Cart</a></li>
          <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#accountModal">👤 Account</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HERO -->
  <header class="text-center text-white py-5 bg-dark" style="background:url(Video/wallpaper.jpg) center/cover no-repeat;">
    <div class="container">
      <h1 class="display-4">Our Jewelry Collection</h1>
      <p class="lead">Discover timeless jewelry for every occasion!</p>
    </div>
  </header>

  <section class="container py-5">
    <!-- Tabs navigation -->
    <ul class="nav nav-tabs justify-content-center mb-4" id="productTabs" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">All</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="bracelets-tab" data-bs-toggle="tab" data-bs-target="#bracelets" type="button" role="tab" aria-controls="bracelets" aria-selected="false">Bracelets</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="earrings-tab" data-bs-toggle="tab" data-bs-target="#earrings" type="button" role="tab" aria-controls="earrings" aria-selected="false">Earrings</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="necklaces-tab" data-bs-toggle="tab" data-bs-target="#necklaces" type="button" role="tab" aria-controls="necklaces" aria-selected="false">Necklaces</button>
      </li>
    </ul>
    <!-- Tabs content -->
    <div class="tab-content" id="productTabsContent">
      
      <!-- All products -->
      <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
          <!-- Bracelets -->
          <div class="col"><div class="card h-100 text-center product-card-large"><img src="Video/Bracelet/lotusbrace.jpg" class="card-img-top" alt="Lotus Bracelet"><div class="card-body"><h5 class="card-title">Lotus Bracelet</h5><p class="card-text text-muted mb-2">₱2,345.00</p><a href="#" class="btn btn-primary w-100">Add to Cart</a></div></div></div>
          <div class="col"><div class="card h-100 text-center product-card-large"><img src="Video/Bracelet/pearlbrace.jpg" class="card-img-top" alt="Pearl Bracelet"><div class="card-body"><h5 class="card-title">Pearl Bracelet</h5><p class="card-text text-muted mb-2">₱1,600.00</p><a href="#" class="btn btn-primary w-100">Add to Cart</a></div></div></div>
          <div class="col"><div class="card h-100 text-center product-card-large"><img src="Video/Bracelet/tiednotbrace.jpg" class="card-img-top" alt="Tied Knot Bracelet"><div class="card-body"><h5 class="card-title">Tied Knot Bracelet</h5><p class="card-text text-muted mb-2">₱1,800.00</p><a href="#" class="btn btn-primary w-100">Add to Cart</a></div></div></div>
          <!-- Earrings -->
          <div class="col"><div class="card h-100 text-center product-card-large"><img src="Video/Bracelet/earlotus.jpg" class="card-img-top" alt="Lotus Earrings"><div class="card-body"><h5 class="card-title">Lotus Earrings</h5><p class="card-text text-muted mb-2">₱2,345.00</p><a href="#" class="btn btn-primary w-100">Add to Cart</a></div></div></div>
          <div class="col"><div class="card h-100 text-center product-card-large"><img src="Video/Bracelet/earpearl.jpg" class="card-img-top" alt="Pearl Earrings"><div class="card-body"><h5 class="card-title">Pearl Earrings</h5><p class="card-text text-muted mb-2">₱1,600.00</p><a href="#" class="btn btn-primary w-100">Add to Cart</a></div></div></div>
          <div class="col"><div class="card h-100 text-center product-card-large"><img src="Video/Bracelet/eartied.jpg" class="card-img-top" alt="Tied Earrings"><div class="card-body"><h5 class="card-title">Tied Earrings</h5><p class="card-text text-muted mb-2">₱1,600.00</p><a href="#" class="btn btn-primary w-100">Add to Cart</a></div></div></div>
          <!-- Necklaces -->
          <div class="col"><div class="card h-100 text-center product-card-large"><img src="Video/Bracelet/necklotus.jpg" class="card-img-top" alt="Lotus Necklace"><div class="card-body"><h5 class="card-title">Lotus Necklace</h5><p class="card-text text-muted mb-2">₱2,345.00</p><a href="#" class="btn btn-primary w-100">Add to Cart</a></div></div></div>
          <div class="col"><div class="card h-100 text-center product-card-large"><img src="Video/Bracelet/neckpearl.jpg" class="card-img-top" alt="Pearl Necklace"><div class="card-body"><h5 class="card-title">Pearl Necklace</h5><p class="card-text text-muted mb-2">₱1,600.00</p><a href="#" class="btn btn-primary w-100">Add to Cart</a></div></div></div>
          <div class="col"><div class="card h-100 text-center product-card-large"><img src="Video/Bracelet/necktied.jpg" class="card-img-top" alt="Necklace Tied Knot"><div class="card-body"><h5 class="card-title">Necklace Tied Knot</h5><p class="card-text text-muted mb-2">₱2,499.00</p><a href="#" class="btn btn-primary w-100">Add to Cart</a></div></div></div>
        </div>
      </div>
         
      <!-- Bracelets products -->
      <div class="tab-pane fade" id="bracelets" role="tabpanel" aria-labelledby="bracelets-tab">
        <div class="row g-4">
          <div class="col">
            <div class="card h-100 text-center product-card-large">
              <img src="Video/Bracelet/lotusbrace.jpg" class="card-img-top" alt="Lotus Bracelet">
              <div class="card-body">
                <h5 class="card-title">Lotus Bracelet</h5>
                <p class="card-text text-muted mb-2">₱2,345.00</p>
                <a href="#" class="btn btn-primary w-100">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 text-center product-card-large">
              <img src="Video/Bracelet/pearlbrace.jpg" class="card-img-top" alt="Pearl Bracelet">
              <div class="card-body">
                <h5 class="card-title">Pearl Bracelet</h5>
                <p class="card-text text-muted mb-2">₱1,600.00</p>
                <a href="#" class="btn btn-primary w-100">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 text-center product-card-large">
              <img src="Video/Bracelet/tiednotbrace.jpg" class="card-img-top" alt="Tied Knot Bracelet">
              <div class="card-body">
                <h5 class="card-title">Tied Knot Bracelet</h5>
                <p class="card-text text-muted mb-2">₱1,800.00</p>
                <a href="#" class="btn btn-primary w-100">Add to Cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
         
      <!-- Earrings products -->
      <div class="tab-pane fade" id="earrings" role="tabpanel" aria-labelledby="earrings-tab">
        <div class="row g-4">
          <div class="col">
            <div class="card h-100 text-center product-card-large">
              <img src="Video/Bracelet/earlotus.jpg" class="card-img-top" alt="Lotus Earrings">
              <div class="card-body">
                <h5 class="card-title">Lotus Earrings</h5>
                <p class="card-text text-muted mb-2">₱2,345.00</p>
                <a href="#" class="btn btn-primary w-100">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 text-center product-card-large">
              <img src="Video/Bracelet/earpearl.jpg" class="card-img-top" alt="Pearl Earrings">
              <div class="card-body">
                <h5 class="card-title">Pearl Earrings</h5>
                <p class="card-text text-muted mb-2">₱1,600.00</p>
                <a href="#" class="btn btn-primary w-100">Add to Cart</a>
              </div>
            </div>
          </div>
        <div class="col">
            <div class="card h-100 text-center product-card-large">
              <img src="Video/Bracelet/eartied.jpg" class="card-img-top" alt="Tied Earrings">
              <div class="card-body">
                <h5 class="card-title">Tied Earrings</h5>
                <p class="card-text text-muted mb-2">₱1,600.00</p>
                <a href="#" class="btn btn-primary w-100">Add to Cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Necklaces products -->
    <div class="tab-pane fade" id="necklaces" role="tabpanel" aria-labelledby="necklaces-tab">
        <div class="row g-4">
          <div class="col">
            <div class="card h-100 text-center product-card-large">
              <img src="Video/Bracelet/necklotus.jpg" class="card-img-top" alt="Necklace Lotus">
              <div class="card-body">
                <h5 class="card-title">Lotus Necklace</h5>
                <p class="card-text text-muted mb-2">₱2,345.00</p>
                <a href="#" class="btn btn-primary w-100">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 text-center product-card-large">
              <img src="Video/Bracelet/neckpearl.jpg" class="card-img-top" alt="Pearl Necklace">  
              <div class="card-body">
                <h5 class="card-title">Pearl Necklace</h5>
                <p class="card-text text-muted mb-2">₱1,600.00</p>
                <a href="#" class="btn btn-primary w-100">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 text-center product-card-large">
              <img src="Video/Bracelet/necktied.jpg" class="card-img-top" alt="Necklace Tied Knot">
              <div class="card-body">
                <h5 class="card-title">Necklace Tied Knot</h5>
                <p class="card-text text-muted mb-2">₱2,499.00</p>
                <a href="#" class="btn btn-primary w-100">Add to Cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  </div>
  </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
  <!-- jQuery Cart Functionality -->
  <script>
    $(document).ready(function() {
      // Initialize cart as empty
      let cart = [];
      
      // Handle cart modal display
      $('#cartModal').on('show.bs.modal', function() {
        if (cart.length === 0) {
          $('#emptyCart').show();
          $('#cartItems').hide();
          $('#cartFooter').hide();
        } else {
          $('#emptyCart').hide();
          $('#cartItems').show();
          $('#cartFooter').show();
          updateCartDisplay();
        }
      });
      
      // Function to update cart display (for future use when items are added)
      function updateCartDisplay() {
        let total = 0;
        let cartHtml = '';
        
        cart.forEach(function(item, index) {
          total += item.price;
          cartHtml += `
            <div class="d-flex justify-content-between align-items-center mb-3 p-3 border rounded">
              <div class="d-flex align-items-center">
                <img src="${item.image}" alt="${item.name}" class="me-3" style="width: 60px; height: 60px; object-fit: cover;">
                <div>
                  <h6 class="mb-1">${item.name}</h6>
                  <small class="text-muted">₱${item.price.toFixed(2)}</small>
                </div>
              </div>
              <div class="d-flex align-items-center">
                <button class="btn btn-sm btn-outline-secondary me-2" onclick="removeFromCart(${index})">Remove</button>
              </div>
            </div>
          `;
        });
        
        $('.cart-item-list').html(cartHtml);
        $('#cartTotal').text('₱' + total.toFixed(2));
      }
      
      // Make functions globally available
      window.addToCart = function(name, price, image) {
        // Get existing cart from localStorage
        let cart = JSON.parse(localStorage.getItem('jeweluxe_cart')) || [];
        
        // Check if item already exists
        let existingItem = cart.find(item => item.name === name);
        if (existingItem) {
          existingItem.quantity = (existingItem.quantity || 1) + 1;
        } else {
          cart.push({
            name: name, 
            price: price, 
            image: image,
            quantity: 1,
            sku: name.replace(/\s+/g, '').toUpperCase()
          });
        }
        
        // Save to localStorage
        localStorage.setItem('jeweluxe_cart', JSON.stringify(cart));
        
        // Update cart count in navbar if needed
        console.log('Added to cart:', name);
        
        // Show success message
        showCartNotification(name + ' added to cart!');
      };
      
      // Show cart notification
      function showCartNotification(message) {
        // Create notification element
        const notification = $('<div class="alert alert-success alert-dismissible fade show position-fixed" style="top: 20px; right: 20px; z-index: 9999;">' +
          '<i class="fas fa-check-circle me-2"></i>' + message +
          '<button type="button" class="btn-close" data-bs-dismiss="alert"></button>' +
          '</div>');
        
        $('body').append(notification);
        
        // Auto remove after 3 seconds
        setTimeout(() => {
          notification.alert('close');
        }, 3000);
      };
      
      window.removeFromCart = function(index) {
        cart.splice(index, 1);
        updateCartDisplay();
        if (cart.length === 0) {
          $('#emptyCart').show();
          $('#cartItems').hide();
          $('#cartFooter').hide();
        }
      };
      
      // Add click handlers to all "Add to Cart" buttons (only those inside product cards)
      $('.card .btn-primary').click(function(e) {
        e.preventDefault();
        const card = $(this).closest('.card');
        const name = card.find('.card-title').text();
        const priceText = card.find('.card-text').text().replace('₱', '').replace(',', '');
        const price = parseFloat(priceText);
        const image = card.find('img').attr('src');
        
        addToCart(name, price, image);
        
        // Show success message
        $(this).text('Added!').removeClass('btn-primary').addClass('btn-success');
        setTimeout(() => {
          $(this).text('Add to Cart').removeClass('btn-success').addClass('btn-primary');
        }, 1500);
      });

      // Modal functionality
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
  <footer class="bg-light text-dark text-center py-3">
    <p class="mb-0">© 2025 Jeweluxe | Exquisite Jewelry for You</p>
  </footer>

</body>
</html>