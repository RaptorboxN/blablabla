<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h3>Inloggen</h3>
            <form id="login" class="contact">
                <div class="input">
                    <span class="glyphicon glyphicon-user"></span>
                    <input type="text" name="userName" placeholder="gebruikersnaam">
                </div>
                <div class="input">
                    <span class="glyphicon glyphicon-lock"></span>
                    <input type="text" name="password" placeholder="wachtwoord">
                </div>
                <button type="button" class="btn btn-primary" id="loginKnop">inloggen</button>
            </form>
        </div>
    </div>
</div>
<style>
    input[type="text"]{
        width: 100%;
        padding: 10px;
        padding-left: 50px;
        border: none;
        border-bottom: 1px solid rgba(0, 0, 0, .2);
    }

    .input span {
        position: absolute;
        top: 15px;
        left: 15px;
        color: rgba(0, 0, 0, .34);
    }

    .input {
        position: relative;
        margin-bottom: 15px;
    }
</style>