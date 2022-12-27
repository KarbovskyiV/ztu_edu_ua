let num = prompt('Enter your age', 20);

let ones = ['', 'один', 'два', 'три', 'чотири', "п'ять", 'шість', 'сім', 'вісім', "дев'ять",
    'десять', 'одинадцять', 'дванадцять', 'тринадцять', 'чотирнадцять', "п'ятнадцять", 'шістнадцять',
    'сімнадцять', 'вісімнадцять', "дев'ятьнадцять"];
let tens = ['', '', 'двадцять', 'тридцять', 'сорок', "п'ятдесят", 'шістдесят'];

let numString = num.toString();

let end = '';
switch (num % 10) {
    case 0:
    case 5:
    case 6:
    case 7:
    case 8:
    case 9:
        end = "років.";
        break;
    case 1:
        end = "рік.";
        break;
    case 2:
    case 3:
    case 4:
        end = "роки.";
        break;
}

//the case of 1 - 20
if (num < 20) {
    alert(ones[num] + ' ' + end);
}

if (numString.length === 2) {
    alert(tens[numString[0]] + ' ' + ones[numString[1]] + ' ' + end);
}
