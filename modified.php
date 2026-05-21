<?php
session_start();
?>

<!DOCTYPE html>
<html class="no-js" lang="en-US">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Contact Us | NAM Events</title>
    
   
     <link rel='stylesheet' id='dashicons-css'
        href='https://www.emzacevents.com/wp-includes/css/dashicons.min.css?ver=6.3.1' type='text/css' media='all' /> 
    <link rel='stylesheet' id='rs-plugin-settings-css'
        href='https://www.emzacevents.com/wp-content/plugins/revslider/public/assets/css/rs6.css?ver=6.1.2'
        type='text/css' media='all' />
    
    <!-- </style>-->
     <link rel='stylesheet' id='bootstrap-css'
        href='https://www.emzacevents.com/wp-content/themes/kleo/assets/css/bootstrap.min.css?ver=4.3.10'
        type='text/css' media='all' />
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
    <link rel='stylesheet' id='js_composer_front-css'
        href='https://www.emzacevents.com/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=5.7'
        type='text/css' media='all' />
    <link rel='stylesheet' id='kleo-colors-css'
        href='https://www.emzacevents.com/wp-content/uploads/custom_styles/dynamic.css?ver=4.3.10.1638117197'
        type='text/css' media='all' />
    <link rel='stylesheet' id='kleo-plugins-css'
        href='https://www.emzacevents.com/wp-content/themes/kleo/assets/css/plugins.min.css?ver=4.3.10' type='text/css'
        media='all' /> 
        <style>
            /* This file contents common styling of menus. */

.rmp-container {
  display: none;
  visibility: visible;
  padding: 0px 0px 0px 0px;
  z-index: 99998;
  transition: all 0.3s;
  /*Scrolling bar in menu setting box */
}

.rmp-container.rmp-fade-top,
.rmp-container.rmp-fade-left,
.rmp-container.rmp-fade-right,
.rmp-container.rmp-fade-bottom {
  display: none;
}

.rmp-container.rmp-slide-left,
.rmp-container.rmp-push-left {
  transform: translateX(-100%);
  -ms-transform: translateX(-100%);
  -webkit-transform: translateX(-100%);
  -moz-transform: translateX(-100%);
}

.rmp-container.rmp-slide-left.rmp-menu-open,
.rmp-container.rmp-push-left.rmp-menu-open {
  transform: translateX(0);
  -ms-transform: translateX(0);
  -webkit-transform: translateX(0);
  -moz-transform: translateX(0);
}

.rmp-container.rmp-slide-right,
.rmp-container.rmp-push-right {
  transform: translateX(100%);
  -ms-transform: translateX(100%);
  -webkit-transform: translateX(100%);
  -moz-transform: translateX(100%);
}

.rmp-container.rmp-slide-right.rmp-menu-open,
.rmp-container.rmp-push-right.rmp-menu-open {
  transform: translateX(0);
  -ms-transform: translateX(0);
  -webkit-transform: translateX(0);
  -moz-transform: translateX(0);
}

.rmp-container.rmp-slide-top,
.rmp-container.rmp-push-top {
  transform: translateY(-100%);
  -ms-transform: translateY(-100%);
  -webkit-transform: translateY(-100%);
  -moz-transform: translateY(-100%);
}

.rmp-container.rmp-slide-top.rmp-menu-open,
.rmp-container.rmp-push-top.rmp-menu-open {
  transform: translateY(0);
  -ms-transform: translateY(0);
  -webkit-transform: translateY(0);
  -moz-transform: translateY(0);
}

.rmp-container.rmp-slide-bottom,
.rmp-container.rmp-push-bottom {
  transform: translateY(100%);
  -ms-transform: translateY(100%);
  -webkit-transform: translateY(100%);
  -moz-transform: translateY(100%);
}

.rmp-container.rmp-slide-bottom.rmp-menu-open,
.rmp-container.rmp-push-bottom.rmp-menu-open {
  transform: translateX(0);
  -ms-transform: translateX(0);
  -webkit-transform: translateX(0);
  -moz-transform: translateX(0);
}

.rmp-container::-webkit-scrollbar {
  width: 0px;
}

.rmp-container ::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px transparent;
}

