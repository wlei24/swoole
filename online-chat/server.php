<?php

$serv = new Swoole\Websocket\Server("127.0.0.1", 9502);

$serv->on('Open', function($server, $req) {
        echo "connection open: ".$req->fd;
});

$serv->on('Message', function($server, $frame) {
        echo "message: ".$frame->data;
            $server->push($frame->fd, json_encode(array("hello", "world")));
});

$serv->on('Close', function($server, $fd) {
        echo "connection close: ".$fd;
});

$serv->start();
