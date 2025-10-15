<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jeweluxe - Cart</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery CDN -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
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
          <li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>
          <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
          <li class="nav-item"><a class="nav-link" href="contactus.php">Contact Us</a></li>
          <li class="nav-item"><span class="nav-link active" style="cursor:default;">🛒 Cart</span></li>
          <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#accountModal">👤 Account</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HERO -->
  <header class="text-center text-white py-5 bg-dark" style="background:url(Video/wallpaper.jpg) center/cover no-repeat;">
    <div class="container">
      <h1 class="display-4">Your Shopping Cart</h1>
      <p class="lead">Review your selected jewelry items before checkout!</p>
    </div>
  </header>

  <!-- CART CONTENT -->
  <section class="py-5">
    <div class="container">
      <!-- Empty Cart Content -->
      <div id="emptyCart" class="text-center py-5">
        <div class="mb-4">
          <i class="fas fa-shopping-cart fa-4x text-muted"></i>
        </div>
        <h4 class="text-muted mb-3">Your cart is empty</h4>
        <p class="text-muted mb-4">Looks like you haven't added any items to your cart yet.</p>
        <a href="products.php" class="btn btn-primary btn-lg">
          <i class="fas fa-shopping-bag me-2"></i>Start Shopping
        </a>
      </div>
      
      <!-- Cart Items Content (hidden by default) -->
      <div id="cartItems" style="display: none;">
        <div class="row">
          <div class="col-lg-8">
            <div class="cart-item-list">
              <!-- Cart items will be populated here via JavaScript -->
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">Order Summary</h5>
              </div>
              <div class="card-body">
                <div class="d-flex justify-content-between mb-2">
                  <span>Subtotal:</span>
                  <span id="cartSubtotal">₱0.00</span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                  <span>Shipping:</span>
                  <span id="cartShipping">₱150.00</span>
                </div>
                <hr>
                <div class="d-flex justify-content-between mb-3">
                  <strong>Total:</strong>
                  <strong id="cartTotal">₱150.00</strong>
                </div>
                <button type="button" class="btn btn-success w-100 mb-2">
                  <i class="fas fa-credit-card me-2"></i>Proceed to Checkout
                </button>
                <a href="products.php" class="btn btn-outline-primary w-100">
                  <i class="fas fa-arrow-left me-2"></i>Continue Shopping
                </a>
              </div>
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

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
  <!-- Cart Functionality -->
  <script>
    $(document).ready(function() {
      // Initialize cart from localStorage
      let cart = JSON.parse(localStorage.getItem('jeweluxe_cart')) || [];
      
      // Display cart items
      function displayCart() {
        if (cart.length === 0) {
          $('#emptyCart').show();
          $('#cartItems').hide();
        } else {
          $('#emptyCart').hide();
          $('#cartItems').show();
          updateCartDisplay();
        }
      }
      
      // Update cart display
      function updateCartDisplay() {
        let cartHtml = '';
        let subtotal = 0;
        
        cart.forEach(function(item, index) {
          subtotal += item.price;
          cartHtml += `
            <div class="card mb-3">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-md-2">
                    <img src="${item.image}" alt="${item.name}" class="img-fluid rounded" style="height: 80px; object-fit: cover;">
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
        
        // Update totals
        $('#cartSubtotal').text('₱' + subtotal.toFixed(2));
        const shipping = subtotal > 0 ? 150.00 : 0;
        $('#cartShipping').text('₱' + shipping.toFixed(2));
        $('#cartTotal').text('₱' + (subtotal + shipping).toFixed(2));
      }
      
      // Update quantity
      window.updateQuantity = function(index, change, newValue) {
        if (newValue !== undefined) {
          cart[index].quantity = parseInt(newValue);
        } else {
          cart[index].quantity = (cart[index].quantity || 1) + change;
        }
        
        if (cart[index].quantity < 1) {
          cart[index].quantity = 1;
        }
        
        localStorage.setItem('jeweluxe_cart', JSON.stringify(cart));
        updateCartDisplay();
      };
      
      // Remove from cart
      window.removeFromCart = function(index) {
        cart.splice(index, 1);
        localStorage.setItem('jeweluxe_cart', JSON.stringify(cart));
        displayCart();
      };
      
      // Initialize display
      displayCart();
    });
  </script>

</body>
</html>