const btn = document.getElementById('menu-btn');
const nave = document.getElementById('menu');
const menuButton = document.getElementById("menu-button");
const menu = document.querySelector("[role='menu']");


btn.addEventListener('click', () => {
    btn.classList.toggle('open');
    nave.classList.toggle('flex');
    nave.classList.toggle('hidden');
})

menuButton.addEventListener("click", function(e) {
    e.stopPropagation();
    menu.classList.toggle("hidden");
});

document.addEventListener("click", function() {
    if (!menu.classList.contains("hidden")) {
        menu.classList.add("hidden");
    }
});
