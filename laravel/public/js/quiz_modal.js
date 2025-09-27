/******/ (() => { // webpackBootstrap
/*!************************************!*\
  !*** ./resources/js/quiz_modal.js ***!
  \************************************/
document.addEventListener('DOMContentLoaded', function () {
  var openModalBtn = document.getElementById('openModal');
  var closeModalBtn = document.getElementById('closeModal');
  var quizModal = document.getElementById('quizModal');
  openModalBtn.addEventListener('click', function () {
    quizModal.classList.remove('hidden');
  });
  closeModalBtn.addEventListener('click', function () {
    quizModal.classList.add('hidden');
  });
  window.addEventListener('click', function (event) {
    if (event.target === quizModal) {
      quizModal.classList.add('hidden');
    }
  });
  document.getElementById('quizForm').addEventListener('submit', function (event) {
    event.preventDefault();
    // Здесь можно добавить код для отправки данных формы
    alert('Заявка отправлена!');
    quizModal.classList.add('hidden');
  });
});
/******/ })()
;