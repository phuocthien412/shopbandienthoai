<?php
require_once '../controller/ProductController.php';
require_once '../config/Database.php';

if (isset($_GET['id'])) {
    $productId = intval($_GET['id']); // Convert ID to integer to avoid SQL injection
    $controller = new ProductController();
    $product = $controller->getProductById($productId);
    
    if (!$product) {
        echo "<p class='text-danger text-center'>Sản phẩm không tồn tại.</p>";
        exit();
    }
} else {
    // Redirect if no product ID is provided
    header('Location: showproduct.php');
    exit();
}

// Handle image path
$imagePath = "/template/" . $product->getImage();
$serverPath = $_SERVER['DOCUMENT_ROOT'] . $imagePath;

// Check if the image exists, if not use a default image
if (!file_exists($serverPath) || empty($product->getImage())) {
    $imagePath = "/template/images/default.png"; // Default image
}
?>

<?php include 'header.php'; ?>

<!-- Product Detail Section -->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2 class="text-center mb-4"><?php echo htmlspecialchars($product->getName()); ?></h2>
            <div class="card">
                <img src="<?php echo htmlspecialchars($imagePath); ?>" class="card-img-top img-fluid" alt="<?php echo htmlspecialchars($product->getName()); ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo htmlspecialchars($product->getName()); ?></h5>
                    <p class="card-text"><?php echo nl2br(htmlspecialchars($product->getDescription())); ?></p>
                    <p class="card-text"><strong>Giá: <?php echo number_format($product->getPrice(), 0, ',', '.'); ?>đ</strong></p>
                    <a href="showproduct.php" class="btn btn-primary">Quay lại</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>