<?php
// Information config (User can update these details)
$student = [
    'name' => 'Nguyễn Văn A',
    'student_id' => '22123456',
    'class_name' => 'Lập trình Web_B1',
    'faculty' => 'Công nghệ Thông tin',
    'email' => 'student@example.com',
    'github_username' => 'your-github-username',
    'personal_repo' => 'https://github.com/your-username/lap-trinh-web-b1-practice',
    'group_repo' => 'https://github.com/your-group-name/web-b1-group-project',
    'bio' => 'Sinh viên đam mê lập trình web, phát triển hệ thống backend với PHP & MySQL và xây dựng giao diện frontend hiện đại, tối ưu trải nghiệm người dùng.'
];

$projects = [
    [
        'title' => 'Hệ thống Quản lý Bài tập Web_B1',
        'category' => 'Dự án Lập trình Web',
        'badge' => 'Dự án chính',
        'tech' => ['PHP 8.3', 'MySQL', 'HTML5/CSS3', 'JavaScript', 'PDO'],
        'description' => 'Ứng dụng web quản lý tiến độ và bài tập thực hành 9 buổi học môn Lập trình Web_B1. Hỗ trợ hiển thị bài thực hành, chấm điểm tự động và tích hợp cơ sở dữ liệu MySQL.',
        'icon' => '🌐'
    ],
    [
        'title' => 'Trang Giới thiệu Cá nhân & Portfolio',
        'category' => 'Dự án Cá nhân',
        'badge' => 'Web App',
        'tech' => ['PHP', 'Glassmorphism UI', 'Responsive Design', 'Git'],
        'description' => 'Trang web portfolio động giới thiệu bản thân, kỹ năng và các sản phẩm đã hoàn thành, tối ưu hóa hiển thị trên mọi thiết bị.',
        'icon' => '👤'
    ]
];

