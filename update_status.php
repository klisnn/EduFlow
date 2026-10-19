<?php
require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: admin.php");
    exit;
}

$id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);
$status = $_POST["status"] ?? "";

$allowedStatuses = [
    "Жаңа",
    "Қаралуда",
    "Орындалуда",
    "Аяқталды",
    "Бас тартылды"
];

if (!$id || !in_array($status, $allowedStatuses, true)) {
    header("Location: admin.php");
    exit;
}

try {
    $stmt = $pdo->prepare(
        "UPDATE orders SET status = :status WHERE id = :id"
    );

    $stmt->execute([
        ":status" => $status,
        ":id" => $id
    ]);

    header("Location: admin.php?updated=1");
    exit;

} catch (PDOException $e) {
    http_response_code(500);
    echo "Тапсырыс мәртебесін өзгерту мүмкін болмады.";
}
?>
```