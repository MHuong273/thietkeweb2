<?php
declare(strict_types=1);
session_start();
//Nếu chưa có danh sách học phần thì tạo một mảng rỗng
 
if (!isset($_SESSION["courseList"])) {
    $_SESSION["courseList"] = [];
}
// Lấy danh sách học phần từ session
$courseList = &$_SESSION["courseList"];
$message = "";

// Hàm phân loại học phần
function classifyCourse(int $credits): string
{
    if ($credits <= 2) {
        return "Nhẹ";
    } elseif ($credits == 3) {
        return "Trung bình";
    } else {
        return "Nặng";
    }
}

//Xử lý dữ liệu khi người dùng gửi form

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Nhận dữ liệu từ form
    $name = trim($_POST["name"] ?? "");
    $credits = (int)($_POST["credits"] ?? 0);
    $teacher = trim($_POST["teacher"] ?? "");
    $day = $_POST["day"] ?? "";
    $start = (int)($_POST["start"] ?? 0);
    $end = (int)($_POST["end"] ?? 0);
    $capacity = (int)($_POST["capacity"] ?? 0);

    //Kiểm tra dữ liệu/
    if (
        $name == "" ||
        $credits <= 0 ||
        $teacher == "" ||
        $day == "" ||
        $start <= 0 ||
        $end <= 0 ||
        $capacity <= 0
    ) {
        $message = "Vui lòng nhập đầy đủ thông tin!";

    } elseif ($start > $end) {
        $message = "Tiết bắt đầu không được lớn hơn tiết kết thúc!";

    } else {
        //Thêm học phần mới vào mảng
        $courseList[] = [
            "name" => $name,
            "credits" => $credits,
            "teacher" => $teacher,
            "day" => $day,
            "start" => $start,
            "end" => $end,
            "capacity" => $capacity
        ];
    }
}
?>


<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quản lý học phần</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }

        h1,
        h2 {
            text-align: center;
        }

        form {
            width: 600px;
            margin: 20px auto;
        }

        .form-group {
            margin-bottom: 12px;
        }

        label {
            display: inline-block;
            width: 180px;
        }

        input,
        select {
            width: 300px;
            padding: 6px;
        }

        button {
            padding: 7px 15px;
            margin-left: 184px;
            cursor: pointer;
        }

        .message {
            text-align: center;
            margin: 15px;
            font-weight: bold;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #eee;
        }
    </style>
</head>


<body>
    <h1>QUẢN LÝ HỌC PHẦN</h1>
    <h2>Nhập thông tin học phần</h2>

    <!-- Thông báo -->

    <?php if ($message != ""): ?>
        <div class="message">
            <?= htmlspecialchars($message) ?>
        </div>
    <?php endif; ?>



    <form method="POST">
        <div class="form-group">
            <label for="name">
                Tên học phần:
            </label>
            <input
                type="text"
                id="name"
                name="name"
                placeholder="Nhập tên học phần"
                required
            >
        </div>


        <div class="form-group">
            <label for="credits">
                Số tín chỉ:
            </label>
            <input
                type="number"
                id="credits"
                name="credits"
                min="1"
                max="6"
                required
            >
        </div>


        <div class="form-group">
            <label for="teacher">
                Giảng viên:
            </label>
            <input
                type="text"
                id="teacher"
                name="teacher"
                placeholder="Nhập tên giảng viên"
                required
            >

        </div>


        <div class="form-group">
            <label for="day">
                Thứ học:
            </label>
            <select
                id="day"
                name="day"
                required
            >

                <option value="">
                </option>
                <option value="Thứ 2">Thứ 2</option>
                <option value="Thứ 3">Thứ 3</option>
                <option value="Thứ 4">Thứ 4</option>
                <option value="Thứ 5">Thứ 5</option>
                <option value="Thứ 6">Thứ 6</option>
                <option value="Thứ 7">Thứ 7</option>
            </select>
        </div>

        <div class="form-group">

            <label for="start">
                Tiết bắt đầu:
            </label>
            <input
                type="number"
                id="start"
                name="start"
                min="1"
                max="15"
                required
            >
        </div>


        <div class="form-group">
            <label for="end">
                Tiết kết thúc:
            </label>
            <input
                type="number"
                id="end"
                name="end"
                min="1"
                max="15"
                required
            >

        </div>

        <div class="form-group">

            <label for="capacity">
                Số lượng sinh viên:
            </label>
            <input
                type="number"
                id="capacity"
                name="capacity"
                min="1"
                required
            >
        </div>
        <button type="submit">
            Thêm học phần
        </button>

    </form>


    <?php if (count($courseList) > 0): ?>
        <h2>Danh sách học phần</h2>
        <table>
            <tr>
                <th>STT</th>
                <th>Tên học phần</th>
                <th>Số tín chỉ</th>
                <th>Giảng viên</th>
                <th>Thứ</th>
                <th>Tiết học</th>
                <th>Số lượng SV</th>
                <th>Phân loại</th>
            </tr>


            <?php
            $stt = 1;
            foreach ($courseList as $course):
                $classification =
                    classifyCourse($course["credits"]);
            ?>
                <tr>
                    <td>
                        <?= $stt ?>
                    </td>
                
                    <td>
                        <?= htmlspecialchars($course["name"]) ?>
                    </td>
                    <td>
                        <?= $course["credits"] ?>
                    </td>
                    <td>
                        <?= htmlspecialchars($course["teacher"]) ?>
                    </td>
                    <td>
                        <?= htmlspecialchars($course["day"]) ?>
                    </td>
                    <td>
                        Tiết
                        <?= $course["start"] ?>
                        -
                        <?= $course["end"] ?>
                    </td>
                    <td>
                        <?= $course["capacity"] ?>
                    </td>
                    <td>
                        <?= $classification ?>
                    </td>
                </tr>
            <?php
                $stt++;
            endforeach;
            ?>
        </table>
    <?php endif; ?>
</body>
</html>