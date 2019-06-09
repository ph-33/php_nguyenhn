<?php include 'view/header.php'; ?>
<section>
    <h1>Danh sach tat ca cac san phaam</h1>
   <?php 
   $products = get_products();
    foreach ($products as $product) {
            echo $product['productName']. '<br>';
    } ?>
     <h1>Danh sach tat ca cac thể loại sản phẩm</h1>
   <?php 
   $categories = get_categories();
    foreach ($categories as $categorie) {
        $url = 'controller/category.php?categoryID='.($categorie['categoryID']);
            echo   ' <a href='.$url.'> '.$categorie['categoryName'].' </a><br>';
    } ?>
    <a href="controller/admin/add_product.php">Create product</a>
</section>
<?php include 'view/footer.php'; ?>