//funzione per cambiare il colore di sfondo dato da una classe e il colore che si vuole dare
function coloraDiv_byClass($class, $colore) {
    let nuovo = document.getElementsByClassName($class);
    for (let i=0; i<nuovo.length; i++) {
        nuovo[i].style.backgroundColor= $colore;
    }
}
//colora di rosso i div con classe 'primo'
function esercizio01() {
    coloraDiv_byClass('primo', 'red');
}
//colora di rosso i div con classe 'secondo'
function esercizio02() {
    coloraDiv_byClass('secondo', 'red');
}
//colora di rosso i div con classe 'tutti'
function esercizio03() {
    coloraDiv_byClass('tutti', 'red');
}
//colora di blu i div con classe 'primo'
function esercizio04() {
    coloraDiv_byClass('primo', 'blue');
}
//colora di blu i div con classe 'secondo'
function esercizio05() {
    coloraDiv_byClass('secondo', 'blue');
}
//colora di blu i div con classe 'tutti'
function esercizio06() {
    coloraDiv_byClass('tutti', 'blue');
}
function esercizio07() {
    coloraDiv_byClass('terzo', 'red');
}
function esercizio08() {
    coloraDiv_byClass('terzo', 'blue');
}
function esercizio09() {
    coloraDiv_byClass('primo', 'yellow');
}   
function esercizio10() {
    coloraDiv_byClass('secondo', 'yellow');
}   
function esercizio11() {
    coloraDiv_byClass('terzo', 'yellow');
}
function esercizio12() {
    coloraDiv_byClass('tutti', 'yellow');
}
