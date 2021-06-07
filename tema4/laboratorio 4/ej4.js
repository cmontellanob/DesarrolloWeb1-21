function mayormenor() {
    a = parseInt(document.getElementById('a').value);
    b = parseInt(document.getElementById('b').value);
    c = parseInt(document.getElementById('c').value);
    if (a > b && a > c)
        document.getElementById('a').style.backgroundColor = 'blue';
    if (b > a && b > c)
        document.getElementById('b').style.backgroundColor = 'blue';
    if (c > a && c > b)
        document.getElementById('c').style.backgroundColor = 'blue';

    if (a < b && a < c)
        document.getElementById('a').style.backgroundColor = 'red';
    if (b < a && b < c)
        document.getElementById('b').style.backgroundColor = 'red';
    if (c < a && c < b)
        document.getElementById('c').style.backgroundColor = 'red';






}