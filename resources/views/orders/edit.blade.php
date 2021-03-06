@extends('templates.default')
@section('content')
    <script>
        function getProductsByCatId(str) {
            var xhttp;
            if (str == "") {
                document.getElementById("product").innerHTML = "";
                return;
            }
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("product").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "<?= URL_ROOT;?>/orders/getProducts/?q="+str, true);
            xhttp.send();
        }
    </script>

    <script>
        function getUnitPriceByProductId(str) {
            var xhttp;
            if (str == "") {
                document.getElementById("unit_price").innerHTML = "";
                return;
            }
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("unit_price").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "<?= URL_ROOT;?>/orders/getUnitPrice/?q="+str, true);
            xhttp.send();
        }
    </script>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Update order</div>
            <div class="panel-body">
                <div class="col-md-6">
                    <form role="form" action="<?= URL_ROOT; ?>/orders/add" method="post">
                        <div class="form-group">
                            <label>Customer name :</label>
                            <select name="fk_customer_id" class="form-control <?= (!empty($data['fk_customer_id_err'])) ? 'is-invalid' : ''; ?>">
                                <option value=""></option>
                                <?php foreach ($data['customers'] as $customer) : ?>
                                <option value="<?php echo $customer->customer_id;?>"><?php echo $customer->name;?></option>
                                <?php endforeach;?>
                            </select>
                            <span class="invalid-feedback"><?= $data['fk_customer_id_err'] ?></span>
                        </div>
                        <div class="form-group">
                            <label>Category name :</label>
                            <select name="fk_cat_id" onchange="getProductsByCatId(this.value)" class="form-control <?= (!empty($data['fk_cat_id_err'])) ? 'is-invalid' : ''; ?>">
                                <option value=""></option>
                                <?php foreach ($data['categories'] as $category) : ?>
                                <option value="<?php echo $category->cat_id;?>"><?php echo $category->cat_name;?></option>
                                <?php endforeach;?>
                            </select>
                            <span class="invalid-feedback"><?= $data['fk_cat_id_err'] ?></span>
                        </div>
                        <div class="form-group">
                            <label>Products :</label>
                            <select name="fk_product_id" id="product" onchange="getUnitPriceByProductId(this.value)"
                                    class="form-control <?= (!empty($data['fk_product_id_err'])) ? 'is-invalid' : ''; ?>">
                                <option value=""></option>
                            </select>
                            <span class="invalid-feedback"><?= $data['fk_product_id_err'] ?></span>
                        </div>
                        <div class="form-group">
                            <label>Unit price :</label>
                            <select name="unit_price" id="unit_price"
                                    class="form-control <?= (!empty($data['unit_price_err'])) ? 'is-invalid' : ''; ?>">
                                <option value=""></option>
                            </select>
                            <span class="invalid-feedback"><?= $data['unit_price_err'] ?></span>
                        </div>
                        <div class="form-group">
                            <label>qty :</label>
                            <input type="text" name="qty" id="qty" class="form-control prc <?= (!empty($data['qty_err'])) ? 'is_invalid' : '';  ?>"
                                   placeholder="" value="<?= $data['qty']; ?>">
                            <span class="invalid-feedback"><?= $data['qty_err'] ?></span>
                        </div>
                        <div class="form-group">
                            <label>Total :</label>
                            <input type="text" name="total" id="total" class="form-control <?= (!empty($data['total_err'])) ? 'is_invalid' : '';  ?>"
                                   placeholder="" value="<?= $data['total']; ?>">
                            <span class="invalid-feedback"><?= $data['total_err'] ?></span>
                        </div>
                        <script>
                            $(function(){
                                alert($('#qty').val());
                            });
                        </script>
                        <button type="submit" id="submit" class="btn btn-primary">Save</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- /.col-->


@endsection()