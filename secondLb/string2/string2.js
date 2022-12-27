function toCamelCase(str) {
    return str.replace(/\W+(.)/g, function (match, chr) {
        return chr.toUpperCase();
    });
}

alert(toCamelCase("background-color"));

