<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["Tuoi"])) {
        echo "❌ Xin vui lòng nhập tuổi! <br>";
        echo "<a href='index.html'>⬅ Quay lại</a>";
    } else {
        $tuoi = htmlspecialchars($_POST["Tuoi"]); // Prevents XSS attacks
        echo "✅ THÀNH CÔNG! BẠN $tuoi TUỔI <br>";
        echo "<a href='index.html'>🔄 Tính tiếp</a>";
    }
} else {
    echo "⚠ Không có dữ liệu được gửi!";
}
?>
