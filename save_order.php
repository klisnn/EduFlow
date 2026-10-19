```php
<?php
require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: order.php");
    exit;
}

$name = trim($_POST["customer_name"] ?? "");
$email = trim($_POST["email"] ?? "");
$phone = trim($_POST["phone"] ?? "");
$service = trim($_POST["service"] ?? "");
$details = trim($_POST["details"] ?? "");

$allowedServices = [
    "Веб-сайт әзірлеу",
    "HTML және CSS курсы",
    "JavaScript курсы",
    "PHP және MySQL",
    "Оқу материалдары",
    "Басқа қызмет"
];

if (
    $name === "" ||
    $email === "" ||
    $phone === "" ||
    $service === ""
) {
    $message = "Барлық міндетті өрістерді толтырыңыз.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $message = "Email мекенжайын дұрыс енгізіңіз.";
} elseif (!in_array($service, $allowedServices, true)) {
    $message = "Қызмет түрін дұрыс таңдаңыз.";
} else {
    try {
        $sql = "INSERT INTO orders
                (customer_name, email, phone, service, details)
                VALUES
                (:name, :email, :phone, :service, :details)";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            ":name" => $name,
            ":email" => $email,
            ":phone" => $phone,
            ":service" => $service,
            ":details" => $details
        ]);

        $message = "Тапсырысыңыз сәтті қабылданды!";
    } catch (PDOException $e) {
        $message = "Тапсырысты сақтау кезінде қате пайда болды. Кейінірек қайталап көріңіз.";
    }
}

function safe($value) {
    return htmlspecialchars($value, ENT_QUOTES, "UTF-8");
}
?>
<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тапсырыс нәтижесі — EduFlow</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <main class="container">
        <section class="hero">
            <h1><?= safe($message) ?></h1>

            <?php if (isset($stmt) && $stmt->rowCount() > 0): ?>
                <p>Рақмет, <?= safe($name) ?>. Тапсырысыңыз жүйеге тіркелді.</p>
                <p>Қызмет: <?= safe($service) ?></p>
            <?php endif; ?>

            <a href="order.php" class="btn">Қайта тапсырыс беру</a>
            <a href="index.php" class="btn">Басты бетке оралу</a>
        </section>
    </main>
</body>
</html>
```