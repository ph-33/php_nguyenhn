 <?php  include('../view/header.php');
		require_once('../model/db.php');
 		require_once('../model/product.php');
  /* $category = get_category($categoryID);
   echo $category;*/
   $category_id = $_GET['categoryID'];
  $current_category_id = get_category($category_id);
  echo '<h1>Hiển thị danh sách sản phẩm theo thể loại</h1>';
  echo $current_category_id['categoryName'].'<br>';
  	$categorie_product = get_products_by_category($category_id);
  	//var_dump($categorie_product);
  	foreach ($categorie_product as $product) {
  		//$url = 'product_detail.php?productID ='.($product['productID']) ;
  		 $url = 'product_detail.php?productID='.($product['productID']);
  		echo '<a href='.$url.'>'.$product['productName'].'</a><br>';
  		//echo $product['productID'];
  		
  	}

   ?>
    

<?php include '../view/footer.php'; ?> 