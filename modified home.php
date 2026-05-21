<?php
session_start();
?>

<!DOCTYPE html>

<link rel='stylesheet' id='wp-block-library-css'
    href='https://www.emzacevents.com/wp-includes/css/dist/block-library/style.min.css?ver=6.3.1' type='text/css'
    media='all' />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
    
   <link rel="stylesheet" href="1.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">



<link rel='stylesheet' id='dashicons-css' href='https://www.emzacevents.com/wp-includes/css/dashicons.min.css?ver=6.3.1'
    type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'
    href='https://www.emzacevents.com/wp-content/plugins/revslider/public/assets/css/rs6.css?ver=6.1.2' type='text/css'
    media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
  
</style>
<link rel='stylesheet' id='bootstrap-css'
    href='https://www.emzacevents.com/wp-content/themes/kleo/assets/css/bootstrap.min.css?ver=4.3.10' type='text/css'
    media='all' />
<link rel='stylesheet' id='kleo-app-css'
    href='https://www.emzacevents.com/wp-content/themes/kleo/assets/css/app.min.css?ver=4.3.10' type='text/css'
    media='all' />
<link rel='stylesheet' id='magnific-popup-css'
    href='https://www.emzacevents.com/wp-content/themes/kleo/assets/js/plugins/magnific-popup/magnific.css?ver=4.3.10'
    type='text/css' media='all' />
<link rel='stylesheet' id='kleo-fonts-css'
    href='https://www.emzacevents.com/wp-content/themes/kleo/assets/css/fontello.min.css?ver=4.3.10' type='text/css'
    media='all' />
<link rel='stylesheet' id='mediaelement-css'
    href='https://www.emzacevents.com/wp-includes/js/mediaelement/mediaelementplayer-legacy.min.css?ver=4.2.17'
    type='text/css' media='all' />
<link rel='stylesheet' id='kleo-google-fonts-css' href='//fonts.googleapis.com/css?family=Roboto%3A300&#038;ver=6.3.1'
    type='text/css' media='all' />
<link rel='stylesheet' id='js_composer_front-css'
    href='https://www.emzacevents.com/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=5.7'
    type='text/css' media='all' />
<link rel='stylesheet' id='kleo-colors-css'
    href='https://www.emzacevents.com/wp-content/uploads/custom_styles/dynamic.css?ver=4.3.10.1638117197'
    type='text/css' media='all' />
<link rel='stylesheet' id='kleo-plugins-css'
    href='https://www.emzacevents.com/wp-content/themes/kleo/assets/css/plugins.min.css?ver=4.3.10' type='text/css'
    media='all' />





<style type="text/css" id="wp-custom-css">
    .kleo-navbar-fixed.navbar-transparent #header {
        background-color: #2d2c2c8c !important;
    }

    .navbar-transparent .navbar .kleo-main-header {
        background-color: #2d2c2c8c !important;
    }
</style>

    
</style><noscript>
    <style type="text/css">
        .wpb_animate_when_almost_visible {
            opacity: 1;
        }
    </style>
</noscript></head>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<style>
    .herovid{
        margin-top:6%;
        margin-left: 18%;
        /* margin:auto; */
        width:1000px;
        height:auto;
    }
</style> 

<body
    class="home page-template page-template-page-templates page-template-full-width page-template-page-templatesfull-width-php page page-id-5 kleo-navbar-fixed navbar-resize navbar-transparent on-dark-bg footer-bottom wpb-js-composer js-comp-ver-5.7 vc_responsive"
    itemscope itemtype="http://schema.org/WebPage"> <!-- PAGE LAYOUT
  ================================================ -->
   <!-- Attributes -->
    <div class="kleo-page">
         <!-- HEADER SECTION
   ================================================
   -->
   <style>
        /* Navbar Styles */
        .navbar {
            width: 100%;
            height: 87px;
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
            font-family:Poppins;
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
            height: 70px;
            width: 70px;
            margin-left:4rem;
        }

        /* Dropdown Styles */
        .dropdown {
            position: relative;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background: rgba(0, 0, 0);
            min-width: 160px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 5px;
        }

        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-size: 18px;
            transition: background-color 0.3s;
        }

        .dropdown-content a:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</style>
<link rel='stylesheet' id='contact-form-7-css'
    href='https://www.emzacevents.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.8' type='text/css'
    media='all' />
<link rel='stylesheet' id='wpsm_counter-font-awesome-front-css'
    href='https://www.emzacevents.com/wp-content/plugins/counter-number-showcase/assets/css/font-awesome/css/font-awesome.min.css?ver=6.3.1'
    type='text/css' media='all' />
<link rel='stylesheet' id='wpsm_counter_bootstrap-front-css'
    href='https://www.emzacevents.com/wp-content/plugins/counter-number-showcase/assets/css/bootstrap-front.css?ver=6.3.1'
    type='text/css' media='all' />
<link rel='stylesheet' id='wpsm_counter_column-css'
    href='https://www.emzacevents.com/wp-content/plugins/counter-number-showcase/assets/css/counter-column.css?ver=6.3.1'
    type='text/css' media='all' />

       
</style>

    <!-- Navbar -->
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
                <a href="#" class="dropdown-toggle">Resources</a>
                <div class="dropdown-content">
                    <!--<a href="blog.php/">Blogs</a>-->
                    <a href="gallery.php">Gallery</a>
                </div>
            </div>
            <a href="modified.php">Feedback</a>
        </div>
    </div>

    <!-- JavaScript for Dropdown (Optional) -->
    <script>
        // Optional: Add JavaScript to handle dropdown on click (for mobile)
        document.addEventListener("DOMContentLoaded", function () {
            const dropdownToggle = document.querySelector(".dropdown-toggle");
            const dropdownContent = document.querySelector(".dropdown-content");

            dropdownToggle.addEventListener("click", function (e) {
                e.preventDefault();
                dropdownContent.style.display = dropdownContent.style.display === "block" ? "none" : "block";
            });

            // Close dropdown when clicking outside
            document.addEventListener("click", function (e) {
                if (!e.target.closest(".dropdown")) {
                    dropdownContent.style.display = "none";
                }
            });
        });
    </script>

        <div class="float-sm">
            <div class="float-sm">
                <div class="fl-fl float-fb"> <i class="fab fa-facebook"></i> <a href="#"
                        target="_blank"> Facebook</a></div>
            </div>
            <div class="float-sm">
                <div class="fl-fl float-fb1"> <i class="fab fa-instagram"></i> <a
                        href="https://www.instagram.com/nam_events01?igsh=NWs1b2JycW94bGtr" target="_blank"> Instagram</a></div>
            </div>
            <div class="float-sm">
                <div class="fl-fl float-fb2"> <i class="fab fa-twitter"></i> <a href="#"
                        target="_blank"> Twitter</a></div>
            </div>

       <!-- Consultation Button (Fixed Bottom-Right, Flag Style) -->
