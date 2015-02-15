<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
        <title><?= TITLE . getTitle($_ci_vars); ?></title>

        <meta name="description" content="<?= DESCRIPTIONS; ?>">
        <meta name="keywords" content="<?= KEY_WORDS; ?>">
        <meta name="geo.region" content="Vietnamese">
        <meta name="author" content="<?= AUTHOR; ?>">
        <meta name="revisit-after" content="1 days">
        <meta name="rating" content="general">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="shortcut icon" href="<?= getImage('icon.png'); ?>" type="image/x-png">
        <link rel="icon" href="<?= getImage('icon.png'); ?>" type="image/x-icon">
        <link rel="canonical" href="<?= base_url(); ?>">

        <!-- Site CSS -->
        <link href="<?= getCss('bootstrap.min') ?>" rel="stylesheet" type="text/css">
        <link href="<?= getCss('jquery.bxslider') ?>" rel="stylesheet" type="text/css">        
        <link href="<?= getCss('jquery.dataTables.min') ?>" rel="stylesheet" type="text/css">
        <link href="<?= getCss('jquery.dataTables_themeroller') ?>" rel="stylesheet" type="text/css">
        <link href="<?= getCss('font-awesome.min') ?>" rel="stylesheet" type="text/css">
        <link href="<?= getCss('hover') ?>" rel="stylesheet" type="text/css">
        <link href="<?= getCss('custom') ?>" rel="stylesheet" type="text/css">
    </head>
    <body>        
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-md-2 column">
                </div>
                <div class="col-md-8 column main-wrapper">                    
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="<?= getImage('home-image-1.jpg'); ?>" alt="...">
                                <div class="carousel-caption">
                                    ...
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?= getImage('home-image-2.jpg'); ?>" alt="...">
                                <div class="carousel-caption">
                                    ...
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?= getImage('home-image-3.jpg'); ?>" alt="...">
                                <div class="carousel-caption">
                                    ...
                                </div>
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <p class="alert alert-success text-center text-nowrap">CHÚC MỪNG NĂM MỚI</p>
                    <div class="row clearfix">
                        <div class="col-md-8 column">
                            <?php $this->load->view('layout/nav'); ?>