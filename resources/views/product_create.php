<!DOCTYPE html>
<html>
   <head>
      <title>Product Management | Add</title>
   </head>
   <body>
      <div class="container">
         <form action = "/create" method = "post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
            <table class="table table-bordered">
               <tr>
                  <td> Name</td>
                  <th><input type='text' name='name' /></th>
				  
               <tr>
                  <td>Description</td>
					  <td><input type="text" name='description'/></td>
               </tr>
			   
               <tr>
                  <td>Quantity</td>
					  <td><input type="number_format" name='quantity'/></td>
               </tr>
			   
               <tr>
                  <td>Created_at</td>
					  <td><input type="datetime" name='created_at'/></td>
               </tr>
			   
               <tr>
                  <td>Updated_at</td>
					  <td><input type="datetime" name='updated_at'/></td>
               </tr>
               
               <tr>
                  <td>Product_Status</td>
					  <td>
						 <select name="product_status">
							<option value="1">còn hàng</option>
							<option value="2">hết hàng</option>
							<option value="3">tiêu thụ mạnh</option>
						 </select>
					  </td>
               </tr>
			   
			   <tr>
					<td>Manufacture_id</td>
						<td>
							<select name="manufacture_id">
								 <option value="1">1</option>
								 <option value="2">2</option>
						  </select>
				   </td>
               </tr>
			   
			   <tr>
					<td>Category_id</td>
						 <td>
							<select name="category_CategoryID">
								<option value="1">laptop-máy tính</option>
								<option value="2">dell</option>
								<option value="3">hp</option>
								 <option value="4">mac</option>
								 <option value="5">điện thoại</option>
								 <option value="6">samsung</option>
								 <option value="7">iphone</option>								
								 <option value="8">nokia</option>
								 <option value="9">iphone_X</option>
								 <option value="10">iphone_7</option>
						  </select>
				   </td>
			   </tr>
			   
			   	 <!-- <tr>
                  <td> optiongroup_name</td>
                  <td>
							<select name="optiongroup_name">
								<option value="thiết kế">thiết kế</option>
								<option value="màn hình">màn hình</option>
								<option value="camemra">cammera</option>
								 <option value="cpu">cpu</option>
								 <option value= "bộ nhớ">bộ nhớ</option>
								 <option value="ram">ram</option>
								 <option value="sim">sim </option>								
								 <option value="tính năng">tính năng</option>
								 <option value="chip">chip</option>
								 <option value="ram_laptop">ram_laptop</option>
								 <option value="chipset_đồ họa">chipset đồ họa</option>								
								 <option value="màn hình laptop">màn hình laptop</option>
								 <option value="hệ điều hành">hệ điều hành</option>
								 <option value="pin">pin</option>
								<option value="màu">màu</option>
						  </select>
				   </td>
				  
               </tr> -->
			   
			    <!-- <tr>
                  <td> option_name</td>
                  <th><input type='text' name='option_name' /></th>
				  
               </tr>
			   
			    <tr>
                  <td> Price</td>
                  <th><input type='text' name='price' /></th>
				  
               </tr> -->

			   
               <tr>
                  <td colspan = '2'>
                     <input type = 'submit' value = "Add product"/>
                  </td>
               </tr>
            </table>
         </form>
      </div>
   </body>
</html>