<!-- Consultation Button (Full-Width, No Gap at Bottom) -->
<div class="consultation-flag">
    <button onclick="openConsultPopup()" class="consultation-flag-btn">Book A Consultation</button>
</div>

<!-- Consultation Form Popup -->
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



<!-- CSS -->
<style>
    /* Full-Width Rectangular Button at Bottom */
    .consultation-flag {
        position: fixed;
        bottom: 0;
        right: 85px;
        width: 200px;
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

    /* Fade-in Animation */
    @keyframes fadeIn {
        from { opacity: 0; transform: scale(0.9); }
        to { opacity: 1; transform: scale(1); }
    }
</style>

<!-- JavaScript -->
<script>
    function openConsultPopup() {
        document.getElementById("consultationPopup").style.display = "flex";
    }

    function closeConsultPopup() {
        document.getElementById("consultationPopup").style.display = "none";
    }
</script>


        
        <!-- Modal -->
        
 <!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<style>
    .swiper {
    width: 100vw; /* Full viewport width */
    max-width: 100%; /* Ensure it doesn't restrict width */
    height: 400px;
    border-radius: 0; /* Remove rounded corners for full width */
    overflow: hidden;
    box-shadow: none; /* Remove shadow for a cleaner look */
    position: relative;
    margin-top:87px;
    z-index: 1;
}

.swiper-slide img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 0; /* Remove border radius */
}


    .swiper-slide {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 400px;
    }

    /* .swiper-slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 10px;
    } */

    /* Navigation Buttons */
    .swiper-button-next, .swiper-button-prev {
        color: #fff;
        /* background: rgba(0, 0, 0, 0.5); */
        padding: 15px;
        border-radius: 50%;
        transition: 0.3s;
    }

    .swiper-button-next:hover, .swiper-button-prev:hover {
        background: rgba(0, 0, 0, 0.8);
    }

    /* Pagination Dots */
    .swiper-pagination-bullet {
        background: white;
        opacity: 0.7;
    }

    .swiper-pagination-bullet-active {
        background: #ff5733;
        opacity: 1;
    }
</style>


<!-- Swiper Slider -->
<div class="swiper mySwiper">
<div class="swiper-wrapper">
    <div class="swiper-slide">
        <img src="banner1.jpg" alt="Slide 1">
    </div>
<!-- <div class="swiper-slide">
        <img src="" alt="Slide 2">
    </div> -->
    <div class="swiper-slide">
        <img src="banner3.jpg" alt="Slide 3">
    </div>
