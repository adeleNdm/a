<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form id="contactform" action="" method="post">
            <p class="form-element">
                <label>Name:</label>
                <input id="name" type="text" name="name" />
            </p>
            <p class="form-element">
                <label>Email:</label>
                <input id="email" type="text" name="email" />
            </p>
            <p class="form-element">
                <label>Message:</label>
                <textarea id="message" name="message"></textarea>
            </p>
            <p class="form-element">
                <input id="submit" type="button" value="send" />
            </p>
            <div id="success" style="color: red;"></div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $('#submit').click(function () {
                $('#submit').attr('value', 'Please wait...');
                $.post("sendemail.php", $("#contactform").serialize(), function (response) {
                    $('#success').html(response);
                    $('#submit').attr('value', 'SEND');
                });
                return false;
            });
        });
    </script>
</body>

</html>
