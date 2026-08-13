<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Feedback Information</title>
    </head>
    <body>
        <h1>Feedback Information</h1>
        <form method="POST" action="/feedback">
        @csrf
        <button type="submit">Send feedback</button>
       </form>
       <form method="POST" action="/feedback/1">
        @csrf
        @method('DELETE')
        <button type="submit">Delete feedback 1</button>
       </form>
    </body>
    </html>
