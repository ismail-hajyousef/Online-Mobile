/* FILTER */
var divs = document.getElementsByClassName("requ");
var btns = new Array("showAll", "SN", "SSN", "MSN", "SEN");

function setActive(x) {
    for (var i = 0; i < btns.length; i++) {
        document.getElementById(btns[i]).classList.remove("active");
    }
    document.getElementById(x).classList.add("active");
}

function hideDivs(x) {
    for (var i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
}

function showDivs(x) {
    for (var j = 0; j < x.length; j++) {
        x[j].style.display = "block";
    }
    return x;
}

//Load All
function loadAll() {
    setActive("showAll");
    for (var i = 0; i < divs.length; i++) {
        divs[i].style.display = "block";
    }
}
function loadSN() {
    setActive("SN");
    hideDivs(divs);
    var SNdivs = showDivs(document.getElementsByClassName("SN"));
    for (var i = 0; i < SNdivs.length; i++) {
        document.getElementById("searchResult").appendChild(SNdivs[i]);
    }
}
function loadSSN() {
    setActive("SSN");
    hideDivs(divs);
    var SSNdivs = showDivs(document.getElementsByClassName("SSN"));
    for (var i = 0; i < SSNdivs.length; i++) {
        document.getElementById("searchResult").appendChild(SSNdivs[i]);
    }
}
function loadMSN() {
    setActive("MSN");
    hideDivs(divs);
    var MSNdivs = showDivs(document.getElementsByClassName("MSN"));
    for (var i = 0; i < MSNdivs.length; i++) {
        document.getElementById("searchResult").appendChild(MSNdivs[i]);
    }
}
function loadSEN() {
    setActive("SEN");
    hideDivs(divs);
    var SENdivs = showDivs(document.getElementsByClassName("SEN"));
    for (var i = 0; i < SENdivs.length; i++) {
        document.getElementById("searchResult").appendChild(SENdivs[i]);
    }
}
