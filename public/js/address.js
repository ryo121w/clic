const btn3 = document.getElementById('btn');
const mask = document.getElementById('mask');
const modal = document.getElementById('modal');
const test = document.getElementById('test');

btn3.addEventListener('click', () => {
  mask.classList.remove('hidden');
  modal.classList.remove('hidden');
});

mask.addEventListener('click', () => {
  mask.classList.add('hidden');
  modal.classList.add('hidden');
});

test.addEventListener('click', () => {
  mask.classList.add('hidden');
  modal.classList.add('hidden');
});


//各チェックボックスをHTMLCollectionで取得
let fruits_check_boxes = document.getElementsByClassName("content_list")

//各チェックボックスが選択されたら呼び出される関数
function displaySelectedBrand(){
  //選択された果物の文字列を入れるための配列
  let displayed_fruits = []
  //表示箇所を取得
  let favorites_fruits = document.getElementById("extracted_words")
  //チェックボックスごとに、選択されているかどうかで文字列用の配列に出し入れを行う
  for(let i = 0; i < fruits_check_boxes.length; i++){
    if(fruits_check_boxes[i].checked){
      displayed_fruits.push(fruits_check_boxes[i].nextElementSibling.textContent)
    } else {
      let removing_fruit = fruits_check_boxes[i].nextElementSibling.textContent
      displayed_fruits = displayed_fruits.filter(item => (item.match(/${removing_fruit}/)) == null);
    }
  }
  //表示箇所に選択されている果物を表示
  favorites_fruits.textContent = displayed_fruits
}
