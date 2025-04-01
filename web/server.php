<?php
header("Content-Type: application/json");
$data = json_decode(file_get_contents("php://input"), true);

if (!$data || empty($data["name"]) || empty($data["email"]) || empty($data["message"])) {
    echo json_encode(["status" => "error", "message" => "すべての項目を入力してください"]);
    exit;
}

$responseMessage = "送信完了！\n名前: {$data['name']}\nメール: {$data['email']}\nメッセージ: {$data['message']}";
echo json_encode(["status" => "success", "message" => $responseMessage]);
