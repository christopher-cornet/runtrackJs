function citation() {
    let citation = document.querySelector('#citation');
    console.log(citation.textContent);
}

document.addEventListener('DOMContentLoaded', () => {
    const btn = document.querySelector('#button');
    btn.addEventListener('click', citation);
});