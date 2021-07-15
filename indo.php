<html>
    <head>
        <title>Overview</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="city.css">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>

<body>
    <h1 class="text-center mt-5"><b>Data covid 19 Indonesia</b></h1>
    <p class="text-center">Berikut adalah Data Covid 19 di Indonesia berdasarkan web https://api.kawalcorona.com/indonesia </p>
    <div class="container">
        <table class="table table-bordered">
            <?php
                $data = file_get_contents('https://api.kawalcorona.com/indonesia');
                $provinsi = json_decode($data, true);
            ?>
            <thead>
                <th>No.</th>
                <th>Jumlah positif</th>
                <th>Jumlah sembuh</th>
                <th>Jumlah meninggal</th>
            </thead>
            <body>
                <?php
                    $a=1;
                    foreach($provinsi as $prv) :
                ?>

                <tr>
                    <td><?= $a++; ?></td>
                    <td><?= $prv['positif']; ?></td>
                    <td><?= $prv['sembuh']; ?></td>
                    <td><?= $prv['meninggal']; ?></td>
                </tr>
                <?php
                    endforeach;
                ?>
            </body>
        </table>
    </div>
</body>
</html>