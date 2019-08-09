// Add Record
function addRecord() {
    // get values
    var todo = $("#todo").val();

    // Add record
    $.post("ajax/addRecord.php", {
        todo: todo
    }, function (data, status) {
        // read records again
        readRecords();
        // clear fields from the popup
        $("#todo").val("");
    });
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
    // READ tasks and done on page load
    readRecords();
    readDones();
});
