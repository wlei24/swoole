<!DOCTYPE html>
<html>
<head>
    <title>online chat demo</title>
    <meta charset="UTF-8">
</head>

<body>
<script>
//need judge support websocket
var ws = new WebSocket("ws://127.0.0.1:9502");

ws.onopen = function ()
{
    ws.send("send data");
}

ws.onmessage = function (evt)
{
    console.log(evt.data);
}

ws.onclose = function ()
{
    console.log('closed');
}
</script>
</body>
</html>
