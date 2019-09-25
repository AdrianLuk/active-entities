<?php
// Variables to assign (if applicable):
// $title 
// $hero_image
// $logo_image
// $meta_title
// $meta_description

$title = "Western Michigan Community Tennis";
$hero_image = "../assets/images/hero_images/WMCT-Hero.png";
$logo_image = "../assets/images/logos/wmct-logo.png";
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
                    <p class="content__text">Our goal was to create a unique and exciting tennis program to support the development of a tennis center in Grand Rapids, Michigan. </p>
                </div>
                <div class="content__item">
                    <h3 class="content__label">What problem were we solving?</h3>
                    <p class="content__text">The WMCT team needed professional guidance and direction on how to create an affordable yet effective program and center.
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
                    <h3 class="content__label">Did we meet our goals?</h3>
                    <p class="content__text">Yes! We successfully created a unique program for the community teaching life skills through the game of tennis. We created organized program structure, direction for the WMCT team, financial modeling and an action plan that has worked to move the project forward. Funding for the center is currently in action and the building date is estimated to be the spring of 2020.
                    </p>
                </div>
                <div class="content__item">
                    <h3 class="content__label">In what ways did/will we drive new business? </h3>
                    <p class="content__text">We provided the WMCT team with the leadership skills necessary to lead to the tremendous growth of their community tennis programs. As well, we provided them with the awareness and information concerning the project to lead to new investors and supporters. </p>
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
                    <p class="content__text">We oversaw all aspects of the project including the following:
                        <ul>
                            <li>Structure for the community tennis program resulting in virtually doubling participation rates within the first year
                            </li>
                            <li>A financial model that is both efficient and attainable
                            </li>
                            <li>The creation of a phased growth plan
                            </li>
                            <li>Operational direction and support including job descriptions, Board guidance, program development and implementation, and financial structuring
                            </li>
                        </ul>
                    </p>
                </div>
                <div class="content__item">
                    <h3 class="content__label">What was the budget you were working with? </h3>
                    <p class="content__text">We collaborated with the Board to create a 5-year plan for the WMCT project. Initial costs are estimated at $6 million.
                    </p>
                </div>
                <div class="content__item">
                    <h3 class="content__label">What challenges arose and how did we rectify them? </h3>
                    <p class="content__text">The WMCT team has been unsuccessful in launching this project for several years. The injection of a definitive and attainable phased game plan has produced significant momentum for the project which will culminate in launching the new facility in 2020.
                    </p>
                </div>
                <div class="content__item">
                    <h3 class="content__label">What does success look like for the client?
                    </h3>
                    <p class="content__text">
                        <ol>
                            <li>Phase 1 was to stabilize the project by creating realistic goals and objectives
                            </li>
                            <li>Phase 2 was to implement a dynamic program to cultivate interest and participation — thus far we have doubled participation and are on pace to double the number again by fall 2019.
                            </li>
                            <li>Phase 3 was to develop and implement a funding solution to drive support for the project estimated at $6 million. We are currently on the verge of attaining this goal.
                            </li>
                            <li>The ultimate goal of this project will be to successfully open the WMCT tennis center by the spring of 2020.
                            </li>
                        </ol>
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