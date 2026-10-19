```javascript
document.addEventListener("DOMContentLoaded", function () {
    // Курстарды іздеу
    const courseSearch = document.getElementById("courseSearch");

    if (courseSearch) {
        courseSearch.addEventListener("input", function () {
            const query = this.value.toLowerCase().trim();
            const cards = document.querySelectorAll(".course-card");

            cards.forEach(function (card) {
                const text = card.textContent.toLowerCase();
                card.style.display = text.includes(query) ? "" : "none";
            });
        });
    }

    // Кітапхана материалдарын іздеу
    const librarySearch = document.getElementById("librarySearch");
    const libraryCategory = document.getElementById("libraryCategory");

    function filterLibrary() {
        const query = librarySearch
            ? librarySearch.value.toLowerCase().trim()
            : "";

        const category = libraryCategory
            ? libraryCategory.value
            : "all";

        const cards = document.querySelectorAll(".resource-card");

        cards.forEach(function (card) {
            const text = card.textContent.toLowerCase();
            const cardCategory = card.dataset.category || "all";

            const matchesText = text.includes(query);
            const matchesCategory =
                category === "all" || cardCategory === category;

            card.style.display =
                matchesText && matchesCategory ? "" : "none";
        });
    }

    if (librarySearch) {
        librarySearch.addEventListener("input", filterLibrary);
    }

    if (libraryCategory) {
        libraryCategory.addEventListener("change", filterLibrary);
    }

    // Жыл ағымын автоматты көрсету
    const year = document.getElementById("currentYear");

    if (year) {
        year.textContent = new Date().getFullYear();
    }
});
```