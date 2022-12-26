let num, sum = 0;
let str = '';

do {
    num = parseInt(prompt("Enter your number to sum it, if wanna stop enter 0"));
    sum = sum + parseInt(num);

    if (num === 0) {
        str += num + ' ';
    } else {
        str += num + ' + ' + ' ';
    }

} while (num !== 0)
alert(str + ` = ` + sum);
