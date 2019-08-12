<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Get it done!</title>
    <!-- Bootstrap CSS File  -->
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css"/>
</head>
<body>

<!-- Content Section -->
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-12">
            <h3>Get it done!</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <form class="input-group">
            <input class="form-control" autofocus="autofocus" type="text" id="todo" placeholder="Add new task and press enter!">
            <input class="btn btn-outline-primary" type="submit" onclick="addRecord()" value="Add">
        </form>
        </div>
    </div>
<br>
    <div class="row">
        <div class="col-md-12">
            <h3>Open</h3>
            <div class="records_content"></div>
        </div>
    </div>
    <div class="row">       
        <div class="col-md-12">
            <h3>Done</h3>
            <div class="done_content"></div>
        </div>
    </div>
</div>
<!-- /Content Section -->

<!-- Bootstrap Modals -->
<!-- // Modal -->

<!-- Jquery JS file -->
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>

<!-- Bootstrap JS file -->
<script type="text/javascript" src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>

<!-- Custom JS file -->
<script type="text/javascript" src="js/script.js"></script>

</body>
</html>
