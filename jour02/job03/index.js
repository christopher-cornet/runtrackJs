function addone() {
    let number = document.querySelector("#compteur");
    number.textContent++;
}

document.addEventListener('DOMContentLoaded', () => {
    const btn = document.querySelector('#button');
    btn.addEventListener('click', addone);
});