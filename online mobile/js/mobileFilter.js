/* FILTER */
var divs = document.getElementsByClassName("requ");
var btns = new Array("showAll","A","B","C","D","E","F","G","H","I","K","L","M","N","O","P","Q","R","S","T","V","X","Y","Z");

function setActive(x) {
    for(var i = 0; i < btns.length; i++){
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
function loadA() {
    setActive("A");
    hideDivs(divs);
    var Adivs = showDivs(document.getElementsByClassName("ACO"));
    for (var i = 0; i < Adivs.length; i++) {
        document.getElementById("searchResult").appendChild(Adivs[i]);
    }
}
function loadB() {
    setActive("B");
    hideDivs(divs);
    var Bdivs = showDivs(document.getElementsByClassName("BCO"));
    for (var i = 0; i < Bdivs.length; i++) {
        document.getElementById("searchResult").appendChild(Bdivs[i]);
    }
}
function loadC() {
    setActive("C");
    hideDivs(divs);
    var Cdivs = showDivs(document.getElementsByClassName("CCO"));
    for (var i = 0; i < Cdivs.length; i++) {
        document.getElementById("searchResult").appendChild(Cdivs[i]);
    }
}
function loadD() {
    setActive("D");
    hideDivs(divs);
    var Ddivs = showDivs(document.getElementsByClassName("DCO"));
    for (var i = 0; i < Ddivs.length; i++) {
        document.getElementById("searchResult").appendChild(Ddivs[i]);
    }
}
function loadE() {
    setActive("E", "showAll");
    hideDivs(divs);
    var Edivs = showDivs(document.getElementsByClassName("ECO"));
    for (var i = 0; i < Edivs.length; i++) {
        document.getElementById("searchResult").appendChild(Edivs[i]);
    }
}
function loadF() {
    setActive("F");
    hideDivs(divs);
    var Fdivs = showDivs(document.getElementsByClassName("FCO"));
    for (var i = 0; i < Fdivs.length; i++) {
        document.getElementById("searchResult").appendChild(Fdivs[i]);
    }
}
function loadG() {
    setActive("G");
    hideDivs(divs);
    var Gdivs = showDivs(document.getElementsByClassName("GCO"));
    for (var i = 0; i < Gdivs.length; i++) {
        document.getElementById("searchResult").appendChild(Gdivs[i]);
    }
}
function loadH() {
    setActive("H");
    hideDivs(divs);
    var Hdivs = showDivs(document.getElementsByClassName("HCO"));
    for (var i = 0; i < Hdivs.length; i++) {
        document.getElementById("searchResult").appendChild(Hdivs[i]);
    }
}
function loadI() {
    setActive("I");
    hideDivs(divs);
    var Idivs = showDivs(document.getElementsByClassName("ICO"));
    for (var i = 0; i < Idivs.length; i++) {
        document.getElementById("searchResult").appendChild(Idivs[i]);
    }
}
function loadK() {
    setActive("K");
    hideDivs(divs);
    var Kdivs = showDivs(document.getElementsByClassName("KCO"));
    for (var i = 0; i < Kdivs.length; i++) {
        document.getElementById("searchResult").appendChild(Kdivs[i]);
    }
}
function loadL() {
    setActive("L");
    hideDivs(divs);
    var Ldivs = showDivs(document.getElementsByClassName("LCO"));
    for (var i = 0; i < Ldivs.length; i++) {
        document.getElementById("searchResult").appendChild(Ldivs[i]);
    }
}
function loadM() {
    setActive("M");
    hideDivs(divs);
    var Mdivs = showDivs(document.getElementsByClassName("MCO"));
    for (var i = 0; i < Mdivs.length; i++) {
        document.getElementById("searchResult").appendChild(Mdivs[i]);
    }
}
function loadN() {
    setActive("N");
    hideDivs(divs);
    var Ndivs = showDivs(document.getElementsByClassName("NCO"));
    for (var i = 0; i < Ndivs.length; i++) {
        document.getElementById("searchResult").appendChild(Ndivs[i]);
    }
}
function loadO() {
    setActive("O");
    hideDivs(divs);
    var Odivs = showDivs(document.getElementsByClassName("OCO"));
    for (var i = 0; i < Odivs.length; i++) {
        document.getElementById("searchResult").appendChild(Odivs[i]);
    }
}
function loadP() {
    setActive("P");
    hideDivs(divs);
    var Pdivs = showDivs(document.getElementsByClassName("PCO"));
    for (var i = 0; i < Pdivs.length; i++) {
        document.getElementById("searchResult").appendChild(Pdivs[i]);
    }
}
function loadQ() {
    setActive("Q");
    hideDivs(divs);
    var Qdivs = showDivs(document.getElementsByClassName("QCO"));
    for (var i = 0; i < Qdivs.length; i++) {
        document.getElementById("searchResult").appendChild(Qdivs[i]);
    }
}
function loadR() {
    setActive("R");
    hideDivs(divs);
    var Rdivs = showDivs(document.getElementsByClassName("RCO"));
    for (var i = 0; i < Rdivs.length; i++) {
        document.getElementById("searchResult").appendChild(Rdivs[i]);
    }
}
function loadS() {
    setActive("S");
    hideDivs(divs);
    var Sdivs = showDivs(document.getElementsByClassName("SCO"));
    for (var i = 0; i < Sdivs.length; i++) {
        document.getElementById("searchResult").appendChild(Sdivs[i]);
    }
}
function loadT() {
    setActive("T");
    hideDivs(divs);
    var Tdivs = showDivs(document.getElementsByClassName("TCO"));
    for (var i = 0; i < Tdivs.length; i++) {
        document.getElementById("searchResult").appendChild(Tdivs[i]);
    }
}
function loadV() {
    setActive("V");
    hideDivs(divs);
    var Vdivs = showDivs(document.getElementsByClassName("VCO"));
    for (var i = 0; i < Vdivs.length; i++) {
        document.getElementById("searchResult").appendChild(Vdivs[i]);
    }
}
function loadX() {
    setActive("X");
    hideDivs(divs);
    var Xdivs = showDivs(document.getElementsByClassName("XCO"));
    for (var i = 0; i < Xdivs.length; i++) {
        document.getElementById("searchResult").appendChild(Xdivs[i]);
    }
}
function loadY() {
    setActive("Y");
    hideDivs(divs);
    var Ydivs = showDivs(document.getElementsByClassName("YCO"));
    for (var i = 0; i < Ydivs.length; i++) {
        document.getElementById("searchResult").appendChild(Ydivs[i]);
    }
}
function loadZ() {
    setActive("Z");
    hideDivs(divs);
    var Zdivs = showDivs(document.getElementsByClassName("ZCO"));
    for (var i = 0; i < Zdivs.length; i++) {
        document.getElementById("searchResult").appendChild(Zdivs[i]);
    }
}