<!DOCTYPE html>
<html>
   <head>
      <title>Product Management | Edit</title>
   </head>
   <body>
		
      <form action = "/edit/<?php echo $product_details[0]->id; ?>" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
         <table>
            <tr>
               <td>Name</td>
               <td>
                  <input type = 'text' name = 'name' 
                     value = '<?php echo $product_details[0]->name; ?>'/> 
               </td>
            </tr>
			
            <tr>
               <td>Description</td>
               <td>
                  <input type = 'text' name = 'description' 
                     value = '<?php echo$product_details[0]->description; ?>'/>
               </td>
            </tr>
            
			<tr>
               <td>Quantity</td>
               <td>
                  <input type = 'number_format' name = 'quantity' 
                     value = '<?php echo$product_details[0]->quantity; ?>'/>
               </td>
            </tr>
            
			<tr>
               <td>Created_at</td>
               <td>
                  <input type = 'date' name = 'created_at' 
                     value = '<?php echo$product_details[0]->created_at; ?>'/>
               </td>
            </tr>
			
			<tr>
               <td>Updated_at</td>
               <td>
                  <input type = 'date' name = 'updated_at' 
                     value = '<?php echo$product_details[0]->updated_at; ?>'/>
               </td>
            </tr>
			
			<tr>
                  <td>Product_Status</td>
                     <td>
						 <select name="product_status">
							<option value="<?php echo$product_details[0]->product_status = "1"; ?>">còn hàng</option>
							<option value="<?php echo$product_details[0]->product_status = "2"; ?>">hết hàng</option>
							<option value="<?php echo$product_details[0]->product_status = "3"; ?>">tiêu thụ mạnh</option>
						 </select>
					  </td>                 
               </tr>
			   <tr>
               <td>Manufacture_id</td>
               <td>
                  <input type = 'text' name = 'manufacture_id' 
                     value = '<?php echo$product_details[0]->manufacture_id; ?>'/>
               </td>
               </tr>
				
				 <tr>
				   <td>CategoryID</td>
					   <td>
						  <select name="category_CategoryID">
							<option value="<?php echo$product_details[0]->category_CategoryID = "1"; ?>">laptop_máy tính</option>
							<option value="<?php echo$product_details[0]->category_CategoryID = "2"; ?>">delll</option>
							<option value="<?php echo$product_details[0]->category_CategoryID = "3"; ?>">hp</option>
							<option value="<?php echo$product_details[0]->category_CategoryID = "4"; ?>">mác</option>
							<option value="<?php echo$product_details[0]->category_CategoryID = "5"; ?>">điện thoại</option>
							<option value="<?php echo$product_details[0]->category_CategoryID = "6"; ?>">sam sung</option>
							<option value="<?php echo$product_details[0]->category_CategoryID = "7"; ?>">iphone</option>
							<option value="<?php echo$product_details[0]->category_CategoryID = "8"; ?>">nokia</option>
							<option value="<?php echo$product_details[0]->category_CategoryID = "9"; ?>">iphone_X</option>
							<option value="<?php echo$product_details[0]->category_CategoryID = "10"; ?>">iphone_7</option>
						 </select>
					   </td>
				</tr>
				
				 <tr>
                   <td> optiongroup_name</td>
                        <td>
                                                <select name="optiongroup_name">
                                                      <option value="<?php echo$product_details[0]->optiongroup_name = "thiết kế"; ?>">thiết kế</option>
                                                      <option value="<?php echo$product_details[0]->optiongroup_name = "màn hình"; ?>">màn hình</option>
                                                      <option value="<?php echo$product_details[0]->optiongroup_name = "camemra"; ?>">cammera</option>
                                                      <option value="<?php echo$product_details[0]->optiongroup_name = "cpu"; ?>">cpu</option>
                                                      <option value="<?php echo$product_details[0]->optiongroup_name = "bộ nhớ"; ?>">bộ nhớ</option>
                                                      <option value="<?php echo$product_details[0]->optiongroup_name = "ram"; ?>">ram</option>
                                                      <option value="<?php echo$product_details[0]->optiongroup_name = "sim"; ?>">sim </option>								
                                                      <option value="<?php echo$product_details[0]->optiongroup_name = "tính năng"; ?>">tính năng</option>
                                                      <option value="<?php echo$product_details[0]->optiongroup_name = "chip"; ?>">chip</option>
                                                      <option value="<?php echo$product_details[0]->optiongroup_name = "ram_laptop"; ?>">ram_laptop</option>
                                                      <option value="<?php echo$product_details[0]->optiongroup_name = "chipset_đồ họa"; ?>">chipset đồ họa</option>								
                                                      <option value="<?php echo$product_details[0]->optiongroup_name = "màn hình laptop"; ?>">màn hình laptop</option>
                                                      <option value="<?php echo$product_details[0]->optiongroup_name = "hệ điều hành"; ?>">hệ điều hành</option>
                                                      <option value="<?php echo$product_details[0]->optiongroup_name = "pin"; ?>">pin</option>
                                                      <option value="<?php echo$product_details[0]->optiongroup_name = "màu"; ?>">màu</option>
                                          </select>
                              </td>
                              
                  </tr>

		
		
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Update Product" />
               </td>
            </tr>
         </table>
      </form>
   </body>
</html>