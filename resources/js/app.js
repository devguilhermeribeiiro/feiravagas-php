import './bootstrap';

const contatoLink = document.getElementById("contato-link");
const sobreLink = document.getElementById("sobre-link");
const contatoModal = document.getElementById("contato-modal");
const sobreModal = document.getElementById("sobre-modal");
const btnSobreModal = document.getElementById("btn-sobre-modal");
const btnContatoModal = document.getElementById("btn-contato-modal");
const jobCards = document.querySelectorAll(".job-card");

jobCards.forEach(element => {
    element.addEventListener("click", (event) => {
        event.preventDefault();
        const elementId = element.querySelector('input[type="hidden"]').value;
        const dialog = document.getElementById(`job-${elementId}-modal`);
        dialog.showModal();

        document.getElementById(`btn-job-${elementId}-modal`).addEventListener("click", (event) => {
            event.preventDefault();
            dialog.close();
        });
    });
});


contatoLink.addEventListener("click", (event) => {
    event.preventDefault();
    contatoModal.showModal();
    contatoModal.scrollTop = 0;
});

sobreLink.addEventListener("click", (event) => {
    event.preventDefault();
    sobreModal.showModal();
    sobreModal.scrollTop = 0;
});

btnSobreModal.addEventListener("click", (event) => {
    event.preventDefault();
    sobreModal.close();
    sobreModal.scrollTop = 0;
});

btnContatoModal.addEventListener("click", (event) => {
    event.preventDefault();
    contatoModal.close();
    contatoModal.scrollTop = 0;
});
