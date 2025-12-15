function coloraDiv_byClass($class, $colore) {
    let nuovo = document.getElementsByClassName($class);
    for (let i=0; i<nuovo.length; i++) {
        nuovo[i].style.backgroundColor= $colore;
    }
}

function esercizio01() {
    let nuovo = document.getElementsByClassName('div');
    for (let i=0; i<nuovo.length; i++) {
        nuovo[i].style.backgroundColor= "red";
    }
} 
function esercizio02() {
    let nuovo = document.getElementsByClassName('div');
    for (let i=0; i<nuovo.length; i++) {
        nuovo[i].style.backgroundColor= "yellow";
    }
} 
function esercizio03() {
    let nuovo = document.getElementsByClassName('div');
    for (let i=0; i<nuovo.length; i++) {
        nuovo[i].style.backgroundColor= "blue";
    }
} 
function esercizio04() {
    let nuovo= document.getElementsByClassName('div');
    for (let i=1; i<=nuovo.length; i++) {
        if ( (i%3) == 0 ) {
            nuovo[i-1].style.backgroundColor= "blue";
        }  
        if ( (i%3) == 1) {
            nuovo[i-1].style.backgroundColor= "red";
        } 
        if ( (i%3) == 2) {
        nuovo[i-1].style.backgroundColor= "yellow";
        }
    } 
}

function esercizio05() {
    coloraDiv_byClass('div', 'green');
}
function esercizio06() {
    coloraDiv_byClass('div', 'orange');
}
