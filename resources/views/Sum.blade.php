<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <form method="get" action="/get-result">
        @csrf 
        <div class="form-group">
            <input type="number" class="form-control" placehodel="number a" name="number1">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" placehodel="number b" name="number2">
        </div>
        <button type="submit" class="btn-btn-primary">Tinh</button>
        <div class="form-group">
            <input type="number" class="form-control"disabled="" value="<?php if(isset($sumab)) echo $sumab ?>">
        </div>
    </form>
</body>
</html>