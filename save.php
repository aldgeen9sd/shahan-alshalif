<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // استلام البيانات من النموذج
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $age = htmlspecialchars($_POST['age']);
    $interests = htmlspecialchars($_POST['interests']);

    // تنسيق البيانات
    $data = "الاسم: $name\nالبريد الإلكتروني: $email\nالعمر: $age\nالاهتمامات: $interests\n----------\n";

    // حفظ البيانات في ملف نصي
    file_put_contents("members.txt", $data, FILE_APPEND | LOCK_EX);

    // رسالة تأكيد
    echo "<h2>تم تسجيلك بنجاح!</h2>";
    echo "<a href='from.html'>العودة للنموذج</a>";
} else {
    echo "طريقة الطلب غير صحيحة.";
}
?>
