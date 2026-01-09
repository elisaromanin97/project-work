/* DOMContentLoaded carico tutto il DOM per fare in modo che le funzioni javascript vengano eseguite appena la pagina viene caricata */
document.addEventListener("DOMContentLoaded", function () {
    
    //Funzione semplice di download dei bilanci
    document.getElementById("downloadBilanci").addEventListener("click", function () {
        const anno = document.getElementById("annoSelect").value;
        const msg = document.getElementById("msg");
        msg.textContent = "";

        if (!anno) {
            msg.textContent = "Seleziona un anno prima di scaricare.";
            return;
        }

        // Mappa file da scaricare
        const files = {
            "2021": "https://drive.google.com/uc?export=download&id=1U4HKI-sDQpiScKXOTEu0EemdxZeqNg6O",
            "2023": "https://drive.google.com/uc?export=download&id=1bsQy2Gb2hX52aEP_hMtiQWOjGsMShFRv"
        };

        const link = document.createElement("a");
        link.href = files[anno];
        link.download = `${anno}.pdf`;  
        link.click();
    });
    
    //Funzione per lo scroll iniziale alla pagina
    const btn = document.getElementById("scrollTopBtn");

    window.addEventListener("scroll", function () {
        if (window.scrollY > 100) {
            btn.style.display = "block";
        } else {
            btn.style.display = "none";
        }
    });

    btn.addEventListener("click", function () {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
});