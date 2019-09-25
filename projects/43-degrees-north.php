<?php
// Variables to assign (if applicable):
// $title 
// $hero_image
// $logo_image
// $meta_title
// $meta_description

$title = "43 Degrees North";
$hero_image = "../assets/images/hero_images/43-Degrees-Hero.png";
$logo_image = "../assets/images/logos/43degrees-logo.jpg";
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
                    <p class="content__text">The goal of the 43 Degrees North project was to create a state-of-the-art fitness facility with a unique program model to service the people of New Hampshire.
                    </p>
                </div>
                <div class="content__item">
                    <h3 class="content__label">What was the problem at hand?
                    </h3>
                    <p class="content__text">While there were a number of boutique offerings throughout the city, there was not yet a high-end club that was able to produce a varied program model. </p>
                </div>
                <div class="content__item">
                    <h3 class="content__label">Did we meet our goals? </h3>
                    <p class="content__text">Yes! We guided a talented group of enthusiastic local fitness leaders through a successful pre-sale and launch of a profitable new entity.
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
                    <p class="content__text">
                        <ul>
                            <li>We created and implemented all aspects of a successful pre-sale</li>
                            <li>We hired key staff members and trained the team for launch
                            </li>
                            <li>We created realistic financial goals and objectives
                            </li>
                            <li>We supported the development of a dynamic program model
                            </li>
                            <li>We created a 12-month marketing and messaging plan
                            </li>
                        </ul>
                    </p>
                </div>
                <div class="content__item">
                    <h3 class="content__label">How did we help?</h3>
                    <p class="content__text">We were fortunate enough to work with a number of local fitness leaders who were equally inspired to put forth a dynamic program model. While they were experienced in working at the boutique level, our services allowed them to adapt to the club setting and put forth a tremendous club experience for the New Hampshire community. </p>
                </div>
                <div class="content__item">
                    <h3 class="content__label">What ways did we drive new business?</h3>
                    <p class="content__text">
                        <ul>
                            <li>We surpassed pre-sale projections</li>
                            <li>We created a dynamic on-boarding system to ensure each new member was brought forth safely and prepared for their fitness journeys
                            </li>
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
                    <h3 class="content__label">What challenges arose and how did we rectify them?</h3>
                    <p class="content__text">The club had a prior history of underachievement and had severed ties with many members prior to closing. The new ownership and staff had to break through these challenges to win over the community and recapture these relationships. With our help identifying the pathways to do so, the team was exceptional in winning back the community and ensuring them that the new entity would provide an entirely new experience.
                    </p>
                </div>
                <div class="content__item">
                    <h3 class="content__label">What does success look like for the client?
                    </h3>
                    <p class="content__text">The best aspect of this project was the genuine concern and dedication the ownership and staff had to creating exceptional experiences on a daily basis for each member. Trust in a small community is incredibly fragile, yet this group remained focused on continuous improvement and is staying true to that mission!
                    </p>
                </div>
                <div class="content__item">
                    <h3 class="content__label">What tools were used to drive results?
                    </h3>
                    <p class="content__text">For this project, an in-depth feasibility study was performed prior to engaging the build out process that supported the development of a full-scaled fitness facility.
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