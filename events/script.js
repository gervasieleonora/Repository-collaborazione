function esercizio01() {
    let nuovo = document.getElementsByClassName('giallo');
    for (let i=0; i<nuovo.length; i++) {
        nuovo[i].style.backgroundColor= "red";
    }
} 