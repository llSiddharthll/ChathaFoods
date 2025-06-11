<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="pixel-plus">
    <meta name="description" content="Chatha Foods">
    <!-- ======== Page title ============ -->
    <title><?php echo $title; ?></title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="./output.css">
    

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <?php echo (isset($css) ? $css   : '')?>

    <style>
      /* body {
        background: linear-gradient(135deg, #ffe4e1 0%, #f0f4f8 100%);
        overflow-x: hidden;
        font-family: 'Poppins', sans-serif;
      } */
      .wave-bg {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 150 150"><path d="M0 75 Q37.5 50 75 75 T150 75" stroke="#d1d5db" stroke-width="3" fill="none" opacity="0.15"/></svg>') repeat;
        background-size: 150px 150px;
        z-index: -1;
      }
      @media (max-width: 768px) {
        .timeline-item {
          flex-direction: column !important;
          align-items: center !important;
          text-align: center !important;
        }
        .timeline-item > div.content-box {
          max-width: 90% !important;
          margin: 1rem auto !important;
        }
        .timeline-item img,
        .timeline-item .flex.space-x-4 {
          margin: 0 auto !important;
          justify-content: center !important;
        }
        .timeline-item .ml-6,
        .timeline-item .mr-6 {
          margin: 1rem auto !important;
        }
      }
    </style>
</head>