$sessions = [
    ['id' => 1, 'title' => 'Kiến trúc Web, Môi trường & Quy trình phát triển', 'dir' => 'buoi-01'],
    ['id' => 2, 'title' => 'Cú pháp cơ bản PHP, Biến, Kiểu dữ liệu & Toán tử', 'dir' => 'buoi-02'],
    ['id' => 3, 'title' => 'Cấu trúc điều khiển & Vòng lặp trong PHP', 'dir' => 'buoi-03'],
    ['id' => 4, 'title' => 'Mảng (Array) & Các hàm xử lý Chuỗi/Mảng', 'dir' => 'buoi-04'],
    ['id' => 5, 'title' => 'Xử lý Form HTML (GET/POST) & Validation', 'dir' => 'buoi-05'],
    ['id' => 6, 'title' => 'Quản lý Session, Cookie & Authentication', 'dir' => 'buoi-06'],
    ['id' => 7, 'title' => 'Kết nối Cơ sở dữ liệu MySQL với PDO / MySQLi', 'dir' => 'buoi-07'],
    ['id' => 8, 'title' => 'Xây dựng ứng dụng CRUD hoàn chỉnh', 'dir' => 'buoi-08'],
    ['id' => 9, 'title' => 'Tổng kết học phần, Đồ án môn học & Báo cáo', 'dir' => 'buoi-09'],
];
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me - <?= htmlspecialchars($student['name']) ?> | Lập trình Web_B1</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-color: #0b0f19;
            --card-bg: rgba(23, 32, 54, 0.7);
            --card-border: rgba(255, 255, 255, 0.08);
            --accent-primary: #38bdf8;
            --accent-secondary: #818cf8;
            --accent-gradient: linear-gradient(135deg, #38bdf8 0%, #818cf8 100%);
            --text-main: #f8fafc;
            --text-muted: #94a3b8;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg-color);
            background-image: 
                radial-gradient(at 10% 10%, rgba(56, 189, 248, 0.15) 0px, transparent 50%),
                radial-gradient(at 90% 90%, rgba(129, 140, 248, 0.15) 0px, transparent 50%);
            color: var(--text-main);
            min-height: 100vh;
            line-height: 1.6;
            padding: 40px 20px;
        }

        .container { max-width: 1100px; margin: 0 auto; }

        /* Header / Hero Section */
        .hero-card {
            background: var(--card-bg);
            border: 1px solid var(--card-border);
            backdrop-filter: blur(16px);
            border-radius: 24px;
            padding: 40px;
            display: flex;
            align-items: center;
            gap: 32px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
            margin-bottom: 32px;
            position: relative;
            overflow: hidden;
        }

        .hero-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; height: 4px;
            background: var(--accent-gradient);
        }

        .avatar {
            width: 130px; height: 130px;
            border-radius: 50%;
            background: var(--accent-gradient);
            display: flex; align-items: center; justify-content: center;
            font-size: 3rem; font-weight: 800; color: #0f172a;
            box-shadow: 0 10px 25px rgba(56, 189, 248, 0.3);
            flex-shrink: 0;
        }

        .hero-info h1 {
            font-size: 2.2rem;
            font-weight: 800;
            background: var(--accent-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 8px;
        }

        .hero-info .meta {
            display: flex; flex-wrap: wrap; gap: 16px;
            margin: 12px 0; font-size: 0.95rem; color: var(--text-muted);
        }

        .meta-item { display: flex; align-items: center; gap: 6px; }
        .meta-item strong { color: var(--text-main); }

        .bio-text { color: var(--text-muted); font-size: 1rem; margin-top: 12px; }

        /* Section Headings */
        .section-title {
            font-size: 1.5rem; font-weight: 700;
            margin: 40px 0 20px 0;
            display: flex; align-items: center; gap: 12px;
        }
        .section-title::after {
            content: ''; flex: 1; height: 1px;
            background: rgba(255,255,255,0.1);
        }

        /* Repositories Quick Access */
        .repo-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 20px; }

        .repo-card {
            background: var(--card-bg);
            border: 1px solid var(--card-border);
            backdrop-filter: blur(12px);
            border-radius: 20px; padding: 24px;
            transition: all 0.3s ease;
        }
        .repo-card:hover {
            transform: translateY(-4px);
            border-color: rgba(56, 189, 248, 0.4);
            box-shadow: 0 12px 30px rgba(0,0,0,0.3);
        }

        .repo-badge {
            display: inline-block; padding: 4px 12px; border-radius: 12px;
            font-size: 0.8rem; font-weight: 700; text-transform: uppercase;
            letter-spacing: 0.5px; margin-bottom: 12px;
        }
        .badge-personal { background: rgba(56, 189, 248, 0.15); color: #38bdf8; border: 1px solid rgba(56, 189, 248, 0.3); }
        .badge-group { background: rgba(129, 140, 248, 0.15); color: #818cf8; border: 1px solid rgba(129, 140, 248, 0.3); }

        .repo-title { font-size: 1.2rem; font-weight: 700; margin-bottom: 8px; }

        .repo-link {
            display: inline-flex; align-items: center; gap: 8px;
            color: var(--accent-primary); text-decoration: none;
            font-weight: 600; font-size: 0.95rem; margin-top: 12px;
            word-break: break-all;
        }
        .repo-link:hover { text-decoration: underline; }

        /* Projects Section */
        .projects-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 24px; }

        .project-card {
            background: var(--card-bg);
            border: 1px solid var(--card-border);
            border-radius: 20px; padding: 28px;
            display: flex; flex-direction: column; justify-content: space-between;
            position: relative;
        }
        .project-icon { font-size: 2.5rem; margin-bottom: 16px; }
        .project-title { font-size: 1.3rem; font-weight: 700; margin-bottom: 8px; }
        .project-desc { color: var(--text-muted); font-size: 0.95rem; margin-bottom: 20px; }

        .tech-tags { display: flex; flex-wrap: wrap; gap: 8px; }
        .tech-tag {
            background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.1);
            padding: 4px 12px; border-radius: 8px; font-size: 0.85rem; color: #cbd5e1;
        }

        /* 9 Sessions Grid */
        .sessions-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 16px; }

        .session-card {
            background: var(--card-bg);
            border: 1px solid var(--card-border);
            border-radius: 16px; padding: 20px;
            display: flex; align-items: center; justify-content: space-between;
            text-decoration: none; color: inherit;
            transition: all 0.2s ease;
        }
        .session-card:hover {
            background: rgba(30, 41, 59, 0.9);
            border-color: var(--accent-primary);
            transform: translateX(4px);
        }

        .session-num {
            background: var(--accent-gradient); color: #0f172a;
            font-weight: 800; width: 36px; height: 36px; border-radius: 10px;
            display: flex; align-items: center; justify-content: center;
            font-size: 0.95rem; flex-shrink: 0;
        }

        .session-title { font-size: 0.95rem; font-weight: 600; margin-left: 14px; flex: 1; }
        .arrow { color: var(--accent-primary); font-weight: 700; font-size: 1.2rem; }

        /* Footer */
        footer {
            text-align: center; margin-top: 60px; color: var(--text-muted);
            font-size: 0.9rem; border-top: 1px solid rgba(255,255,255,0.08); padding-top: 24px;
        }

        @media (max-width: 768px) {
            .hero-card { flex-direction: column; text-align: center; }
            .hero-info .meta { justify-content: center; }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Hero / Personal Profile -->
        <div class="hero-card">
            <div class="avatar">
                <?= mb_substr($student['name'], -1, 1, 'UTF-8') ?>
            </div>
            <div class="hero-info">
                <h1><?= htmlspecialchars($student['name']) ?></h1>
                <div class="meta">
                    <div class="meta-item">🆔 MSSV: <strong><?= htmlspecialchars($student['student_id']) ?></strong></div>
                    <div class="meta-item">📚 Lớp: <strong><?= htmlspecialchars($student['class_name']) ?></strong></div>
                    <div class="meta-item">🏫 Khoa: <strong><?= htmlspecialchars($student['faculty']) ?></strong></div>
                </div>
                <p class="bio-text"><?= htmlspecialchars($student['bio']) ?></p>
            </div>
        </div>

        <!-- Repositories Links Section -->
        <h2 class="section-title">🔗 GitHub Repositories</h2>
        <div class="repo-grid">
            <div class="repo-card">
                <span class="repo-badge badge-personal">Repository Cá nhân</span>
                <div class="repo-title">Lập trình Web_B1 (9 Buổi Thực hành)</div>
                <p style="color: var(--text-muted); font-size: 0.9rem;">Chứa toàn bộ bài tập thực hành 9 buổi học phần Web_B1.</p>
                <a href="<?= htmlspecialchars($student['personal_repo']) ?>" target="_blank" class="repo-link">
                    📁 <span><?= htmlspecialchars($student['personal_repo']) ?></span>
                </a>
            </div>
            <div class="repo-card">
                <span class="repo-badge badge-group">Repository Nhóm</span>
                <div class="repo-title">Đồ án Nhóm Lập trình Web_B1</div>
                <p style="color: var(--text-muted); font-size: 0.9rem;">Dự án phối hợp làm việc nhóm cuối học phần.</p>
                <a href="<?= htmlspecialchars($student['group_repo']) ?>" target="_blank" class="repo-link">
                    👥 <span><?= htmlspecialchars($student['group_repo']) ?></span>
                </a>
            </div>
        </div>

        <!-- Projects Showcase -->
        <h2 class="section-title">💻 Dự án đã thực hiện</h2>
        <div class="projects-grid">
            <?php foreach ($projects as $project): ?>
            <div class="project-card">
                <div>
                    <div class="project-icon"><?= $project['icon'] ?></div>
                    <span class="repo-badge badge-personal"><?= htmlspecialchars($project['category']) ?></span>
                    <div class="project-title"><?= htmlspecialchars($project['title']) ?></div>
                    <p class="project-desc"><?= htmlspecialchars($project['description']) ?></p>
                </div>
                <div class="tech-tags">
                    <?php foreach ($project['tech'] as $t): ?>
                        <span class="tech-tag"><?= htmlspecialchars($t) ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Course Modules (9 Buổi) -->
        <h2 class="section-title">📅 Danh sách Bài thực hành (9 Buổi)</h2>
        <div class="sessions-grid">
            <?php foreach ($sessions as $s): ?>
            <a href="./<?= $s['dir'] ?>/index.php" class="session-card">
                <div class="session-num"><?= sprintf('%02d', $s['id']) ?></div>
                <div class="session-title"><?= htmlspecialchars($s['title']) ?></div>
                <span class="arrow">→</span>
            </a>
            <?php endforeach; ?>
        </div>

        <footer>
            <p>Học phần Lập trình Web_B1 &copy; <?= date('Y') ?> - Cài đặt PHP 8.3 & MySQL trên ổ D:</p>
        </footer>
    </div>
</body>
</html>
