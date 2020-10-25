/*
    Name: Ryan Christopher
    Pawprint: rdcb2f
    Date: 10/3/2020
    Challenge: To Do List F20
    
    Javascript File for ToDoList Project
*/

function clearForm() {
    document.getElementById('titleForm').value = null;
    document.getElementById('typesForm').value = '';
    document.getElementById('priorityForm').value = null;
    document.getElementById('dateForm').value = null;
    document.getElementById('plabel').innerHTML = '3';
}

/* Function was made with help of Christian (TA) */
function addToList() {
    var title = document.getElementById('titleForm').value;
    var type = document.getElementById('typesForm').value;
    var priority = document.getElementById('priorityForm').value;
    var date = document.getElementById('dateForm').value;
    
    // Cheeck if form is full
    if (title == '' || type == '' || priority == '' || date == '') {
        document.getElementById('error').style.visibility = 'visible';
        clearForm();
        return;
    }
    
    // Adds the priority stars to the to-do list
    // Code based on the information from Christian (TA)
    let prior = '';
    for (var i=0; i<priority; i++) {
        prior += "<i class='fa fa-star'></i>";
    }
        
    // Add new items to table
    document.getElementById('tableBody').innerHTML +=
        "<tr class='addedItems'><td class='addTitle'>" + title + "</td>" +
        "<td class='addType'>" + type + "</td>" +
        "<td class='addPriority'>" + prior + "</td>" +
        "<td class='addDate'>" + date + "</td>" +
        "<td class='addButton'><button class='doneButton' onclick='removeParent(this.parentNode.parentNode)'><i class='fa fa-check-square'></i></button></td></tr>";
    
    document.getElementById('error').style.visibility = 'hidden';
        
    clearForm();
    return;
}

/* Found on stack overflow */
/* Link: https://stackoverflow.com/questions/40144638/how-to-remove-the-div-that-a-button-is-contained-in-when-the-button-is-clicked */
function removeParent(parent) {
	parent.remove();
}

let currentTheme = 'lightTheme';

/* Function was made with help of Christian (TA) */
function changeTheme() {
    const darkTheme = 'body { background-color: black; }' +
          '#mainHeader { color: lightblue; }' +
          '#tableWrapper { border: 5px solid lightgray; }' +
          'table#todoList { background-color: black; color: lightblue; border: 5px solid lightblue; }' +
          '#formWrapper { background-color: black; border: 5px solid lightblue; }' +
          '.formHeader { color: lightblue; }';
    
    // Current theme is light, change to dark
    if ( currentTheme == 'lightTheme') {
        document.getElementById('themeButton').innerHTML = "Theme: Dark";
        document.getElementById('toggleStyle').innerHTML = darkTheme;
        currentTheme = 'darkTheme';
    }
    // Current theme is dark, change to light
    else {
        document.getElementById('themeButton').innerHTML = "Theme: Light";
        document.getElementById('toggleStyle').innerHTML = '';
        currentTheme = 'lightTheme';
    }
}

/* Function was made with help of Christian (TA) */
function changeHeader() {
    var header = prompt('Enter a new title:', 'To Do List');
    document.getElementById('mainHeader').innerHTML = header;
}