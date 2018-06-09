@extends('master')
@section('content')


<div class="container" style="background:#e1e1e1">
        @if(isset($errs))
        {{$errs}}
        @else
	<form id="my-form" action ="/admin/process" method = "post">
		@if(count($errors))
				<div class="alert alert-danger">
					<strong>Xin lỗi!</strong> Bạn phải sửa lỗi đăng nhập
					<br/>
					<ul>
						@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
            
				<input type="hiden" name="_token" value="{{csrf_token()}} "> 
				<div id="content" class="space-top-none">
					<div class="main-content" style="padding:30pt;margin:0 100pt 0 100pt;">
					
			
			
				<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
					<label for="name">tên sản phẩm:</label>
					<input type="text" class="form-control" id="product_name" name='name'value="{{ old('name') }}">
					<span class="text-danger">{{ $errors->first('name') }}</span>
				</div>

				<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
					<label for="description">miêu tả:</label>
					<input type="<text>  cols="40" 
						rows="5" 
						style="width:800px; height:80px;" 
						name="description"" class="form-control" id="description"
						value="{{ old('description') }}">
						<span class="text-danger">{{ $errors->first('description') }}</span>
				</div>

			
				<div class="form-group {{ $errors->has('quantity') ? 'has-error' : '' }}">
					<label for="quantity">số lượng:</label>
					<input type="number_format" class="form-control" id="quantity" name='quantity'value="{{ old('quantity') }}">
					<span class="text-danger">{{ $errors->first('quantity') }}</span>
				</div>

				<div class="form-group">
					<label for="product_status">tình trạng sản phẩm:</label>
					<select id="product_status" name='product_status' value="{{ old('product_status') }}">
						<option value="1">còn hàng<option>
						<option value="2">hết hàng<option>
						<option value="3">tiêu thụ mạnh<option>
					</select>
				</div>

				<div class="form-group">
					<label for="manufacture_id">nhà sản xuất:</label>
					<select id="manufacture" name='manufacture_id' value="{{ old('manufacture_id') }}">
						<option value="1">apple<option>
						<option value="2">samsung<option>
						<option value="3">nokia<option>
					</select>
				</div>

				<div class="form-group {{ $errors->has('category_CategoryID') ? 'has-error' : '' }}">
					<label for="category_CategoryID">thể loại:</label>
					<div class="form-group">
					<select class="form-control" id="sel1" onclick="loadSubCategory()" name='category_CategoryID' value="{{ old('category_CategoryID') }}">
                        @foreach($listCategorys as $category)
                            <option  value="nonselected"selected disabled>{{$category['CategoryName']}}</option>
                            @foreach($category['childs'] as $sub)
                                <option  name="{{$sub['CategoryID']}}" value="{{$sub['CategoryID']}}" >-----{{$sub['CategoryName']}}</option>
                            @endforeach 
                        @endforeach
					</select>
					<span class="text-danger">{{ $errors->first('category_CategoryID') }}</span>
					</div>
				</div>
				<div id="optionValue">

				</div>

					<script type="text/javascript">

						 function reverseNumber(input) {
							return [].map.call(input, function(x) {
								return x;
								}).reverse().join(''); 
						}	
							function plainNumber(number) {
							return number.split('.').join('');
						      }
						  function splitInDots(input) {
							var value = input.value,
								plain = plainNumber(value),
								reversed = reverseNumber(plain),
								reversedWithDots = reversed.match(/.{1,3}/g).join('.'),
								normal = reverseNumber(reversedWithDots);
							
							console.log(plain,reversed, reversedWithDots, normal);
							input.value = normal;
						}
					</script>

				<div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
					<label for="price">Giá:</label>
					<input type="text" class="form-control" onkeyup="splitInDots(this)" id="price" name='price'value="{{ old('price') }}">
					
					<span class="text-danger">{{ $errors->first('price') }}</span>
				</div>

				<div class="form-group">
					<label for="active">Trạng thái hiển thị:</label>
					<select id="active" name='active'value="{{ old('active') }}">
						<option value="1">có<option>
						<option value="2">không<option>
					</select>
				</div>

				<button type="submit" id="submit" value = "Add product" class="btn btn-default">Thêm sản phẩm</button>
		
				
	</form>		
		</div>
        @endif
        <script>          
                function loadSubCategory(){
				
          	    var valId= $('#sel1').val();
				  //console.log(valId);
				 
					var data = {
						id: valId,
						_token:$('input[name ="_token"]').val()
						};
					$.post({url: "admin/option_group",data, success: function(result){
						$("#optionValue").html(result);
					
					}});
					//var input =	$('#submit').on('click', function(){
					//	var input = $('#my-form').serializeArray();
					//	console.log(input);
					//});
                };
            
        </script>

@endsection