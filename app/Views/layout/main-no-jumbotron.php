<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duckie Land - Play-to-Earn NFT Games</title>
    <meta name="description" content="A Duck Filled Gaming Metaverse. Play And Start Earning Now.">
    <meta name="keywords" content="Play To Earn, NFT game, blockchain game, farming game, land game, duck game, metaverse">
    <meta property="og:site_name" content="Duckie Land" />
    <meta property="og:site" content="https://duckie.land" />
    <meta property="og:title" content="Duckie Land - Play-to-Earn NFT Games" />
    <meta property="og:description" content="A Duck Filled Gaming Metaverse. Play And Start Earning Now." />
    <meta property="og:image" content="https://duckie.land/assets/images/favicon.png" />
    <meta property="og:url" content="https://duckie.land" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <meta property="og:type" content="article" />
    <!-- site favicon -->
    <link rel="icon" type="image/png" href="https://duckie.land/assets/images/favicon.png" sizes="16x16">
    <!-- bootstrap 4  -->
    <link rel="stylesheet" href="https://duckie.land/assets/css/vendor/bootstrap.min.css?ver=1646634102">
    <!-- fontawesome 5  -->
    <link rel="stylesheet" href="https://duckie.land/assets/css/all.min.css">
    <!-- line-awesome webfont -->
    <link rel="stylesheet" href="https://duckie.land/assets/css/line-awesome.min.css">

    <!-- style main css -->
    <link rel="stylesheet" href="https://duckie.land/assets/css/main.css?ver=<?=filemtime('css/style.css')?>">



    <link href="https://duckie.land/assets/fonts/icomoon/icons.css" rel="stylesheet">


    <!-- My CSS -->
    <link href="https://dao.duckie.land/css/style.css?ver=<?=filemtime('css/style.css')?>" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">



    <!-- Boostrap Icons -->
    <link rel="stylesheet" href="/asset/bootstrap-icons/font/bootstrap-icons.css">





</head>


<body>


    <!-- scroll-to-top start -->
    <div class="scroll-to-top">
        <span class="scroll-icon">
            <i class="las la-arrow-up"></i>
        </span>
    </div>

    <div class="page-wrapper">

        <?= $this->include('partials/header_partials'); ?>

        <section class="main-content bold-bottom--border mb-5" style="border-bottom:none; ">
            <div class="container">
                <?= $this->renderSection('content'); ?>
            </div>
        </section>

        <?= $this->include('partials/footer_partials'); ?>



    </div>

    <script src="https://duckie.land/assets/js/vendor/jquery-3.5.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="https://duckie.land/assets/js/vendor/bootstrap.bundle.min.js"></script>
    <!-- lightcase js -->
    <script src="https://duckie.land/assets/js/vendor/lightcase.js"></script>
    <!-- wow js -->
    <script src="https://duckie.land/assets/js/vendor/wow.min.js"></script>
    <!-- custom js -->
    <script src="https://duckie.land/assets/js/app.js?ver=1646142846"></script>
</body>

</html>