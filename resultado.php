<?php
$data = [
    'task_id' => '1400af99-9788-4721-81f6-46f0100d092f',
    'records' => [
        [ '_url' => 'https://bit.ly/2IymQJv' ],
        [ '_base64' => base64_encode(file_get_contents($_FILES['arquivo']['tmp_name'])) ]
    ]
];

$curl_handle = curl_init("https://api.vize.ai/v2/classify");
curl_setopt($curl_handle, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl_handle, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl_handle, CURLOPT_FAILONERROR, true);
curl_setopt($curl_handle, CURLOPT_HTTPHEADER, array("Content-Type: application/json", "Authorization: Token a29d61964e97855e37592b45fd20e5233f9e3437", "cache-control: no-cache"));

$response = curl_exec($curl_handle);
$error_msg = curl_error($curl_handle);

$best_label = new \stdClass();
$best_label->name = '?';
$best_label->prob = 0;

if ($error_msg) {
    print_r($error_msg);
} else {
    $response = json_decode($response);

    foreach ($response->records as $v) {
        $best_label->id = $v->best_label->id;
        $best_label->name = $v->best_label->name;
        $best_label->prob = $v->best_label->prob;
    }
}

$prob = $v->best_label->prob;
$prob = $prob * 100;
$prob = $prob * 0.7;//hack precisao das imagens
$prob = floor($prob);

$cor = 'green';

if ($best_label->id == '7bde4666-8294-43da-aa47-75f9641ceb0a') {
    $name = 'de indicação para cuidados médicos.';
    $cor = 'red';
} elseif ($best_label->id == '6f4ef655-6542-4b59-8e84-506d08babc7b') {
    $name = 'de indicação para cuidados médicos.';
    $cor = 'red';
} elseif ($best_label->id == 'bf41aaf8-6ccc-4cfb-b49c-abc41969bd2c') {
    $name = 'de chances de ser apenas uma manchinha.';
} else {
    $name = $best_label->id;
}

curl_close ($curl_handle);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CHAM RAMMMMM!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" style="padding-left: 30%;color:#fff" href="#">CHAM RAMMMMM!</a>
        </div>
    </div>
</nav>
<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 style="font-size: 140px; color: <?php echo $cor; ?>;"><?php echo $prob; ?>%</h1>
            <h2><?php echo $name; ?></h2>
            <br>
            <div class="alert alert-danger" role="alert" style="font-size: 30px">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Prevenção:</span>
                O programa de prevenção da SulAmérica aumenta a sua qualidade de vida e sobra mais tempo para um chopp com os amigos. ;)<br><br>
                <a href="#">Quero participar!</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>