do {
    let n1 = parseInt(prompt('Enter first number', 10));
    let operand = prompt('Enter operator - + * /', '+');
    let n2 = parseInt(prompt('Enter second number', 10));

    switch (operand) {
        case '+' :
            alert(n1 + n2);
            break;

        case '-' :
            alert(n1 - n2);
            break;

        case '*' :
            alert(n1 * n2);
            break;

        case '/' :
            alert(n1 / n2);
            break;

        default:
            break;
    }
} while (confirm('Else one?'));
