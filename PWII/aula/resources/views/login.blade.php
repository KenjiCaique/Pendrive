<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="/login-user" method="POST">
        @csrf
        <div>
            <input type="text" name="email" required />            
        </div>

        <div>
            <input type="text" name="password" required />            
        </div>

        <div>
            <input type="submit" value="Login" />
        </div>  
    </form>

    @if ($errors->any())
    <div>
        <strong>{{ $errors->first('error') }}</strong>
    </div>
@endif

    
</body>
</html>