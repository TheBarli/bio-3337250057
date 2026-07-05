const btnToggle = document.getElementById("toggleButton");
const body = document.body;

const savedTheme = localStorage.getItem("theme");

if (savedTheme === "light") {
    body.classList.add("light-mode");
}

btnToggle.addEventListener("click",  () => {
    body.classList.toggle("light-mode");

    const isLightMode = body.classList.contains("light-mode");
    btnToggle.textContent = isLightMode ? "Dark Mode" : "Light Mode";
    
    localStorage.setItem("theme", xisLightMode ? "light" : "dark");
});