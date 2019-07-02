<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="shortcut icon" type="image/png" href="<?php if($favicon = $page->favicon()->toFile()): ?><?= $favicon->url() ?><?php endif ?>">

  <title><?php if ($page->isHomePage()): ?><?= $site->title() ?><?php else: ?><?= $page->title() ?> – <?= $site->title() ?><?php endif ?></title>

  <meta name="description" content="<?= $page->intro()->excerpt(500); ?>">
  <link rel="shortcut icon" type="image/png" href="https://www.nps.gov/webcams-glac/mcdcam2.jpg">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@elliottsphone">
  <meta name="twitter:title" content="<?php if ($page->isHomePage()): ?><?= $site->title() ?><?php else: ?><?= $page->title() ?> – <?= $site->title() ?><?php endif ?>">
  <meta name="twitter:description" content="<?= $page->intro()->excerpt(500); ?>">
  <meta name="twitter:image" content="https://www.nps.gov/webcams-glac/mcdcam2.jpg"/>
  <meta property="og:image" content="https://www.nps.gov/webcams-glac/mcdcam2.jpg"/>
  <meta property="og:type" content="website"/>
  <meta property="og:title" content="<?php if ($page->isHomePage()): ?><?= $site->title() ?><?php else: ?><?= $page->title() ?> – <?= $site->title() ?><?php endif ?>"/>
  <meta property="og:description" content="<?= $page->intro()->excerpt(500); ?>"/>
  <meta property="og:locale" content="en_US"/>
  <meta property="og:url" content="https://bellkiosk.site/"/>

  <?php if ($page->isHomePage()): ?>
    <?= css(['assets/css/home.css', '@auto']) ?>
  <?php endif ?>

  <?= css(['assets/css/main.css', '@auto']) ?>
  <?= js(['assets/js/jquery.js', '@auto']) ?>

    <style>
        body {
          background: <?php echo $page->bg_color() ?> !important;
        }
    </style>
</head>
<body>
