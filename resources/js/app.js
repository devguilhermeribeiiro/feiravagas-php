import './bootstrap';

// Variables

const contatoLink = getById("contato-link");
const sobreLink = getById("sobre-link");
const publicarLink = getById("publicar-link");

const contatoModal = getById("contato-modal");
const sobreModal = getById("sobre-modal");
const publicarModal = getById("publicar-modal");

const btnSobreModal = getById("btn-sobre-modal");
const btnContatoModal = getById("btn-contato-modal");
const btnPublicarModal = getById("btn-publicar-modal");

const jobCards = document.querySelectorAll(".job-card");

jobCards.forEach(element => {
    element.addEventListener("click", (event) => {
        event.preventDefault();
        const elementId = element.querySelector('input[type="hidden"]').value;
        const dialog = getById(`job-${elementId}-modal`);
        dialog.showModal();

        closeModal(getById(`btn-job-${elementId}-modal`), dialog);
    });
});

showModal(contatoLink, contatoModal);
showModal(sobreLink, sobreModal);
showModal(publicarLink, publicarModal);

closeModal(btnContatoModal, contatoModal);
closeModal(btnSobreModal, sobreModal);
closeModal(btnPublicarModal, publicarModal);

//Functions

function getById(elementId) {
    return document.getElementById(elementId);
}

function showModal(dispatcher, target) {
    dispatcher.addEventListener("click", (event) => {
        event.preventDefault();
        target.showModal();
        target.scrollTop = 0;
    });
}

function closeModal(dispatcher, target) {
    dispatcher.addEventListener("click", (event) => {
        event.preventDefault();
        target.close();
        target.scrollTop = 0;
    });
}