.rmp-container ::-webkit-scrollbar-thumb {
  background: transparent;
}

.rmp-container ::-webkit-scrollbar-thumb:hover {
  background: transparent;
}

.rmp-container .rmp-menu-wrap .rmp-menu {
  transition: none;
  border-radius: 0;
  box-shadow: none;
  background: none;
  border: 0;
  bottom: auto;
  box-sizing: border-box;
  clip: auto;
  color: #666;
  display: block;
  float: none;
  font-family: inherit;
  font-size: 14px;
  height: auto;
  left: auto;
  line-height: 1.7;
  list-style-type: none;
  margin: 0;
  min-height: auto;
  max-height: none;
  opacity: 1;
  outline: none;
  overflow: visible;
  padding: 0;
  position: relative;
  pointer-events: auto;
  right: auto;
  text-align: left;
  text-decoration: none;
  text-indent: 0;
  text-transform: none;
  transform: none;
  top: auto;
  visibility: inherit;
  width: auto;
  word-wrap: break-word;
  white-space: normal;
}

.rmp-container .rmp-menu-additional-content {
  display: block;
  word-break: break-word;
}

.rmp-container .rmp-menu-title {
  display: flex;
  flex-direction: column;
}

.rmp-container .rmp-menu-title .rmp-menu-title-image {
  max-width: 100%;
  margin-bottom: 15px;
  display: block;
  margin: auto;
  margin-bottom: 15px;
}

button.rmp_menu_trigger {
  z-index: 999999;
  overflow: hidden;
  outline: none;
  border: 0;
  display: none;
  margin: 0;
  transition: transform 0.5s, background-color 0.5s;
  padding: 0;
}

button.rmp_menu_trigger .responsive-menu-pro-inner::before,
button.rmp_menu_trigger .responsive-menu-pro-inner::after {
  content: "";
  display: block;
}

button.rmp_menu_trigger .responsive-menu-pro-inner::before {
  top: 10px;
}

button.rmp_menu_trigger .responsive-menu-pro-inner::after {
  bottom: 10px;
}

button.rmp_menu_trigger .rmp-trigger-box {
  width: 40px;
  display: inline-block;
  position: relative;
  pointer-events: none;
  vertical-align: super;
}

/*  Menu Trigger Boring Animation */
.rmp-menu-trigger-boring .responsive-menu-pro-inner {
  transition-property: none;
}

.rmp-menu-trigger-boring .responsive-menu-pro-inner::after,
.rmp-menu-trigger-boring .responsive-menu-pro-inner::before {
  transition-property: none;
}

.rmp-menu-trigger-boring.is-active .responsive-menu-pro-inner {
  transform: rotate(45deg);
}

.rmp-menu-trigger-boring.is-active .responsive-menu-pro-inner:before {
  top: 0;
  opacity: 0;
}

