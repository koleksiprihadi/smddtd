<?php sessioncek();?>
<?php include 'views/header.php';?>
<body>
    <!-- Code Html anda disini -->
    <?php include 'app/link-javascripts.php';?>
</body>
</html>
<?php
session_destroy();
header('Location: /login');