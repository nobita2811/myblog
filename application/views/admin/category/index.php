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
                            <th>Slug Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($datas AS $item) {
                            echo '
                                <tr>
                                    <td>'.$item->getName().'</td>
                                    <td>'.$item->getSlugName().'</td>
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