class Item {
    constructor(id, name, stock) {
        this.id = id;       
        this.name = name;  
        this.stock = stock; 
        }
        
 getId() {
        return this.id;
    }

    // nameの値を返す
    getName() {
        return this.name;
    }

    // stockの値を返す
    getStock() {
        return this.stock;
    }

    // 商品の追加
    addStock(num) {
        this.stock += num;
    }

    // 商品の販売
    sale(num) {
        if (this.stock < num) {
            throw new Error('在庫が足りません')
        } else {
            this.stock -= num;
        }
    }
}

class Chair extends Item {
    constructor(id, name, stock, secondhand) {
        super(id, name, stock);
        this.secondhand = secondhand;           
    }

    getSecondhand() {
        return this.secondhand;
    }
}
let chair1 = new Chair('001','木製の椅子',111,'S');
let chair2 = new Chair('002','パイプ椅子',222,'N');
let chair3 = new Chair('003','ベンチ',333,'S');
let itemList = [chair1, chair2, chair3]
itemList.forEach((e) => {
    console.log(e);
})
let totalStock = 0;
for (let i = 0; i < itemList.length; i++) {
    totalStock += itemList[i].getStock();
}
console.log('全体の在庫数:' + totalStock);

