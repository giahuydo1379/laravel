@extends('master')
@section('content')
<div class="container" style="background:#e1e1e1">
	<form id="option_insert" action ="/admin/option_groupname" method = "post">
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
				<input type="hiden" name="_token" value="{{csrf_token()}}"> 
				<div id="content" class="space-top-none">
					<div class="main-content" style="padding:30pt;margin:0 100pt 0 100pt;">
					
			
					<div class="form-group {{ $errors->has('category') ? 'has-error' : '' }}">
					<label for="pwd">Tên thể loại:</label>
					<div class="form-group">
					<select class="form-control" id="pwd" onclick="loadSubCategory()" name='category'>
                        @foreach($getListCategory as $category)
						<option  value="nonselected"selected disabled>{{$category['CategoryName']}}</option>
								@foreach($category['childs'] as $sub)
		
			
									<option value="{{$sub['CategoryID']}}">-----{{$sub['CategoryName']}}</option>
								
								@endforeach
                        @endforeach
					</select>
					<span class="text-danger">{{ $errors->first('category') }}</span>

					</div>
				</div>
	
				<div id="abc">
				</div>
			
				<div class="form-group {{ $errors->has('optiongroup_name') ? 'has-error' : '' }}">
					<label for="product_name">Tên nhóm thuộc tính:</label>
					<input type="text" class="form-control" id="product_name" name='optiongroup_name'>
					<span class="text-danger">{{ $errors->first('optiongroup_name') }}</span>

				</div>

				<button type="submit" id="submit" value = "Add option" class="btn btn-default">Thêm nhóm thuộc tính</button>
		

    </form>
</div>
<script>          
                function loadSubCategory(){
				
          	    var valId= $('#pwd').val();
				  //console.log(valId);
				 
					var data = {
						id: valId,
						_token:$('input[name ="_token"]').val()
						};
					$.post({url: "/option_groupname",data, success: function(result){
						$("#abc").html(result);
					
					}});
					//var input =	$('#submit').on('click', function(){
					//	var input = $('#my-form').serializeArray();
					//	console.log(input);
					//});
                };
            
        </script>
@endsection