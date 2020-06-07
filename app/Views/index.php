<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Application</title>
    <link rel="stylesheet" type="text/css" href="/app/Public/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
<div class="container">
    <div class="row justify-content-center" style="margin-top:25%">
        <form method="POST" action="/">
            <div class="form-group">
                <label for="email">E-pasts</label>
                <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <label for="amount">Summa</label>
                <input type="number"
                       name="amount"
                       class="form-control"
                       id="amount"
                       aria-describedby="emailHelp"
                >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</body>