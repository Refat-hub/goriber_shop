<!-- <form class="form-inline" action="{{route('carts.store')}}" method="post">
	@csrf
	<input type="hidden" name="product_id" value="{{$pro->id}}">
	

	
</form> -->

<button type="button" class="btn btn-warning" id="cart" onclick="addCart('{{$pro->id}}')"><i class="fa fa-plus"></i>Add To Cart</button>