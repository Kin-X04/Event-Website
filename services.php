<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management Platform</title>
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
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 50px;
            background-color: #ffffff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .navbar-logo {
            font-size: 24px;
            font-weight: 700;
            color: #333;
        }
        .navbar-menu {
            display: flex;
            gap: 30px;
        }
        .navbar-menu a {
            color: #666;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .navbar-menu a:hover {
            color: #ff6b6b;
        }
        .tab-section {
            display: flex;
            justify-content: center;
            background-color: #ffffff;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        .tab-buttons {
            display: flex;
            gap: 30px;
        }
        .tab-buttons button {
            background: none;
            border: none;
            font-size: 18px;
            cursor: pointer;
            color: #333;
            position: relative;
            transition: color 0.3s ease;
        }
        .tab-buttons button:hover,
        .tab-buttons button.active {
            color: #ff6b6b;
        }
        .card-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            padding: 30px;
            max-width: 1400px;
            margin: 0 auto;
        }
        .card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        .card-content {
            padding: 20px;
            text-align: center;
        }
        .card-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 15px;
        }
        .add-btn, .view-more-btn {
            background-color: #ff6b6b;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .add-btn:hover, .view-more-btn:hover {
            background-color: #ff4757;
        }
        .price-filter {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 20px 0;
            align-items: center;
        }
        .price-filter input {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .popup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.7);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }
        .popup-content {
            background-color: #ffffff;
            border-radius: 15px;
            width: 80%;
            max-width: 800px;
            display: flex;
            overflow: hidden;
        }
        .popup-image {
            width: 50%;
            object-fit: cover;
        }
        .popup-details {
            width: 50%;
            padding: 30px;
        }
        /* .connect-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #ff6b6b;
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 50px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .connect-btn:hover {
            background-color: #ff4757;
        } */
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
        .fl-fl {
                background-image: linear-gradient(to top right, #a96428, #c28d38);
                letter-spacing: 2px;
                padding: 0px 10px;
                width: 200px;
                position: fixed;
                right: -155px;
                height: 46px;
                z-index: 1000;
                cursor: pointer;
                border-right: 0px solid #00aabe;
                -webkit-transition: all .25s ease;
                -moz-transition: all .25s ease;
                -ms-transition: all .25s ease;
                -o-transition: all .25s ease;
                transition: all .25s ease;
            }

            .float-fb {
                top: 88px;
            }

            .float-fb1 {
                top: 138px;
            }

            .float-fb2 {
                top: 188px;
            }

            .float-fb3 {
                bottom: 0px;
                right: 85px;
                border: 0px solid #00aabe;
                background-image: linear-gradient(to top right, #a96428, #c28d38);
                padding: 10px 5px;
                width: 200px;
                text-align: center;
                z-index: 9999 !important;
                border-radius: 0 !important;
                height: auto !important;
            }

            .fl-fl.float-fb3>a {
                color: #fff !important;
                text-decoration: none;
                font-size: 16px;
                text-transform: uppercase;
                font-family: "Roboto Condensed";
                line-height: 16px !important;
            }

            .fl-fl:hover {
                right: 0;
            }

            .float-fb3:hover {
                right: 85px !important;
                background-image: linear-gradient(to top right, #c28d38, #a96428);
                border-bottom: 0px;
            }

            .float-sm i {
                font-size: 16px;
                margin-top: 4px;
                color: #fff;
            }

            .fa {
                font-size: 20px;
                color: #fff;
                padding: 10px 0;
                width: 40px;
                margin-left: 8px;
            }

            img.stickyicon {
                margin-left: 8px;
                height: 16px;
                margin-right: 22px;
            }

            .fl-fl a {
                color: #fff !important;
                text-align: center;
                line-height: 43px !important;
                letter-spacing: 0px;
                font-size: 14px;
                text-transform: uppercase;
            }
            .cart{
                
               
            }
        
    /* Full-Width Rectangular Button at Bottom */
    .consultation-flag {
        position: fixed;
        bottom: 0;
        right: 85px;
        width: 210px;
        height: 40px;
        background-image: linear-gradient(to top right, #a96428, #c28d38);
        text-align: center;
        padding: 0px;
        /* line-height: 60px; */
        font-size: 16px;
        /* font-weight: bold; */
        font: roboto;
        cursor: pointer;
        /* border: 0px solid #00aabe; */
        z-index: 9999; /* Above most content */
    }

    /* Button Styling */
    .consultation-flag-btn {
        background: none;
        border: none;
        color: white;
        font-size: 20px;
        
        width: 100%;
        height: 100%;
        cursor: pointer;
        transition: 0.3s;
    }

    /* Hover Effect */
    .consultation-flag-btn:hover {
        background: #8b6508; /* Darker Golden Brown */
    }

    /* Popup Background */
    .consultation-popup-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
        z-index: 2000;
    }

    /* Popup Box */
    .consultation-popup-box {
        background: white;
        padding: 30px;
        width: 450px;
        border-radius: 10px;
        text-align: center;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.3);
        position: relative;
        animation: fadeIn 0.3s ease-in-out;
    }

    /* Close Button */
    .consultation-close-btn {
        position: absolute;
        top: 10px;
        right: 15px;
        font-size: 26px;
        cursor: pointer;
        color: red;
        font-weight: bold;
    }

    /* Form Title */
    .consultation-title {
        font-size: 22px;
        font-weight: bold;
        color: #8b6508;
        margin-bottom: 15px;
    }

    /* Form Styling */
    .consultation-input {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #b8860b;
        border-radius: 5px;
        font-size: 16px;
        outline: none;
    }

    /* Submit Button */
    .consultation-submit-btn {
        background: #b8860b;
        color: white;
        border: none;
        padding: 12px;
        cursor: pointer;
        width: 100%;
        margin-top: 10px;
        border-radius: 5px;
        font-size: 18px;
        transition: 0.3s;
    }

    .consultation-submit-btn:hover {
        background: #8b6508;
    }
            /* Dropdown Styles */
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

    /* Fade-in Animation */
    @keyframes fadeIn {
        from { opacity: 0; transform: scale(0.9); }
        to { opacity: 1; transform: scale(1); }
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
            <!--<a href="blog.php">Blog</a>-->
            <a href="gallery.php">Gallery</a>
                
            </div>
        </div>
        <a href="modified.php">Feedback</a>
    </div>
    <a href="cart.php" class="cart">Cart</a>
</div>

    
<div class="float-sm">
    <div class="fl-fl float-fb"> <i class="fab fa-facebook"></i> <a href="#" target="_blank"> Facebook</a></div>
</div>
<div class="float-sm">
    <div class="fl-fl float-fb1"> <i class="fab fa-instagram"></i> <a href="https://www.instagram.com/nam_events01?igsh=NWs1b2JycW94bGtr" target="_blank"> Instagram</a></div>
</div>
<div class="float-sm">
    <div class="fl-fl float-fb2"> <i class="fab fa-twitter"></i> <a href="#" target="_blank"> Twitter</a></div>
</div>

<!-- Tab Section -->
<div class="tab-section">
    <div class="tab-buttons">
        <button onclick="switchTab('events')">Events</button>
        <button onclick="switchTab('venue')">Venue</button>
        <button onclick="switchTab('services')">Services</button>
    </div>
</div>

<!-- Price Filter -->
<div id="priceFilter" class="price-filter" style="display:none;">
    <input type="number" id="minPrice" placeholder="Min Price">
    <input type="number" id="maxPrice" placeholder="Max Price">
    <button onclick="applyPriceFilter()" class="view-more-btn">Apply Filter</button>
</div>

<!-- Card Container -->
<div id="cardContainer" class="card-container"></div>

<!-- Popup -->
<div id="popup" class="popup">
    <div class="popup-content">
        <img id="popupImage" class="popup-image" src="" alt="Popup Image">
        <div class="popup-details">
            <h2 id="popupTitle"></h2>
            <p id="popupDescription"></p>
            <p id="popupPrice"></p>
            <button onclick="closePopup()">Close</button>
        </div>
    </div>
</div>

<!-- Consultation Button -->
<div class="consultation-flag">
    <button onclick="openConsultPopup()" class="consultation-flag-btn">Book A Consultation</button>
</div>

<!-- Consultation Form Popup -->
<div id="consultationPopup" class="consultation-popup-overlay">
    <div class="consultation-popup-box">
        <span class="consultation-close-btn" onclick="closeConsultPopup()">&times;</span>
        <h2 class="consultation-title">Book A Consultation</h2>
        
        <form id="consultation-form">
            <label for="name">Full Name:</label>
            <input type="text" name="name" required class="consultation-input">

            <label for="email">Email:</label>
            <input type="email" name="email" required class="consultation-input">

            <label for="phone">Phone Number:</label>
            <input type="text" name="phone" required class="consultation-input" maxlength="10">

            <label for="message">Your Message:</label>
            <textarea name="message" required class="consultation-input" rows="4"></textarea>

            <button type="submit" class="consultation-submit-btn">Submit</button>
        </form>
    </div>
</div>

<script>
    document.getElementById("consultation-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent page reload

    let formData = new FormData(this);
    let phone = formData.get("phone");
    let email = formData.get("email");

    let phonePattern = /^[0-9]{10}$/;
    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Validate phone number
    if (!phonePattern.test(phone)) {
        alert("Phone number must be exactly 10 digits.");
        return;
    }

    // Validate email
    if (!emailPattern.test(email)) {
        alert("Enter a valid email address.");
        return;
    }

    // Send data to PHP via AJAX
    fetch("modifiedinsert.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text()) // Parse the response as text
    .then(data => {
        console.log(data); // Log the response for debugging
        if (data.trim() === "success") {
            alert("Form Submitted Successfully!"); // Show success alert
            window.location.href = "services.php"; // Redirect to services page
        } else {
            alert("Error in form submission. Please try again."); // Show error alert
        }
    })
    .catch(error => {
        console.error("Error:", error); // Log any errors
        alert("Form Submission Failed"); // Show failure alert
    });
});

function closeConsultPopup() {
    document.getElementById("consultationPopup").style.display = "none";
}
</script>


<!-- JavaScript -->
<script>
    function openConsultPopup() {
        document.getElementById("consultationPopup").style.display = "flex";
    }

    function closeConsultPopup() {
        document.getElementById("consultationPopup").style.display = "none";
    }

    const cardData = {
        events: [
            {
                title: "Wedding Event",
                description: "A grand wedding event with all arrangements",
                image: "wedding1.jpg",
                priceRange: "50000 - 100000"
            },
            {
                title: "Corporate Event",
                description: "Professional corporate event management",
                image: "corporate.jpg",
                priceRange: "30000 - 80000"
            },
            {
                title: "Birthday Party",
                description: "Fun and lively birthday party arrangements",
                image: "birthday.jpg",
                priceRange: "20000 - 50000"
            },
            {
                title: "Anniversary",
                description: "Plan a memorable anniversary celebration.",
                image: "anniversary.jpg",
                priceRange: "100000 - 200000"
            },
            {
                title: "Exhibition",
                description: "Art and culture exhibition",
                image: "exhibition.jpg",
                priceRange: "40000 - 90000"
            },
            {
                title: "Seminar",
                description: "Expert seminar planning.",
                image: "seminar.jpg",
                priceRange: "60000 - 120000"
            },
            {
                title: "Product Launch",
                description: "Exciting product launch event",
                image: "launch.png",
                priceRange: "50000 - 100000"
            },
            {
                title: "Inaugration",
                description: "Plan a memorable opening event",
                image:"inaugration.jpg",
                priceRange: "30000 - 70000"
            },
            {
                title: "Festival",
                description: "Cultural festival celebration",
                image: "carnival.jpg",
                priceRange: "40000 - 80000"
            }
        ],
        venue: [
            {
                title: "Banquet Hall",
                description: "Spacious banquet hall for all events.(Somwar Peth Pune)",
                image: "hall.jpg",
                priceRange: "50000 - 100000"
            },
            {
                title: "Outdoor Garden",
                description: "Beautiful garden for outdoor events.(Mangalvar Peth Pune)",
                image: "garden.jpg",
                priceRange: "40000 - 90000"
            },
            {
                title: "Beach Venue",
                description: "Scenic beach venue for special occasions.(Goa)",
                image: "beach.jpg",
                priceRange: "60000 - 120000"
            },
            {
                title: "Rooftop Lounge",
                description: "Modern rooftop lounge with city views.(Deccan Pune)",
                image: "rooftop.jpeg",
                priceRange: "50000 - 100000"
            },
            {
                title: "Farm House",
                description: "Rustic farmhouse for private events.(Lonavala)",
                image: "farmhouse.jpg",
                priceRange: "40000 - 80000"
            },
            {
                title: "Villa",
                description: "Private villa for intimate gatherings.(Lonavala)",
                image: "villa.png",
                priceRange: "30000 - 70000"
            },
            {
                title: "Conference Hall",
                description: "Spacious hall for corporate events.(Koregaon Park Pune)",
                image: "corporate.jpg",
                priceRange: "30000 - 80000"
            },
            {
                title: "Club",
                description: "Exclusive club house for events.(Koregaon Park Pune)",
                image: "club.jpeg",
                priceRange: "50000 - 100000"
            },
            {
                title: "Resort",
                description: "Luxurious resort for destination events.(Alibaug)",
                image: "resort.jpg",
                priceRange: "70000 - 150000"
            }
        ],
        services: [
            {
                title: "Catering",
                description: "Professional catering services",
                image: "catering.jpg",
                priceRange: "20000 - 40000"
            },
            {
                title: "Decoration",
                description: "Event decoration services",
                image: "decoration.jpg",
                priceRange: "15000 - 35000"
            },
            {
                title: "Photography",
                description: "Professional photography",
                image: "photography.png",
                priceRange: "25000 - 50000"
            },
            {
                title: "DJ & Music",
                description: "Live music and DJ services",
                image: "dj.jpg",
                priceRange: "10000 - 30000"
            },
            {
                title: "Lighting",
                description: "Event lighting solutions",
                image: "lighting.jpg",
                priceRange: "15000 - 25000"
            },
            {
                title: "Makeup",
                description: "Professional makeup services",
                image: "makeup.jpg",
                priceRange: "5000 - 20000"
            },
            {
                title: "Venue Setup",
                description: "Complete venue setup services",
                image: "setup.jpg",
                priceRange: "30000 - 60000"
            },
            {
                title: "Invitation Design",
                description: "Custom invitation design",
                image: "invitation.jpg",
                priceRange: "5000 - 15000"
            },
            {
                title: "Transportation",
                description: "Event transportation services",
                image: "transport.png",
                priceRange: "10000 - 25000"
            }
        ]
    };

    function addToCart(title, image, description, priceRange) {
        // Extract the minimum price from the priceRange string
        const price = priceRange ? parseFloat(priceRange.split(' - ')[0].replace(/[^0-9.]/g, '')) : 0;

        const cartItem = { title, image, description, price };

        // Add the item to the cart in localStorage
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        cart.push(cartItem);
        localStorage.setItem('cart', JSON.stringify(cart));

        alert(`${title} added to cart!`);
    }

    function switchTab(tabName) {
        const cardContainer = document.getElementById('cardContainer');
        const priceFilter = document.getElementById('priceFilter');

        // Show price filter only for services tab
        priceFilter.style.display = tabName === 'services' ? 'flex' : 'none';

        cardContainer.innerHTML = '';
        cardData[tabName].forEach((card, index) => {
            const cardElement = document.createElement('div');
            cardElement.classList.add('card');

            const priceHtml = card.priceRange 
                ? `<p style="color:#ff6b6b;">₹ ${card.priceRange}</p>` 
                : '';

            cardElement.innerHTML = `
                <img src="${card.image}" alt="${card.title}" class="card-image">
                <div class="card-content">
                    <h3>${card.title}</h3>
                    <p>${card.description}</p>
                    ${priceHtml}
                    <div class="card-buttons">
                        <button class="view-more-btn" onclick="openPopup('${card.title}', '${card.image}', '${card.description}', '${card.priceRange || ''}')">View More</button>
                        <button class="add-btn" onclick="addToCart('${card.title}', '${card.image}', '${card.description}', '${card.priceRange || ''}')">Add</button>
                    </div>
                </div>
            `;
            cardContainer.appendChild(cardElement);
        });
    }

    function applyPriceFilter() {
        const minPrice = parseFloat(document.getElementById('minPrice').value) || 0;
        const maxPrice = parseFloat(document.getElementById('maxPrice').value) || Infinity;

        const filteredServices = cardData.services.filter(service => {
            const price = parseFloat(service.priceRange.split(' - ')[0].replace(/[^0-9.]/g, ''));
            return price >= minPrice && price <= maxPrice;
        });

        const cardContainer = document.getElementById('cardContainer');
        cardContainer.innerHTML = '';

        filteredServices.forEach((card, index) => {
            const cardElement = document.createElement('div');
            cardElement.classList.add('card');

            const priceHtml = card.priceRange 
                ? `<p style="color:#ff6b6b;">₹ ${card.priceRange}</p>` 
                : '';

            cardElement.innerHTML = `
                <img src="${card.image}" alt="${card.title}" class="card-image">
                <div class="card-content">
                    <h3>${card.title}</h3>
                    <p>${card.description}</p>
                    ${priceHtml}
                    <div class="card-buttons">
                        <button class="view-more-btn" onclick="openPopup('${card.title}', '${card.image}', '${card.description}', '${card.priceRange || ''}')">View More</button>
                        <button class="add-btn" onclick="addToCart('${card.title}', '${card.image}', '${card.description}', '${card.priceRange || ''}')">Add</button>
                    </div>
                </div>
            `;
            cardContainer.appendChild(cardElement);
        });
    }

    function openPopup(title, image, description, priceRange) {
        document.getElementById('popupImage').src = image;
        document.getElementById('popupTitle').innerText = title;
        document.getElementById('popupDescription').innerText = description;
        document.getElementById('popupPrice').innerText = priceRange ? `Price: ₹ ${priceRange}` : '';
        document.getElementById('popup').style.display = 'flex';
    }

    function closePopup() {
        document.getElementById('popup').style.display = 'none';
    }

    // Default to events tab on page load
    switchTab('events');
</script>
</body>
</html>
