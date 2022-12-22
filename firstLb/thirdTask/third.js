let day, month, year;

day = prompt('Enter day');
month = prompt('Enter month');
year = prompt('Enter year');

if (day > 31) {
    month = +month + 1;
}

if (month > 12) {
    year = +year + 1
}

previousDay = day - 1;
nextDay = +day + 1;

previousMonth = month - 1;
nextMonth = +month + 1;

previousYear = year - 1;
nextYear = +year + 1;

alert('Previous date ' + previousDay + '.' + previousMonth + '.' + previousYear);
alert('Next date ' + nextDay + '.' + nextMonth + '.' + nextYear);
