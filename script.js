function toggleJanela() {
    const janela = document.getElementById("janelaInfo");
    // Alterna a visibilidade da janela
    if (janela.style.display === "none" || janela.style.display === "") {
        janela.style.display = "block";
    } else {
        janela.style.display = "none";
    }
}