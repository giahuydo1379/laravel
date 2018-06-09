@extends('master')
@section('content')


<div class="container">
  <h2>Danh sách sản phẩm</h2>          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>STT</th>
        <th>name</th>
        <th>Miêu tả</th>
        <th>Số lượng</th>
        <th>Tình trạng sản phẩm</th>
        <th>Nhà sản xuất</th>
        <th>Thể loại</th>    
      </tr>
    </thead>
    <tbody>

      @foreach ($users as $user)
         <tr>
        @if($user->active=="có")
            <th>{{ ++$i }}</th>
            <th> <a href="/admin/showproductdetails/{{$user->id}}">{{ $user->name }}</a> </th>
            <th>{{ $user-> description }}</th>
            <th>{{ $user->quantity }}</th> 
            <th>{{ $user->product_status }}</th>
            <th>{{ $user->manufacture_name }}</th>
			      <th>{{ $user->CategoryName }}</th>
          
        @endif
     
         </tr>
       
        @endforeach
     
    </tbody>
  </table>

 {{ $users->links() }}
 
</div>

@endsection