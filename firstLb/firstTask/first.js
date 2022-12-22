let userCash = prompt('Enter your cash amount');
let priceOneBurger = prompt('Enter price of one burger');

let amountBurger = Math.floor(userCash / priceOneBurger);
alert(amountBurger);

let change = userCash - (amountBurger * priceOneBurger);
alert(change);
