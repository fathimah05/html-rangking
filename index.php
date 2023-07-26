<?php

include_once('connect.php');

$sql = "SELECT * FROM scores, students WHERE scores.students_id = students.id;";
$result = $conn->query($sql);
$data =$result->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>RANKING XI RPL</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>
        
        <div class="container mt-3">
            <div class="row">
                <div class="bg-dark text-center text-white">
                <h1 class="display-3">WELCOME TO</h1>
                <p class="lead">XI RPL</p>
            </div>
            
            <div class="col-4">
                <br>
                <h3>Input Data</h3>
                <br>
                <form method="POST" action="">
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input id="name" type="text" name="name" class="form-control">
                    </div>
                    <div class="card-footer">
                    <div class="mb-3">
                        <label for="score">Score</label>
                        <input id="score" type="number" name="score" class="form-control">
                    </div>
                    <button class="btn bg-primary btn-info" type="submit">Submit</button>
                    </div>
                </form>
            </div>

            <div class="col-8">
                <br>
                <h3>Table Rangking</h3>
                <br>
                <table class="table" border="1px">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Score</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php foreach($data as $key => $d):  ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $d['name'] ?></td>
                                <td><?= $d['score'] ?></td>
                            </tr>
                            <?php endforeach ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Score</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </body>

    <footer class="bg-dark text-white text-center p-2 my-4">
      <p>Copyright © happy coding </p>
    </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</html>