<?php
// Variables to assign (if applicable):
// $title 
// $hero_image
// $logo_image
// $meta_title
// $meta_description

$title = "Renaissance Athletic Club";
$hero_image = "../assets/images/hero_images/Renaissance-Athletic-Hero.png";
$logo_image = "../assets/images/logos/RenaissanceLogo.jpg";
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
                    <p class="content__text">Our goal for the Renaissance Athletic Club project was to create an opportunity for underserved members of the community to experience high-end programming at an affordable price by building a quality health club. </p>
                </div>
                <div class="content__item">
                    <h3 class="content__label">What was the problem at hand?
                    </h3>
                    <p class="content__text">Prior to this project, the Benton Harbor community did not have an existing athletic club to serve as a bridge for these communities. This project aimed to present a solution for this by creating a diverse and exciting program model.
                    </p>
                </div>
                <div class="content__item">
                    <h3 class="content__label">Did we meet our goals?
                    </h3>
                    <p class="content__text">Yes! The club continues to thrive in the Benton Harbor community and the model supports the creation of exceptional experiences for the community. </p>
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
                    <p class="content__text">We developed all operational systems, created the program model and brought forth significant input to the creation of the physical entity.
                    </p>
                </div>
                <div class="content__item">
                    <h3 class="content__label">What ways did we drive new business?</h3>
                    <p class="content__text">The Renaissance Athletic Club was a startup business and we oversaw a successful pre-sale that resulted in surpassing our original projections. The model we used has proven to be sustainable as the club continues to thrive and grow.
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
                    <p class="content__text">Timelines for this project were intense as the project was started and completed within one year. We were fortunate to work with an exceptional owner and a motivated staff who executed each game plan and were motivated to inspire the community with exceptional service.
                        <br><br>
                        The excitement of this project was two-fold; being inspired by the vision and passion of an owner committed to giving back to his community and designing a versatile program that engaged many levels of fitness and active living.

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