.rmp-menu-trigger-boring.is-active .responsive-menu-pro-inner:after {
  bottom: 0;
  transform: rotate(-90deg);
}

        </style>
 

    <style type="text/css" id="wp-custom-css">
        .kleo-navbar-fixed.navbar-transparent #header {
            background-color: #0b0b0b8c !important;
        }

        .navbar-transparent .navbar .kleo-main-header {
            background-color: #0808088c !important;
        }
    </style>
    <style type="text/css" data-type="vc_shortcodes-custom-css">
        .vc_custom_1557518588819 {
            margin-top: 40px !important;
            margin-bottom: 40px;
            background-color: #ffffff !important;
            box-shadow: 0.1px 0.1px 5px black;
        }

        .vc_custom_1557520191980 {
            margin-top: 0px !important;
            margin-right: 0px !important;
            margin-bottom: 0px !important;
            margin-left: 0px !important;
        }

        .vc_custom_1557520526950 {
            margin-right: 0px !important;
            margin-left: 0px !important;
        }

        .vc_custom_1557520138977 {
            padding-right: 0px !important;
            padding-left: 0px !important;
        }

        .vc_custom_1557514820698 {
            padding-right: 0px !important;
            padding-left: 0px !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }

        .vc_custom_1557519565905 {
            margin-bottom: 15px !important;
        }

        .vc_custom_1557520099849 {
            margin-bottom: 0px !important;
        }

        .vc_custom_1572277040062 {
            margin-bottom: 20px !important;
            padding-right: 40px !important;
            padding-left: 40px !important;
        }

        .vc_custom_1557519978638 {
            margin-bottom: 15px !important;
        }

        .vc_custom_1557520106683 {
            margin-bottom: 0px !important;
        }

        .vc_custom_1589574018814 {
            margin-bottom: 20px !important;
            padding-right: 40px !important;
            padding-left: 40px !important;
        }

        .vc_custom_1557519705889 {
            margin-bottom: 15px !important;
        }

        .vc_custom_1557520113154 {
            margin-bottom: 0px !important;
        }

        .vc_custom_1593294219689 {
            margin-bottom: 20px !important;
            padding-right: 40px !important;
            padding-left: 40px !important;
        }

        .vc_custom_1594498434154 {
            padding-right: 0px !important;
            padding-left: 0px !important;
            background-image: url(new.jpg) !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }

        .vc_custom_1558381035602 {
            padding-right: 0px !important;
            padding-left: 0px !important;
        }

        .vc_custom_1557083422299 {
            margin-bottom: 35px !important;
        }
    </style><noscript>
        <style type="text/css">
            .wpb_animate_when_almost_visible {
                opacity: 1;
            }
        </style>
    </noscript>
</head>


