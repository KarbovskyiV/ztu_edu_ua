let num = prompt('Enter your age', 89);

function convertToText() {
    let ones = ['', 'один', 'два', 'три', 'чотири', "п'ять", 'шість', 'сім', 'вісім', "дев'ять",
        'десять', 'одинадцять', 'дванадцять', 'тринадцять', 'чотирнадцять', "п'ятнадцять", 'шістнадцять',
        'сімнадцять', 'вісімнадцять', "дев'ятьнадцять"];
    let tens = ['', '', 'двадцять', 'тридцять', 'сорок', "п'ятдесят", 'шістдесят', 'сімдесят', 'вісімдесят', "дев'яносто"];

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

    if (num >= 100) {
        alert('Введіть значення менше 100');
    }

    if (num >= 10 && num < 20) {
        alert(ones[num] + ' років.');
    }

    if (num < 10) {
        alert(ones[num] + ' ' + end);
    }

    if (numString >= 20 && num < 100) {
        alert(tens[numString[0]] + ' ' + ones[numString[1]] + ' ' + end);
    }
}

convertToText();
