<?php
// برای اجازه به درخواست‌های دیگر (در صورت نیاز)
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// بررسی نوع درخواست
$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET') {
    // مثال: دریافت اطلاعات کاربر
    $response = [
        "status" => "success",
        "user" => [
            "id" => 1,
            "name" => "Ali Reza",
            "email" => "ali@example.com"
        ]
    ];
    echo json_encode($response);
}

elseif ($method === 'POST') {
    // گرفتن داده‌های ارسال‌شده از فرم یا JSON
    $data = json_decode(file_get_contents("php://input"), true);
    
    $response = [
        "status" => "user_created",
        "data_received" => $data
    ];
    echo json_encode($response);
}

else {
    http_response_code(405); // Method Not Allowed
    echo json_encode(["error" => "Method not allowed"]);
}
?>
