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
        <link href="<?= getCss('jquery-ui.min') ?>" rel="stylesheet" type="text/css">
        <link href="<?= getCss('bootstrap.min') ?>" rel="stylesheet" type="text/css">
        <link href="<?= getCss('bootstrap-tokenfield.min') ?>" rel="stylesheet" type="text/css">
        <link href="<?= getCss('tokenfield-typeahead.min') ?>" rel="stylesheet" type="text/css">
        <link href="<?= getCss('jquery.dataTables.min') ?>" rel="stylesheet" type="text/css">
        <link href="<?= getCss('jquery.dataTables_themeroller') ?>" rel="stylesheet" type="text/css">
        <link href="<?= getCss('custom') ?>" rel="stylesheet" type="text/css">
    </head>
    <body class="admin-body">
        <div class="container-fluid">
            <?php $this->load->view('admin/common/nav'); ?>
            <?php if($this->session->flashdata('result')) : ?>
            <div class="alert alert-success">
                <?= $this->session->flashdata('result'); ?>
            </div>
            <?php endif; ?>
            <div class="container-fluid">
              <div class="row">