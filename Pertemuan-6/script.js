const btnToggle = document.querySelector("#toggleButton");
const body = document.body;

const savedTheme = localStorage.getItem("theme");

if (savedTheme === "light") {
    body.classList.add("light-mode");
}

btnToggle.addEventListener("click",  () => {
    body.classList.toggle("light-mode");

    

    const isLightMode = body.classList.contains("light-mode");
    btnToggle.textContent = isLightMode ? "Dark Mode" : "Light Mode";
    
    localStorage.setItem("theme", isLightMode ? "light" : "dark");
});


const factList = document.querySelector("#random-fact-list");
const btnNewFact = document.querySelector("#newFactButton");

let isFirstLoad = true;

async function fetchRandomFact() {
    
    try {
        const response = await fetch("https://catfact.ninja/fact");

        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
                
        const data = await response.json();

        if (isFirstLoad) {
            factList.innerHTML = "";
            isFirstLoad = false;
        }

        const li = document.createElement("li");
        li.textContent = data.fact;
        
        factList.appendChild(li);



    } catch (error) {
        factList.textContent = "Gagal memuat fakta. Silakan coba lagi.";
        console.error("Error :",error.message);
    }
}

fetchRandomFact();

btnNewFact.addEventListener("click", fetchRandomFact);

const btnResetFact = document.querySelector("#resetFactButton");
btnResetFact.addEventListener("click", () => {
    factList.innerHTML = "<li>Memuat fakta...</li>";
    isFirstLoad = true;
    fetchRandomFact();
});
