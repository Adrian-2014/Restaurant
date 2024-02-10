document.addEventListener("DOMContentLoaded", function () {
    var toggle = document.getElementById("menu");
    var menu = document.querySelector(".link");
    var navbar = document.querySelector("nav");
    toggle.addEventListener("click", function () {
        menu.classList.toggle("active");
        navbar.classList.toggle("active");
    });

    document.addEventListener("click", function (e) {
        var toggle = document.getElementById("menu");
        var menu = document.querySelector(".link");
        if (!toggle.contains(e.target) && !menu.contains(e.target)) {
            menu.classList.remove("active");
            navbar.classList.remove("active");
        }
    });
});

window.addEventListener("scroll", function () {
    var nav = document.querySelector("nav");
    var scrolled = window.scrollY > 50;
    if (scrolled) {
        nav.classList.add("scroll");
    } else {
        nav.classList.remove("scroll");
    }
    console.log("scroll");
});

window.addEventListener("scroll", function () {
    var butt = document.getElementById("to-up");
    var scrolled = window.scrollY > 500;
    if (scrolled) {
        butt.classList.add("nyala");
    } else {
        butt.classList.remove("nyala");
    }
    console.log("nyala");
});

var links = document.querySelectorAll("#link-item");
var lastItem = document.querySelector(".link-item.last");

lastItem.addEventListener("click", function () {
    // Menghapus kelas "aktif" dari semua elemen dengan kelas "link-item"
    links.forEach(function (innerLink) {
        innerLink.classList.remove("aktif");
    });
});

links.forEach(function (link) {
    link.addEventListener("click", function () {
        // Menghapus kelas "aktif" dari semua elemen dengan kelas "link-item"
        links.forEach(function (innerLink) {
            innerLink.classList.remove("aktif");
        });

        // Menambahkan kelas "aktif" ke elemen yang diklik
        link.classList.add("aktif");
    });
});
