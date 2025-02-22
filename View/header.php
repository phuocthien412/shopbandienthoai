<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .banner {
            background: linear-gradient(to right, #1565C0, #1976D2);
            color: white;
            padding: 2rem 0;
        }
        .nav-link {
            color: #1565C0;
        }
        .card-product:hover {
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transform: translateY(-5px);
            transition: all 0.3s ease;
        }
        footer {
            background-color: #1565C0;
            color: white;
            padding: 2rem 0;
            margin-top: 3rem;
        }
        footer a {
            color: white;
            text-decoration: none;
        }
        footer a:hover {
            color: #90CAF9;
        }
        .sidebar {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            position: sticky;
            top: 20px;
        }
        .ad-banner {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
        }
        .ad-banner img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <!-- Banner -->
    <div class="banner">
        <div class="container">
            <h1 class="text-center">Shop Online</h1>
            <p class="text-center mb-0">Chất lượng tạo nên thương hiệu</p>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="showproduct.php">Trang chủ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Sản phẩm</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Khuyến mãi</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Liên hệ</a></li>
                </ul>
            </div>
        </div>
    </nav>