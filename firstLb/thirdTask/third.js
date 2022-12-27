let day = parseInt(prompt('Enter day', 11));
let month = parseInt(prompt('Enter month', 10));
let year = parseInt(prompt('Enter year', 2022));

const today = new Date(year, month, day)

const tomorrow = new Date(today)
const yesterday = new Date(today);

yesterday.setDate(today.getDate() - 1);
tomorrow.setDate(tomorrow.getDate() + 1)

alert(tomorrow);
alert(yesterday);
