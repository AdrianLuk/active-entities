<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        />
        <title>
            About Us | Business Management | Active Entities Consulting
        </title>
        <!-- Search Engine -->
        <meta
            name="description"
            content="Active Entities is a first-rate fitness industry consulting firm made up of a team of fitness and business professionals. Learn more about our management services."
        />
        <meta
            name="image"
            content="https://www.activeentitiesconsulting.com/assets/images/logo.png"
        />
        <!-- Schema.org for Google -->
        <meta
            itemprop="name"
            content="About Us | Business Management | Active Entities Consulting"
        />
        <meta
            itemprop="description"
            content="Active Entities is a first-rate fitness industry consulting firm made up of a team of fitness and business professionals. Learn more about our management services."
        />
        <meta
            itemprop="image"
            content="https://www.activeentitiesconsulting.com/assets/images/logo.png"
        />
        <!-- Twitter -->
        <meta name="twitter:card" content="summary" />
        <meta
            name="twitter:title"
            content="About Us | Business Management | Active Entities Consulting"
        />
        <meta
            name="twitter:description"
            content="Active Entities is a first-rate fitness industry consulting firm made up of a team of fitness and business professionals. Learn more about our management services."
        />
        <meta
            name="twitter:image:src"
            content="https://www.activeentitiesconsulting.com/assets/images/logo.png"
        />
        <!-- Open Graph general (Facebook, Pinterest & Google+) -->
        <meta
            name="og:title"
            content="About Us | Business Management | Active Entities Consulting"
        />
        <meta
            name="og:description"
            content="Active Entities is a first-rate fitness industry consulting firm made up of a team of fitness and business professionals. Learn more about our management services."
        />
        <meta
            name="og:image"
            content="https://www.activeentitiesconsulting.com/assets/images/logo.png"
        />
        <meta
            name="og:url"
            content="https://www.activeentitiesconsulting.com/about.php"
        />
        <meta name="og:site_name" content="Active Entities Consulting" />
        <meta name="og:type" content="website" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        />
        <!-- Google Tag Manager -->
        <script>
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    "gtm.start": new Date().getTime(),
                    event: "gtm.js"
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != "dataLayer" ? "&l=" + l : "";
                j.async = true;
                j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, "script", "dataLayer", "GTM-PTQ95RW");
        </script>
        <!-- End Google Tag Manager -->
    </head>
    <style type="text/css">
        html {
            overflow-x: hidden;
        }

        .bread-crumb a {
            color: white;
            text-decoration: none;
        }

        .dropdown-menu > li > a {
            font-family: "OpenSans-Regular" !important;
            color: #6d6e71;
        }

        .content h1 {
            font-size: 3vw;
        }

        #scroll {
            position: fixed;
            right: 10px;
            bottom: 10px;
            cursor: pointer;
            width: 50px;
            height: 50px;
            background-color: #006e87;
            text-indent: -9999px;
            display: none;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }
        #scroll span {
            position: absolute;
            top: 50%;
            left: 50%;
            margin-left: -8px;
            margin-top: -12px;
            height: 0;
            width: 0;
            border: 8px solid transparent;
            border-bottom-color: #ffffff;
        }
        #scroll:hover {
            background-color: #cc2026;
            opacity: 1;
            filter: "alpha(opacity=100)";
            -ms-filter: "alpha(opacity=100)";
        }

        .bread-crumb {
            position: absolute;
            top: 80%;
            left: 75%;
            color: white;
            font-size: 12px;
        }

        .navbar-inverse .navbar-nav > .open > a,
        .navbar-inverse .navbar-nav > .open > a:focus,
        .navbar-inverse .navbar-nav > .open > a:hover {
            background-color: lightgrey;
        }
        .navbar-inverse .navbar-nav > li > a:focus,
        .navbar-inverse .navbar-nav > li > a:hover {
            background-color: lightgrey;
        }
        .dropdown-menu > li > a:focus,
        .dropdown-menu > li > a:hover {
            background-color: lightgrey;
        }

        .navbar-inverse .navbar-nav > li > a:focus,
        .navbar-inverse .navbar-nav > .freeconsultationbtn > a:hover {
            background-color: transparent !important;
        }
        .navbar-inverse .navbar-nav > li > a {
            font-family: "OpenSans-Regular" !important;
        }

        .bobby {
            background-color: #f7f7fd;
            padding: 3%;
        }
        .richard {
            padding: 3%;
        }
        .banner {
            position: relative;
            color: white;
        }
        .content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            padding-top: 20px;
        }
        .bluebox {
            background-color: #006e87;
            padding-bottom: 20px;
            padding-top: 20px;
            color: white;
            font-size: 38px;
            font-family: "Proxima-Nova-Bold";
            margin-bottom: 0;
        }
        .active {
            text-align: center;
            font-size: 36px;
            font-family: "Proxima-Nova-Bold";
            color: #cc2026;
            padding-top: 5%;
        }
        .aec {
            font-size: 13px;
            font-family: "OpenSans-Regular";
            color: #6d6e71;
            line-height: 2;
        }
        .icon {
            width: 60px;
            height: 60px;
            background-color: #95969a;
            font-size: 30px;
            border-radius: 50%;
            text-align: center;
            line-height: 60px;
        }
        .content1 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .pic_topic {
            font-family: "Proxima-Nova-Bold";
            color: #cc2026;
            text-transform: uppercase;
        }
        .pic_head {
            font-family: "Proxima-Nova-Regular";
            color: #373d3f;
            font-size: 18px;
            font-weight: bold;
        }
        .pic_content {
            font-family: "OpenSans-Regular";
            color: #6d6e71;
            font-size: 14px;
            line-height: 2;
        }
        .tealbutton {
            background-color: #006e87;
            color: white;
            font-family: "OpenSans-Bold";
            padding: 10px 20px;
            border-radius: 5px;
            border-color: transparent;
        }
        .tealbutton:hover {
            background-color: #cc2026;
            transition: 1s;
            color: white;
            font-family: "OpenSans-Bold";
            padding: 10px 20px;
            border-radius: 5px;
            border-color: transparent;
        }
        .redbar {
            height: 6px;
            background-color: #cc2026;
        }
        .navbar-nav {
            margin-left: 15%;
            padding-top: 15px;
        }
        .navbar-inverse {
            background-color: #fcfbfb;
            border-color: transparent;
        }
        .navbar {
            min-height: 100px !important;
        }
        .navbar-inverse {
            background-color: white !important;
        }

        .navbar-inverse .navbar-nav > li > a {
            color: #6d6e71;
            font-family: Montserrat-Regular;
        }

        .navbar-inverse .navbar-nav > li > a:hover,
        active {
            color: #6d6e71;
        }

        .navbar-inverse .navbar-collapse,
        .navbar-inverse .navbar-form {
            border: none;
        }
        .navbar-nav {
            float: right;
        }
        select {
            border: 1px solid silver !important;
            -webkit-appearance: none !important;
            -moz-appearance: none !important;
            padding-right: 25px !important;
            background-image: url(data:image/gif;base64,R0lGODlhCwALAJEAAAAAAP///xUVFf///yH5BAEAAAMALAAAAAALAAsAAAIPnI+py+0/hJzz0IruwjsVADs=) !important;
            background-repeat: no-repeat !important;
            background-position: 95% 42% !important;
        }
        .navbar-inverse .navbar-nav > li > a:focus,
        .navbar-inverse .navbar-nav > li > a:hover {
            color: #6d6e71 !important;
            background-color: lightgrey;
        }
        .dropdown-menu .dropdown-content {
            position: relative;
        }
        .dropdown-content a:hover {
            background-color: #ddd;
            color: black;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .navbar-brand {
            padding: 10px 5px;
        }

        @media only screen and (min-device-width: 321px) and (max-device-width: 360px) {
            .navbar-brand > img {
                padding-top: 10px;
                width: 250px;
                padding-left: 10px;
            }
        }

        @media screen and (max-width: 320px) {
            .navbar-brand {
                width: 75%;
            }

            .bread-crumb p {
                font-size: 8px !important;
            }
        }

        @media screen and (min-width: 416px) and (max-width: 767px) {
            td .text1 {
                color: white;
                font-size: 12px;
                padding-top: 15px;
            }

            .image1 {
                width: 30px;
            }
            .padding {
                padding: 21px;
            }

            .footer {
                text-align: center;
            }

            .bread-crumb {
                top: 65%;
            }
        }

        .navbar-inverse {
            background-color: white !important;
        }

        .navbar-inverse .navbar-nav > li > a {
            color: #6d6e71;
            font-family: Montserrat-Regular;
        }

        .navbar-inverse .navbar-nav > li > a:hover,
        active {
            color: #6d6e71;
        }

        .navbar-inverse .navbar-toggle .icon-bar {
            background-color: black;
        }

        .navbar-inverse .navbar-collapse,
        .navbar-inverse .navbar-form {
            border: none;
        }

        @media screen and (min-width: 767px) and (max-width: 1280px) {
            td .text1 {
                color: white;
                font-size: 16px;
            }

            .navbar-nav {
                float: right;
            }

            .contactbanner {
                margin-top: 20% !important;
            }
            .image1 {
                width: 67px;
            }
            .jumbotron p {
                margin-bottom: 15px;
                font-size: 12px;
                font-weight: 200;
                color: white;
            }

            .padding {
                padding: 21px;
            }
            .sustainable {
                font-family: "Proxima-Nova-Bold";
                font-size: 14pt;
                color: #cc2026;
                line-height: 7px;
            }
        }

        @media screen and (width: 1024px) {
            .service_panel {
                width: 32.333%;
            }
        }
        /*end*/
        body {
            margin: 0px;
            padding: 0px;
            overflow-x: hidden;
        }

        .navbar-inverse {
            background-color: white !important;
        }

        .navbar-inverse .navbar-nav > li > a {
            color: #6d6e71;
            font-family: Montserrat-Regular;
        }

        .navbar-inverse .navbar-nav > li > a:hover,
        active {
            color: #6d6e71;
        }

        .navbar-inverse .navbar-collapse,
        .navbar-inverse .navbar-form {
            border: none;
        }

        .color {
            color: #cc2026;
            font-family: "Proxima-Nova-semibold";
            font-size: 40px;
        }
        @font-face {
            font-family: "Proxima-Nova-semibold";

            src: url("assets/fonts/proximanova-semibold-webfont.woff");
        }
        @font-face {
            font-family: "Proxima-Nova-Bold";

            src: url("assets/fonts/Proxima-Nova-Bold.otf");
        }

        @font-face {
            font-family: "Proxima-Nova-Regular";
            src: url("assets/fonts/ProximaNovaRegular.ttf");
        }

        @font-face {
            font-family: "OpenSans-Regular";
            src: url("assets/fonts/OpenSans-Regular.ttf");
        }

        @font-face {
            font-family: "OpenSans-SemiBold";
            src: url("assets/fonts/OpenSans-SemiBold.ttf");
        }

        @font-face {
            font-family: "OpenSans-Bold";
            src: url("assets/fonts/OpenSans-Bold.ttf");
        }
        @font-face {
            font-family: "OpenSans-SemiboldItalic";
            src: url("assets/fonts/OpenSans-SemiboldItalic.ttf");
        }

        @font-face {
            font-family: "Montserrat-Regular.ttf";
            src: url("assets/fonts/Montserrat-Regular.ttf");
        }

        @font-face {
            font-family: "Montserrat-Bold.ttf";
            src: url("assets/fonts/Montserrat-Bold.ttf");
        }
        .navbar-inverse {
            background-color: #fcfbfb;
            border-color: transparent;
        }
        .navbar {
            min-height: 100px !important;
        }

        .OpenSans-Regular {
            font-family: "OpenSans-Regular";
        }
        .header {
            font-size: 16px;
            text-transform: uppercase;
            color: #cc2026;
            font-family: "Proxima-Nova-Bold";
            line-height: 1.5;
        }
        .icon {
            width: 60px;
            height: 60px;
            background-color: #95969a;
            font-size: 30px;
            border-radius: 50%;
            text-align: center;
            line-height: 60px;
        }
        .box {
            width: 100%;
            height: 80vh;

            background: url(assets/images/bottom_bg.png) no-repeat;
            background-size: cover;
        }
        .box_control {
            display: block;
            width: 700px;
            height: 300px;
            margin: 0px auto;
            background-color: #cc2026;
        }
        .schedule_text {
            color: white;
            font-size: 34px;
            font-family: "Proxima-Nova-Bold";
        }
        .button {
            color: #006e87;
        }

        .navbar-nav {
            margin-left: 15%;
            padding-top: 20px;
        }

        .reviews {
            margin-bottom: 5%;
        }

        .fcpara {
            color: #6d6e71;
            line-height: 2;
        }

        .discusstext {
            font-family: OpenSans-Bold;
            color: #6d6e71;
        }

        .contacttitle {
            color: #aaacb0 !important;
            font-family: OpenSans-Bold;
        }

        .contactinfo {
            color: #f7f7fd;
            font-family: "OpenSans-SemiBold";
        }

        .pdl0 {
            padding-left: 0;
        }

        @media only screen and (max-width: 600px) {
            .content {
                padding-top: 0 !important;
            }

            .content h1 {
                font-size: 20px !important;
            }

            .navbar-nav {
                padding-top: 30px;
                margin-left: 0;
                float: left !important;
            }

            .navbar-inverse {
                z-index: 1 !important;
            }

            .padding {
                padding: 21px;
            }
            .sustainable {
                font-family: "Proxima-Nova-Bold";
                font-size: 14pt;
                color: #cc2026;
                line-height: 7px;
            }
            .active {
                text-align: center;
                font-family: "Proxima-Nova-Bold";
                color: #cc2026;
                /*margin-top: 350px;*/
                font-size: 20px;
            }

            .aec {
                font-size: 8px !important;
            }

            .contactbanner {
                margin-top: 30% !important;
            }

            .bread-crumb {
                top: 65%;
                font-size: 10px;
            }
            .AEC {
                font-size: 8px;
            }

            .contact {
                margin-bottom: 10%;
            }

            .footer {
                text-align: center;
            }

            .socialicon {
                padding-bottom: 20px;
            }

            .quoteicon {
                display: none;
            }

            .pdl0 {
                text-align: center;
                padding-top: 20px;
            }

            .leftaligncontactbtn {
                text-align: left;
            }
        }

        @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
            ul.navbar-nav {
                margin-left: unset !important;
                padding-top: 30px;
            }

            .pdl0 {
                text-align: center;
                padding-top: 20px;
            }

            .footer {
                text-align: center;
            }

            .socialicon {
                padding-bottom: 20px;
            }
            .padding {
                padding: 21px;
            }
            .sustainable {
                font-family: "Proxima-Nova-Bold";
                font-size: 14pt;
                color: #cc2026;
                line-height: 7px;
            }
        }
        @media screen and (width: 1024px) {
            .business {
                padding: 0%;
            }
            .panel-body {
                padding: 7px;
            }
            .view {
                background-color: #006e87;
                color: white;
                padding: 7px 16px;
                margin-top: 0%;
            }
        }
        @media screen and (min-width: 1280px) and (max-width: 2480px) {
            .sustainable {
                font-family: "Proxima-Nova-Bold";
                font-size: 27pt;
                color: #cc2026;
                line-height: 16px;
            }
        }
    </style>
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript
            ><iframe
                src="https://www.googletagmanager.com/ns.html?id=GTM-PTQ95RW"
                height="0"
                width="0"
                style="display:none;visibility:hidden"
            ></iframe
        ></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <!-- navbar -->
        <div class="container">
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="redbar"></div>
                <div class="container">
                    <div class="navbar-header">
                        <button
                            type="button"
                            class="navbar-toggle disabled"
                            data-toggle="collapse"
                            data-target="#myNavbar"
                        >
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php"
                            ><img
                                src="assets/images/logo.png"
                                class="img-responsive"
                        /></a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">HOME</a></li>
                            <li class="dropdown">
                                <a
                                    class="dropdown-toggle disabled"
                                    href="services.php"
                                    data-toggle="dropdown"
                                    id="service"
                                    >SERVICES<span class="caret"></span
                                ></a>
                                <ul class="dropdown-menu dropdown-content">
                                    <li>
                                        <a href="launchingANewBusiness.php"
                                            >Launching A New Business</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            href="growingAnEstablishedEntity.php"
                                            >Growing An Established Entity</a
                                        >
                                    </li>
                                    <li>
                                        <a href="management.php"
                                            >Management Training &amp;
                                            Coaching</a
                                        >
                                    </li>
                                    <li>
                                        <a href="specialityEntities.php"
                                            >Specialty Entities</a
                                        >
                                    </li>
                                    <li>
                                        <a href="partnerships.php"
                                            >Digital Marketing Partnerships</a
                                        >
                                    </li>
                                </ul>
                            </li>
                            <li><a href="about.php">ABOUT US</a></li>
                            <li><a href="projects.php">PROJECTS</a></li>
                            <li><a href="/blog">BLOG</a></li>
                            <li><a href="contact.php">CONTACT</a></li>
                            <li class="freeconsultationbtn">
                                <a href="#" style="padding-top: 1%;"
                                    ><button
                                        class="tealbutton"
                                        type="button"
                                        onclick="location.href='contact.php'"
                                    >
                                        FREE CONSULTATION &nbsp;&nbsp;&nbsp;
                                        <img
                                            src="assets/images/long-arrow-alt-right.png"
                                        /></button
                                ></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="container-fluid contactbanner" style="margin-top: 5%;">
            <div class="row">
                <div style="position:relative;">
                    <img
                        src="assets/images/about_top_bg.png"
                        class="img-responsive"
                    />
                    <div class="content">
                        <h1
                            style="text-transform: uppercase;font-family: 'Proxima-Nova-Bold';"
                        >
                            ABOUT US
                        </h1>
                    </div>
                    <div class="bread-crumb">
                        <span><a href="index.php">Home / </a></span>
                        <span><a href="about.php">About Us</a></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Active -->
        <div class="row">
            <div class="container">
                <div style="margin-top: 5%; margin-bottom: 5%;">
                    <div class="banner">
                        <center>
                            <img
                                src="assets/images/logo_bg.png"
                                class="img-responsive"
                            />
                        </center>
                        <div class="content" style="color:black;">
                            <h5 style="text-align: center;" class="active">
                                ACTIVE ENTITIES CONSULTING
                            </h5>
                            <p style="text-align: center;" class="aec">
                                AEC is a full service fitness and wellness
                                facility consulting firm on our way to becoming
                                a global leader in the industry. Drawing upon
                                the skills and expertise of our fitness and
                                business experts, we seek to help our clients
                                grow as both trainers and business owners. Our
                                many years of experience have taught us that
                                fitness facility develo pment is a complex
                                process, and we are dedicated to developing the
                                best possible environment, individualized to
                                meet our clients’ needs rapidly, efficiently,
                                and cost-effectively.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end -->

        <!-- end -->
        <!-- blue box -->
        <div class="container-fluid">
            <div class="row">
                <h3 align="center" class="bluebox">MEET OUR TEAM</h3>
            </div>
        </div>

        <!-- end -->
        <!-- BOBBY -->
        <div class="container-fluid">
            <div class="row bobby">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <img
                                src="assets/images/bobby_img.png"
                                class="img-responsive"
                            />
                        </div>
                        <div class="col-md-8">
                            <h3 class="pic_topic">Bobby Verdun</h3>
                            <h4 class="pic_head">President & Founder</h4>
                            <p class="pic_content">
                                Mr. Verdun has extensive experience leading
                                successful private and not-for-profit
                                multipurpose fitness and recreation clubs and
                                athletic teams and is passionate about helping
                                club developers, owners, and managers create
                                prosperous businesses by utilizing award-winning
                                programming, development drives, and
                                cost-cutting initiatives.<br /><br />He has led
                                private multi-purpose clubs that were voted
                                “best in class” including the Tennis Center at
                                College Park, one of the top training academies
                                in the country. As a YMCA Executive Director, he
                                led a historic $10 million renovation and guided
                                a membership renaissance producing thousands of
                                family participants and energizing surrounding
                                communities to set usage records for the
                                facility.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- bobby end -->

        <!-- richard -->
        <div class="row richard">
            <div class="container-fluid">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <h3 class="pic_topic">Richard Synnott</h3>
                                <h4 class="pic_head">Senior Partner</h4>
                                <p class="pic_content">
                                    Mr. Synnott is currently the Executive
                                    Director for the Upper Valley Aquatic Center
                                    in White River Junction, VT. He has been in
                                    the fitness and wellness industry for 40
                                    years and has served as the Executive
                                    Director for many of the largest and most
                                    prestigious health and wellness clubs’ in
                                    New England. He’s been a featured speaker at
                                    industry conferences, has provided
                                    consulting services for clubs throughout New
                                    England, and has written numerous articles
                                    for trade publications.<br /><br />
                                    Mr. Synnott also served as President of the
                                    400 Club New England Health and Racquet
                                    Sport Association and the New England
                                    Fitness and Wellness Network.
                                </p>
                            </div>
                            <div class="col-md-4">
                                <img
                                    src="assets/images/richard_img.png"
                                    class="img-responsive"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- richard end -->
        <!-- Tim -->
        <div class="row bobby">
            <div class="container-fluid">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <img
                                    src="assets/images/tim_img.png"
                                    class="img-responsive"
                                />
                            </div>
                            <div class="col-md-8">
                                <h3 class="pic_topic">Tim DiFrancesco</h3>
                                <h4 class="pic_head">
                                    Partner / High Performance & Sport Specific
                                    Training
                                </h4>
                                <p class="pic_content">
                                    Tim DiFrancesco, PT, DPT, ATC, CSCS, spent
                                    six seasons as the Head Strength &
                                    Conditioning Coach of the Los Angeles Lakers
                                    and is the founder of TD Athletes Edge. He
                                    is nationally renowned for his
                                    evidence-based and scientific approach to
                                    fitness, training, nutrition and recovery
                                    for athletes and fitness enthusiasts. TD
                                    Athletes Edge works with clients in Boston,
                                    MA and online through a series of remote
                                    product offerings.<br /><br />
                                    DiFrancesco graduated from Endicott College
                                    with a Bachelor’s in Science in Athletic
                                    Training and from the University of
                                    Massachusetts and holds a Doctorate in
                                    Physical Therapy from Lowell.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tim end -->

        <!-- Brian -->
        <div class="row richard">
            <div class="container-fluid">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <h3 class="pic_topic">Brian Goodman</h3>
                                <h4 class="pic_head">Senior Partner</h4>
                                <p class="pic_content">
                                    Brian Goodman has established himself as one
                                    of the best feasibility experts in the
                                    country having done studies specifically for
                                    health clubs and active centers all over the
                                    world. His significant expertise in
                                    strategic positioning of start-up businesses
                                    including market research and segmentation,
                                    branding, financial modeling, marketing
                                    strategy, and feasibility analysis has led
                                    to financial analysis for large retailers
                                    such as Filenes and the May Company as well
                                    as spearheaded strategy for the City of
                                    Boston’s Office of Business Development.
                                    Brian is the founder of First Steps
                                    Consulting, Brian has worked with a variety
                                    of start-up and corporate innovations for
                                    over 10 years. Brian earned his initial
                                    degree in Business Administration from UMASS
                                    Amherst and his MBA in Entrepreneurship from
                                    Babson College. Additional studies have been
                                    completed at MIT, Harvard, and the
                                    University of Manchester, England.
                                </p>
                            </div>
                            <div class="col-md-4">
                                <img
                                    src="assets/images/brian_img.jpeg"
                                    class="img-responsive"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brian end -->
        <!-- Pam -->
        <div class="row bobby">
            <div class="container-fluid">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <img
                                    src="assets/images/pam_img.jpeg"
                                    class="img-responsive"
                                />
                            </div>
                            <div class="col-md-8">
                                <h3 class="pic_topic">Pam Wetherbee-Metcalf</h3>
                                <h4 class="pic_head">Senior Partner</h4>
                                <p class="pic_content">
                                    Pam joins Active Entities as a proven leader
                                    and innovator, bringing with her a wealth of
                                    sport facility and recreation program
                                    management experience. She has overseen the
                                    planning process for new multi-use sports
                                    facilities, has been involved with design
                                    and construction extensively, and has
                                    implemented and developed a multitude of
                                    sport/recreation-based programs. Throughout
                                    her career, Pam has been selected to manage
                                    and direct four NEW recreation facilities
                                    for four different universities since 1996,
                                    achieving the highest level of experience
                                    with sports facilities operations, policy
                                    formation, personnel management, student
                                    development, program design, renovation,
                                    maintenance, new construction, and air
                                    structure management. She has also been
                                    selected to conduct an external review at
                                    three different universities (campus
                                    recreation focused). Pam earned her
                                    bachelor’s degree in Sports, Fitness and
                                    Leisure Studies at Salem State University
                                    and a Master's Degree in Sport Management
                                    from the United States Sports Academy in
                                    Daphne, Alabama. She has a storied athletic
                                    career resulting in being inducted into
                                    three Hall of Fames: Salem State University
                                    Athletic Hall of Fame, The New England
                                    Basketball Hall of Fame, and the Bedford
                                    High School Hall of Fame.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- pam end -->

        <div class="top"></div>
        <!-- footer -->
        <div class="redbar"></div>
        <div
            class="container-fluid"
            style="background-color:#36373a;"
            id="contact"
        >
            <div class="row">
                <div class="container footer">
                    <div class="row">
                        <div align="center">
                            <img
                                src="assets/images/bottom_logo.png"
                                class="img-responsive"
                                style="padding-top: 2%;"
                            />
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-3">
                                    <i
                                        class="fa fa-phone icon"
                                        aria-hidden="true"
                                        style="color: white;"
                                    ></i>
                                </div>
                                <div class="col-md-4 socialicon">
                                    <span
                                        style="color: white;"
                                        class="contacttitle"
                                        >Call Us:</span
                                    >
                                    <br />
                                    <span class="contactinfo"
                                        >(617) 529-4613</span
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-3">
                                    <i
                                        class="fa fa-envelope icon"
                                        aria-hidden="true"
                                        style="color: white;"
                                    ></i>
                                </div>
                                <div class="col-md-4 socialicon">
                                    <span
                                        style="color: white;"
                                        class="contacttitle"
                                        >Email Us: </span
                                    ><br /><span class="contactinfo"
                                        >info@activeentitiesconsulting.com</span
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-3">
                                    <i
                                        class="fa fa-home icon"
                                        aria-hidden="true"
                                        style="color: white;"
                                    ></i>
                                </div>
                                <div class="col-md-9 socialicon">
                                    <span
                                        style="color: white;"
                                        class="contacttitle"
                                        >Location:</span
                                    ><br /><span class="contactinfo">
                                        Massachusetts</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <p
                        align="center"
                        class="OpenSans-Regular"
                        style="color: #777777;font-family: 'OpenSans-Regular';"
                    >
                        Copyright &copy; 2019 | Active Entities Consulting, LLC.
                        All rights reserved.
                    </p>

                    <a
                        href="javascript:void(0);"
                        id="scroll"
                        title="Scroll to Top"
                        style="display: none;"
                        >Top<span></span
                    ></a>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 100) {
                        $("#scroll").fadeIn();
                    } else {
                        $("#scroll").fadeOut();
                    }
                });
                $("#scroll").click(function() {
                    $("html, body").animate({ scrollTop: 0 }, 600);
                    return false;
                });
            });
        </script>
        <!-- end -->
    </body>
</html>
