<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../bootstrap-5/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="../img\tasks.png" type="image/x-icon">
    <title>Tasks App - Home</title>
</head>
<body style="background-image: linear-gradient(#2d80e2 ,white); background-repeat: no-repeat;width: 100vw;height: 100vh;" >

    <div class="container pt-5">
        <div class="input-group">
            <input type="text" id="text-task" class="form-control" placeholder="Escreva o nome da tarefa...">
            <button id="btn-add" class="btn btn-success " type="submit"><i class="bi bi-plus-lg" style="font-size: 1.5rem;"></i></button>
        </div>
    </div>

    <div id="tasks" class="container  h-100 mt-5">

        
    </div>
    
    
    <script src="../bootstrap-5/js/bootstrap.js"></script>
   <script src="../js/script.js"></script>
</body>
</html>