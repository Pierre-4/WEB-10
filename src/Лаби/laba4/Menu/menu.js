function dropDown(a) {
    var li = a.parentElement,
        submenu = li.getElementsByTagName('ul')[0];

    submenu.style.display = submenu.style.display == "block" ? "none" : "block";

    return false;
}


function reverseDropDown(){

    var submenu = document.getElementById('no').getElementsByClassName('menu')[0];
    submenu.style.display="none";
}

function dropDown2() {
    var submenu = document.getElementById('no2').getElementsByClassName('submenu')[0];



    submenu.style.display="block";

}

function reverseDropDown2(){

    var submenu = document.getElementById('no2').getElementsByClassName('submenu')[0];
    submenu.style.display="none";
}