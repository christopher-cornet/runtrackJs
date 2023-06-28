function showhide() {
    let article = document.getElementById("id_article");
    if (article.style.display === "none") {
        article.style.display = "block";
    }
    else {
        article.style.display = "none";
    }
}

document.addEventListener('DOMContentLoaded', () => {
    let article = document.createElement('article');
    article.setAttribute("id", "id_article");
    article.style.display = "none";
    article.textContent = "L'important n'est pas la chute, mais l'atterrissage.";
    document.body.append(article);

    const btn = document.querySelector('#button');
    btn.addEventListener('click', showhide);
});