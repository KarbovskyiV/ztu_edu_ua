let userCash = parseInt(prompt('Enter your cash amount'));
let priceOneBurger = parseInt(prompt('Enter price of one burger'));

if (isNaN(userCash) || isNaN(priceOneBurger)) {
    alert('Please enter only numbers!!')
} else if (userCash === 0 || priceOneBurger === 0) {
    alert("Value can't be 0");
} else {
    let amountBurger = Math.floor(userCash / priceOneBurger);
    alert('You can buy ' + amountBurger + ' burgers.');

    let change = userCash - (amountBurger * priceOneBurger);
    alert('Your change are ' + change + ' dollars.');
}