<body
    class="page-template page-template-page-templates page-template-full-width page-template-page-templatesfull-width-php page page-id-117 kleo-navbar-fixed navbar-resize navbar-transparent on-dark-bg footer-bottom wpb-js-composer js-comp-ver-5.7 vc_responsive"
    itemscope itemtype="http://schema.org/WebPage">

    <!--Attributes-->
    <div class="kleo-page">
        <!-- HEADER SECTION
   ================================================ -->
        <div id="header" class="header-color">
            <div class="navbar" role="navigation">
                <div class="kleo-main-header header-split">
                    <div class="container">
                     
                        <div class="navbar-header">
                            <div class="kleo-mobile-switch"> <button type="button" class="navbar-toggle"
                                    data-toggle="collapse" data-target=".nav-collapse"> <span class="sr-only">Toggle
                                        navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                                    <span class="icon-bar"></span> </button>
                            </div>
                            <div class="kleo-mobile-icons"></div> <strong class="logo"> <img src="logo.png" style="height: 100px; border-radius: 50%; width: 100px;" id="logo_img" ><noscript>
                                            <img src="logo.png" id="logo_img" style="height: 100px; width: 100px;" >
                                         </noscript>  </strong>
                        </div> <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="primary-menu collapse navbar-collapse nav-collapse">
                            <ul id="menu-header-l" class="nav navbar-nav">
                                <li id="menu-item-369"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-369"><a
                                        title="About Us" href="about us modified.php">About Us</a></li>
                                <li id="menu-item-188"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-188 dropdown mega-4-cols">
                                    <a title="Services" href="services.php"
                                        class="js-activated">Services <span class="caret"></span></a>
                                     
                                </li>
                            </ul>
                        </div>
                        <div class="secondary-menu collapse navbar-collapse nav-collapse">
                            <ul id="menu-header-r" class="nav navbar-nav">
                                <li id="menu-item-1434"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1434 dropdown mega-2-cols">
                                    <a title="Resources" href="#" class="js-activated">Resources <span
                                            class="caret"></span></a>
                                     <ul role="menu" class="dropdown-menu sub-menu pull-left">
                                        <!--<li id="menu-item-1435"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1435">
                                            <a title="Blogs" href="blog.php">Blogs</a></li>-->
                                        <li id="menu-item-187"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-187">
                                            <a title="Showcase"
                                                href="gallery.php">Gallery</a></li>
                                    </ul> 
                                </li>
                                <li id="menu-item-144"
                                    class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-117 current_page_item menu-item-144 active">
                                    <a title="Contact Us" href="modified.php">Feedback</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end container-->
                </div>
            </div>
        </div>
    
        <style>
            div#myModal123 .modal-title {
                text-align: center;
                font-size: 20px;
            }

            .kleo-main-header .nav>li.active>a,
            .kleo-main-header .nav>li>a:hover {
                box-shadow: inset 0px -5px 0px 0px #ffffff;
            }

            #ocvb-container #ocvb-container-notice-link.ocvb-enabled {
                display: block;
                text-align: center;
                margin-top: 30px;
            }

            #ocvb-container[data-allow-close=true] #ocvb-container-notice-text {
                padding-right: 0;
            }

            div#myModal123 .modal-header {
                border: none;
            }

            div#myModal123 .modal-body {
                padding-top: 0px;
            }

            .navbar-transparent .dropdown-submenu:hover>a {
                background-color: transparent !important;
            }

            div#myModal123 .modal-dialog {
                top: 160px;
            }

            ul.dropdown-menu.sub-menu {
                background: #000000e6 !important;
            }

            div#myModal123 .wpcf7-form-control {
                border: none;
                border-bottom: solid 1px #000;
                border-radius: 0px;
                width: 100%;
            }

            div#myModal123 span.wpcf7-form-control-wrap {
                padding-bottom: 5px;
            }

            div#myModal123 textarea#id_msg {
                height: 80px;
            }

            button#responsive-menu-button {
                display: none;
            }

            div#myModal123 input.wpcf7-form-control.wpcf7-submit.book-submit-button {
                text-decoration: none !important;
                padding: 9px 53px;
                margin-top: 5px;
                display: -webkit-inline-box;
                
                background: linear-gradient(to left, #a96428, #c28d38);
                color: #fff;
                border-radius: 50px;
                border: 2px solid transparent;
                width: auto !important;
                height: 42px;
                font-size: 16px;
            }

            div#myModal123 input.wpcf7-form-control.wpcf7-submit.book-submit-button:hover {
                color: #fff;
                background: linear-gradient(to left, #c28d38, #a96428);
            }

            .kleo-go-top {
                bottom: 100px
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

            /*------FOOTER CSS -----------*/

            div#media_image-2 {
                text-align: center;
            }

            div#media_image-2 img {
                width: 50%;
            }

            div#text-2 .textwidget .kleo_text_column.wpb_content_element {
                padding: 0 !important;
            }

            div#text-2 .textwidget .kleo_text_column.wpb_content_element p {
                text-align: justify
            }

            h4.widget-title {
                text-transform: uppercase;
                text-underline-position: under;
                text-decoration: underline;
                text-decoration-color: #b06b2a;
            }

            input#myidname,
            input#myidemail,
            input#myidphone {
                background: transparent;
                border-bottom: 1px solid #fff;
                height: 30px;
                color: #fff;
                margin-bottom: 5px;
            }

            input.wpcf7-form-control.wpcf7-submit {
                background-image: linear-gradient(to top right, #a96428, #c28d38);
                color: #fff;
                padding: 7px 18px;
                font-size: 16px;
                outline: 0
            }

            input.wpcf7-form-control.wpcf7-submit:hover {
                background-image: linear-gradient(to top right, #c28d38, #a96428);
            }

            ul#menu-services li a:before {
                content: "\f068";
                font-family: FontAwesome;
                color: #b06b2a;
                margin-right: 10px;
            }

            ul#menu-services a {
                font-size: 15px;
                border: none;
            }

            div#nav_menu-2 {
                padding-left: 60px;
            }

            div#custom_html-2 p {
                margin: 0;
                padding: 9px 0;
                font-size: 15px;
                color: #b06a2a;
            }

            div#custom_html-2 p span,
            div#custom_html-2 p span a {
                color: #fff;
            }

            div#custom_html-2 p.myfooter3-1 span a:hover,
            div#custom_html-2 p.myfooter3-2 span a:hover {
                color: #b06a2a;
            }

            .kleo-main-header.header-split {
                background-color: #ffffff14 !important;
            }

            .kleo-main-header.header-split.header-scrolled {
                background-color: #fff !important;
            }

            .kleo-main-header.header-split.header-scrolled li a {
                color: #000 !important;
            }

            .kleo-main-header:not(.header-left):not(.header-centered) .navbar-collapse>ul>li>a {
                font-size: 18px;
                text-transform: uppercase;
                letter-spacing: 2px;
            }

            /*------FOOTER CSS -----------*/
            /*------MODAL CSS -----------*/
            div#myModal123 {
                position: fixed;
            }

            div#myModal123 .modal-content {
                background-image: linear-gradient(to top right, #a96428, #c28d38);
            }

            div#myModal123 .modal-header {
                padding-top: 40px;
                padding-bottom: 25px;
            }

            div#myModal123 .modal-header .close {
                color: #fff;
                opacity: 1;
                outline: none;
            }

            div#myModal123 .modal-title {
                color: #fff;
                text-transform: uppercase;
                TEXT-DECORATION: UNDERLINE;
                TEXT-UNDERLINE-POSITION: UNDER;
                TEXT-DECORATION-COLOR: #FFF;
            }

            div#myModal123 .modal-body {
                padding: 40px;
                padding-top: 10px
            }

            div#myModal123 label {
                color: #fff;
                width: 100%;
                text-transform: uppercase;
            }

            div#myModal123 .wpcf7-form-control {
                border: none;
                border-radius: 0px;
                width: 100%;
                height: 40px;
                border-bottom: 1px solid #fff;
                background: none;
                color: #fff;
            }

            div#myModal123 input.wpcf7-form-control.wpcf7-submit {
                width: auto;
                background: #fff;
                color: #000;
                margin-top: 20px;
                outline: none;
                border: 1px solid #fff;
            }
            /* From Uiverse.io by iZOXVL */ 
