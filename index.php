<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Get it done!</title>
    <!-- Bootstrap CSS File  -->
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png" />
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link id="stylesheet" rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link id="stylesheet-toggle" rel="stylesheet" type="text/css" href="css/toggle.css"/>
</head>
<body>

<!-- Content Section -->
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-9">
            <h3>Get it done!</h3>
        </div>
        <div class="col theme-switch-wrapper" align="right">
            <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox" />
                <div class="slider round"></div>
          </label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <form class="input-group" action="javascript:addRecord()">
            <input class="form-control" autofocus="autofocus" type="text" id="todo" placeholder="Add a new task and press enter!">
        </form>
        </div>
    </div>
<br>
    <div class="row">
        <div class="col">
            <h4>Open</h4>
        </div>
        <div class="col" align="right">
            <a href="#" data-toggle="modal" data-target="#myModal" onclick="readMailcontact()">✉️</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="records_content"></div>
        </div>
    </div>
    <div class="row">       
        <div class="col-md-12">
            <h4>Done</h4>
            <div class="done_content"></div>
        </div>
    </div>
</div>
<!-- Bootstrap Modals -->
<!-- // Modal -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Mail new tasks to</h4>
        </div>
      <div class="modal-body">
                <div class="form-group">
                    <input class="form-control" type="text" id="mail" placeholder="Email addresses seperated by comma">
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" onclick="saveMailcontact()" class="btn btn-success" data-dismiss="modal">Save</button>
      </div>
    </div>
  </div>
</div>


<!-- Jquery JS file -->
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>

<!-- Bootstrap JS file -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- Custom JS file -->
<script type="text/javascript" src="js/script.js"></script>

</body>
</html>
