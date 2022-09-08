<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                    <title>Daftar Inventory</title>
                        <link rel="stylesheet" href="/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container text-center mt-4">
            <h1>Daftar Barang</h1>
            <ol class="list-group my-4">
                <?php
                    foreach ($barang as $nama) {
                    echo "<li class=\"list-group-item\"> $nama </li>";
                    }
               ?>
            </ol>

            <div>
               <img class="rounded-circle img-thumbnail m-2" src="/img/gambar1.jpg">
               <img class="rounded-circle img-thumbnail m-2" src="/img/gambar2.jpg">
               <img class="rounded-circle img-thumbnail m-2" src="/img/gambar3.jpg">
               <img class="rounded-circle img-thumbnail m-2" src="/img/gambar4.jpg">
               <img class="rounded-circle img-thumbnail m-2" src="/img/gambar5.jpg">
            </div>

            <div>
                Copyright © <?php echo date("Y"); ?> Dunia Inventory
            </div>
        </div>
        <script src="/js/bootstrap.bundle.min.js"></script>
    </body>
</html>