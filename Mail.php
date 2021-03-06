<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
        input, textarea {
            margin-top: 10px;
        }
    </style>
</head>
<body style="background-color: #909090">
    <h2 style="text-align: center; margin-top: 100px; margin-bottom: -60px;">Dërgo Email</h2>
<div class="container" style="margin-top:100px;">
    <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3" align="center">
            <input id="name" placeholder="Emri" class="form-control">
            <input id="email" placeholder="E-mail Adresa" class="form-control">
            <input id="subject" placeholder="Subjekti" class="form-control">
            <textarea class="form-control" id="body" placeholder="Mesazhi"></textarea>
            <input type="button" onclick="sendEmail()" value="Dërgo" class="btn btn-primary" style="background-color: #ab0e18; border-color: #ab0e18;">
        </div>
    </div>
</div>

<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script type="text/javascript">
    function sendEmail() {
        var name = $("#name");
        var email = $("#email");
        var subject = $("#subject");
        var body = $("#body");

        if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
            $.ajax({
                url: 'Posta.php',
                method: 'POST',
                dataType: 'json',
                data: {
                    name: name.val(),
                    email: email.val(),
                    subject: subject.val(),
                    body: body.val()
                }, success: function (response) {
                    if (response.status == "success")
                        alert('Posta Elektronike është dërguar!');
                    else {
                        alert('Ju lutem provoni përsëri!');
                        console.log(response);
                    }
                }
            });
        }
    }

    function isNotEmpty(caller) {
        if (caller.val() == "") {
            caller.css('border', '1px solid red');
            return false;
        } else
            caller.css('border', '');

        return true;
    }
</script>

</body>
</html>