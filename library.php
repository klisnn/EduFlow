
<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Цифрлық кітапхана — EduFlow</title>
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
        <span class="tag">Пайдалы материалдар</span>
        <h2>Цифрлық кітапхана</h2>
        <p>Бағдарламалау және технология туралы оқу ресурстары.</p>
    </div>

    <div style="max-width:500px;margin:0 auto 20px">
        <input
            type="text"
            id="librarySearch"
            placeholder="Кітап немесе ресурс іздеу..."
            style="width:100%;padding:15px;border:1px solid #ddd;border-radius:10px;font-size:16px"
        >
    </div>

    <div style="text-align:center;margin-bottom:35px">
        <select id="libraryCategory" style="padding:12px;border:1px solid #ddd;border-radius:10px;width:100%;max-width:300px">
            <option value="all">Барлық санат</option>
            <option value="programming">Бағдарламалау</option>
            <option value="design">Дизайн</option>
            <option value="database">Дерекқор</option>
            <option value="security">Қауіпсіздік</option>
        </select>
    </div>

    <div class="feature-grid" id="libraryList">

        <div class="feature-card resource-card" data-category="programming">
            <div class="feature-icon">HTML / CSS</div>
            <h3>HTML және CSS негіздері</h3>
            <p>Веб-беттерді құруға және безендіруге арналған оқу материалы.</p>
            <p><strong>Санат:</strong> Бағдарламалау</p>
            <a href="https://developer.mozilla.org/en-US/docs/Learn_web_development" target="_blank" rel="noopener noreferrer" class="btn primary" style="margin-top:15px">Материалды ашу</a>
        </div>

        <div class="feature-card resource-card" data-category="programming">
            <div class="feature-icon">JS</div>
            <h3>JavaScript анықтамалығы</h3>
            <p>JavaScript тілінің негізгі мүмкіндіктері мен қолданылуы.</p>
            <p><strong>Санат:</strong> Бағдарламалау</p>
            <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide" target="_blank" rel="noopener noreferrer" class="btn primary" style="margin-top:15px">Материалды ашу</a>
        </div>

        <div class="feature-card resource-card" data-category="programming">
            <div class="feature-icon">PHP</div>
            <h3>PHP нұсқаулығы</h3>
            <p>PHP синтаксисі және серверлік бағдарламалау туралы мәліметтер.</p>
            <p><strong>Санат:</strong> Бағдарламалау</p>
            <a href="https://www.php.net/manual/en/" target="_blank" rel="noopener noreferrer" class="btn primary" style="margin-top:15px">Материалды ашу</a>
        </div>

        <div class="feature-card resource-card" data-category="database">
            <div class="feature-icon">MySQL</div>
            <h3>MySQL құжаттамасы</h3>
            <p>SQL сұраныстары, кестелер және дерекқорды басқару.</p>
            <p><strong>Санат:</strong> Дерекқор</p>
            <a href="https://dev.mysql.com/doc/" target="_blank" rel="noopener noreferrer" class="btn primary" style="margin-top:15px">Материалды ашу</a>
        </div>

        <div class="feature-card resource-card" data-category="design">
            <div class="feature-icon">UI / UX</div>
            <h3>Веб-дизайн негіздері</h3>
            <p>Қолданушыға ыңғайлы интерфейс жасау принциптері.</p>
            <p><strong>Санат:</strong> Дизайн</p>
            <a href="https://web.dev/learn/design" target="_blank" rel="noopener noreferrer" class="btn primary" style="margin-top:15px">Материалды ашу</a>
        </div>

        <div class="feature-card resource-card" data-category="security">
            <div class="feature-icon">SECURITY</div>
            <h3>Веб-қауіпсіздік</h3>
            <p>Веб-қосымшаларды қауіпсіз әзірлеу қағидалары.</p>
            <p><strong>Санат:</strong> Қауіпсіздік</p>
            <a href="https://owasp.org/www-project-top-ten/" target="_blank" rel="noopener noreferrer" class="btn primary" style="margin-top:15px">Материалды ашу</a>
        </div>

    </div>

    <p id="libraryEmpty" style="display:none;text-align:center;margin-top:25px">
        Материал табылмады.
    </p>

</main>

<footer>
    <div class="container footer-content">
        <a href="index.php" class="logo">EduFlow</a>
        <p>© 2026 EduFlow. Барлық құқықтар қорғалған.</p>
    </div>
</footer>

<script>
const librarySearch = document.getElementById('librarySearch');
const libraryCategory = document.getElementById('libraryCategory');
const resources = document.querySelectorAll('.resource-card');

function filterResources() {
    const query = librarySearch.value.toLowerCase().trim();
    const category = libraryCategory.value;
    let count = 0;

    resources.forEach(resource => {
        const matchesText = resource.textContent.toLowerCase().includes(query);
        const matchesCategory =
            category === 'all' || resource.dataset.category === category;

        resource.style.display =
            matchesText && matchesCategory ? '' : 'none';

        if (matchesText && matchesCategory) {
            count++;
        }
    });

    document.getElementById('libraryEmpty').style.display =
        count === 0 ? 'block' : 'none';
}

librarySearch.addEventListener('input', filterResources);
libraryCategory.addEventListener('change', filterResources);
</script>

<script src="assets/script.js"></script>
</body>
</html>
