<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Danh sách các nhóm danh mục</h3>
                    <div class="pull-right">
                        <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                            <i class="glyphicon glyphicon-filter"></i>
                        </span>
                    </div>
                </div>
                <div class="panel-body">
                    <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Developers" />
                </div>
                <table class="table table-hover" id="dev-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Total Articlce</th>
                            <th>Total View</th>
                            <th>Total Comment</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($datas AS $item) {
                            $totalView = $totalComment = 0;
                            foreach($item->getArticles() AS $article) {
                                $totalView += $article->getArticle()->getViews();
                                $totalComment += count($article->getArticle()->getComments());
                            }
                            echo '
                                <tr>
                                    <td><a href="' .  base_url('category/view/'.$item->getSlugName()) . '" target="_blank">'.$item->getName().'</a></td>
                                    <td>'.count($item->getArticles()).'</td>
                                    <td>'.$totalView.'</td>
                                    <td>'.$totalComment.'</td>
                                    <td>
                                        <a class="button-link" href="'.  $deleteLink . '/' . $item->getSlugName().'">Delete</a> '
                                    . '<a class="button-link" href="'.  $deleteEdit . '/' . $item->getSlugName().'">Edit</a></td>
                                </tr>
                                ';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <p class="text-info">Click the filter icon <small>(<i class="glyphicon glyphicon-filter"></i>)</small></p>
        </div>
    </div>
</div>