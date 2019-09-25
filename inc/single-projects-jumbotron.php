<!-- Jumbotron -->
<div class="jumbotron-fluid jumbotron__banner" style="background-image: url('<?= $hero_image ? $hero_image : '/assets/images/hero_images/hero-img-projects.png'; ?>');">
    <div class="jumbotron__content container">
        <h1 class="jumbotron__header text-center">
            <?= $title; ?>
        </h1>
        <div class="bread-crumb text-center text-lg-right  text-white">
            <a class="bread-crumb__link" href="/index.php">Home</a> /
            <a class="bread-crumb__link" href="/projects.php">Past &amp; Present Projects</a> /
            <a class="bread-crumb__link" href="javascript:;"><?= $title; ?></a>
        </div>
    </div>
</div>
<!-- ./ jumbotron -->