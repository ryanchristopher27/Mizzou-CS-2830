/*
    Name: Ryan Christopher
    Pawprint: rdcb2f
    Date: November 2, 2020
    Challenge: PHP F20
*/

function showAndHideDivs() {
    var selected = document.getElementById('dropDown').value;

    if (selected == 'Name') {
        document.getElementById('nameFcnt').style.display = 'block';
        document.getElementById('hammFcnt').style.display = 'none';
        document.getElementById('passFcnt').style.display = 'none';
        document.getElementById('listFcnt').style.display = 'none';
        document.getElementById('cylFcnt').style.display = 'none';
    }
    else if (selected == 'HammingNumber') {
        document.getElementById('nameFcnt').style.display = 'none';
        document.getElementById('hammFcnt').style.display = 'block';
        document.getElementById('passFcnt').style.display = 'none';
        document.getElementById('listFcnt').style.display = 'none';
        document.getElementById('cylFcnt').style.display = 'none';
    }
    else if (selected == 'PasswordSim') {
        document.getElementById('nameFcnt').style.display = 'none';
        document.getElementById('hammFcnt').style.display = 'none';
        document.getElementById('passFcnt').style.display = 'block';
        document.getElementById('listFcnt').style.display = 'none';
        document.getElementById('cylFcnt').style.display = 'none';
    }
    else if (selected == 'ListCreator') {
        document.getElementById('nameFcnt').style.display = 'none';
        document.getElementById('hammFcnt').style.display = 'none';
        document.getElementById('passFcnt').style.display = 'none';
        document.getElementById('listFcnt').style.display = 'block';
        document.getElementById('cylFcnt').style.display = 'none';
    }
    else if (selected == 'CylinderSurfaceArea') {
        document.getElementById('nameFcnt').style.display = 'none';
        document.getElementById('hammFcnt').style.display = 'none';
        document.getElementById('passFcnt').style.display = 'none';
        document.getElementById('listFcnt').style.display = 'none';
        document.getElementById('cylFcnt').style.display = 'block';
    }
    else {
        document.getElementById('nameFcnt').style.display = 'none';
        document.getElementById('hammFcnt').style.display = 'none';
        document.getElementById('passFcnt').style.display = 'none';
        document.getElementById('listFcnt').style.display = 'none';
        document.getElementById('cylFcnt').style.display = 'none';
    }
}

function clearForm() {
    var selected = document.getElementById('dropDown').value;

    if (selected == 'Name') {
        document.getElementById('firstName').value = null;
        document.getElementById('lastName').value = null;
    }
    else if (selected == 'HammingNumber') {
        document.getElementById('hammNumber').value = null;
    }
    else if (selected == 'PasswordSim') {
        document.getElementById('Username').value = null;
        document.getElementById('Password').value = null;
    }
    else if (selected == 'ListCreator') {
        document.getElementById('valueOne').value = null;
        document.getElementById('valueTwo').value = null;
    }   
    else if (selected == 'CylinderSurfaceArea') {
        document.getElementById('Height').value = null;
        document.getElementById('Radius').value = null;
    }
}