</div>
<!-- Navigation Buttons -->
<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>
<!-- Pagination -->
<div class="swiper-pagination"></div>
</div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    new Swiper(".mySwiper", {
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
});
</script>


                                    <section class="container-wrap  main-color no-col-gap "
                                        style="background-color: #f8f8f8;padding-top:0px;padding-bottom:0px">
                                        <div class="section-container container">
                                            <div class="vc_row vc_row-fluid row vc_row-has-fill">
                                                <div style="z-index: 10;"
                                                    class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-1 vc_col-lg-10 vc_col-md-offset-1 vc_col-md-10 vc_col-xs-12 vc_col-has-fill">
                                                    <div class="vc_column-inner vc_custom_1454348779620">
                                                        <div class="wpb_wrapper">
                                                            <div
                                                                class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1454272966774 vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                                                                <div
                                                                    class="myclass-consultation wpb_column vc_column_container vc_col-sm-6 vc_col-lg-4 vc_col-md-4 vc_col-xs-12">
                                                                    <div
                                                                        class="vc_column-inner vc_custom_1559411245851">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="kleo-gap"
                                                                                style="height:50px;line-height:50px;">
                                                                            </div>
                                                                            <h2 style="font-size: 30px;color: #000000;line-height: 36px;text-align: center;font-family:Libre Baskerville;font-weight:400;font-style:normal"
                                                                                class="vc_custom_heading vc_custom_1555269094338">
                                                                                Open up with us</h2>
                                                                            <div
                                                                                class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_20 vc_sep_pos_align_center vc_separator_no_text vc_custom_1557083412013  vc_custom_1557083412013">
                                                                                <span
                                                                                    class="vc_sep_holder vc_sep_holder_l"><span
                                                                                        style="border-color:#b06b2a;"
                                                                                        class="vc_sep_line"></span></span><span
                                                                                    class="vc_sep_holder vc_sep_holder_r"><span
                                                                                        style="border-color:#b06b2a;"
                                                                                        class="vc_sep_line"></span></span>
                                                                            </div>
                                                                            <div class="kleo_text_column wpb_content_element  vc_custom_1588001558532"
                                                                                style=" color:#000000;">
                                                                                <div class="wpb_wrapper">
                                                                                    <p style="text-align: center;">We
                                                                                        would be really thankful to
                                                                                        share the happiness of yours on
                                                                                        your big day. Please login or signup
                                                                                        our form along with your
                                                                                        information. 
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="wpb_raw_code wpb_content_element wpb_raw_html">
                                                                               
                                                                            </div>
                                                                            <div class="kleo-gap"
                                                                                style="height:50px;line-height:50px;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="myclass-home-sec1 wpb_column vc_column_container vc_col-sm-6 vc_col-lg-8 vc_col-md-8 vc_col-xs-12 vc_col-has-fill">
                                                                    <div
                                                                        class="vc_column-inner vc_custom_1589737566668">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="kleo-gap"
                                                                                style="height:200px;line-height:200px;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="about"
                                                                class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1454350387279 vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                                                                <div
                                                                    class="myclass-home-about wpb_column vc_column_container vc_col-sm-6 vc_col-lg-4 vc_col-md-4 vc_col-xs-12 vc_col-has-fill">
                                                                    <div
                                                                        class="vc_column-inner vc_custom_1589403258971">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="kleo-gap"
                                                                                style="height:200px;line-height:200px;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="myclass-consultation wpb_column vc_column_container vc_col-sm-6 vc_col-lg-8 vc_col-md-8 vc_col-xs-12">
                                                                    <div
                                                                        class="vc_column-inner vc_custom_1559411393906">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="kleo-gap"
                                                                                style="height:50px;line-height:50px;">
                                                                            </div>
                                                                            <h2 style="font-size: 30px;color: #000000;line-height: 36px;text-align: center;font-family:Libre Baskerville;font-weight:400;font-style:normal"
                                                                                class="vc_custom_heading">About Us
                                                                            </h2>
                                                                            <div
                                                                                class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_20 vc_sep_pos_align_center vc_separator_no_text vc_custom_1557083422299  vc_custom_1557083422299">
                                                                                <span
                                                                                    class="vc_sep_holder vc_sep_holder_l"><span
                                                                                        style="border-color:#b06b2a;"
                                                                                        class="vc_sep_line"></span></span><span
                                                                                    class="vc_sep_holder vc_sep_holder_r"><span
                                                                                        style="border-color:#b06b2a;"
                                                                                        class="vc_sep_line"></span></span>
                                                                            </div>
                                                                            <div class="kleo_text_column wpb_content_element  vc_custom_1589720844475"
                                                                                style=" color:#000000;">
                                                                                <div class="wpb_wrapper">
                                                                                    <p style="text-align: center;"><span
                                                                                            style="font-weight: 400;">With
                                                                                            motive to emerge as one of
                                                                                            the leading Event Management
                                                                                            Company in Pune, NAM Events 
                                                                                            wishes to stand out. We are
                                                                                            young, talented and our
                                                                                            presence of mind is what we
                                                                                            feel is most needed to
                                                                                            manage your event with a
                                                                                            breakneck speed. NAM Events
                                                                                            provide Event Management
                                                                                            Services in Pune. <br>Our Event Management Service</a>
                                                                                            process includes Budgeting,
                                                                                            Scheduling, Site Selection,
                                                                                            Acquiring Necessary Permits,
                                                                                            Coordinating Transportation
                                                                                            and Parking, Arranging for
                                                                                            Speakers and Entertainers,
                                                                                            Arranging Decor, Event
                                                                                            Security, Catering,
                                                                                            Coordinating with Third
                                                                                            Party Vendors, Emergency
                                                                                            Plans and etc.</span></p>
                                                                                </div>
                                                                            </div>
                                                                            <style>
                                                                                #btn_650a9e12cb3c3:hover {
                                                                                    color: #ffffff !important;
                                                                                }
                                                                            </style>
                                                                            
                                                                            <div
                                                                                class="kleo_text_column wpb_content_element  vc_custom_1555268737700">
                                                                                <div class="wpb_wrapper">
                                                                                    <style>
                                                                                        #wpsm_counter_b_row_38 .wpsm_counterbox {
                                                                                            text-align: center;
                                                                                            margin-top: 50px;
                                                                                            margin-bottom: 50px;
                                                                                        }

                                                                                        #wpsm_counter_b_row_38 .wpsm_counterbox .wpsm_count-icon {
                                                                                            display: block;
                                                                                            margin-top: 20px;
                                                                                            padding-top: 0px;
                                                                                            padding-bottom: 0px;
                                                                                            margin-bottom: 0px;
                                                                                            margin: 0 auto;
                                                                                        }

                                                                                        #wpsm_counter_b_row_38 .wpsm_counterbox .wpsm_count-icon i {
                                                                                            font-size: 54px;
                                                                                            color: #ff5722;
                                                                                        }

                                                                                        #wpsm_counter_b_row_38 .wpsm_counterbox .wpsm_number {
                                                                                            font-size: 30px;
                                                                                            font-weight: 400;
                                                                                            color: #000000;
                                                                                            font-family: 'Open Sans';
                                                                                            letter-spacing: 2px;
                                                                                            margin-top: 20px;
                                                                                            line-height: 1.3em;
                                                                                            padding-top: 0px;
                                                                                            padding-bottom: 0px;
                                                                                            margin-bottom: 0px;
                                                                                        }

                                                                                        #wpsm_counter_b_row_38 .wpsm_counterbox .wpsm_count-title {
                                                                                            font-size: 16px;
                                                                                            font-weight: bolder;
                                                                                            font-family: 'Open Sans';
                                                                                            letter-spacing: 2px;
                                                                                            color: #000000;
                                                                                            font-weight: 400;
                                                                                            margin-top: 20px;
                                                                                            padding-top: 0px;
                                                                                            padding-bottom: 0px;
                                                                                            margin-bottom: 0px;
                                                                                            line-height: 1.3em;
                                                                                        }

                                                                                        #wpsm_counter_b_row_38 .wpsm_counterbox .wpsm_count-title {
                                                                                            min-height: 0px;
                                                                                            font-family: Roboto;
                                                                                            letter-spacing: 0;
                                                                                            margin-top: 5px;
                                                                                            font-weight: 600 !important;
                                                                                        }

                                                                                        #wpsm_counter_b_row_38 .wpsm_counterbox .wpsm_number {
                                                                                            font-family: Roboto;
                                                                                            letter-spacing: 0;
                                                                                            margin-top: 5px;
                                                                                        }

                                                                                        #wpsm_counter_b_row_38 .wpsm_counterbox {
                                                                                            margin: 0;
                                                                                        }
                                                                                    </style>
                                                                                    <style>
                                                                                        #wpsm_counter_b_row_38 {

                                                                                            position: relative;
                                                                                            width: 100%;
                                                                                            overflow: hidden;
                                                                                            text-align: center;
                                                                                        }

                                                                                        #wpsm_counter_b_row_38 .wpsm_row {
                                                                                            overflow: hidden;
                                                                                            display: block;
                                                                                            width: 100%;
                                                                                        }

                                                                                        #wpsm_counter_b_row_38 .wpsm_row {
                                                                                            overflow: visible;
                                                                                        }

                                                                                        #wpsm_counter_b_row_38 .wpsm_counterbox .wpsm_count-title {
                                                                                            min-height: 56px;
                                                                                        }
                                                                                        
                                                                                    </style>
                                                                                    <!-- <div class="wpsm_counter_b_row"
                                                                                        id="wpsm_counter_b_row_38">
                                                                                        <div>
                                                                                            <div class="wpsm_row">
                                                                                                <div
                                                                                                    class="wpsm_col-md-4 wpsm_col-sm-6">
                                                                                                    <div
                                                                                                        class="wpsm_counterbox">
                                                                                                        <div
                                                                                                            class="wpsm_count-icon">
                                                                                                            <i class="fa fa-venus-mars"></i>
                                                                                                        </div>
                                                                                                        <div class="wpsm_number"
                                                                                                            style="#000000">
                                                                                                            <span
                                                                                                                class="counter">200
                                                                                                            </span>
                                                                                                        </div>
                                                                                                        <h3 class="wpsm_count-title">
                                                                                                            PERFECT
                                                                                                            WEDDINGS
                                                                                                        </h3>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="wpsm_col-md-4 wpsm_col-sm-6">
                                                                                                    <div
                                                                                                        class="wpsm_counterbox">
                                                                                                        <div
                                                                                                            class="wpsm_count-icon">
                                                                                                            <i class="fa fa-birthday-cake"></i>
                                                                                                        </div>
                                                                                                        <div class="wpsm_number"
                                                                                                            style="#000000">
                                                                                                            <span
                                                                                                                class="counter">140
                                                                                                            </span>
                                                                                                        </div>
                                                                                                        <h3 class="wpsm_count-title">
                                                                                                            PRIVATE EVENTS</h3>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="wpsm_col-md-4 wpsm_col-sm-6">
                                                                                                    <div
                                                                                                        class="wpsm_counterbox">
                                                                                                        <div
                                                                                                            class="wpsm_count-icon">
                                                                                                            <i class="fa fa-coffee"></i>
                                                                                                        </div>
                                                                                                        <div class="wpsm_number"
                                                                                                            style="#000000" >
                                                                                                            <span
                                                                                                                class="counter">63
                                                                                                            </span>
                                                                                                        </div>
                                                                                                        <h3 class="wpsm_count-title" #000000>
                                                                                                            SUCCESSFUL
                                                                                                            CORPORATE EVENTS
                                                                                                            
                                                                                                            </h3>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="wpsm_row"></div>
                                                                                        </div>
                                                                                    </div> -->
                                                                                </div>
                                                                            </div>
                                                                            <div class="kleo-gap"
                                                                                style="height:50px;line-height:50px;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section><!-- end section -->
                                    <section
                                        class="container-wrap  myclass-home-mob-serv main-color bg-parallax no-col-gap  text-center"
                                        style="background-image: url(cutlery-hospitality.jpg); position: initial;;background-position: center top;background-repeat: no-repeat;background-attachment: fixed;background-size: cover;margin-top:-40px"
                                        data-prlx-speed="0.3">
                                        <div class="section-container container">
                                            <div id="specialities" class="vc_row vc_row-fluid row vc_row-has-fill">
                                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class="kleo-gap"
                                                                style="height:200px;line-height:200px;"></div>
                                                            <h1 style="font-size: 90px;color: #ffffff;line-height: 70px;text-align: center;font-family:Libre Baskerville;font-weight:400;font-style:normal"
                                                                class="vc_custom_heading letter-spacing-50 hidden-xs visible-sm visible-md visible-lg visible-xlg">
                                                                Services</h1>
                                                            <h2 style="font-size: 90px;color: #ffffff;line-height: 70px;text-align: center;font-family:Libre Baskerville;font-weight:400;font-style:normal"
                                                                class="vc_custom_heading letter-spacing-50 hidden-sm hidden-md hidden-lg hidden-xlg visible-xs">
                                                                Services</h2>
                                                            <div class="kleo-gap"
                                                                style="height:200px;line-height:200px;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section><!-- end section -->
                                    <section
                                        class="container-wrap  myclass-desktop myclass-home-desk main-color no-col-gap "
                                        style="background-color: #f8f8f8;padding-top:0px;padding-bottom:0px">
                                        <div class="section-container container">
                                            <div class="vc_row vc_row-fluid row vc_row-has-fill">
                                                <div style="z-index: 10;"
                                                    class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-1 vc_col-lg-10 vc_col-md-offset-1 vc_col-md-10 vc_col-xs-12 vc_col-has-fill">
                                                    <div class="vc_column-inner vc_custom_1454349059316">
                                                        <div class="wpb_wrapper">
                                                            <div
                                                                class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1454273077072 vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                                                                <div
                                                                    class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3 vc_col-xs-12">
                                                                    <div
                                                                        class="vc_column-inner vc_custom_1448636253434">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="kleo-gap"
                                                                                style="height:25px;line-height:25px;">
                                                                            </div>
                                                                            <h5 style="font-size: 17px;color: #000000;line-height: 32px;text-align: center"
                                                                                class="vc_custom_heading vc_custom_1560967862341">
                                                                                WEDDINGS</h5>
                                                                            <div
                                                                                class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_20 vc_sep_pos_align_center vc_separator_no_text vc_custom_1557083432195  vc_custom_1557083432195">
                                                                                <span
                                                                                    class="vc_sep_holder vc_sep_holder_l"><span
                                                                                        style="border-color:#b06b2a;"
                                                                                        class="vc_sep_line"></span></span><span
                                                                                    class="vc_sep_holder vc_sep_holder_r"><span
                                                                                        style="border-color:#b06b2a;"
                                                                                        class="vc_sep_line"></span></span>
                                                                            </div>
                                                                            <div class="kleo_text_column wpb_content_element  vc_custom_1589058554559"
                                                                                style=" color:#000000;">
                                                                                <div class="wpb_wrapper">
                                                                                    <p style="text-align: center;"><span
                                                                                            style="font-weight: 400;">Come
                                                                                            and let’s weave together
                                                                                            your dreams, feelings,
                                                                                            relations and
                                                                                            responsibilities. Allow us
                                                                                            to add that extra element to
                                                                                            your Wedding Event
                                                                                            Management.</span></p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="kleo-gap"
                                                                                style="height:25px;line-height:25px;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="myclass-home-serv wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3 vc_col-xs-12 vc_col-has-fill">
                                                                    <div
                                                                        class="vc_column-inner vc_custom_1555272071764">
                                                                        <div class="wpb_wrapper">
                                                                            <div
                                                                                class="wpb_raw_code wpb_content_element wpb_raw_html">
                                                                                <div class="wpb_wrapper">
                                                                                    <div class="flip-box">
                                                                                        <div class="flip-box-inner">
                                                                                            <div class="flip-box-front" style="display: block !important;  visibility: visible !important;">
                                                                                                <img src="wedding5.jpg" style="height: 200px;width: 270px;">
                                                                                            </div>
                                                                                            <div class="flip-box-back">
                                                                                               <img src="wedding1.jpg" style="height: 200px;width: 270px;"> 
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                   
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <style></style>
                                                                <div
                                                                    class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3 vc_col-xs-12">
                                                                    <div
                                                                        class="vc_column-inner vc_custom_1448636187895">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="kleo-gap"
                                                                                style="height:25px;line-height:25px;">
                                                                            </div>
                                                                            <h5 style="font-size: 17px;color: #000000;line-height: 32px;text-align: center"
                                                                                class="vc_custom_heading vc_custom_1572099304825">
                                                                                CORPORATE EVENTS</h5>
                                                                            <div
                                                                                class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_20 vc_sep_pos_align_center vc_separator_no_text vc_custom_1557083438215  vc_custom_1557083438215">
                                                                                <span
                                                                                    class="vc_sep_holder vc_sep_holder_l"><span
                                                                                        style="border-color:#b06b2a;"
                                                                                        class="vc_sep_line"></span></span><span
                                                                                    class="vc_sep_holder vc_sep_holder_r"><span
                                                                                        style="border-color:#b06b2a;"
                                                                                        class="vc_sep_line"></span></span>
                                                                            </div>
                                                                            <div class="kleo_text_column wpb_content_element  vc_custom_1591991771030"
                                                                                style=" color:#000000;">
                                                                                <div class="wpb_wrapper">
                                                                                    <p style="text-align: center;"><span
                                                                                            style="font-weight: 400;">We
                                                                                            take pride in
                                                                                            conceptualizing and
                                                                                            executing all types of
                                                                                            Corporate Events. Ensuring
                                                                                            the constant growth of your
                                                                                            brand presence in the market
                                                                                            is what we offer
                                                                                            here.</span></p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="kleo-gap"
                                                                                style="height:25px;line-height:25px;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="myclass-home-serv wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3 vc_col-xs-12 vc_col-has-fill">
                                                                    <div
                                                                        class="vc_column-inner vc_custom_1555272636556">
                                                                        <div class="wpb_wrapper">
                                                                            <div
                                                                                class="wpb_raw_code wpb_content_element wpb_raw_html">
                                                                                <div class="wpb_wrapper">
                                                                                    <div class="flip-box">
                                                                                        <div class="flip-box-inner">
                                                                                            <div class="flip-box-front" style="display: block !important;  visibility: visible !important;">
                                                                                                <img src="company.jpg" style="height: 200px;width: 270px;">
                                                                                            </div>
                                                                                            <div class="flip-box-back">
                                                                                                <img src="company1.jpg"  style="height: 200px;width: 270px;">
                                                                                            </div>
                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1454273085196 vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                                                                <div
                                                                    class="myclass-home-serv wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3 vc_col-xs-12 vc_col-has-fill">
                                                                    <div
                                                                        class="vc_column-inner vc_custom_1555272642841">
                                                                        <div class="wpb_wrapper">
                                                                            <div
                                                                                class="wpb_raw_code wpb_content_element wpb_raw_html">
                                                                                <div class="wpb_wrapper">
                                                                                    <div class="flip-box">
                                                                                        <div class="flip-box-inner">
                                                                                            <div class="flip-box-front" style="display: block !important;  visibility: visible !important;">
                                                                                                <img src="birthday.jpg" style="height: 200px;width: 270px;">
                                                                                            </div>
                                                                                            <div class="flip-box-back">
                                                                                                <img src="birthday1.jpg"  style="height: 200px;width: 270px;">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3 vc_col-xs-12">
                                                                    <div
                                                                        class="vc_column-inner vc_custom_1448636179945">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="kleo-gap"
                                                                                style="height:25px;line-height:25px;">
                                                                            </div>
                                                                            <h5 style="font-size: 17px;color: #000000;line-height: 32px;text-align: center"
                                                                                class="vc_custom_heading vc_custom_1572099313063">
                                                                                BIRTHDAY PARTY</h5>
                                                                            <div
                                                                                class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_20 vc_sep_pos_align_center vc_separator_no_text vc_custom_1557083448191  vc_custom_1557083448191">
                                                                                <span
                                                                                    class="vc_sep_holder vc_sep_holder_l"><span
                                                                                        style="border-color:#b06b2a;"
                                                                                        class="vc_sep_line"></span></span><span
                                                                                    class="vc_sep_holder vc_sep_holder_r"><span
                                                                                        style="border-color:#b06b2a;"
                                                                                        class="vc_sep_line"></span></span>
                                                                            </div>
                                                                            <div class="kleo_text_column wpb_content_element  vc_custom_1591546436117"
                                                                                style=" color:#000000;">
                                                                                <div class="wpb_wrapper">
                                                                                    <p style="text-align: center;"><span
                                                                                            style="font-weight: 400;">Promising
                                                                                            to always ready to meet your
                                                                                            expectations and execute
                                                                                            your occasion with the same
                                                                                            level of enthusiasm which
                                                                                            you dreamt of. Enjoy your
                                                                                            Personal Event and rely on
                                                                                            us as we are the leading
                                                                                            Event Management Company in
                                                                                            Pune.</span></p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="kleo-gap"
                                                                                style="height:25px;line-height:25px;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="myclass-home-serv wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3 vc_col-xs-12 vc_col-has-fill">
                                                                    <div
                                                                        class="vc_column-inner vc_custom_1555272646801">
                                                                        <div class="wpb_wrapper">
                                                                            <div
                                                                                class="wpb_raw_code wpb_content_element wpb_raw_html">
                                                                                <div class="wpb_wrapper">
                                                                                    <div class="flip-box">
                                                                                        <div class="flip-box-inner">
                                                                                            <div class="flip-box-front" style="display: block !important;  visibility: visible !important;">
                                                                                                <img src="anniversary.jpg" style="height: 200px;width: 270px;">
                                                                                            </div>
                                                                                            <div class="flip-box-back">
                                                                                                <img src="anniversary1.jpg"  style="height: 200px;width: 270px;">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3 vc_col-xs-12">
                                                                    <div
                                                                        class="vc_column-inner vc_custom_1448636218520">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="kleo-gap"
                                                                                style="height:25px;line-height:25px;">
                                                                            </div>
                                                                            <h5 style="font-size: 17px;color: #000000;line-height: 32px;text-align: center"
                                                                                class="vc_custom_heading vc_custom_1572099318183">
                                                                               ANNIVERSARY</h5>
                                                                            <div
                                                                                class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_20 vc_sep_pos_align_center vc_separator_no_text vc_custom_1557083457142  vc_custom_1557083457142">
                                                                                <span
                                                                                    class="vc_sep_holder vc_sep_holder_l"><span
                                                                                        style="border-color:#b06b2a;"
                                                                                        class="vc_sep_line"></span></span><span
                                                                                    class="vc_sep_holder vc_sep_holder_r"><span
                                                                                        style="border-color:#b06b2a;"
                                                                                        class="vc_sep_line"></span></span>
                                                                            </div>
                                                                            <div class="kleo_text_column wpb_content_element  vc_custom_1591991780457"
                                                                                style=" color:#000000;">
                                                                                <div class="wpb_wrapper">
                                                                                    <p style="text-align: center;"><span
                                                                                            style="font-weight: 400;">We
                                                                                            plan and perform at an event
                                                                                            in such a way that it
                                                                                            strengthens the image of
                                                                                            your product and service in
                                                                                            an exceptional way. Call us
                                                                                            and get to know the maximum
                                                                                            impact of your Promotional
                                                                                            Events.</span></p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="kleo-gap"
                                                                                style="height:25px;line-height:25px;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section
                                        class="container-wrap  myclass-mobile myclass-home-mob main-color no-col-gap "
                                        style="background-color: #f8f8f8;padding-top:0px;padding-bottom:0px">
                                        <div class="section-container container">
                                            <div class="vc_row vc_row-fluid row vc_row-has-fill">
                                                <div style="z-index: 10;"
                                                    class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-1 vc_col-lg-10 vc_col-md-offset-1 vc_col-md-10 vc_col-xs-12 vc_col-has-fill">
                                                    <div class="vc_column-inner vc_custom_1454349059316">
                                                        <div class="wpb_wrapper">
                                                            <div
                                                                class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1454273077072 vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                                                                <div
                                                                    class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3 vc_col-xs-12">
                                                                    <div
                                                                        class="vc_column-inner vc_custom_1448636253434">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="kleo-gap"
                                                                                style="height:25px;line-height:25px;">
                                                                            </div>
                                                                            <h5 style="font-size: 17px;color: #000000;line-height: 32px;text-align: center"
                                                                                class="vc_custom_heading vc_custom_1560967852888">
                                                                                WEDDINGS</h5>
                                                                            <div
                                                                                class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_20 vc_sep_pos_align_center vc_separator_no_text vc_custom_1557083432195  vc_custom_1557083432195">
                                                                                <span
                                                                                    class="vc_sep_holder vc_sep_holder_l"><span
                                                                                        style="border-color:#b06b2a;"
                                                                                        class="vc_sep_line"></span></span><span
                                                                                    class="vc_sep_holder vc_sep_holder_r"><span
                                                                                        style="border-color:#b06b2a;"
                                                                                        class="vc_sep_line"></span></span>
                                                                            </div>
                                                                            <div class="kleo_text_column wpb_content_element  vc_custom_1589058567994"
                                                                                style=" color:#000000;">
                                                                                <div class="wpb_wrapper">
                                                                                    <p style="text-align: center;"><span
                                                                                            style="font-weight: 400;">Come
                                                                                            and let’s weave together
                                                                                            your dreams, feelings,
                                                                                            relations and
                                                                                            responsibilities. Allow us
                                                                                            to add that extra element to
                                                                                            your Wedding Event
                                                                                            Management.</span></p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="kleo-gap"
                                                                                style="height:25px;line-height:25px;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="myclass-home-serv wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3 vc_col-xs-12 vc_col-has-fill">
                                                                    <div
                                                                        class="vc_column-inner vc_custom_1555272071764">
                                                                        <div class="wpb_wrapper">
                                                                            <div
                                                                                class="wpb_raw_code wpb_content_element wpb_raw_html">
                                                                                <div class="wpb_wrapper">
                                                                                    <div class="flip-box">
                                                                                        <div class="flip-box-inner">
                                                                                            <div class="flip-box-front">
                                                                                                <img src="wedding3.jpg" style="height: 200px">
                                                                                              </noscript></noscript>
                                                                                            </div>
                                                                                            <div class="flip-box-back">
                                                                                                <a
                                                                                                    href="https://www.emzacevents.com/wedding-planner-in-pune">Know
                                                                                                    More</a></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3 vc_col-xs-12">
                                                                    <div
                                                                        class="vc_column-inner vc_custom_1448636187895">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="kleo-gap"
                                                                                style="height:25px;line-height:25px;">
                                                                            </div>
                                                                            <h5 style="font-size: 17px;color: #000000;line-height: 32px;text-align: center"
                                                                                class="vc_custom_heading vc_custom_1572099324867">
                                                                                CORPORATE EVENTS</h5>
                                                                            <div
                                                                                class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_20 vc_sep_pos_align_center vc_separator_no_text vc_custom_1557083438215  vc_custom_1557083438215">
                                                                                <span
                                                                                    class="vc_sep_holder vc_sep_holder_l"><span
                                                                                        style="border-color:#b06b2a;"
                                                                                        class="vc_sep_line"></span></span><span
                                                                                    class="vc_sep_holder vc_sep_holder_r"><span
                                                                                        style="border-color:#b06b2a;"
                                                                                        class="vc_sep_line"></span></span>
                                                                            </div>
                                                                            <div class="kleo_text_column wpb_content_element  vc_custom_1591991788829"
                                                                                style=" color:#000000;">
                                                                                <div class="wpb_wrapper">
                                                                                    <p style="text-align: center;">We
                                                                                        take pride in conceptualizing
                                                                                        and executing all types of
                                                                                        Corporate Events. Ensuring the
                                                                                        constant growth of your brand
                                                                                        presence in the market is what
                                                                                        we offer here.</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="kleo-gap"
                                                                                style="height:25px;line-height:25px;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="myclass-home-serv wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3 vc_col-xs-12 vc_col-has-fill">
                                                                    <div
                                                                        class="vc_column-inner vc_custom_1555272636556">
                                                                        <div class="wpb_wrapper">
                                                                            <div
                                                                                class="wpb_raw_code wpb_content_element wpb_raw_html">
                                                                                <div class="wpb_wrapper">
                                                                                    <div class="flip-box">
                                                                                        <div class="flip-box-inner">
                                                                                            <div class="flip-box-front">
                                                                                                <img alt="room, indoors, meeting room, furniture, chair"
                                                                                                    title=“corporate
                                                                                                    event management
                                                                                                    company in pune”
                                                                                                    style=" height:200px"
                                                                                                    data-src="https://www.emzacevents.com/wp-content/uploads/2019/11/conference-event-room.jpg"
                                                                                                    class="lazyload"
                                                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                                                                        alt="room, indoors, meeting room, furniture, chair"
                                                                                                        title=“corporate
                                                                                                        event management
                                                                                                        company in pune”
                                                                                                        style=" height:200px"
                                                                                                        data-src="https://www.emzacevents.com/wp-content/uploads/2019/11/conference-event-room.jpg"
                                                                                                        class="lazyload"
                                                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                                                                            src="https://www.emzacevents.com/wp-content/uploads/2019/11/conference-event-room.jpg"
                                                                                                            alt="room, indoors, meeting room, furniture, chair"
                                                                                                            title=“corporate
                                                                                                            event
                                                                                                            management
                                                                                                            company in
                                                                                                            pune”
                                                                                                            style=" height:200px"></noscript></noscript>
                                                                                            </div>
                                                                                            <div class="flip-box-back">
                                                                                                <a
                                                                                                    href="https://www.emzacevents.com/services/corporate-event-management/">Know
                                                                                                    More</a></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1454273085196 vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                                                                <div
                                                                    class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3 vc_col-xs-12">
                                                                    <div
                                                                        class="vc_column-inner vc_custom_1448636179945">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="kleo-gap"
                                                                                style="height:25px;line-height:25px;">
                                                                            </div>
                                                                            <h5 style="font-size: 17px;color: #000000;line-height: 32px;text-align: center"
                                                                                class="vc_custom_heading vc_custom_1572099329884">
                                                                                PERSONAL EVENTS</h5>
                                                                            <div
                                                                                class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_20 vc_sep_pos_align_center vc_separator_no_text vc_custom_1557083448191  vc_custom_1557083448191">
                                                                                <span
                                                                                    class="vc_sep_holder vc_sep_holder_l"><span
                                                                                        style="border-color:#b06b2a;"
                                                                                        class="vc_sep_line"></span></span><span
                                                                                    class="vc_sep_holder vc_sep_holder_r"><span
                                                                                        style="border-color:#b06b2a;"
                                                                                        class="vc_sep_line"></span></span>
                                                                            </div>
                                                                            <div class="kleo_text_column wpb_content_element  vc_custom_1591546476438"
                                                                                style=" color:#000000;">
                                                                                <div class="wpb_wrapper">
                                                                                    <p style="text-align: center;"><span
                                                                                            style="font-weight: 400;">Promising
                                                                                            to always ready to meet your
                                                                                            expectations and execute
                                                                                            your occasion with the same
                                                                                            level of enthusiasm which
                                                                                            you dreamt of. Enjoy your
                                                                                            Personal Event and rely on
                                                                                            us as we are the leading
                                                                                            Event Management Company in
                                                                                            Pune.</span></p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="kleo-gap"
                                                                                style="height:25px;line-height:25px;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="myclass-home-serv wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3 vc_col-xs-12 vc_col-has-fill">
                                                                    <div
                                                                        class="vc_column-inner vc_custom_1555272642841">
                                                                        <div class="wpb_wrapper">
                                                                            <div
                                                                                class="wpb_raw_code wpb_content_element wpb_raw_html">
                                                                                <div class="wpb_wrapper">
                                                                                    <div class="flip-box">
                                                                                        <div class="flip-box-inner">
                                                                                            <div class="flip-box-front">
                                                                                                <img alt="balloon decoration for birthday party"
                                                                                                    title=“personal
                                                                                                    event management
                                                                                                    company in pune”
                                                                                                    style=" height:200px"
                                                                                                    data-src="https://www.emzacevents.com/wp-content/uploads/2020/02/personal-birthday-party-img-1.jpg"
                                                                                                    class="lazyload"
                                                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                                                                        src="https://www.emzacevents.com/wp-content/uploads/2020/02/personal-birthday-party-img-1.jpg"
                                                                                                        alt="balloon decoration for birthday party"
                                                                                                        title=“personal
                                                                                                        event management
                                                                                                        company in pune”
                                                                                                        style=" height:200px"></noscript>
                                                                                            </div>
                                                                                            <div class="flip-box-back">
                                                                                                <a
                                                                                                    href="https://www.emzacevents.com/services/personal-events/">Know
                                                                                                    More</a></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3 vc_col-xs-12">
                                                                    <div
                                                                        class="vc_column-inner vc_custom_1448636218520">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="kleo-gap"
                                                                                style="height:25px;line-height:25px;">
                                                                            </div>
                                                                            <h5 style="font-size: 17px;color: #000000;line-height: 32px;text-align: center"
                                                                                class="vc_custom_heading vc_custom_1572099334033">
                                                                                PROMOTIONAL EVENTS</h5>
                                                                            <div
                                                                                class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_20 vc_sep_pos_align_center vc_separator_no_text vc_custom_1557083457142  vc_custom_1557083457142">
                                                                                <span
                                                                                    class="vc_sep_holder vc_sep_holder_l"><span
                                                                                        style="border-color:#b06b2a;"
                                                                                        class="vc_sep_line"></span></span><span
                                                                                    class="vc_sep_holder vc_sep_holder_r"><span
                                                                                        style="border-color:#b06b2a;"
                                                                                        class="vc_sep_line"></span></span>
                                                                            </div>
                                                                            <div class="kleo_text_column wpb_content_element  vc_custom_1591991801967"
                                                                                style=" color:#000000;">
                                                                                <div class="wpb_wrapper">
                                                                                    <p style="text-align: center;"><span
                                                                                            style="font-weight: 400;">We
                                                                                            plan and perform at an event
                                                                                            in such a way that it
                                                                                            strengthens the image of
                                                                                            your product and service in
                                                                                            an exceptional way. Call us
                                                                                            and get to know the maximum
                                                                                            impact of your Promotional
                                                                                            Events.</span></p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="kleo-gap"
                                                                                style="height:25px;line-height:25px;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="myclass-home-serv wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3 vc_col-xs-12 vc_col-has-fill">
                                                                    <div
                                                                        class="vc_column-inner vc_custom_1555272646801">
                                                                        <div class="wpb_wrapper">
                                                                            <div
                                                                                class="wpb_raw_code wpb_content_element wpb_raw_html">
                                                                                <div class="wpb_wrapper">
                                                                                    <div class="flip-box">
                                                                                        <div class="flip-box-inner">
                                                                                            <div class="flip-box-front">
                                                                                                <img alt="man in black suit cutting red ribbon of newly opened shop"
                                                                                                    title=“promotional
                                                                                                    ribbon cutting
                                                                                                    event”
                                                                                                    style=" height:200px"
                                                                                                    data-src="https://www.emzacevents.com/wp-content/uploads/2019/11/corporate-promotional-ribbon-cutting.jpg"
                                                                                                    class="lazyload"
                                                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                                                                        alt="man in black suit cutting red ribbon of newly opened shop"
                                                                                                        title=“promotional
                                                                                                        ribbon cutting
                                                                                                        event”
                                                                                                        style=" height:200px"
                                                                                                        data-src="https://www.emzacevents.com/wp-content/uploads/2019/11/corporate-promotional-ribbon-cutting.jpg"
                                                                                                        class="lazyload"
                                                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                                                                            src="https://www.emzacevents.com/wp-content/uploads/2019/11/corporate-promotional-ribbon-cutting.jpg"
                                                                                                            alt="man in black suit cutting red ribbon of newly opened shop"
                                                                                                            title=“promotional
                                                                                                            ribbon
                                                                                                            cutting
                                                                                                            event”
                                                                                                            style=" height:200px"></noscript></noscript>
                                                                                            </div>
                                                                                            <div class="flip-box-back">
                                                                                                <a
                                                                                                    href="https://www.emzacevents.com/services/promotional-events/">Know
                                                                                                    More</a></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    
                                    
                                </div><!--end article-content-->
                            </article> <!-- End  Article -->
                        </div><!--end wrap-content-->
                    </div><!--end main-page-template-->
                </div><!--end .container-->
            </section> <!--END MAIN SECTION-->
      <div id="footer" class="footer-color border-top">
        <div class="container">
            <div class="template-page tpl-no">
                <div class="wrap-content">
                    <div class="row">
                        <div class="col-sm-3">
                            <div id="footer-sidebar-1" class="footer-sidebar widget-area" role="complementary">

                                <div id="text-2" class="widget widget_text">
                                    <div class="textwidget">
                                        <div class="kleo_text_column wpb_content_element vc_custom_1556646714747">
                                            <div class="wpb_wrapper">
                                                <p>Creating unforgettable experiences, one event at a time! From planning to execution, we bring your vision to life with seamless coordination and exceptional service. Let us make your moments extraordinary!</p>
                                                <p>
                                                    "Your Vision, Our Expertise - Flawless Event Every Time!"
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div id="footer-sidebar-2" class="footer-sidebar widget-area" role="complementary" style="padding-left: 30px;padding-top: 20px;">
                                <img src="logo.png" style="border-radius: 50%; height: 200px; width: 200px;">
                            </div>
                          </div>
                     
                        <div class="col-sm-3">
                            <div id="footer-sidebar-3" class="footer-sidebar widget-area" role="complementary">
                                <div id="custom_html-2" class="widget_text widget widget_custom_html">
                                    <h4 class="widget-title">Connect</h4>
                                    <div class="textwidget custom-html-widget">
                                        <p class="myfooter3-1"> Address: <span>Fergusson College (Autonomous), Fc road, Shivajinagar,
                                                Pune - 411004</span></p>
                                        <p class="myfooter3-2"> E-Mail: <span><a
                                                    href="mrunaldahibhate08@gmail.com" target="_top"
                                                    rel="noopener">nameve@gmail.com</a></span></p>
                                        <p class="myfooter3-2"> Phone: <span><a href="tel:+919503946687 ">+91 9503946687</a>
                                             <br /> &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="tel:+919096424416">+91 9096424416</a>
                                            <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="tel:+917249790115">+91 7249790115</a>
                                        </span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div id="footer-sidebar-4" class="footer-sidebar widget-area" role="complementary">
                                <div id="custom_html-3" class="widget_text widget widget_custom_html">
                                    <div class="textwidget custom-html-widget">
                                        <img src="fergusson2.png" alt="" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div id="ocvb-container" class="not-ready ocvb-enabled ocvb-display-type-banner" data-message-alignment="center"
        data-display-type="none" data-allow-close="true" data-title-header-size="h2">
       
     <button type="button"
        aria-controls="rmp-container-1447" aria-label="Menu Trigger" id="rmp_menu_trigger-1447"
        class="rmp_menu_trigger rmp-menu-trigger-boring"> <span class="rmp-trigger-box"> <span
                class="responsive-menu-pro-inner"></span> </span> </button>
    <div id="rmp-container-1447" class="rmp-container rmp-container rmp-slide-left">
        <div id="rmp-menu-title-1447" class="rmp-menu-title"> <span class="rmp-menu-title-link"> <span></span> </span>
        </div>
        <div id="rmp-menu-wrap-1447" class="rmp-menu-wrap">
            <ul id="rmp-menu-1447" class="rmp-menu" role="menubar" aria-label="Default Menu">
                <li id="rmp-menu-item-370"
                    class=" menu-item menu-item-type-post_type menu-item-object-page rmp-menu-item rmp-menu-top-level-item"
                    role="none"><a href="#" class="rmp-menu-item-link"
                        role="menuitem">About Us</a></li>
                <li id="rmp-menu-item-371"
                    class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children rmp-menu-item rmp-menu-item-has-children rmp-menu-top-level-item"
                    role="none"><a href="#" class="rmp-menu-item-link"
                        role="menuitem">Services<div class="rmp-menu-subarrow">▼</div></a>
                    <ul aria-label="Services" role="menu" data-depth="2" class="rmp-submenu rmp-submenu-depth-1">
                        <li id="rmp-menu-item-1018"
                            class=" menu-item menu-item-type-post_type menu-item-object-page rmp-menu-item rmp-menu-sub-level-item"
                            role="none"><a href="#"
                                class="rmp-menu-item-link" role="menuitem">Weddings</a></li>
                        <li id="rmp-menu-item-372"
                            class=" menu-item menu-item-type-post_type menu-item-object-page rmp-menu-item rmp-menu-sub-level-item"
                            role="none"><a href="#"
                                class="rmp-menu-item-link" role="menuitem">Corporate Events</a></li>
                        <li id="rmp-menu-item-964"
                            class=" menu-item menu-item-type-post_type menu-item-object-page rmp-menu-item rmp-menu-sub-level-item"
                            role="none"><a href="#"
                                class="rmp-menu-item-link" role="menuitem">Personal Events</a></li>
                        <li id="rmp-menu-item-373"
                            class=" menu-item menu-item-type-post_type menu-item-object-page rmp-menu-item rmp-menu-sub-level-item"
                            role="none"><a href="#"
                                class="rmp-menu-item-link" role="menuitem">Promotional Events</a></li>
                    </ul>
                </li>
                <li id="rmp-menu-item-1436"
                    class=" menu-item menu-item-type-post_type menu-item-object-page rmp-menu-item rmp-menu-top-level-item"
                    role="none"><a href="#" class="rmp-menu-item-link"
                        role="menuitem">Blogs</a></li>
                <li id="rmp-menu-item-378"
                    class=" menu-item menu-item-type-post_type menu-item-object-page rmp-menu-item rmp-menu-top-level-item"
                    role="none"><a href="#" class="rmp-menu-item-link"
                        role="menuitem">Showcase</a></li>
                <li id="rmp-menu-item-379"
                    class=" menu-item menu-item-type-post_type menu-item-object-page rmp-menu-item rmp-menu-top-level-item"
                    role="none"><a href="#" class="rmp-menu-item-link"
                        role="menuitem">Feedback</a></li>
            </ul>
        </div>
        <div id="rmp-menu-additional-content-1447" class="rmp-menu-additional-content"></div>
    </div>   
    <link href="1.css" rel="stylesheet"
        property="stylesheet" type="text/css" media="all">

   
 
</body>

</html>
