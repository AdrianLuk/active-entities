<?php
// Variables to assign (if applicable):
// $title 
// $hero_image
// $logo_image
// $meta_title
// $meta_description

$title = "Ave Maria University Wellness Center";
$hero_image = "../assets/images/hero_images/AMU-Wellness-Hero.png";
$logo_image = "../assets/images/logos/AMU-Magazine-Masthead.png";
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
                    <p class="content__text">Our goal was to develop and build a new fitness and wellness complex for the Ave Maria School of Law while incorporating fitness into the educational model.
                    </p>
                </div>
                <div class="content__item">
                    <h3 class="content__label">What was the problem at hand?</h3>
                    <p class="content__text">The challenges of the Ave Maria University Wellness Center project were two-fold — the University did not have an existing facility and the active program model in place was also extremely minimal. </p>
                </div>
                <div class="content__item">
                    <h3 class="content__label">Did we meet our goals?</h3>
                    <p class="content__text">Yes! We collaborated with the faculty and staff of Ave Maria University to create a vibrant program model. We also developed an efficient, state-of-the-art space housing a fitness center, two basketball courts, a turf field and more.
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
                    <h3 class="content__label">In what ways did/will we drive new business? </h3>
                    <p class="content__text">The program we created will be a key component to recruiting new students to the Ave Maria School of Law. As well, it will serve as a basis of an inclusive program model that will differentiate the school from other law schools across the country. </p>
                </div>
                <div class="content__item">
                    <h3 class="content__label">How did/will we convert new customers?
                    </h3>
                    <p class="content__text">The program we created is an attractive amenity for incoming law students who are trying to balance the pressures of law school while maintaining an active lifestyle.
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
                    <p class="content__text">All timelines for the project regarding program modeling, budging, equipment purchasing, and the development of the physical plant were met.
                    </p>
                    <ul>
                        <li>We created a program model that will seamlessly add the “Body” to the school’s mind/body/spirit program model</li>
                        <li>We provided direction and input on the development of the physical space
                        </li>
                        <li>We provided support and direction with marketing and introducing the project to current and future students, faculty members and donors
                        </li>
                    </ul>
                </div>
                <div class="content__item">
                    <h3 class="content__label">What was the budget you were working with? </h3>
                    <p class="content__text">The project was estimated at roughly $3 million.
                    </p>
                </div>
                <div class="content__item">
                    <h3 class="content__label">What does success look like for the client?
                    </h3>
                    <p class="content__text">Thanks to the Wellness Center project, the Ave Maria School of Law will have an all-inclusive wellness program that gives students skills beyond the classroom that they’ll utilize for the rest of their lives.
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