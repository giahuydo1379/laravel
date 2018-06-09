<!DOCTPE html>
<html>
   <head>
      <title>View Product Records</title>
   </head>
   <body>
      <table border = "1" class="table table-bordered">
         <thead>
            <!-- <tr>
               <th>Id</th>
               <td>Name</td>
               <td>Description</td>
               <td>Quantity</td>
               <td>Created_at</td>
               <td>Updated_at</td>
               <td>Product_statues</td>
               <td>Manufacture</td>
			   <td>category_CategoryID</td>
               <td>option_group_name</td>
               <td>option_name</td>
			   <td>price</td>

            </tr> -->
     
          @foreach ($product_view_details as $user)
            <tr>
                <td>{{ $user->optiongroup_name }}</td>
                <td>{{ $user->option_name }}</td>
                <td>{{ $user->price }}</td>
            </tr>
            @endforeach
         </thead>
        
      </table>
      echo '<a href = "/list">Click Here</a> to go back.';
   </body>
</html>