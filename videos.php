
<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Видео сабақтар — EduFlow</title>
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
        <span class="tag">Үйрену уақыты</span>
        <h2>Видео сабақтар</h2>
        <p>Сабақты таңдап, оқу материалыңды көр.</p>
    </div>

    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(230px,1fr));gap:20px">

        <button class="feature-card video-btn" onclick="showVideo('HTML негіздері','HTML — веб-беттің құрылымын жасау тілі.')">
            <div class="feature-icon">▶</div>
            <h3>HTML негіздері</h3>
            <p>Веб-беттің құрылымын үйрену.</p>
        </button>

        <button class="feature-card video-btn" onclick="showVideo('CSS дизайны','CSS арқылы түстерді, қаріптерді және сайт орналасуын өзгертеміз.')">
            <div class="feature-icon">▶</div>
            <h3>CSS дизайны</h3>
            <p>Сайттың сыртқы көрінісін жасау.</p>
        </button>

        <button class="feature-card video-btn" onclick="showVideo('JavaScript бастаушыларға','JavaScript сайтқа интерактивтілік қосады.')">
            <div class="feature-icon">▶</div>
            <h3>JavaScript бастаушыларға</h3>
            <p>Интерактивті элементтер жасау.</p>
        </button>

        <button class="feature-card video-btn" onclick="showVideo('PHP негіздері','PHP серверде жұмыс істеп, формаларды өңдейді.')">
            <div class="feature-icon">▶</div>
            <h3>PHP негіздері</h3>
            <p>Серверлік бағдарламалауға кіріспе.</p>
        </button>

        <button class="feature-card video-btn" onclick="showVideo('MySQL дерекқоры','MySQL ақпаратты кестелерде сақтауға мүмкіндік береді.')">
            <div class="feature-icon">▶</div>
            <h3>MySQL дерекқоры</h3>
            <p>Деректерді сақтау және іздеу.</p>
        </button>

    </div>

    <section class="feature-card" style="margin-top:35px;text-align:center">
        <h2 id="videoTitle">Сабақты таңдаңыз</h2>
        <p id="videoDescription" style="margin:15px 0">
            Таңдалған сабақ туралы ақпарат осы жерде көрсетіледі.
        </p>
        <div id="videoArea" style="max-width:700px;margin:20px auto;background:#171b35;color:white;border-radius:15px;padding:50px 20px">
            <div style="font-size:45px">▶</div>
            <p style="color:white;margin-top:10px">Демонстрациялық сабақ аймағы</p>
        </div>
        <p style="font-size:13px;color:#62677d">
            Бұл оқу жобасындағы демонстрациялық аймақ. Нақты видео кейін қосылады.
        </p>
    </section>

</main>

<footer>
    <div class="container footer-content">
        <a href="index.php" class="logo">EduFlow</a>
        <p>© 2026 EduFlow. Барлық құқықтар қорғалған.</p>
    </div>
</footer>

<script>
function showVideo(title, description) {
    document.getElementById('videoTitle').textContent = title;
    document.getElementById('videoDescription').textContent = description;
}
</script>

<script src="assets/script.js"></script>
</body>
</html>
