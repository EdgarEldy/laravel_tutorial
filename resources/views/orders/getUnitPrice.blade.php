<label for="unit_price">Unit price :</label>
<input type="text" name="unit_price" id="price" class="form-control"
       class="@error('unit_price') is-invalid @enderror"
       placeholder="" value="{{$product->unit_price}}">
@error('unit_price')
<button class="btn-danger">{{$message}}</button>
@enderror