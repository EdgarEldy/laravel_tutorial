@extends('templates.default')
@section('content')
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Add a product</div>
            <div class="panel-body">
                <div class="col-md-6">
                    <form role="form" action="<?= URL_ROOT; ?>/products/add" method="post">
                        <div class="form-group">
                            <label>Category :</label>
                            <select name="fk_cat_id" class="form-control <?= (!empty($data['fk_cat_id_err'])) ? 'is-invalid' : ''; ?>">
                                <option value=""></option>
                                <?php foreach ($data['categories'] as $category) : ?>
                                <option value="<?php echo $category->cat_id;?>"><?php echo $category->cat_name;?></option>
                                <?php endforeach;?>
                            </select>
                            <span class="invalid-feedback"><?= $data['fk_cat_id_err'] ?></span>
                        </div>
                        <div class="form-group">
                            <label>Product name :</label>
                            <input type="text" name="product_name" class="form-control <?= (!empty($data['product_name_err'])) ? 'is_invalid' : '';  ?>"
                                   placeholder="" value="<?= $data['product_name']; ?>">
                            <span class="invalid-feedback"><?= $data['product_name_err'] ?></span>
                        </div>
                        <div class="form-group">
                            <label>Unit price :</label>
                            <input type="text" name="unit_price" class="form-control <?= (!empty($data['unit_price_err'])) ? 'is_invalid' : '';  ?>"
                                   placeholder="" value="<?= $data['unit_price']; ?>">
                            <span class="invalid-feedback"><?= $data['unit_price_err'] ?></span>
                        </div>
                        <button type="submit" id="submit" class="btn btn-primary">Save</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- /.col-->


@endsection()