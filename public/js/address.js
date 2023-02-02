const btn3 = document.getElementById('btn');
const mask = document.getElementById('mask');
const modal = document.getElementById('modal');

btn3.addEventListener('click', () => {
  mask.classList.remove('hidden');
  modal.classList.remove('hidden');
});

mask.addEventListener('click', () => {
  mask.classList.add('hidden');
  modal.classList.add('hidden');
});

