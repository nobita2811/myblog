<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Danh sách các file</h3>
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
                            <th style="width: 140px;">File</th>
                            <th>Tên file</th>
                            <th>File size</th>
                            <th>Ngày đăng</th>
                            <th>Người đăng</th>
                            <th>Bài viết</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($datas AS $item) {
                            $img = getUpload($item->getFileName(), 0);
                            echo '
                                <tr>
                                    <td><img src="'.$img.'" class="img-responsive img-thumbnail"></td>
                                    <td>'.$item->getFilename().'</td>
                                    <td>'.$item->getFilesize().' KB</td>
                                    <td>'.$item->getCreated()->format('d-m-Y').'</td>
                                    <td>'.$item->getUser()->getUsername().'</td>
                                    <td>'.$articleFile[$item->getId()]['title'].'</td>
                                    <td>
                                        <a class="button-link" href="'.  $deleteLink . '/' . $item->getId().'">Delete</a> '
                                    . '<a class="button-link" href="'.  $deleteEdit . '/' . $item->getId().'">Edit</a></td>
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