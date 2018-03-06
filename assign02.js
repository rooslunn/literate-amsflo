function lookSay (number) {
    var repeats = {};
    var str = String(number);

    var key;
    for (var i = 0, l = str.length; i < l; ++i) {
        key = str.charAt(i);
        key = str.indexOf(key) + '_' + key;
        if (! repeats.hasOwnProperty(key)) {
            repeats[key] = 1;
            continue;
        }
        repeats[key]++;
    }

    var counts = Object.getOwnPropertyNames(repeats);
    var result = '';

    counts.forEach(function (element) {
        result += repeats[element] + element.split('_')[1];
    });

    return parseInt(result);
}

console.log(lookSay(0));
console.log(lookSay(11));
console.log(lookSay(12));
console.log(lookSay(94));

