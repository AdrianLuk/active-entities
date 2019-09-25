<?php
// Variables to assign (if applicable):
// $title 
// $hero_image
// $logo_image
// $meta_title
// $meta_description

$title = "Takedown Athletic Club";
$hero_image = "../assets/images/hero_images/Takedown-Athletic-Hero.png";
$logo_image = "../assets/images/logos/takedown-logo.png";
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
                    <p class="content__text">The Takedown Athletic Club was originally built as a wrestling facility, housing local wrestlers in Minnesota. The goal of this project was to expand the existing entity to house a wider range of activity and increase its profitability.
                    </p>
                </div>
                <div class="content__item">
                    <h3 class="content__label">What was the problem at hand?
                    </h3>
                    <p class="content__text">Many of the wrestlers in the Brainerd community are multi-sport athletes who participate in many activities other than wrestling throughout the year. Coupled with the fact that the facility was beautifully built, Active Entities suggested a two-phased conversion; first, we added an “open gym” workout space for traditional gym goers to experience and then we built a multipurpose space to house activities such as soccer, lacrosse, basketball and fitness training.
                    </p>
                </div>
                <div class="content__item">
                    <h3 class="content__label">Did we meet our goals?
                    </h3>
                    <p class="content__text">Yes! The new focus of the Takedown Gym resulted in hundreds of additional people joining as members. Additional fitness classes were added around a “Pied Piper” lead trainer who created exceptional sport-specific training for local athletes.
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
                    <p class="content__text">Transitioning an entity to make it live up to its full potential involves a number of intricate steps ranging from projecting financials to implementing important operational systems. For this project, we were fortunate to work with an exceptional staff and an intuitive club owner who valued the customer experience, making the journey both rewarding and enjoyable. With this exceptional leadership and motivation, we were able to achieve the objective of converting the entity from a narrow focus wrestling club to a broader program model.
                    </p>
                </div>
                <div class="content__item">
                    <h3 class="content__label">What ways did we drive new business?</h3>
                    <p class="content__text">
                        <ul>
                            <li>We expanded the existing program model and implemented operational systems that ensured the member experience exceeded expectations
                            </li>
                            <li>We executed creative community programs that resulted in tripling the existing membership base
                            </li>
                            <li>We initiated an open concept gym space to attract members whose interests went beyond group classes and wrestling </li>
                        </ul>
                    </p>
                </div>
                <div class="content__item">
                    <h3 class="content__label">How did we convert new customers</h3>
                    <p class="content__text">
                        <ul>
                            <li>We developed an exceptional on-boarding program that engaged potential members, maintaining excellent customer care prior to their recruitment and throughout the first several weeks of their membership
                            </li>
                            <li>We created strong referral programs for excited new members to champion the facility to others
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
                    <h3 class="content__label">What deliverables did we meet?
                    </h3>
                    <p class="content__text">
                        <ul>
                            <li>We created realistic, accurate projections and updated all job descriptions and systems
                            </li>
                            <li>We engaged a prolific marketing plan and a successful on-boarding plan</li>
                            <li>We led project development for expansion which opened successfully in 2019
                            </li>
                        </ul>
                    </p>
                </div>
                <div class="content__item">
                    <h3 class="content__label">What percentage did we grow sales?</h3>
                    <p class="content__text">With our services, the Takedown Athletic Club has since tripled its existing membership base and this number continues to grow on a daily basis.
                    </p>
                </div>
                <div class="content__item">
                    <h3 class="content__label">What does success look like for the client?
                    </h3>
                    <p class="content__text">The club has transitioned to be a thriving multipurpose sports entity.
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