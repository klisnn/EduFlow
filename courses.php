
<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Курстар — EduFlow</title>
    <link rel="stylesheet" href="assets/style.css">
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

<main class="container" style="padding-top:55px;padding-bottom:70px">

    <div class="section-heading">
        <span class="tag">Білім алуды баста</span>
        <h2>Біздің курстар</h2>
        <p>Өзіңе қажетті бағытты таңдап, жаңа дағдыларды меңгер.</p>
    </div>

    <div style="max-width:500px;margin:0 auto 35px">
        <input
            type="text"
            id="courseSearch"
            placeholder="Курс атауын іздеу..."
            style="width:100%;padding:15px;border:1px solid #ddd;border-radius:10px;font-size:16px"
        >
    </div>

    <div class="feature-grid" id="courseList">

        <div class="feature-card course-card">
            <div class="feature-icon"></div>
            <h3>HTML және CSS</h3>
            <p>Веб-беттер құруды және әдемі дизайн жасауды үйрен.</p>
            <p><strong>Ұзақтығы:</strong> 4 апта</p>
            <p><strong>Санат:</strong> Веб-әзірлеу</p>
        </div>

        <div class="feature-card course-card">
            <div class="feature-icon"></div>
            <h3>JavaScript негіздері</h3>
            <p>Интерактивті сайттар мен динамикалық элементтер жаса.</p>
            <p><strong>Ұзақтығы:</strong> 5 апта</p>
            <p><strong>Санат:</strong> Бағдарламалау</p>
        </div>

        <div class="feature-card course-card">
            <div class="feature-icon"></div>
            <h3>PHP бағдарламалау</h3>
            <p>Серверлік бағдарламалаудың негізгі әдістерін меңгер.</p>
            <p><strong>Ұзақтығы:</strong> 6 апта</p>
            <p><strong>Санат:</strong> Бағдарламалау</p>
        </div>

        <div class="feature-card course-card">
            <div class="feature-icon"></div>
            <h3>MySQL дерекқоры</h3>
            <p>Деректерді сақтау, іздеу және басқаруды үйрен.</p>
            <p><strong>Ұзақтығы:</strong> 3 апта</p>
            <p><strong>Санат:</strong> Дерекқор</p>
        </div>

        <div class="feature-card course-card">
            <div class="feature-icon"></div>
            <h3>UI/UX дизайн</h3>
            <p>Қолданушыға ыңғайлы интерфейстер құруды меңгер.</p>
            <p><strong>Ұзақтығы:</strong> 4 апта</p>
            <p><strong>Санат:</strong> Дизайн</p>
        </div>

        <div class="feature-card course-card">
            <div class="feature-icon"></div>
            <h3>Киберқауіпсіздік</h3>
            <p>Интернеттегі қауіптерді түсініп, деректерді қорғауды үйрен.</p>
            <p><strong>Ұзақтығы:</strong> 5 апта</p>
            <p><strong>Санат:</strong> Қауіпсіздік</p>
        </div>

    </div>

    <p id="noCourses" style="display:none;text-align:center;margin-top:25px">
        Курс табылмады.
    </p>

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
