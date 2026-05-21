<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            background-color: #f4f4f4;
            margin-top: 80px;
        }
        .container {
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            border-bottom: 1px solid #ddd;
        }
        .cart-item img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 10px;
        }
        .cart-item-details {
            flex: 1;
            margin-left: 20px;
        }
        .cart-item-details h3 {
            font-size: 18px;
            color: #333;
        }
        .cart-item-details p {
            font-size: 14px;
            color: #666;
        }
        .price {
            font-size: 18px;
            color: #ff6b6b;
        }
        .remove-btn {
            background-color: #ff6b6b;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .remove-btn:hover {
            background-color: #e65b5b;
        }
        .summary {
            margin-top: 20px;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 10px;
        }
        .summary p {
            font-size: 16px;
            display: flex;
            justify-content: space-between;
        }
        .total {
            font-weight: 700;
        }
        .checkout-form {
            margin-top: 20px;
        }
        .checkout-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .checkout-btn {
            width: 100%;
            padding: 10px;
            background-color: #ff6b6b;
            border: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .checkout-btn:hover {
            background-color: #e65b5b;
        }
        #emptyCartMessage {
            text-align: center;
            color: #666;
            margin-top: 20px;
        }
        .navbar {
            width: 100%;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 15px 40px;
            background: rgba(0, 0, 0, 0.69);
            color: white;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
        }

        .navbar a {
            text-decoration: none;
            color: white;
            font-size: 21px;
            margin: 0 15px;
            position: relative;
            padding-bottom: 5px;
        }

        .navbar a::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 0;
            height: 2px;
            background: white;
            transition: width 0.3s ease;
        }

        .navbar a:hover::after {
            width: 100%;
        }

        .navbar .left,
        .navbar .right {
            display: flex;
            align-items: center;
        }
        .logo {
            border-radius: 100%;
            height: 60px;
            width: 68px;
        }
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #ffffff;
            min-width: 160px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            border-radius: 5px;
            overflow: hidden;
        }

        .dropdown-content a {
            color: #333;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .dropdown-content a:hover {
            background-color: #f4f4f4;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Add a small arrow to indicate dropdown */
        .dropdown::after {
            content: '▼';
            font-size: 12px;
            margin-left: 5px;
            color: white;
        }

    </style>
</head>
<body>
<div class="navbar">
    <div class="left">
        <a href="about us modified.php">About Us</a>
        <a href="services.php">Services</a>
    </div>
    <div>
        <a href="modified home.php"><img src="logo.png" alt="logo" class='logo'></a>
    </div>
    <div class="right">
        <!-- Resources Dropdown -->
        <div class="dropdown">
            <a href="#" class="resources-link">Resources</a>
            <div class="dropdown-content">
                <a href="blog.php">Blog</a>
                <a href="gallery.php">Gallery</a>
            </div>
        </div>
        <a href="modified.php">Contact Us</a>
    </div>
</div>
<div class="container">
    <h2>Checkout</h2>
    <div id="cartItems"></div>
    <div id="emptyCartMessage" style="display: none;">Your cart is empty.</div>

    <div id="summarySection" class="summary" style="display: none;">
        <p>Subtotal: ₹ <span id="subtotal">0</span></p>
        <p>GST (18%): ₹ <span id="gst">0</span></p>
        <p>Convenience Fee (3%): ₹ <span id="convFee">0</span></p>
        <p class="total">Total Payable: ₹ <span id="totalAmount">0</span></p>
    </div>

    <div id="checkoutForm" class="checkout-form" style="display: none;">
        <h3>Billing Details</h3>
        <input type="text" id="name" placeholder="Full Name" required>
        <input type="email" id="email" placeholder="Email Address" required>
        <label for="date">Select Date:</label>
        <input type="date" id="date" required>
        <label for="time">Select Time:</label>
        <input type="time" id="time" required>
        <textarea id="message" placeholder="Specify Requirements "></textarea>
        <button class="checkout-btn" onclick="processPayment()">Proceed to Payment</button>
    </div>
</div>

<script>
    // Retrieve cart items from local storage
    let cartItems = JSON.parse(localStorage.getItem('cart')) || [];
    const cartContainer = document.getElementById('cartItems');
    const emptyCartMessage = document.getElementById('emptyCartMessage');
    const summarySection = document.getElementById('summarySection');
    const checkoutForm = document.getElementById('checkoutForm');

    // Render cart items
    function renderCart() {
        cartContainer.innerHTML = '';
        let subtotal = 0;

        if (cartItems.length === 0) {
            emptyCartMessage.style.display = 'block';
            summarySection.style.display = 'none';
            checkoutForm.style.display = 'none';
            return;
        }

        emptyCartMessage.style.display = 'none';
        summarySection.style.display = 'block';
        checkoutForm.style.display = 'block';

        cartItems.forEach((item, index) => {
            const cartItem = document.createElement('div');
            cartItem.classList.add('cart-item');

            const price = item.price || 0; // Use the price directly from the cart item
            subtotal += price;

            cartItem.innerHTML = `
                <img src="${item.image}" alt="${item.title}">
                <div class="cart-item-details">
                    <h3>${item.title}</h3>
                    <p>${item.description}</p>
                    <p class="price">₹ ${price.toFixed(2)}</p>
                </div>
                <button class="remove-btn" onclick="removeItem(${index})">Remove</button>
            `;
            cartContainer.appendChild(cartItem);
        });

        // Recalculate GST, convenience fee, and total amount
        const gst = (subtotal * 18) / 100;
        const convenienceFee = (subtotal * 3) / 100;
        const totalAmount = subtotal + gst + convenienceFee;

        // Update the bill amounts
        document.getElementById('subtotal').textContent = subtotal.toFixed(2);
        document.getElementById('gst').textContent = gst.toFixed(2);
        document.getElementById('convFee').textContent = convenienceFee.toFixed(2);
        document.getElementById('totalAmount').textContent = totalAmount.toFixed(2);
    }

    // Remove item from cart
    function removeItem(index) {
        cartItems.splice(index, 1);
        localStorage.setItem('cart', JSON.stringify(cartItems));
        renderCart();
    }

    // Process payment
    function processPayment() {
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const date = document.getElementById('date').value;
        const time = document.getElementById('time').value;
        const message = document.getElementById('message').value.trim();
        const cartItems = JSON.parse(localStorage.getItem('cart')) || [];

        if (!name || !email || !date || !time || cartItems.length === 0) {
            alert("Please fill in all fields and ensure your cart is not empty.");
            return;
        }

        // Log the data being sent
        console.log("Sending data to backend:", { name, email, date, time, message, cartItems });

        // Send data to the backend
        fetch('save_cart.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                name: name,
                email: email,
                date: date,
                time: time,
                message: message,
                cart_items: cartItems
            }),
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            console.log("Backend response:", data);
            if (data.status === "success") {
                alert("Cart data saved successfully!");
                proceedToRazorpay();
            } else {
                alert("Failed to save cart data: " + data.message);
            }
        })
       /* .catch(error => {
            console.error('Error:', error);
            alert("An error occurred while saving cart data.");
        });*/
    }

    // Proceed to Razorpay payment
/*    function proceedToRazorpay() {
        const totalAmount = parseFloat(document.getElementById('totalAmount').textContent) * 100; // Convert to paise

        const options = {
            key: 'rzp_test_oOylEumVUlQRXw', // Replace with your Razorpay key
            amount: totalAmount,
            currency: 'INR',
            name: 'NAM EVENTS',
            description: 'Payment for your order',
            image: 'https://your-logo-url.com/logo.png',
            handler: function(response) {
                alert('Payment successful! Payment ID: ' + response.razorpay_payment_id);
                localStorage.removeItem('cart');
                window.location.href = 'thank-you.html';
            },
            prefill: {
                name: document.getElementById('name').value,
                email: document.getElementById('email').value,
            },
            theme: {
                color: '#F37254'
            }
        };

        const rzp = new Razorpay(options);
        rzp.open();
    }*/

    // Initial cart render
    renderCart();
</script>
<!--<script src="https://checkout.razorpay.com/v1/checkout.js"></script>-->
</body>
</html>
