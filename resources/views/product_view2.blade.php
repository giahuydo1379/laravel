<!DOCTPE html>
<html>
   <head>
      <title>View Product Records</title>
   </head>
   <body>
      <table border = "1" class="table table-bordered">
         <thead>
            <tr>
               <th>Id</th>
               <td>Name</td>
               <td>Description</td>
               <td>Quantity</td>
               <td>Created_at</td>
               <td>Updated_at</td>
               <td>Product_statues</td>
               <td>Manufacture</td>
			   <td>category_CategoryID</td>
            </tr>
         </thead>
         @foreach ($product_details as $user)
         <tr>
            <td>{{ $user->id }}</td>
            <td> <a href="/details">{{ $user->name }}</a> </td>
            <td>{{ $user-> description }}</td>
            <td>{{ $user->quantity }}</td>
            <td>{{ $user->created_at }}</td>
			<td>{{ $user->updated_at }}</td>
            <td>{{ $user->product_status }}</td>
			<td>{{ $user->manufacture_id }}</td>
			<td>{{ $user->category_CategoryID }}</td>
			
            <td><a href = '/edit/{{ $user->id }}'>Edit</a></td>
            <td><a href = '/delete/{{ $user->id }}'>Delete</a></td>
		
         </tr>
         @endforeach
      </table>
      echo '<a href = "/insert">Click Here</a> to go insert.';
   </body>
</html>