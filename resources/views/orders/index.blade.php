@extends('templates.default')
@section('content')
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">orders</div>
            <div class="panel-body">
                <a href="{{url('orders/add')}}"
                   class="btn btn-primary">New</a>
                <table data-toggle="table" data-url=""  data-show-refresh="true" data-show-toggle="true"
                       data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true"
                       data-sort-name="name" data-sort-order="desc">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Customer name</th>
                        <th>product name</th>
                        <th>Unit price</th>
                        <th>qty</th>
                        <th>Total</th>
                        <th>Options</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data['orders'] as $order) :?>
                    <tr>
                        <td><?= $order->order_id; ?> </td>
                        <td><?= $order->name; ?></td>
                        <td><?= $order->product_name; ?></td>
                        <td><?= $order->unit_price; ?></td>
                        <td><?= $order->qty; ?></td>
                        <td><?= $order->total; ?></td>
                        <td>
                            <div class="card-footer">
                                <a href="{{url('orders/edit/')}}"
                                   class="btn btn-primary">Edit</a>
                                <form action="<?= URL_ROOT;?>/orders/delete/<?= $order->order_id; ?>" method="post">
                                    <button type="submit" onclick="return confirm('Are you sure you want to delete this order ?')" class="btn btn-danger btn-sm">Delete</button>
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