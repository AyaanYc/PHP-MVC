<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $username = $_POST["username"];
        $msg = $_POST["msg"];
    ?>
    <form method="post" action="chat_client.php">
        <?=$username?>
        <input type="hidden" name="username" value="<?=$username?>">
        <input type="text" name="msg">
        <input type="submit" value="send">
    </form>
    <?php
      
        $addr = gethostbyname("127.0.0.1");
        $service_port = 5095;
        $buf = "";

        $sock = socket_create(AF_INET, SOCK_STREAM, 0) or die ("socket_create() failed: reason : " . socket_strerror($sock) . "<br>");
        $result = socket_connect($sock, $addr, $service_port) or die ("socket_connect() failed: reason : " . socket_strerror($result) . "<br>");

        $data = $username . " : " . $msg;
        socket_write($sock, $data, strlen($data));

        do {
            $buf = socket_read($sock, 2048);
        }while($buf);

        echo $buf;
        socket_close($sock);       
    ?>
</body>
</html>
    