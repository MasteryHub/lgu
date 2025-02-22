<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <meta property="article:publisher" content="<?php echo $page_publisher; ?>">
  <meta property="article:modified_time" content="<?php echo $page_modified_time; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <meta name="theme-color" content="#ffffff">
  <link rel="preload" href="<?php echo $directory; ?>assets/SourceCodePro-Regular.ttf" as="font" type="font/ttf" crossorigin>
  <link rel="preload" href="<?php echo $directory; ?>assets/MavenPro.woff2" as="font" type="font/woff2" crossorigin>

  <link rel="preload" href="<?php echo $directory; ?>images/hamburger-light.svg" as="image" type="image/svg+xml" crossorigin>
  <link rel="preload" href="<?php echo $directory; ?>images/hamburger-dark.svg" as="image" type="image/svg+xml" crossorigin>

  <link rel="preload" href="<?php echo $directory; ?>images/nav-light.png" as="image" type="image/png" crossorigin>
  <link rel="preload" href="<?php echo $directory; ?>images/nav-dark.png" as="image" type="image/png" crossorigin>
  <style>
    @font-face {
      font-family: 'Source Code Pro';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url("<?php echo $directory; ?>assets/SourceCodePro-Regular.ttf");
    }

    @font-face {
      font-family: 'Maven Pro';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url("<?php echo $directory; ?>assets/MavenPro.woff2");
    }

    body.light-mode {
      --menu: url("<?php echo $directory_img; ?>images/hamburger-light.svg");
      --topicon: url("<?php echo $directory_img; ?>images/nav-dark.png");
    }

    body {
      --menu: url("<?php echo $directory_img; ?>images/hamburger-dark.svg");
      --topicon: url("<?php echo $directory_img; ?>images/nav-light.png");
    }
  </style>
  <link href="<?php echo $directory; ?>assets/fontawesome-6.4.2/css/fontawesome.min.css" rel="stylesheet">
  <link href="<?php echo $directory; ?>assets/fontawesome-6.4.2/css/brands.min.css" rel="stylesheet">
  <link href="<?php echo $directory; ?>assets/fontawesome-6.4.2/css/solid.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo $directory; ?>assets/bootstrap-5.3.0-alpha1.min.css">
  <link rel="stylesheet" href="<?php echo $directory; ?>css/main.css">

  <link rel="icon" href="<?php echo $directory; ?>favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $directory; ?>favicon.png">
  <link rel="apple-touch-icon" href="<?php echo $directory; ?>favicon.png">
  <link rel="manifest" href="<?php echo $directory; ?>site.webmanifest">

  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?php echo $page_title; ?>">
  <meta property="og:url" content="<?php echo $page_url; ?>">
  <meta property="og:site_name" content="<?php echo $page_title; ?>">
  <meta property="og:description" content="<?php echo $page_description; ?>">
  <meta property="og:image" content="<?php echo $page_image; ?>">
  <meta property="twitter:image:src" content="<?php echo $page_image; ?>" />
  <meta property="twitter:title" content="<?php echo $page_title; ?>" />
  <meta property="twitter:description" content="<?php echo $page_description; ?>" />

  <meta name="keywords" content="<?php echo $page_keywords; ?>">
  <meta name="description" content="<?php echo $page_description; ?>" />

  <meta name="author" content="<?php echo $page_author; ?>">

  <link rel="canonical" href="<?php echo $page_canonical; ?>">
  <title><?php echo $page_title; ?></title>
</head>