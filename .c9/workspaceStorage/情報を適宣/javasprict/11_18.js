 
let e1 = document.getElementById('p1');
let e2 = document.getElementById('p2');
let e3 = document.getElementById('p3');

console.log(e1.tagName);
e1.outerHTML = '<input type="input" id="item" value="商品">';

console.log(e2.className);  
e2.innerHTML = '<p>テスト文字列</p>';

console.log(e3.id);
e3.id = 'p5';