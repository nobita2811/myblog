<?php
foreach ($datas AS $article) :
    ?>
    <h3>
        <a href="<?= base_url('article/view/' . $article->getSlugname()); ?>"><?php echo $article->getTitle(); ?></a>
    </h3>
    <div class="row clearfix">
        <div class="col-md-4 column">
            <a href="<?= base_url('article/view/' . $article->getSlugname()); ?>">
                <img alt="140x140" src="<?php $article->getFile() ? getUpload($article->getFile()->getFileName()) : getUpload(); ?>" class="img-responsive img-circle"/>
            </a>
        </div>
        <div class="col-md-8 column">
            <?php echo $article->getSummary(); ?> <a href="<?= base_url('article/view/' . $article->getSlugname()); ?>">Xem chi tiết...</a>
            <br>
            <i>
            <span>Lượt xem: <?= $article->getViews(); ?></span>
            <span>Danh mục: 
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