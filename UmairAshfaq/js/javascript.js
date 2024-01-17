const btn=document.getElementById('btn');
btn.addEventListener('click', doIt);

function checkCc() {
    let ccnum = document.getElementById('ccnum').value;
    let patt1 = /^(?:5[1-5][0-9]{14})$/;
    if (ccnum.match(patt1))
        return true;
    else {
        return false;
    }
    }

function checkCvv() {
    let seccode = document.getElementById('seccode').value;
    let patt2 = /^[0-9]{3,4}$/;
    if (seccode.match(patt2))
        return true;
    else {
        return false;
    }
    }

function checkD() {
    let givenYear = new Date(document.getElementById("expYear").value, 
    document.getElementById("expMonth").value,0,0,0,0,0);
    let today = new Date();
    if (givenYear < today) {
        return false;
    } else {
        return true;
    }
    }






    
    
    function doIt() {
        if(checkCc() && checkCvv() && checkD())
        document.getElementById("h").value = 1;
        else document.getElementById("h").value = -1;
    }
    
