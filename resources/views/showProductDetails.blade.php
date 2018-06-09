@extends('master')
@section('content')

<div class="container">
  <h2>Chi tiết sản phẩm</h2>          
  <table class="table table-striped">
    <thead>
      <tr>
      
        <th>Nổi bật</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
        <tr>
         
          <td>{{ $user->optiongroup_name }}</td>
             <td>{{ $user->option_name }}</td>
            
         </tr>
        @endforeach
        <th>Tên sản phẩm</th>
        <td>{{ $user->name }}</td>
        
        <td>Giá: </td>
        <td>{{ $user->price }} VND</td> 
    </tbody>
  </table>
  echo '<a href = "/admin/entryProduct">Click Here</a> to go insert.';
</div>

@endsection