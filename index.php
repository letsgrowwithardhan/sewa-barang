<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEAK ZONE ADVENTURE</title>
    <link rel="stylesheet" href="styleadmin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" 
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
    <nav>
        <div class="logo">
            <a href="indexadmin.php"><img src="ukksewa.png"></a>
        </div>
        <ul class="navbar">
        <li><a href="" class="active">Home</a></li>
        <li><a href="layanan.php" class="active">Layanan</a></li>
        <li><a href="flogin.php" class="active">Login</a></li>
        <li><a href="about.php">Tentang</a></li>
        </ul>
    </nav>
    </header>
    <section id="kepala">
        <div class="kepala-content">
            <h1>Selamat <span> Datang!</span></h1>
        </div>
    </section>
     <div id="image-modal" class="modal">
        <span class="close-button">&times;</span>
        <img class="modal-content" id="zoomed-image">
    </div>
     <script src="script.js"></script>
    <?php
    include "footer.php";
    ?>
</body>
</html>