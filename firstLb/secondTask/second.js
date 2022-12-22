let number = prompt('Enter a five-digit number', 12345);
let lastDigit = number.charAt(4);
let numberFinal = lastDigit + number;

alert(numberFinal.substring(0, 5));
