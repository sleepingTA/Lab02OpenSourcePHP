<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background: linear-gradient(135deg, #ffffff 0%, #ffffff 100%);
            font-family: 'Inter', sans-serif;
        }
        
        .footer-modern {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            position: relative;
            overflow: hidden;
            margin-top: 4rem;
        }
        
        .footer-modern::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 20% 50%, rgba(120, 119, 198, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255, 118, 117, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 40% 80%, rgba(120, 219, 226, 0.3) 0%, transparent 50%);
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-10px) rotate(1deg); }
        }
        
        .footer-content {
            position: relative;
            z-index: 2;
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.05);
            border-radius: 20px 20px 0 0;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .footer-title {
            font-weight: 700;
            font-size: 1.25rem;
            color: #ffffff;
            margin-bottom: 1.5rem;
            position: relative;
            display: inline-block;
        }
        
        .footer-title::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 40px;
            height: 3px;
            background: linear-gradient(90deg, #ff6b6b, #4ecdc4);
            border-radius: 2px;
            animation: glow 2s ease-in-out infinite alternate;
        }
        
        @keyframes glow {
            from { box-shadow: 0 0 5px rgba(255, 107, 107, 0.5); }
            to { box-shadow: 0 0 20px rgba(78, 205, 196, 0.5); }
        }
        
        .footer-description {
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.6;
            font-size: 0.95rem;
        }
        
        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .footer-links li {
            margin-bottom: 0.75rem;
            transform: translateX(0);
            transition: all 0.3s ease;
        }
        
        .footer-links li:hover {
            transform: translateX(8px);
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            font-size: 0.95rem;
            position: relative;
            transition: all 0.3s ease;
            display: inline-block;
        }
        
        .footer-links a::before {
            content: '→';
            opacity: 0;
            margin-right: 8px;
            transition: all 0.3s ease;
            color: #4ecdc4;
        }
        
        .footer-links a:hover::before {
            opacity: 1;
        }
        
        .footer-links a:hover {
            color: #ffffff;
            text-shadow: 0 0 10px rgba(78, 205, 196, 0.5);
        }
        
        .social-icons {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }
        
        .social-icon {
            width: 45px;
            height: 45px;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05));
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }
        
        .social-icon:hover {
            transform: translateY(-5px) scale(1.1);
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.1));
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            color: #ffffff;
        }
        
        .social-icon.facebook:hover {
            box-shadow: 0 10px 25px rgba(59, 89, 152, 0.3);
            border-color: #3b5998;
        }
        
        .social-icon.twitter:hover {
            box-shadow: 0 10px 25px rgba(29, 161, 242, 0.3);
            border-color: #1da1f2;
        }
        
        .social-icon.instagram:hover {
            box-shadow: 0 10px 25px rgba(225, 48, 108, 0.3);
            border-color: #e1306c;
        }
        
        .footer-bottom {
            background: rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.9);
            font-size: 0.9rem;
            position: relative;
            z-index: 2;
        }
        
        .container {
            max-width: 1200px;
        }
        
        @media (max-width: 768px) {
            .footer-title {
                font-size: 1.1rem;
            }
            
            .social-icons {
                justify-content: center;
            }
            
            .footer-content {
                border-radius: 15px 15px 0 0;
            }
        }
        
        /* Demo content styling */
        .demo-content {
            padding: 4rem 0;
            text-align: center;
            color: white;
        }
        
        .demo-content h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }
        
        .demo-content p {
            font-size: 1.2rem;
            opacity: 0.9;
        }
    </style>
</head>
<body>


    <footer class="footer-modern">
        <div class="footer-content">
            <div class="container p-4">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mb-4">
                        <h5 class="footer-title">Quản lý sản phẩm</h5>
                        <p class="footer-description">
                            Hệ thống quản lý sản phẩm giúp bạn theo dõi và cập nhật thông tin
                            sản phẩm dễ dàng.
                        </p>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 mb-4">
                        <h5 class="footer-title">Liên kết nhanh</h5>
                        <ul class="footer-links">
                            <li><a href="/webbanhang/Product/">Danh sách sản phẩm</a></li>
                            <li><a href="/webbanhang/Product/add">Thêm sản phẩm</a></li>
                        </ul>
                    </div>
                 
                    <div class="col-lg-3 col-md-6 mb-4">
                        <h5 class="footer-title">Kết nối với chúng tôi</h5>
                        <div class="social-icons">
                            <a href="#" class="social-icon facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-icon twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
    
        <div class="footer-bottom text-center p-3">
            © 2025 Quản lý sản phẩm. All rights reserved.
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>