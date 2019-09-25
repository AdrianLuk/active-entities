<?php
// Variables to assign (if applicable):
// $title 
// $hero_image
// $logo_image
// $meta_title
// $meta_description

$title = "Schwartz-Reisman & Prosserman Jewish Community Centres";
$hero_image = "../assets/images/hero_images/JCC-Hero.png";
$logo_image = "../assets/images/logos/jcc-logo.jpg";
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
                    <p class="content__text">The goal of the Schwartz-Reisman Jewish Community Centre/Prosserman Jewish Community Centre project was to guide the team through a number of significant changes and developments. We aimed to:
                        <ol>
                            <li>Perform an operational assessment of the organization</li>
                            <li>Convert the existing entity to follow a member-base model
                            </li>
                            <li>Support the development of a pre-sale strategy for future expansion
                            </li>
                            <li>Upgrade the program model
                            </li>
                            <li>Create operational efficiency
                            </li>
                        </ol>
                    </p>
                </div>
                <div class="content__item">
                    <h3 class="content__label">What was the problem at hand?</h3>
                    <p class="content__text">The problem we aimed to solve was to retain the cultural integrity of both entities while seamlessly upgrading systems, programs and membership models to create stronger pathways of inclusion.</p>
                </div>
                <div class="content__item">
                    <h3 class="content__label">Did we meet our goals?
                    </h3>
                    <p class="content__text">Yes! We worked with an inspired and willing leadership team who was motivated to put forth exceptional experiences on a daily basis. This resulted in the creation of a new membership model that will support significant growth for the organization, come the fall of 2019.
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
                    <p class="content__text">By way of daily virtual meetings and industry-relevant strategy, we tackled each aspect of the development of a strong program model and created conversion pathways for future membership growth.
                    </p>
                </div>
                <div class="content__item">
                    <h3 class="content__label">How did we convert new customers?
                    </h3>
                    <p class="content__text">
                        <ul>
                            <li>We led program wall exercises which brought forth new opportunities for program expansion
                            </li>
                            <li>We led the process of developing a new membership model for the organization</li>
                            <li>We supported the reorganization of responsibilities to produce a more streamlined and efficient approach to all operations</li>
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
                    <p class="content__text">Change is never an easy journey and it involves a number of intricate steps that must be vetted prior to launch. Each aspect of the project has been carefully constructed and prepared to be engaged by the fall of 2019.
                    </p>
                </div>
                <div class="content__item">
                    <h3 class="content__label">What does success look like for the client?
                    </h3>
                    <p class="content__text">The potential at both facilities will be met through a systematic approach to garner new members. The goal is to provide a current and vibrant schedule that includes both physical and cultural pathways of inclusion which will be achieved by creating and flawlessly executing a member-base program. Success for the client will be a successful launch of the new program model in the fall of 2019
                    </p>
                </div>
                <div class="content__item">
                    <h3 class="content__label">What tools were used to drive results?
                    </h3>
                    <p class="content__text">
                        <ol>
                            <li>Operational assessment</li>
                            <li>Program Wall to evaluate current program methodology and offerings
                            </li>
                            <li>Upgrading of systems and processes
                            </li>
                            <li>The development of a pre-sale campaign for the fall of 2019
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