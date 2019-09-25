<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Fitness Industry Consultants | Active Entities Consulting</title>
    <!-- Search Engine -->
    <meta name="description" content="Active Entities Consulting is a leading fitness industry consulting firm that offers business management solutions for health clubs, sports facilities and specialty gyms. " />
    <meta name="image" content="https://www.activeentitiesconsulting.com/assets/images/logo.png" />
    <!-- Schema.org for Google -->
    <meta itemprop="name" content="Fitness Industry Consultants | Active Entities Consulting" />
    <meta itemprop="description" content="Active Entities Consulting is a leading fitness industry consulting firm that offers business management solutions for health clubs, sports facilities and specialty gyms. " />
    <meta itemprop="image" content="https://www.activeentitiesconsulting.com/assets/images/logo.png" />
    <!-- Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Fitness Industry Consultants | Active Entities Consulting" />
    <meta name="twitter:description" content="Active Entities Consulting is a leading fitness industry consulting firm that offers business management solutions for health clubs, sports facilities and specialty gyms. " />
    <meta name="twitter:image:src" content="https://www.activeentitiesconsulting.com/assets/images/logo.png" />
    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta name="og:title" content="Fitness Industry Consultants | Active Entities Consulting" />
    <meta name="og:description" content="Active Entities Consulting is a leading fitness industry consulting firm that offers business management solutions for health clubs, sports facilities and specialty gyms. " />
    <meta name="og:image" content="https://www.activeentitiesconsulting.com/assets/images/logo.png" />
    <meta name="og:url" content="https://www.activeentitiesconsulting.com/" />
    <meta name="og:site_name" content="Active Entities Consulting" />
    <meta name="og:type" content="website" />
    <?php include './inc/head-imports.php'; ?>
    <?php include './inc/gtm-head.php'; ?>
</head>

<body>
    <?php include './inc/gtm-body.php'; ?>
    <?php include './inc/navbar.php'; ?>
    <div class="jumbotron-fluid jumbotron__banner" style="background-image: url('./assets/images/hero-bg.png');">
        <div class="jumbotron__content container">
            <h1 class="jumbotron__header text-center">
                Great Ideas Come from <br class="d-lg-none" />great
                partnerships
            </h1>
            <div class="bread-crumb text-center text-lg-right  text-white">
                <a class="bread-crumb__link" href="index.php">Home / </a>
                <a class="bread-crumb__link" href="services.php">Services /</a>
                <a class="bread-crumb__link" href="partnerships.php">Digital Marketing Partnerships</a>
            </div>
        </div>
    </div>

    <div class="section partner-section">
        <div class="container mw-768">
            <a class="mb-5 text-center d-block " href="https://elitedigitalagency.com/"><img src="./assets/images/EDlogo-210.png" alt="Elite Digital Logo" class="img-fluid mx-auto " /></a>
            <h2 class="section__title-red section__title section__title-centered">
                digital campaigns that drive results
            </h2>
            <p class="section__text section__text-centered lead">
                Elite Digital is a full-service, award-winning digital marketing
                agency with headquarters in Toronto, Canada. For over 15 years,
                they have helped clients navigate and leverage the digital
                landscape to achieve their personal business goals. Elite fuses
                together sophisticated marketing strategy with cutting-edge
                digital skills to deliver campaigns that drive results. Elite
                has worked with small companies and large organizations in all
                industries to help redefine their digital marketing efforts.
            </p>
        </div>
    </div>

    <div class="section section--offwhite services__section">
        <div class="container">
            <h2 class="section__title section__title-centered section__title-red">
                Services
            </h2>
            <p class="section__text section__text-centered lead mw-768 mx-auto">
                Elite specializes in all things digital such as search
                engine optimization, email marketing, UX design and CASL
                compliance to provide the best possible digital marketing
                services and site strategy. Elite Digital services include:
            </p>
        </div>
        <div id="services-grid" class="services__grid row container mx-auto"></div>
    </div>
    <div class="jumbotron-fluid jumbotron__cta" style="background-image: url('./assets/images/CTA-bg.png');">
        <div class="jumbotron__content container">
            <h1 class="jumbotron__title-sub text-center text-white">
                Active Entities Consulting welcomes partnership arrangements
                with businesses and corporations.
            </h1>
            <h2 class="jumbotron__title-main text-center text-white">
                Contact Active Entities to inquire about our corporate and
                business partnership proceedings today.
            </h2>
        </div>
    </div>

    <?php include "./inc/footer.php"; ?>
    <a href="javascript:void(0);" id="scroll" title="Scroll to Top">Top<span></span></a>
    <?php include "./inc/footer-imports.php"; ?>
    <script type="text/javascript">
        const services = [{
                title: "Digital Strategy",
                icon: "./assets/images/digi-strat.png"
            },
            {
                title: "Digital Marketing & Remarketing",
                icon: "./assets/images/dis-mark-remark.png"
            },
            {
                title: "Web Design & Web Development",
                icon: "./assets/images/web-design.png"
            },
            {
                title: "Branding",
                icon: "./assets/images/branding.png"
            },
            {
                title: "SEO/SEM",
                icon: "./assets/images/seo-sem.png"
            },
            {
                title: "Social Media",
                icon: "./assets/images/social-media.png"
            },
            {
                title: "Print Design",
                icon: "./assets/images/print.png"
            },
            {
                title: "E-Commerce",
                icon: "./assets/images/ecommerce.png"
            },
            {
                title: "Mobile & Apps",
                icon: "./assets/images/mbl-apps.png"
            },
            {
                title: "Video & Animation",
                icon: "./assets/images/video-animation.png"
            },
            {
                title: "Advertising",
                icon: "./assets/images/blue-advert-services-icon.png"
            },
            {
                title: "Campaigns",
                icon: "./assets/images/campaigns.png"
            }
        ];
        $(document).ready(function() {
            services.map(service => {
                $("#services-grid")
                    .append(`<div class="col-12 col-md-6 col-lg-3 mb-3">
                    <div class="card services__card">
                        <div class="card-body text-center">
                            <img
                                src="${service.icon}" alt="${
                        service.title
                    } icon"
                                class="img-responsive"
                                style="padding-bottom: 20px;"
                            />
                            <h3 class="card-title h4">
                                ${service.title}
                            </h3>
                        </div>
                    </div>
                </div>`);
            });
            const copyright = new Date().getFullYear();
            $("#footer__copyright__year").text(copyright);
            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $("#scroll").fadeIn();
                } else {
                    $("#scroll").fadeOut();
                }
            });

            $("#scroll").click(function(e) {
                e.preventDefault();
                $("html, body").animate({
                    scrollTop: 0
                }, 600);
                // return false;
            });
            $("#learn-button").click(function() {
                $("html,body").animate({
                        scrollTop: $(".what").offset().top
                    },
                    "slow"
                );
            });
            $("#browse").click(function() {
                $("html,body").animate({
                        scrollTop: $("#service").offset().top
                    },
                    "slow"
                );
            });
            $("#down_contact").click(function() {
                $("html,body").animate({
                        scrollTop: $(".enquiryform").offset().top
                    },
                    "slow"
                );
            });
        });
    </script>
</body>

</html>