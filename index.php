<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2 class="text-white text-center mb-4">Welcome !</h2>
        <div class="card col-lg-5 col-md-6 col-12 mx-auto px-4 py-5">
            <p class="text-center"><small>Sign In With</small></p>
            <form action="./server.php" method="post" id="login_form" >
                <div class="form-group d-flex px-3 py-1 m-0">
                    <i class="fas fa-user my-auto"></i>
                    <input type="text"  autocomplete="off" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Username">
                </div>
                <p><small id="user_error_msg" class="text-danger"></small></p>
                <div class="form-group d-flex px-3 py-1 m-0">
                    <i class="fas fa-unlock-alt my-auto"></i>
                    <input type="password" autocomplete="off" name="password" class="form-control" id="password" placeholder="Password">
                </div>
                <p><small id="password_error_msg" class="text-danger"></small></p>
                <div class="text-center pt-4">
                    <button type="submit" id="submit_btn" class="btn btn-primary col-4">Submit</button>
                </div>
              </form>
        </div>
    </div>
    <!-- <script>
        $("#submit_btn").click(function(){
            username = $("#username").val();
            password = $("#password").val();
            $("#user_error_msg").html("");
            $("#password_error_msg").html("");
            if(username == ""){
                $("#user_error_msg").html("This is required");
                $("#username").focus();
            } else if(password == ""){
                $("#password_error_msg").html("This is required");
                $("#password").focus();
            } else {
                var form = $('#login_form');
                $.ajax({
                    type: form.attr('method'),
                    url: form.attr('action'),
                    data: form.serialize(),
                    dataType: 'script'
                });
            }
        });
    </script> -->
</body>
</html>