@extends('templates.default')
@section('content')
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Update a customer</div>
            <div class="panel-body">
                <div class="col-md-6">
                    <form role="form" action="<?= URL_ROOT; ?>/customers/edit/<?= $data['id']; ?>" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Customer name :</label>
                            <input type="text" name="name" class="form-control <?= (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>"
                                   placeholder="" value="<?= $data['name']; ?>">
                            <span class="invalid-feedback"><?= $data['name_err'] ?></span>
                        </div>
                        <div class="form-group">
                            <label>Tel :</label>
                            <input type="text" name="tel" class="form-control <?= (!empty($data['tel_err'])) ? 'is-invalid' : ''; ?>"
                                   placeholder="Telephone" value="<?= $data['tel']; ?>">
                            <span class="invalid-feedback"><?= $data['tel_err'] ?></span>
                        </div>

                        <div class="form-group">
                            <label>Address :</label>
                            <input type="text" name="address" class="form-control <?= (!empty($data['address_err'])) ? 'is-invalid' : ''; ?>"
                                   placeholder="" value="<?= $data['address']; ?>">
                            <span class="invalid-feedback"><?= $data['address_err'] ?></span>
                        </div>
                        <button type="submit" id="submit" class="btn btn-primary">Save</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- /.col-->

@endsection()