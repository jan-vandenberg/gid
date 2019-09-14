const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');

function switchTheme(e) {
    if (e.target.checked) {
       var stylesheet = document.getElementById("stylesheet");
       stylesheet.setAttribute('href', "css/bootstrap.darkly.min.css");
       localStorage.setItem('theme', 'dark');

    }
    else {
        var stylesheet = document.getElementById('stylesheet');
        stylesheet.setAttribute('href', 'css/bootstrap.min.css');
        localStorage.setItem('theme', 'light');
    }    
}

toggleSwitch.addEventListener('change', switchTheme, false);

const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : null;

if (currentTheme === 'dark') {
        toggleSwitch.checked = true;
        stylesheet.setAttribute('href', "css/bootstrap.darkly.min.css");
}

if (currentTheme === 'light') {
        toggleSwitch.checked = false;
        stylesheet.setAttribute('href', "css/bootstrap.min.css");
}


function addRecord() {
    var todo = $("#todo").val();
    // Add record
    $.post("ajax/addRecord.php", {
        todo: todo
        }, 
        function (data, status) {
        // read records again
            $("#todo").val("");
            readRecords();
            readDones();
        }
    );
}

// Read tasks
function readRecords() {
    $.get("ajax/readRecords.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}

// Read dones
function readDones() {
    $.get("ajax/readDones.php", {}, function (data, status) {
        $(".done_content").html(data);
    });
}

// Read dones
function readMailcontact() {
    $.get("ajax/readMailcontact.php", { }, function (data, status) {
        $("#mail").val(data);
    });
        $("#myModal").modal("show");
}

function saveMailcontact() {
    var mail = $("#mail").val();
    $.post("ajax/saveMailcontact.php", {
        mail: mail
        } 
    );

}

function doneTask(id) {
    var conf = confirm("Done? Awesome!");
    if (conf == true) {
        $.post("ajax/doneTask.php", {
                id: id
            },
            function (data, status) {
                readRecords();
                readDones();
            }
        );
    }
}

function deleteTask(id) {
    var conf = confirm("Do you really want to delete this task?");
    if (conf == true) {
        $.post("ajax/deleteTask.php", {
                id: id
            },
            function (data, status) {
                readRecords();
            }
        );
    }
}

function deleteDone(id) {
    var conf = confirm("Do you really want to delete this task?");
    if (conf == true) {
        $.post("ajax/deleteDone.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readDones();
            }
        );
    }
}

$(document).ready(function () {
    // Read tasks and dones on page load
    readRecords();
    readDones();
});
