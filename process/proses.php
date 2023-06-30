<?php include 'views/header.php';?>
<body>
    <main class='loading-container'>
        <p class='spinner-text'>
            Mohon Tunggu...
        </p>
        <div class='spinner'></div>
    </main>
</body>
</html>
<?php
switch ($params['aksi']){
    case 'insert':
        switch ($params['dokumen']){
            case 'piagam':
                insertpiagam();
                break;
            default:
                header('Location: /');
        }
        break;
    case 'edit':
        break;
    default:
        header('Location: /');
}


function insertpiagam(){
    global $conf;
    $nomor = $_POST['nomor'];
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $deskripsi = $_POST['deskripsi'];
    $url = $conf->get_gsheet() .'?action=insert&jenis=piagam'.'&hash='. gethash($nama.$nomor).'&nomor='.urlencode($nomor).'&tglkeluar='.$tanggal.'&untuk='.urlencode($nama).'&deskripsi='.urlencode($deskripsi);
    $obj = getCurl($url);
    ?>
    <html>
        <body>
            <form name='fr' action='/piagam' method='POST'>
                <input type="text" name="alert" value="<?php echo $obj->result; ?>" hidden>
            </form>
            <script type='text/javascript'>
                document.fr.submit();
            </script>
        </body>
    </html>
    <?php
}