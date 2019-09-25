<?php
// Variables to assign (if applicable):
// $title 
// $hero_image
// $logo_image
// $meta_title
// $meta_description

$title = "Elmhurst Parks and Recreation";
$hero_image = "../assets/images/hero_images/Elmhurst-Parks-Hero.png";
$logo_image = "../assets/images/logos/elmhurst-logo.jpeg";
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
                    <p class="content__text">Our goal for the Elmhurst Park and Recreation project was to perform an organizational assessment and support suggestions of change.
                    </p>
                </div>
                <div class="content__item">
                    <h3 class="content__label">What was the problem at hand?
                    </h3>
                    <p class="content__text">The organization had remained unaltered for some time and recognized its need for systematic and program upgrades to maintain its status as a leader in the community, with regards to recreation and wellness offerings. The task at hand was to provide sufficient management coaching to the key leaders and support the growth and expansion of their skill sets and knowledge base.
                    </p>
                </div>
                <div class="content__item">
                    <h3 class="content__label">Did we meet our goals?
                    </h3>
                    <p class="content__text">Yes! Ancillary programming was expanded which resulted in virtually doubling ancillary revenue targets on a monthly basis. As well, the program directors grew in their roles and were able to perform independently and more efficiently as made evident by their key performance indicators (KPIs).</p>
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
                    <p class="content__text">In order to successfully improve Elmhurst Parks and Recreation, we led weekly Skype sessions with the team of Directors and supported the implementation of on-boarding practices that were successful in driving participation and business. We also established KPIs and other performance measurables that were quantitative in nature and encourage the staff to achieve their goals.
                    </p>
                </div>
                <div class="content__item">
                    <h3 class="content__label">What ways did we drive new business?</h3>
                    <p class="content__text">We significantly expanded the existing program model to capture a more varied member base by introducing medical rehab, high performance training and entry level programs for new exercise enthusiasts. </p>
                </div>
                <div class="content__item">
                    <h3 class="content__label">How did we convert new customers</h3>
                    <p class="content__text">We supported the development of a “welcome mat” methodology that guided new members weeks into their membership. The team’s success grew to a high conversion rate from prospect to active member. </p>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <h2 class="section__title-red section__title section__title-centered">The results</h2>
            <div class="section__content">
                <div class="content__item">
                    <h3 class="content__label">What percentage did we grow sales?
                    </h3>
                    <p class="content__text">Following our services, both membership and Personal Training pockets grew significantly. We were fortunate to work with an exceptional Executive Director and a motivated team who brought great energy and enthusiasm to the effort.The collaboration produced a 15% increase in membership and a 30% increase in personal training. </p>
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