.boton-elegante {
  padding: 7px 30px;
  /* border: 2px solid #2c2c2c; */
  background-color:rgb(177, 117, 15);
  color: #ffffff;
  font-size: 1.5rem;
  cursor: pointer;
  border-radius: 0Px;
  transition: all 0.4s ease;
  outline: none;
  position: relative;
  overflow: hidden;
  font-weight: bold;
}

.boton-elegante::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: radial-gradient(
    circle,
    rgba(255, 255, 255, 0.25) 0%,
    rgba(255, 255, 255, 0) 70%
  );
  transform: scale(0);
  transition: transform 0.5s ease;
}

.boton-elegante:hover::after {
  transform: scale(4);
}

.boton-elegante:hover {
  border-color: #666666;
/* background: #bd9b30;*/
}

            div#myModal123 input.wpcf7-form-control.wpcf7-submit:hover {
                background: transparent;
                color: #fff;
            }

            div#myModal123 textarea.wpcf7-form-control.wpcf7-textarea {
                HEIGHT: AUTO !IMPORTANT;
            }

            .myclass-social-heading {
                background-image: linear-gradient(to top right, rgba(169, 100, 40, 1), rgba(194, 141, 56, 0.9));
                padding: 10px 20px;
                margin: 0;
            }

            .myclass-social-box {
                border: 1px solid #b06a2a
            }

            /*------MODAL CSS -----------*/
            @media (max-width: 767px) {
                .float-fb3 {
                    width: 100%;
                    right: 0px;
                    border-radius: 0px;
                    border-top: 1px solid #fff;
                }
            }

            .kleo-go-top i {
                color: #c29059;
            }

            .kleo-go-top.on {
                background: #e7d5bd;
                border-radius: 0 !important;
                border: 1px solid #c29059;
            }

            .kleo-go-top:hover {
                background-image: linear-gradient(to top right, #a96428, #c28d38);
            }

            .kleo-go-top:hover i {
                color: #fff;
            }

            @media only screen and (max-width: 991px) {
                img#logo_img {
                    width: 35%;
                }

                div#media_image-2 img {
                    width: 35%;
                }

                div#nav_menu-2 {
                    padding-left: 0;
                }

                .kleo-main-header .navbar-toggle {
                    display: none;
                }

                button#responsive-menu-button {
                    position: fixed;
                    background: #141414 !important;
                    width: 40px;
                    height: 40px;
                    display: block;
                }

                .responsive-menu-inner,
                .responsive-menu-inner::before,
                .responsive-menu-inner::after {
                    background-color: #b06b2a !important;
                }

                #responsive-menu-container {
                    text-align: center;
                    width: 100%;
                    background-image: linear-gradient(to top right, rgba(169, 100, 40, 1), rgba(194, 141, 56, 0.9)) !important;
                    display: flex;
                    align-items: center;
                }

                #responsive-menu-container #responsive-menu-wrapper {
                    background: transparent;
                    width: 100%;
                }

                #responsive-menu-container #responsive-menu li.responsive-menu-item .responsive-menu-item-link {
                    font-size: 20px;
                    border: none !important;
                    text-transform: uppercase;
                    background: transparent;
                }

                #responsive-menu-container #responsive-menu li.responsive-menu-item a:hover {
                    background: transparent;
                }

                #responsive-menu-container #responsive-menu ul.responsive-menu-submenu.responsive-menu-submenu-open {
                    width: 75%;
                    border: 1px solid #fff !important;
                    margin: 0 auto;
                }

                #responsive-menu-container #responsive-menu li.responsive-menu-item a .responsive-menu-subarrow,
                #responsive-menu-container #responsive-menu li.responsive-menu-item a .responsive-menu-subarrow.responsive-menu-subarrow-active:hover {
                    border-left: transparent !important;
                    background-color: transparent !important;
                    font-size: 14px !important;
                    right: 5% !important;
                }

                #responsive-menu-container #responsive-menu ul.responsive-menu-submenu li.responsive-menu-item .responsive-menu-item-link {
                    font-size: 13px;
                    padding: 0 !important;
                    background: transparent;
                }
            }

            @media only screen and (max-width: 991px) and (orientation:landscape) {
                .logo {
                    text-align: left;
                }

                img#logo_img {
                    width: 25%;
                }

                #footer div#footer-sidebar-1 .widget {
                    margin-bottom: 25px;
                }

                div#media_image-2 img {
                    width: 50%;
                }
            }

            @media only screen and (max-width: 991px) and (orientation:landscape) {
                .logo {
                    text-align: left;
                }

                img#logo_img {
                    width: 25%;
                }

                #footer div#footer-sidebar-1 .widget {
                    margin-bottom: 25px;
                }

                div#media_image-2 img {
                    width: 25%;
                }
            }

            .myclass-modal-btn {
                color: #ffffff !important;
                border-width: 1px;
                font-size: 14px !important;
                font-weight: 700;
                text-transform: uppercase;
                padding: 6px 12px;
                line-height: 20px;
                display: block;
                width: 62%;
                letter-spacing: 1.7px;
                margin: 0 auto;
                border: 1px solid transparent;
                text-align: center !important;
            }

            .float-whatsapp {
                background-image: linear-gradient(to top right, #a96428, #c28d38);
                background: #b06b2a;
                font-size: 40px;
                padding: 10px;
                width: 60px;
                height: 60px;
                line-height: 30px;
                margin: 0;
                z-index: 9999;
                position: fixed;
                top: auto;
                bottom: 20px;
                left: 90px;
                padding: 0;
                text-align: center;
                border-radius: 50%;
            }

            .fa-whatsapp {
                font-size: 37px !important;
                padding: 0;
                margin: 0;
                line-height: 50px !important;
            }

            .round #tawkchat-status-text-container {
                width: 50px !important;
                height: 50px !important;
            }
        </style>
        <div class="float-sm">
            <div class="fl-fl float-fb"> <i class="fab fa-facebook"></i> <a href="#"
                    target="_blank"> Facebook</a></div>
        </div>
        <div class="float-sm">
            <div class="fl-fl float-fb1"> <i class="fab fa-instagram"></i> <a
                    href="#" target="_blank"> Instagram</a></div>
        </div>
        <div class="float-sm">
            <div class="fl-fl float-fb2"> <i class="fab fa-twitter"></i> <a href="#"
                    target="_blank"> Twitter</a></div>
        </div>
 
      
        <!-- MAIN SECTION
   ================================================ -->
        <div id="main">
            <section class="container-wrap main-color">
                <div id="main-container" class="container-full">
                    <div class="template-page col-sm-12 tpl-no">
                        <div class="wrap-content">
                            <!-- Begin Article -->
                            <article id="post-117" class="clearfix post-117 page type-page status-publish">
                                <div class="article-content">
                                    <section
                                        class="container-wrap  myclass-contact-background main-color custom-color bg-parallax kleo-gradient  text-center"
                                        style="color: #ffffff;background-image: url(light.jpg); position: initial;;background-color: #606060;background-repeat: no-repeat;background-attachment: fixed;background-size: cover;padding-top:0px;padding-bottom:0px;padding-left:0px;padding-right:0px"
                                        data-prlx-speed="0.3">
                                        <div class="section-container container">
                                            <div
                                                class="vc_row vc_row-fluid row vc_row-o-content-middle vc_row-flex vc_row-has-fill">
                                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <h1 style="font-size: 40px;color: #ffffff;line-height: 70px;text-align: center;font-family:Libre Baskerville;font-weight:400;font-style:normal"
                                                                class="vc_custom_heading letter-spacing-50">Feedback
                                                            </h1>
                                                            <div class="kleo_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <div class="breadcrumb-container theme1">
                                                                        <ol>
                                                                            <li> <a title="Home"
                                                                                    href="modified home.php">
                                                                                    <span>Home</span> </a>
                                                                                <span class="separator">/</span>
                                                                            </li>
                                                                            <li> <a title="Contact Us" href="modified.php">
                                                                                    <span>Feedback</span> </a> <span
                                                                                    class="separator">/</span></li>
                                                                        </ol>
                                                                      
           
                                                                        <style type="text/css">
                                                                            .breadcrumb-container {
                                                                                font-size: 13px;
                                                                            }

                                                                            .breadcrumb-container ul {
                                                                                margin: 0;
                                                                                padding: 0;
                                                                            }

                                                                            .breadcrumb-container li {
                                                                                box-sizing: unset;
                                                                                display: inline-block;
                                                                                margin: 0;
                                                                                padding: 0;
                                                                            }

                                                                            .breadcrumb-container li a {
                                                                                box-sizing: unset;
                                                                                padding: 0 10px;
                                                                            }

                                                                            .breadcrumb-container {
                                                                                font-size: 14px !important;
                                                                                padding: 10px;
                                                                                margin: 10px;
                                                                            }

                                                                            .breadcrumb-container li a {
                                                                                color: #ffffff !important;
                                                                                font-size: 14px !important;
                                                                                line-height: 14px !important;
                                                                            }

                                                                            .breadcrumb-container li .separator {
                                                                                color: #ffffff !important;
                                                                                font-size: 14px !important;
                                                                            }

                                                                            .breadcrumb-container li:last-child .separator {
                                                                                display: none;
                                                                            }
                                                                        </style>
                                                                        <style type="text/css">
                                                                            .breadcrumb-container.theme1 li {
                                                                                margin: 0;
                                                                                padding: 0;
                                                                            }

                                                                            .breadcrumb-container.theme1 a {
                                                                                background: #278df4;
                                                                                display: inline-block;
                                                                                margin: 0 5px;
                                                                                padding: 5px 10px;
                                                                                text-decoration: none;
                                                                            }
                                                                        </style>
                                                                        <style type="text/css">
                                                                            .breadcrumb-container {}

                                                                            .breadcrumb-container ul {}

                                                                            .breadcrumb-container li {}

                                                                            .breadcrumb-container a {}

                                                                            .breadcrumb-container .separator {}
                                                                        </style>
                                                                        <script src="contact_script.js"></script>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section><!-- end section -->
                                    <section class="container-wrap  main-color no-col-gap "
                                        style="background-color: #f8f8f8;padding-top:0px;padding-bottom:0px">
                                        <div class="section-container container">
                                            <div class="vc_row vc_row-fluid row vc_row-has-fill">
                                                <div style="z-index: 10;"
                                                    class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-1 vc_col-lg-10 vc_col-md-offset-1 vc_col-md-10 vc_col-xs-12 vc_col-has-fill">
                                                    <div class="vc_column-inner vc_custom_1557518588819">
                                                        <div class="wpb_wrapper">

                                                        </div>
                                                        <div id="about"
                                                            class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1557520526950 vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                                                            <div
                                                                class="myclass-home-about wpb_column vc_column_container vc_col-sm-6 vc_col-lg-4 vc_col-md-4 vc_col-xs-12 vc_col-has-fill">
                                                                <div class="vc_column-inner vc_custom_1594498434154">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="kleo-gap"
                                                                            style="height:200px;line-height:200px;">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="myclass-contact-form wpb_column vc_column_container vc_col-sm-6 vc_col-lg-8 vc_col-md-8 vc_col-xs-12">
                                                                <div class="vc_column-inner vc_custom_1558381035602">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="kleo-gap"
                                                                            style="height:50px;line-height:50px;"></div>
                                                                        <h2 style="font-size: 30px;color: #000000;line-height: 36px;text-align: center;font-family:Libre Baskerville;font-weight:400;font-style:normal"
                                                                            class="vc_custom_heading">	Share your experience with us!</h2>
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
                                                                        <div class="wpcf7 no-js" id="wpcf7-f131-p117-o2"
                                                                            lang="en-US" dir="ltr">
                                                                            <div class="screen-reader-response">
                                                                                <p role="status" aria-live="polite"
                                                                                    aria-atomic="true"></p>
                                                                                <ul></ul>
                                                                            </div>
                                                    <form id="contactForm">
    <div class="mycontact-form">
        <div class="row">
            <div class="col-md-6 left-padding">
                <p>
                    <input size="40" class="wpcf7-form-control wpcf7-text myclass-contactname" 
                        id="mycontactname" required placeholder="Full Name" type="text" name="name" style="color:black" />
                </p>
            </div>
            <div class="col-md-6 right-padding">
                <p>
                    <input size="40" class="wpcf7-form-control wpcf7-tel myclass-contacttel" 
                        id="mycontacttel" required placeholder="Your Phone" type="tel" name="phone" style="color:black"/>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 left-padding">
                <p>
                    <input size="40" class="wpcf7-form-control wpcf7-email myclass-contactmail" 
                        id="mycontactmail" required placeholder="Email" type="email" name="email" style="color:black"/>
                </p>
            </div>
        </div>
        <div class="row">
            <p>
                <textarea cols="40" rows="3" class="wpcf7-form-control wpcf7-textarea myclass-contactmessage" 
                    id="mycontactmessage" required placeholder="Your Message" name="message" style="color:black"></textarea>
            </p>
        </div>
        <button type="submit" class="boton-elegante" id="mycontactsend">Submit</button>
    </div>
