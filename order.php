
<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тапсырыс беру — EduFlow</title>
    <link rel="stylesheet" href="assets/style.css">
    <style>
        .order-section {
            max-width: 750px;
            margin: 50px auto 80px;
            padding: 35px;
            background: #fff;
            border: 1px solid #eeeef6;
            border-radius: 20px;
            box-shadow: 0 15px 45px rgba(30,30,80,0.06);
        }

        .order-form {
            display: grid;
            gap: 18px;
        }

        .form-group {
            display: grid;
            gap: 8px;
        }

        .form-group label {
            font-weight: 600;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 13px 15px;
            border: 1px solid #dfe1ed;
            border-radius: 10px;
            font: inherit;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: 2px solid #c7c8ff;
            border-color: #5b5ce2;
        }

        .form-group textarea {
            min-height: 130px;
            resize: vertical;
        }

        .form-note {
            color: #62677d;
            font-size: 13px;
        }

        @media (max-width: 600px) {
            .order-section {
                margin: 25px auto 50px;
                padding: 22px;
            }
        }
    </style>
</head>
<body>

<header>
    <div class="container navbar">
        <a href="index.php" class="logo">EduFlow</a>
        <nav>
            <a href="index.php">Басты бет</a>
            <a href="courses.php">Курстар</a>
            <a href="videos.php">Видео сабақтар</a>
            <a href="library.php">Кітапхана</a>
            <a href="contact.php">Байланыс</a>
            <a href="order.php" class="nav-button">Тапсырыс беру</a>
        </nav>
    </div>
</header>

<main class="container">
    <section class="order-section">
        <div class="section-heading">
            <span class="tag">Өтінім қалдыру</span>
            <h2>Тапсырыс беру</h2>
            <p>Форманы толтыр. Біз сенің өтініміңді қабылдаймыз.</p>
        </div>

        <form class="order-form" action="save_order.php" method="POST">

            <div class="form-group">
                <label for="customer_name">Аты-жөнің *</label>
                <input
                    type="text"
                    id="customer_name"
                    name="customer_name"
                    maxlength="120"
                    autocomplete="name"
                    placeholder="Аты-жөніңді енгіз"
                    required
                >
            </div>

            <div class="form-group">
                <label for="email">Электрондық пошта *</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    maxlength="190"
                    autocomplete="email"
                    placeholder="example@mail.com"
                    required
                >
            </div>

            <div class="form-group">
                <label for="phone">Телефон нөмірі *</label>
                <input
                    type="tel"
                    id="phone"
                    name="phone"
                    maxlength="40"
                    autocomplete="tel"
                    placeholder="+7 700 000 00 00"
                    required
                >
            </div>

            <div class="form-group">
                <label for="service">Қызмет түрі *</label>
                <select id="service" name="service" required>
                    <option value="">Қызметті таңда</option>
                    <option value="Веб-сайт әзірлеу">Веб-сайт әзірлеу</option>
                    <option value="HTML және CSS курсы">HTML және CSS курсы</option>
                    <option value="JavaScript курсы">JavaScript курсы</option>
                    <option value="PHP және MySQL">PHP және MySQL</option>
                    <option value="Оқу материалдары">Оқу материалдары</option>
                    <option value="Басқа қызмет">Басқа қызмет</option>
                </select>
            </div>

            <div class="form-group">
                <label for="details">Тапсырыс сипаттамасы</label>
                <textarea
                    id="details"
                    name="details"
                    placeholder="Қандай қызмет қажет екенін жаз..."
                ></textarea>
            </div>

            <p class="form-note">* Белгісі бар өрістерді толтыру міндетті.</p>

            <button type="submit" class="btn primary" style="border:none;cursor:pointer;font-size:16px">
                Тапсырысты жіберу
            </button>

        </form>
    </section>
</main>

<footer>
    <div class="container footer-content">
        <a href="index.php" class="logo">EduFlow</a>
        <p>© 2026 EduFlow. Барлық құқықтар қорғалған.</p>
    </div>
</footer>

<script src="assets/script.js"></script>
</body>
</html>
