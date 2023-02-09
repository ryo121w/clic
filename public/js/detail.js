const btn2 = document.getElementById('btn2');
const mask2 = document.getElementById('mask2');
const modal2 = document.getElementById('modal2');

btn2.addEventListener('click', () => {
  mask2.classList.remove('hidden');
  modal2.classList.remove('hidden');
});

mask2.addEventListener('click', () => {
  mask2.classList.add('hidden');
  modal2.classList.add('hidden');
});


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