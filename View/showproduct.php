<?php
require_once '../controller/ProductController.php';
require_once '../config/Database.php';
$controller = new ProductController();
$products = $controller->getProducts();
?>
<?php include 'header.php'; ?>

<!-- Products Section with Sidebar -->
<div class="container mt-4">
    <div class="row">
        <!-- Main Content -->
        <div class="col-md-9">
            <h2 class="text-center mb-4">Sản phẩm nổi bật</h2>
            <div class="row">
                <?php foreach ($products as $product): ?>
                <div class="col-md-4">
                    <div class="card card-product mb-4">
                        <?php
                        $imagePath = "/template/" . $product->getImage();
                        if (!file_exists($_SERVER['DOCUMENT_ROOT'] . $imagePath)) {
                            //echo "<p class='text-danger'>Image not found: $imagePath</p>";
                        }
                        ?>
                        <img src="<?php echo $imagePath; ?>" class="card-img-top" alt="<?php echo $product->getName(); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->getName(); ?></h5>
                            <p class="card-text"><?php echo $product->getDescription(); ?></p>
                            <p class="card-text"><strong>Giá: <?php echo number_format($product->getPrice(), 0, ',', '.'); ?>đ</strong></p>
                            <a href="product_detail.php?id=<?php echo $product->getId(); ?>" class="btn btn-primary">XEM CHI TIẾT</a>
                        </div>
                    </div>
                </div>  
                <?php endforeach; ?>
            </div>
        </div>
        
         <!-- Sidebar -->
         <div class="col-md-3">
            <div class="sidebar">
                <h4 class="mb-3">Quảng cáo</h4>
                <div class="ad-banner">
                    <a href="https://www.youtube.com/watch?v=xvFZjo5PgG0" target="_blank">
                        <img src="/template/images/banner1.jpg" alt="Quảng cáo 1">
                    </a>
                </div>
                <div class="ad-banner">
                    <a href="https://www.youtube.com/watch?v=xvFZjo5PgG0" target="_blank">
                        <img src="/template/images/banner1.jpg" alt="Quảng cáo 2">
                    </a>
                </div>
                <div class="ad-banner">
                    <a href="https://www.youtube.com/watch?v=xvFZjo5PgG0" target="_blank">
                        <img src="/template/images/banner1.jpg" alt="Quảng cáo 3">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>