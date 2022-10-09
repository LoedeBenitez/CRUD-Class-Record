//CLOSING BUTTON
function close_btn(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML ="";
        }
    };

    xmlhttp.open("GET", "index.php", true);
    xmlhttp.send();
}

// ADDING STUDENT WITH AJAX
function addStudent(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML =
            this.responseText;
        }
    };

    xmlhttp.open("POST", "pages/addstudent.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();
}


function submitStudent(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML =
            this.responseText;
        }
    };

    xmlhttp.open("POST", "pages/submitstudent.php", true);
    xmlhttp.send();
}
//------------------------------------------------------------------

//FUNCTION OF VIEWING ARCHIVING STUDENT

function archiveStudent(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("table_data").innerHTML = this.responseText;
        }
    };

    xmlhttp.open("GET", "pages/viewarchivestudent.php", true);
    xmlhttp.send();
}

function confirm_undoStud(value){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
            tablerow_delete(value);
        }
    };

    xmlhttp.open("GET", "pages/confirmundo.php?id="+value, true);
    xmlhttp.send();
}
function backToTable(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("backtotable").innerHTML = this.responseText;
            document.getElementsByClassName("archive_none_msg")[0].remove();
        }
    };

    xmlhttp.open("GET", "pages/details.php", true);
    xmlhttp.send();
}

function undoStudent(value){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
        }
    };

    xmlhttp.open("GET", "pages/undostudent.php?id="+value, true);
    xmlhttp.send();
}
//------------------------------------------------------------------

//FUNCTIONS OF DELETE/ARCHIVE
function deleteStudent(value){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
        }
    };

    xmlhttp.open("GET", "pages/deletestudent.php?id="+value, true);
    xmlhttp.send();
}

function confirm_deletion(value){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
            tablerow_delete(value);
        }
    };

    xmlhttp.open("GET", "pages/confirmdeletion.php?id="+value, true);
    xmlhttp.send();
}

function tablerow_delete(tr){
    let table = document.getElementById('class_record_table');
    let table_row = table.getElementsByClassName('tablerow');

    for(let ctr = 0; ctr<table_row.length; ctr++){
        if(table_row[ctr].getAttribute('id') == tr){
            table.deleteRow(ctr+1);
        }
    }

}
//-----------------------------------------------------------------



//FUNCTION OF VIEWING
function viewStudent(value){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML =
            this.responseText;
        }
    };

    xmlhttp.open("GET", "pages/viewstudent.php?id="+value, true);
    xmlhttp.send();
}
//------------------------------------------------------------------


//FUNCTIONS OF UPDATE
function updateStudent(value){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML =
            this.responseText;
        }
    };

    xmlhttp.open("GET", "pages/updatestudent.php?id="+value, true);
    xmlhttp.send();
}

// function confirm_update(value){
//     var xmlhttp = new XMLHttpRequest();
//     xmlhttp.onreadystatechange = function() {
//         if (this.readyState == 4 && this.status == 200) {
//             document.getElementById("txtHint").innerHTML = this.responseText;
//         }
//     };

//     xmlhttp.open("GET", "pages/confirmupdate.php?id="+value, true);
//     xmlhttp.send();
// }