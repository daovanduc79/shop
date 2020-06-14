function checkDiscount() {
    let http = new XMLHttpRequest();
    let discounts;
    let couponDiscount = document.getElementById('couponDiscount').value;
    let checkDiscount = false;
    http.open('GET', 'http://127.0.0.1:8000/api/getDiscount', true);
    http.send();
    http.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            discounts = JSON.parse(this.responseText);
            for (let i in discounts) {
                if (couponDiscount === discounts[i].name && discounts[i].amount > 0) {
                    document.getElementById('discount').value = discounts[i].price;
                    checkDiscount = true;
                }
            }
            if (!checkDiscount) {
                document.getElementById('notExist').innerHTML = 'Discount does not exist!!!';
            }
            changeTotalOrder();
        }
    };
}

function changeTotalOrder() {
    let cartSubtotal = +document.getElementById('cartSubtotal').value;
    let discount = +document.getElementById('discount').value;
    let vat = +document.getElementById('vat').value;

    document.getElementById('orderTotal').value = cartSubtotal + discount + vat;
}


