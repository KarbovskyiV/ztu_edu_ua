let num, sum = 0;

do {
    num = prompt("Enter your number to sum it, if wanna stop enter 0");
    sum = sum + parseInt(num);
} while (num != 0)
alert(` = ` + sum);
