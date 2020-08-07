<option value="">Select a product</option>
@foreach($products as $product)
    <option value="{{$product->id}}">{{$product->product_name}}</option>
@endforeach