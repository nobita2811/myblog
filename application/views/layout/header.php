<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="refresh" content="900">
        <title><?= TITLE; ?></title>

        <meta name="description" content="<?= DESCRIPTIONS; ?>">
        <meta name="keywords" content="<?= KEY_WORDS; ?>">
        <meta name="geo.region" content="Vietnamese">
        <meta name="author" content="<?= AUTHOR; ?>">
        <meta name="revisit-after" content="1 days">
        <meta name="rating" content="general">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="shortcut icon" href="http://hostvn.net/favicon.ico" type="image/x-icon">
        <link rel="icon" href="http://hostvn.net/favicon.ico" type="image/x-icon">
        <link rel="image_src" href="http://img.hostvn.net/df-thumb.png">
        <link rel="canonical" href="<?= base_url(); ?>">

        <!-- Site CSS -->
        <link href="<?= getCss('bootstrap.min') ?>" rel="stylesheet" type="text/css">
        <link href="<?= getCss('jquery.bxslider') ?>" rel="stylesheet" type="text/css">        
        <link href="<?= getCss('jquery.dataTables.min') ?>" rel="stylesheet" type="text/css">
        <link href="<?= getCss('jquery.dataTables_themeroller') ?>" rel="stylesheet" type="text/css">
        <link href="<?= getCss('custom') ?>" rel="stylesheet" type="text/css">

        <!-- Site Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&amp;subset=latin,latin-ext,vietnamese' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=latin,latin-ext,vietnamese' rel='stylesheet' type='text/css'>
    </head>
    <body>
<div class="container-fluid">
	<div class="row clearfix">
		<div class="col-md-2 column">
		</div>
		<div class="col-md-8 column main-wrapper">
			<div class="row clearfix">
				<div class="col-md-8 column">
                                        <?php $this->load->view('layout/nav'); ?>