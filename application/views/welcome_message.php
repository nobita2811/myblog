<?php
foreach ($datas AS $article) :
    ?>
    <h4>
        <a href="<?= base_url('article/view/' . $article->getSlugname()); ?>"><?php echo $article->getTitle(); ?></a>
    </h4>
    <div class="row clearfix">
        <div class="col-md-4 column">
            <a href="<?= base_url('article/view/' . $article->getSlugname()); ?>">
                <img alt="140x140" src="<?php $article->getFile() ? getUpload($article->getFile()->getFileName()) : getUpload(); ?>" class="img-responsive img-thumbnail"/>
            </a>
        </div>
        <div class="col-md-8 column">
            <span class="glyphicon glyphicon-file"></span> <?php echo $article->getSummary(); ?> 
            <span class="glyphicon glyphicon-hand-right"></span> <a href="<?= base_url('article/view/' . $article->getSlugname()); ?>">Xem chi tiết...</a>
            <br>
            <i>
                <span class="glyphicon glyphicon-eye-open"></span> <span>Lượt xem: <?= $article->getViews(); ?></span>
                <span class="glyphicon glyphicon-list"></span> <span>Danh mục: 
            <?php
                foreach($article->getCategories() AS $cat) {
                    echo '<a class="btn btn-default btn-xs" href="'.base_url('category/view/'.$cat->getCategory()->getSlugName()).'">' . $cat->getCategory()->getName() . '</a>';
                }
            ?>
            </span>
            </i>
        </div>
    </div>
    <hr>
    <?php
endforeach;
?>