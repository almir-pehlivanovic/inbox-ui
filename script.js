const description = document.querySelector('.description');
const modal = document.querySelector('.custom-modal');
const cancelModal = document.querySelector('.cancel-description');

description.addEventListener('click', () => {
    modal.style.display = 'block';
});

cancelModal.addEventListener('click', () => {
    modal.style.display = 'none';
});