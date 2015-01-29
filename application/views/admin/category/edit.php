<div class="container">
    <h4>Thêm mới nhóm chuyên mục</h4>
    <form action="<?php echo $action; ?>" method="POST">
        <div class="form-group col-xs-6">
            <label for="exampleCatName">Tên</label>
            <input name="name" placeholder="<?= $category->getName() ?>" type="text" class="form-control " id="exampleCatName">
        </div>
        <div class="clearfix"></div>
        <button type="submit" class="btn btn-default">Lưu</button>
    </form>
</div>