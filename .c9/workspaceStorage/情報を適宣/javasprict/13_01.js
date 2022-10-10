let cate1 = [
    '---',      
    '調理器具'
    ];
    
let cate2 = [
    ['---'],
    ['フライパン','包丁','土鍋','まな板']
    ];
    
var itemList = [
        { id: '001', name: '調理器具', tags: ['フライパン','包丁','土鍋','まな板']}
        ];
        
let cate1Element = document.getElementById('mainMenu');
let cate2Element = document.getElementById('subMenu');
var itemListElement = document.getElementById('itemList');

function setMainMenu() {
    cate1Element.innerHTML = '';
    cate1.forEach(function(element){
          let option = document.createElement('option');
        option.value = element;  
        option.text = element; 
        cate1Element.appendChild(option); 
        console.log(element);
});
};

function setSubMenu(idx) {
    cate2Element.innerHTML = '';
     cate2[idx].forEach(function(element){
        let option = document.createElement('option');
        option.value = element;  
        option.text = element; 
        cate2Element.appendChild(option); 
        console.log(element);
});
};


function viewItemList(tag) {
    itemListElement.innerHTML = '';
    for (let i = 0; i < itemList.length; i++) {
        if (itemList[i].tags.some(t => t === tag)) {
            // li要素を作成
            let li = document.createElement('li');
            // テキスト情報を作成
            let text = document.createTextNode(itemList[i].id + ':' + itemList[i].name);
            // ul要素に追加
            li.appendChild(text);
            itemListElement.appendChild(li);
        }
    }
}

//--- イベントリスナーの定義 ---
// 大分類の選択された時のイベントリスナー
cate1Element.addEventListener('change', function () {
    // 選択されば番号を取得
    let idx = cate1Element.selectedIndex;
    // 大分類の選択にあわせて、小分類の生成
    setSubMenu(idx);
    //　小分類が選択されたときに、最初に表示される値
    viewItemList(cate2[idx][0]);
});

// 小分類の選択された時のイベントリスナー
cate2Element.addEventListener('change', function () {
    // 選択されば値を取得
    let val = cate2Element.value;
    viewItemList(val);

});
setMainMenu();
    