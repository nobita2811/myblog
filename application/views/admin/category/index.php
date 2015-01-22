<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Developers</h3>
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
                            <th>Id</th>
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
                                    <td>'.$item->getId().'</td>
                                    <td>'.$item->getName().'</td>
                                    <td>'.$item->getSlugName().'</td>
                                    <td>Delete Edit</td>
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