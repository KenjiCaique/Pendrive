<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="/login" method="post">
        @csrf
        <div>
            <input type="text" name="email" value="maria@gmail.com" />            
        </div>

        <div>
            <input type="text" name="password" value="123456" />            
        </div>

        <div>
            <input type="submit" value="Login" />
        </div>  
    </form>
    
</body>
</html>