<!DOCTYPE>
<html lang="eng">
    <head> 
        <meta charset="UTF8-">
        <title> HTTP Method Lab </title>
</head>
<body>
    <h1> HTTP Method Lab </h1>
    <form method="POST" action="/task">
        @csrf 
        <button type="submit">Send POST</button>
    </form>
    <form method="POST" action="/tasks/1">
        @csrf
        @method ('PUT')
        <button type="submit">Send PUT</button>
    </form>
    <form method="POST" action="/tasks/1">
        @csrf
        @method ('PATCH')
        <button type="submit">Send PATCH</button>
    </form>
    <form method="POST" action="/tasks/1">
        @csrf
        @method ('DELETE')
        <button type="submit">Send DELETE</button>
    </form>
</body>
</html>