</form>

<script>
document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent default page reload

    let name = document.getElementById("mycontactname").value.trim();
    let phone = document.getElementById("mycontacttel").value.trim();
    let email = document.getElementById("mycontactmail").value.trim();
    let message = document.getElementById("mycontactmessage").value.trim();

    // Validate phone (only 10 digits)
    let phonePattern = /^[0-9]{10}$/;
    if (!phonePattern.test(phone)) {
        alert("Phone number must be exactly 10 digits.");
        return;
    }

    // Validate email
    let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address.");
        return;
    }

    // Ensure all fields are filled
    if (name === "" || phone === "" || email === "" || message === "") {
        alert("All fields are required.");
        return;
    }

    // AJAX Form Submission
    let formData = new FormData();
    formData.append("name", name);
    formData.append("phone", phone);
    formData.append("email", email);
    formData.append("message", message);

    fetch("contact.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        if (data.trim() === "success") {
            alert("Form submitted successfully!");
            document.getElementById("contactForm").reset(); // Clear form
        } else {
            alert("Error in form submission: " + data);
        }
    })
    .catch(error => {
        console.error("Error:", error);
        alert("Something went wrong. Please try again.");
    });
});

</script>

                                                                                <div class="wpcf7-response-output"
                                                                                    aria-hidden="true"></div>
                                                                            </form>
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
            </p>
        </div>
        <!--end article-content-->
        </article> <!-- End  Article -->
    </div>
    <!--end wrap-content-->
    </div>
    <!--end main-page-template-->
    </div>
    <!--end .container-->
    </section>
    <!--END MAIN SECTION-->
    </div><!-- #main -->
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
   
   
  
    <!--End of Tawk.to Script (0.7.2)-->
</body>

</html>
