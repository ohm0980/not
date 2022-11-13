<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>notify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <h1>Line notify</h1>
    <hr>
    <form action="sendinfo.php" method="POST">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">username</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="name" name="user">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">password</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="pas" name="pas">
            <input type="submit" name="sub" value="sub">
        </div>
    </form>
</body>
</html>