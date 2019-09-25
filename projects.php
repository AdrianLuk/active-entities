<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './inc/meta-tags.php'; ?>
    <?php include './inc/head-imports.php'; ?>
    <?php include './inc/gtm-head.php'; ?>
</head>

<body class="projects">
    <?php include './inc/gtm-body.php'; ?>
    <?php include './inc/navbar.php'; ?>
    <!-- Jumbotron -->
    <div class="jumbotron-fluid jumbotron__banner" style="background-image: url('./assets/images/hero-img-projects.png');">
        <div class="jumbotron__content container">
            <h1 class="jumbotron__header text-center">
                Active Entities Past and <br class="d-lg-none" />Present Projects
            </h1>
            <div class="bread-crumb text-center text-lg-right  text-white">
                <a class="bread-crumb__link" href="index.php">Home</a> /
                <a class="bread-crumb__link" href="projects.php">Past &amp; Present Projects</a>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <p class="lead text-center">Active Entities has worked to provide key business insights and management consulting services to a wide range of clients:</p>
        <div id="projects-grid" class="row projects__grid">
        </div>
    </div>
    <!-- ./ jumbotron -->
    <?php include './inc/footer.php'; ?>
    <a href="javascript:void(0);" id="scroll" title="Scroll to Top">Top<span></span></a>
    <?php include "./inc/footer-imports.php"; ?>
</body>

</html>