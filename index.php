<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="Viewport" content="width=device-width", initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible content" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Список дел</title>
</head>
<body>
    <div class="container">
        <h1>Список дел</h1>
      <form action="/add.php"  method="post">
          <input type="text" name="task" placeholder="нужно сделать.." class="form-control"><br>
          <button type="submit" name="sendTask" class="btn btn-success">Отправить</button>
      </form>

        <?php
        require 'configDB.php';

        echo '<ul>';
        $query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id` DESC');
        while($row = $query->fetch(PDO::FETCH_OBJ)) {
            echo '<li><b>'.$row->task.'</b><a href="/delete.php?id='.$row->id.'"><button>Удалить</button></a></li>';
        }
        echo '</ul>';
        ?>

    </div>
</body>
</html>