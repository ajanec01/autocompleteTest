<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Autocomplete Test</title>
        <meta name="description" content="This web page is designed to test the behaviur of browsers when using autocomplete attribute on input fields with incorrect control group">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <h1>Autocomplete Test</h1>
        <form action="response.php" method="post"> 
            <label>
                Birthday Month
                <input name="bday" type="tel" autocomplete="bday-month" />
            </label>
            <label>
                Username
                <input name="username" type="email" autocomplete="username" />
            </label>
            <input type="submit" />
        </form>
    </body>
</html>