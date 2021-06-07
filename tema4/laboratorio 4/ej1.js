function literal(n) {
    if (n < 0 || n > 100) {
        return "rango no permitido";
    }
    u = n % 10;
    d = Math.floor(n / 10);

    switch (n) {
        case 11: return "once";
        case 12: return "doce";
        case 13: return "trece";
        case 14: return "catorce";
        case 15: return "quince";
        case 100: return "cien";
    }
    if (u==0 && d>0)
    {   
        if (d==2)
           return "veinte";
        else
           return decenas(d);   
    }
    else
       {
        
         if(d==2)
         return decenas(d)+unidades(u);
         else
         return decenas(d)+" y "+unidades(u);

       }


}

function unidades(u) {
    switch (u) {
        case 1:
            return "uno";
        case 2:
            return "dos";
        case 3:
            return "tres";
        case 4:
            return "cuatro";
        case 5:
            return "cinco";
        case 6:
            return "seis";
        case 7:
            return "siete";
        case 8:
            return "ocho";
        case 9:
            return "nueve";
        case 0:
            return "cero";

        default:
            return "rango no permitido";
    }
}
function decenas(d) {
    switch (d) {
        case 1:
            return "diez";
        case 2:
            return "veinti";
        case 3:
            return "trenta";
        case 4:
            return "cuarenta";
        case 5:
            return "cicuenta";
        case 6:
            return "sesenta";
        case 7:
            return "setenta";
        case 8:
            return "ochenta";
        case 9:
            return "noventa";

        default:
            return "";
    }
}