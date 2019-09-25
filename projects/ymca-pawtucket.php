<?php
// Variables to assign (if applicable):
// $title 
// $hero_image
// $logo_image
// $meta_title
// $meta_description

$title = "YMCA of Pawtucket";
$hero_image = "../assets/images/hero_images/YMCA-Hero.png";
$logo_image = "../assets/images/logos/YMCA-logo.png";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../inc/meta-tags.php'; ?>
    <?php include '../inc/head-imports.php'; ?>
    <?php include '../inc/gtm-head.php'; ?>
</head>

<body class="projects projects__single">
    <?php include '../inc/gtm-body.php'; ?>
    <?php include '../inc/navbar.php'; ?>
    <?php include '../inc/single-projects-jumbotron.php'; ?>
    <!-- Project Specific Content -->
    <div class="section">
        <div class="container">
            <?php if ($logo_image) : ?>
                <img width="300" src="<?= $logo_image; ?>" alt="<?= $title; ?> logo" class="d-block img-fluid mx-auto mb-5 px-3" />
            <?php endif; ?>
            <h2 class="section__title-red section__title section__title-centered">
                about the project
            </h2>
            <div class="section__content">
                <div class="content__item">
                    <h3 class="content__label">What were the goals of the project?</h3>
                    <p class="content__text">Our goal for the YMCA of Pawtucket project was to renovate the existing 100-year-old/85,000 sq ft. building to serve as an affordable hub for the city’s diverse community with regards to active living.
                    </p>
                </div>
                <div class="content__item">
                    <h3 class="content__label">What was the problem at hand?</h3>
                    <p class="content__text">Most of the existing space in the building was unusable; the community was in need of an affordable destination for families seeking active lifestyles and healthy programming.
                    </p>
                </div>
                <div class="content__item">
                    <h3 class="content__label">Did we meet our goals? </h3>
                    <p class="content__text">Yes! We created over 75 program spaces for the Pawtucket YMCA that can facilitate programming for a population aged 1-101. The spaces created play host to programs focused on physical, social and educational development.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="section section--offwhite">
        <div class="container">
            <h2 class="section__title-red section__title section__title-centered">
                the strategy
            </h2>
            <div class="section__content">
                <div class="content__item">
                    <h3 class="content__label">
                        How did we deliver?
                    </h3>
                    <p class="content__text">We collaborated with local YMCA leaders to create a dynamic and versatile member experience for the Pawtucket community. As well, we collaborated on all aspects of the project including design, staffing, marketing, training, programming, operations and budgeting.
                    </p>
                </div>
                <div class="content__item">
                    <h3 class="content__label">What ways did we drive new business?</h3>
                    <p class="content__text">Following the Pawtucket YMCA project, the previous membership base grew from 400 annual members to 8,000 annual participants. </p>
                </div>
                <div class="content__item">
                    <h3 class="content__label">How did we convert new customers</h3>
                    <p class="content__text">
                        <ul>
                            <li>We created a number of pathways for membership and a dynamic on-boarding system to capture new members and safely integrate them into the building
                            </li>
                            <li>We developed dynamic marketing and messaging programs to support and effectively communicate to the Pawtucket community </li>
                            <li>We initiated extensive outreach programs bringing programs into the community to open up passageways to the new facility
                            </li>
                            <li>We made sure to respect the diverse culture of the Pawtucket community by communicating bilingually while ensuring the spirit of each message was being retained</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <h2 class="section__title-red section__title section__title-centered">The results</h2>
            <div class="section__content">
                <div class="content__item">
                    <h3 class="content__label">What deliverables did we meet?
                    </h3>
                    <p class="content__text">We created operational systems, KPIs, job descriptions, budgets and training protocols to launch the building on time.
                    </p>
                </div>
                <div class="content__item">
                    <h3 class="content__label">What was the budget you were working with? </h3>
                    <p class="content__text">The project was estimated at roughly $12 million.
                    </p>
                </div>
                <div class="content__item">
                    <h3 class="content__label">What challenges arose and how did we rectify them? </h3>
                    <p class="content__text">As the building was 100 years old, we had to balance the maintenance and preservation of historical keepsakes while still modernizing the experience for members. The balance was an intricate process but the results of the collaboration resulted in a renaissance of memberships and participation.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- ./ Project Specific Content -->
    <!-- More Projects Section -->
    <?php include '../inc/more-projects.php'; ?>
    <?php include '../inc/footer.php'; ?>
    <a href="javascript:void(0);" id="scroll" title="Scroll to Top">Top<span></span></a>
    <?php include "../inc/footer-imports.php"; ?>
</body>

</html>