function seleccion(n) {
    document.write('<SELECT>');
    for (let i = 0; i < n; i++) {
        document.write('<OPTION value ="' + i + '">');
        document.write(factorial(i));
        document.write('</OPTION>');

    }
    document.write('</SELECT>');
}
function factorial(n) {
    if (n == 0)
        return 1;
    else
        return factorial(n - 1) * n;
}