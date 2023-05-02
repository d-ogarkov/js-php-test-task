const element = document.querySelector('.paragraph');
const button1 = document.querySelector('.button_1');
const button2 = document.querySelector('.button_2');

function resetState() {
  element.dataset.key = 0;
}

function adjustState() {
  if (element.dataset.key == 2) {
    element.classList.toggle('hidden');
    resetState();
  }
}

button1.addEventListener('click', () => {
  element.dataset.key = 1;
  adjustState();
});

button2.addEventListener('click', () => {
  if (element.dataset.key == 1) {
    element.dataset.key = 2;
  }
  adjustState();
});

resetState();
