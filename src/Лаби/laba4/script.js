var  arr = [-1, 17,5,-2, 25,-4, 5, 7, 1, 7,3,2, 6,2,1];
var enter;
enter = prompt("Введіть кількість чисел");
arr.length = enter;
document.write( "початковий масив" +  arr + "<br />")
function addEven(arr) {
    var result = 0;
    arr.forEach( function(el, n) {
        if ( !(n % 2) ) result += el
    } );
    return result
}
addEven(arr);
document.write( "Сума елементів з парним індексом " + addEven(arr) + "<br />");
function multipleNegative() {
    var prod = 1;
    arr.forEach(function(e)
    {
        if (e<0) prod *= e;
    });
    return prod
}
multipleNegative(arr);
document.write("Добуток від'ємних елементів" + multipleNegative(arr) + "<br />");
function indexOfSmallest(a) {
    var lowest = 0;
    for (var i = 1; i < a.length; i++) {
        if (a[i] < a[lowest])
            lowest = i;
    }
    return lowest;
}
indexOfSmallest(arr);
document.write("Індекс найменшого елементу" + indexOfSmallest(arr)+ "<br />");
function indexOfBiggest(a) {
    var greatest = 0;
    for (var i = 1; i < a.length; i++) {
        if (a[i] > a[greatest])
            greatest = i;
    }
    return greatest;
}
indexOfBiggest(arr);
document.write("Індекс найбільшого елементу" + indexOfBiggest(arr) + "<br />");
function compareNumeric(a, b) {
    if (a > b) return 1;
    if (a == b) return 0;
    if (a < b) return -1;
}
arr.sort(compareNumeric);
document.write("Відсортований масив" + arr + "<br />" );