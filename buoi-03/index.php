<?php
$pageTitle = "Buổi 3: Cấu trúc điều khiển & Vòng lặp trong PHP";
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #0f172a; color: #f8fafc; margin: 0; padding: 40px; display: flex; justify-content: center; align-items: center; min-height: 100vh; }
        .card { background: rgba(30, 41, 59, 0.8); border: 1px solid rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); padding: 40px; border-radius: 16px; max-width: 600px; width: 100%; box-shadow: 0 20px 25px -5px rgba(0,0,0,0.5); text-align: center; }
        h1 { color: #38bdf8; font-size: 1.8rem; margin-bottom: 12px; }
        p { color: #94a3b8; line-height: 1.6; margin-bottom: 24px; }
        .tag { display: inline-block; background: #0284c7; color: white; padding: 6px 16px; border-radius: 20px; font-weight: 600; font-size: 0.9rem; margin-bottom: 20px; }
        a { color: #38bdf8; text-decoration: none; font-weight: 500; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="card">
        <span class="tag">BÀI THỰC HÀNH 03</span>
        <h1><?= $pageTitle ?></h1>
        <p>Đây là bài tập thực hành dành cho buổi 3 thuộc học phần <strong>Lập trình Web_B1</strong>.</p>
        <p><a href="../about.php">← Quay lại trang About Me</a></p>
    </div>
</body>
</html>
