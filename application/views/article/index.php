<?php
$categories = isset($categories) ? $categories : [];
$tags = isset($tags) ? $tags : [];
?>
<div class="clearfix"></div>
<p></p>
<div class="container-fluid">
    <div id="bc1" class="btn-group btn-breadcrumb">
        <a href="<?= base_url('/'); ?>" class="btn btn-default"><i class="glyphicon glyphicon-home"></i></a>
        <?php foreach ($categories AS $category) : ?>
            <a href="<?= $category['link']; ?>" class="btn btn-default"><div><?= $category['name']; ?></div></a>
        <?php endforeach; ?>
        <div class="btn btn-default"><?= $article->getTitle(); ?></div>
    </div>
    <h2 class="text-info"><?= $article->getTitle(); ?></h2>
    <div class="clearfix"></div>
    <div class="well well-sm">
        <?= $article->getSummary(); ?>
    </div>
    <div class="clearfix"></div>
    <p>
        <img src="<?= $article->getFile() ? getUpload($article->getFile()->getFileName()) : getUpload(); ?>" class="img-responsive img-thumbnail">
    </p>
    <div class="clearfix"></div>
    <p>
        <?= $article->getContent(); ?>
    </p>
    <div class="clearfix"></div>
    <p class="alert alert-info">
        <span class="glyphicon glyphicon-folder-close"></span> Chuyên mục: 
        <?php foreach ($categories AS $category) : ?>
            <a href="<?= $category['link']; ?>"><?= $category['name']; ?></a>
        <?php endforeach; ?>
            <br>
        <span class="glyphicon glyphicon-tags"></span> Thẻ: 
        <?php foreach ($tags AS $tag) : ?>
            <a href="<?= $tag['link']; ?>"><?= $tag['name']; ?></a>
        <?php endforeach; ?>
            <br>
        <span class="glyphicon glyphicon-eye-open"></span> Lượt xem: <span class="badge"><?= $article->getViews(); ?></span>
            <br>
        <span class="glyphicon glyphicon-calendar"></span> Đăng ngày <?= $article->getCreated()->format('d-m-Y'); ?>
            <br>
        <span class="glyphicon glyphicon-user"></span> Bởi <?= $article->getUser()->getUsername(); ?>
    </p>
</div>
