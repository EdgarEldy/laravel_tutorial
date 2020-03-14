@extends('templates.default')
@section('content')
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Customers</div>
            <div class="panel-body">
                <a href="<?= URL_ROOT;?>/customers/add"
                   class="btn btn-primary">New</a>
                <table data-toggle="table" data-url=""  data-show-refresh="true" data-show-toggle="true"
                       data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true"
                       data-sort-name="name" data-sort-order="desc">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Customer name</th>
                        <th>Tel</th>
                        <th>Address</th>
                        <th>Options</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data['customers'] as $customer) :?>
                    <tr>
                        <td><?= $customer->customer_id; ?> </td>
                        <td><?= $customer->name; ?></td>
                        <td><?= $customer->tel; ?></td>
                        <td><?= $customer->address; ?></td>
                        <td>
                            <div class="card-footer">
                                <a href="<?= URL_ROOT;?>/customers/edit/<?= $customer->customer_id?>"
                                   class="btn btn-primary">Modifier</a>
                                <form action="<?= URL_ROOT;?>/customers/delete/<?= $customer->customer_id; ?>" method="post">
                                    <button type="submit" onclick="return confirm('Are you sure you want to delete this customer ?')" class="btn btn-danger btn-sm">Delete</button>
                                </form>

                            </div>
                        </td>
                    </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection()