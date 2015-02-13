<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Danh sách các bài viết</h3>
                    <div class="pull-right">
                        <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                            <i class="glyphicon glyphicon-filter"></i>
                        </span>
                    </div>
                </div>
                <div class="panel-body">
                    <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Developers" />
                </div>
                <table class="table table-hover table-responsive" id="dev-table">
                    <thead>
                        <tr>
                            <th></th>
                            <th style="width: 140px;">Ảnh</th>
                            <th>Tên bài viết</th>
                            <th>Người đăng</th>
                            <th>Ngày đăng</th>
                            <th>Lượt xem</th>
                            <th>Lượt comment</th>
                            <th>Danh mục</th>
                            <th>Thẻ tag</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($datas AS $item) {
                            $img = $item->getFile() ? getUpload($item->getFile()->getFileName(), 0) : getUpload('', 0);
                            echo '
                                <tr>
                                    <td>
                                        <a class="button-link" href="'.  $deleteLink . '/' . $item->getSlugName().'">Delete</a><br><br>'
                                    . '<a class="button-link" href="'.  $deleteEdit . '/' . $item->getSlugName().'">Edit</a></td>
                                    <td><img src="'.$img.'" class="img-responsive img-thumbnail"></td>
                                    <td><a href="'.  base_url('/article/view/'.$item->getSlugName()).'" target="_blank">'.$item->getTitle().'</a></td>
                                    <td>'.$item->getUser()->getUsername().'</td>
                                    <td>'.$item->getCreated()->format('d/m/Y').'</td>
                                    <td><span class="badge">'.$item->getViews().'</span></td>
                                    <td><span class="badge">'.count($item->getComments()).'</span></td>
                                    <td>'.getCat($item->getCategories()).'</td>
                                    <td>'.getTag($item->getTags()).'</td>
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