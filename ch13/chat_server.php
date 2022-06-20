<?php
    $addr = gethostbyname("127.0.0.1");
    $port = 5097;
    $maxdevice = 5;
    set_time_limit(0); //시간 한정 무제한
    $sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP) or die ("socket_create() failed: reason : " . socket_strerror($sock) . "<br>");
    if (!socket_set_option($sock, SOL_SOCKET, SO_REUSEADDR, 1)) { 
        echo socket_strerror(socket_last_error($sock)); 
        exit; 
    }
    if (socket_bind($sock, $addr, $port) === false) {
        echo "socket_bind() failed: reason: " . socket_strerror(socket_last_error($sock)) . "\n";
    }
    if (socket_listen($sock, $maxdevice) === false) {
        echo "socket_listen() failed: reason: " . socket_strerror(socket_last_error($sock)) . "\n";
    }
    $msgsock = socket_accept($sock) or die ("accept failed");
    print "The Server is ready <br>";
    $resp = "";
    do {
        $buf = socket_read($msgsock, 2048);
        $resp .= $buf . "<br>";
        socket_write($msgsock, $resp, strlen($resp));
    }while(true);

    socket_close($msgsock);
    socket_close($sock);