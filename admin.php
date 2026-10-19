<?php
require_once "db.php";

try {
    $stmt = $pdo->query(
        "SELECT * FROM orders ORDER BY created_at DESC"
    );
    $orders = $stmt->fetchAll();
} catch (PDOException $e) {
    $orders = [];
    $error = "Тапсырыстарды жүктеу мүмкін болмады.";
}

$statuses = [
    "Жаңа",
    "Қаралуда",
    "Орындалуда",
    "Аяқталды",
    "Бас тартылды"
];
?>
<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Әкімшілік панель — EduFlow</title>
    <link rel="stylesheet" href="assets/style.css">
    <style>
        .admin-table-wrap {
            overflow-x: auto;
            margin: 25px 0;
        }

        .admin-table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            color: #222;
        }

        .admin-table th,
        .admin-table td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
            vertical-align: top;
        }

        .admin-table th {
            background: #25234a;
            color: white;
        }

        .admin-table select {
            padding: 8px;
            margin-bottom: 8px;
            max-width: 160px;
        }

        .admin-table button {
            padding: 8px 12px;
            border: none;
            border-radius: 6px;
            background: #6254d9;
            color: white;
            cursor: pointer;
        }

        .admin-heading {
            margin-top: 30px;
        }
    </style>
</head>
<body>

<header class="navbar">
    <a href="index.php" class="logo">EduFlow</a>
    <nav>
        <a href="index.php">Басты бет</a>
        <a href="courses.php">Курстар</a>
        <a href="videos.php">Сабақтар</a>
        <a href="library.php">Кітапхана</a>
        <a href="order.php">Тапсырыс беру</a>
        <a href="contact.php">Байланыс</a>
    </nav>
</header>

<main class="container">
    <section class="hero">
        <h1>Әкімшілік панель</h1>
        <p>EduFlow жүйесіндегі тапсырыстарды басқару.</p>
    </section>

    <section>
        <h2 class="admin-heading">Тапсырыстар тізімі</h2>

        <p>Барлық тапсырыс саны: <?= count($orders) ?></p>

        <?php if (isset($error)): ?>
            <p><?= htmlspecialchars($error, ENT_QUOTES, "UTF-8") ?></p>
        <?php endif; ?>

        <?php if (isset($_GET["updated"])): ?>
            <p>Тапсырыс мәртебесі жаңартылды.</p>
        <?php endif; ?>

        <?php if (empty($orders)): ?>
            <p>Әзірге тапсырыстар жоқ.</p>
        <?php else: ?>
            <div class="admin-table-wrap">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Аты-жөні</th>
                            <th>Email</th>
                            <th>Телефон</th>
                            <th>Қызмет</th>
                            <th>Қосымша мәлімет</th>
                            <th>Күні</th>
                            <th>Мәртебесі</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($orders as $order): ?>
                        <tr>
                            <td><?= (int) $order["id"] ?></td>
                            <td><?= htmlspecialchars($order["customer_name"], ENT_QUOTES, "UTF-8") ?></td>
                            <td><?= htmlspecialchars($order["email"], ENT_QUOTES, "UTF-8") ?></td>
                            <td><?= htmlspecialchars($order["phone"], ENT_QUOTES, "UTF-8") ?></td>
                            <td><?= htmlspecialchars($order["service"], ENT_QUOTES, "UTF-8") ?></td>
                            <td><?= nl2br(htmlspecialchars($order["details"] ?? "", ENT_QUOTES, "UTF-8")) ?></td>
                            <td><?= htmlspecialchars($order["created_at"], ENT_QUOTES, "UTF-8") ?></td>
                            <td>
                                <form action="update_status.php" method="POST">
                                    <input type="hidden" name="id"
                                           value="<?= (int) $order["id"] ?>">

                                    <select name="status" required>
                                        <?php foreach ($statuses as $status): ?>
                                            <option value="<?= htmlspecialchars($status, ENT_QUOTES, "UTF-8") ?>"
                                                <?= $order["status"] === $status ? "selected" : "" ?>>
                                                <?= htmlspecialchars($status, ENT_QUOTES, "UTF-8") ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>

                                    <button type="submit">Сақтау</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </section>
</main>

<footer>
    <p>© 2026 EduFlow. Білім алуға арналған платформа.</p>
</footer>

</body>
</html>
```