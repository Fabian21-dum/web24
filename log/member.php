<?php
session_start();
if($_SESSION['login'] != true){
    header('Location: ./login.php');
    exit();
}
$say = "Hello " . $_SESSION['username_login'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dash</title>
</head>
<body>
    <h1><?= $say ?></h1>
    <h2>Upload File</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="">File: 
            <input type="file" name="upload_file" id="">
        </label>
        <input type="submit" value="Upload">
    </form>
    <table>
        <thead>
            <tr>
                <th>x</th>
                <th>Nama File</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $file = scandir("file");
                foreach($file as $key => $file):
                    if($file == "." || $file == "..") continue;

            ?>
            <tr>
                <td><?= $key + 1 - 2 ?> </td>
                <td> <?= $file ?> </td>
                <td>
                    <a href="file/<?= $file ?>" download> Download</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <script type="text/javascript">
        function Alert() {
        var answer = confirm ("Apakah yakin Logout?")
        if (answer)
            window.location="./logout.php";
        }
    </script>

    <a href="javascript:Alert();">Logout</a>

    
</body>
</html>