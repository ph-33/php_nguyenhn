 <?php  
    include('../view/header.php');
		require_once('../model/db.php');
 		require_once('../model/product.php');
  /* $category = get_category($categoryID);
   echo $category;*/
   $id = $_GET['productID'];
   $product = get_product($id);
   echo'
   <table>
     <caption>Thông tin chi tiết của sản phẩm</caption>
     <thead>
       <tr>
         <th>productName</th>
         <th>Description</th>
         <th colspan="" rowspan="" headers="" scope="">listPrice</th>
       </tr>
     </thead>
     <tbody>
       <tr>
         <td>'.$product['productName'].'</td>
         <td>'.$product['description'].'</td>
         <td>'.$product['listPrice'].'</td>
       </tr>
     </tbody>
   </table>';
   ?>
  <a href="../index.php">Trang chủ</a>
<?php include '../view/footer.php'; ?> 