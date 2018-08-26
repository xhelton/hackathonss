<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CHAM - Mire o celular na mancha da sua pele</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" style="padding-left: 42%;color:#fff" href="#">CHAM</a>
        </div>
    </div>
</nav>
<br><br><br><br><br><br><br><br>
<div class="container">
        <div class="row">
        <div class="col-md-3">
            &nbsp;
        </div>
        <div class="col-md-6 text-center">
            <h3>Mire o celular na<br> mancha da sua pele</h3>
            <form action="/documentos/hack/resultado/" method="post" enctype="multipart/form-data">
                <input class="form-control hidden" type="file" name="arquivo">
                <br>
                <button class="btn btn-primary btn-lg" type="button">Mirar!</button>
                <br><br><br>
                <div class="alert alert-info" role="alert" style="font-size: 30px">
                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                    <span class="sr-only">Probabilidade:</span>
                    Em nossos testes, a probabilidade de acerto é de 77.78% para 60 imagens de manchas.
                </div>
            </form>
        </div>
        <div class="col-md-3">
            &nbsp;
        </div>
    </div>
</div>
<script>C:\xampp\htdocs\hackathonss
$("button").click(function(){
    $("input").click()
});

$("input").change(function(){
    if ($(this).val() == "") {
        return;
    }

    $("form").submit();
});
</script>
</body>
</html>