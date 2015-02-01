<?php
    foreach($datas AS $article) : 
?>
<h2>
    <?php echo $article->getTitle(); ?>
</h2>
<div class="row clearfix">
    <div class="col-md-8 column">
        <?php echo $article->getSummary(); ?>
    </div>
    <div class="col-md-4 column">
        <img alt="140x140" src="<?php $article->getFile() ? getUpload($article->getFile()->getFileName()) : getUpload(); ?>" class="img-responsive"/>
    </div>
</div>
<hr>
<?php
    endforeach;
?>