<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management Blog</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #f9f9f9;
            color: #333;
            line-height: 1.6;
            margin-top: 80px;
        }

        a {
            text-decoration: none;
            color: inherit;
        }
        header{
            text-align:center;
        }

        /* Navbar */
        .navbar {
    width: 100%;
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: center; /* Center the middle content */
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

/* Specific styling for the Cart button */
.navbar .cart {
    position: absolute; /* Position the cart button absolutely */
    right: 40px; /* Distance from the right edge */
    top: 50%; /* Center vertically */
    transform: translateY(-50%); /* Adjust for perfect vertical centering */
    padding: 10px;
    background-color: transparent; /* No background */
    border: none;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.3s ease;
}

.navbar .cart img {
    height: 40px; /* Adjust the size of the logo */
    width: 40px;
    border-radius: 50%; /* Make it circular */
}

.navbar .cart:hover {
    transform: translateY(-50%) scale(1.1); /* Slight zoom effect on hover */
}

.navbar .cart::after {
    display: none; /* Remove the underline effect for the cart button */
}
        /* Blog Container */
        .blog-container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        /* Blog Post Card */
        .blog-post {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            padding-bottom: 15px;
        }

        .blog-post:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }

        .blog-post img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .blog-post-content {
            padding: 20px;
        }

        .blog-post-content h2 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #333;
        }

        .blog-post-content p {
            font-size: 0.95rem;
            color: #666;
            margin-bottom: 15px;
        }

        /* Full Content (Initially Hidden) */
        .full-content {
            display: none;
            font-size: 0.95rem;
            color: #444;
            margin-top: 10px;
        }

        /* Read More Button */
        .read-more {
            color: #ff6b6b;
            font-weight: 600;
            cursor: pointer;
            transition: color 0.3s;
        }

        .read-more:hover {
            color: #ff4757;
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

        /* Footer */
        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            margin-top: 40px;
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
        <a href="modified.php">Feedback</a>
    </div>
    <a href="cart.php" class="cart">Cart</a>
</div>
    <!-- Navbar -->
    
    <!-- Header -->
    <header>
        <h1>Event Management Blog</h1>
        <p>Insights, Tips, and Trends for Your Next Event</p>
    </header>

    <!-- Blog Posts -->
    <div class="blog-container">
        <!-- Blog Post 1 -->
        <div class="blog-post">
            <img src="wedding1.jpg" alt="Wedding Event">
            <div class="blog-post-content">
                <h2>10 Tips for Planning the Perfect Wedding</h2>
                <p>Planning a wedding can be overwhelming, but these 10 tips will help...</p>
                <div class="full-content">
                    <p>1. Set a budget and stick to it. <br>
                    2. Choose a venue that aligns with your theme. <br>
                    3. Book vendors in advance. <br>
                    4. Have a backup plan for outdoor weddings. <br>
                    5. Focus on guest experience.</p>
                </div>
                <span class="read-more">Read More</span>
            </div>
        </div>

        <!-- Blog Post 2 -->
        <div class="blog-post">
            <img src="corporate1.jpg" alt="Corporate Event">
            <div class="blog-post-content">
                <h2>How to Organize a Successful Corporate Event</h2>
                <p>Hosting a corporate event requires careful planning and execution...</p>
                <div class="full-content">
                    <p>1. Define your goals and objectives. <br>
                    2. Select the right venue and time. <br>
                    3. Create an engaging agenda. <br>
                    4. Use technology for better engagement. <br>
                    5. Follow up with attendees post-event.</p>
                </div>
                <span class="read-more">Read More</span>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Event Management. All rights reserved.</p>
    </footer>

    <!-- JavaScript for Read More -->
    <script>
        document.querySelectorAll('.read-more').forEach(button => {
            button.addEventListener('click', function() {
                let fullContent = this.previousElementSibling;
                if (fullContent.style.display === "none" || fullContent.style.display === "") {
                    fullContent.style.display = "block";
                    this.textContent = "Read Less";
                } else {
                    fullContent.style.display = "none";
                    this.textContent = "Read More";
                }
            });
        });
    </script>

</body>
</html>
