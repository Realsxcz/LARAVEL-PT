<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <style>
        body {
    background-color: black;
    background-repeat: no-repeat;
    background-size: cover;
    font-family: 'Lucida Sans';
}
.form {
    margin: 100px ;
    position: right;
    width: 310px;
    padding: 30px 25px;
    background: white;
    border: 2px solid rgb(74, 184, 248);
    border-radius: 5px;

}
.alert1 {
    margin: 2px 2px;
    position: right;
    width: 20px;
    padding: 14px 40px;
    background: white;
    border: 2px solid rgb(255, 2, 2);
    border-radius: 5px;
    color: red;

}
.alert2 {
    margin: 2px 2px;
    position: right;
    width: 20px;
    padding: 14px 40px;
    background: white;
    border: 2px solid rgb(0, 255, 55);
    border-radius: 5px;
    color: green;

}
.entry-field {
    font-size: 15px;
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 25px;
    height: 25px;
    width: calc(100% - 23px);
    border: 1px solid rgb(173, 159, 159);
    border-radius: 5px;
}
.entry-field:focus {
    border-color:#55a1ff;
    outline: none;
}
.button {
    color: #fff;
    background: #55a1ff;
    border-radius: 5px;
    border: 0;
    outline: 0;
    width: 100%;
    height: 50px;
    font-size: 16px;
    text-align: center;
    cursor: pointer;
}
.button1 {
    color: #fff;
    margin-top: 5px;
    background: #009e2f;
    border-radius: 5px;
    border: 0;
    outline: 0;
    width: 100%;
    height: 50px;
    font-size: 16px;
    text-align: center;
    cursor: pointer;
}

header {
    font-weight: normal;
    text-align: center;
    font-family: 'Lucida Sans';
}

    </style>
</head>
<body>
    <form class="form" action="{{route('Login')}}" method="post">
        @if(Session::has('registered'))
            <div class="alert2">
                {{Session::get('Homepage')}}
            </div>
        @endif
        @if(Session::has('fail'))
            <div class="alert1">
                {{Session::get('fail')}}
            </div>
        @endif
        @csrf
        <h1 style="text-align: left;color: #666; margin-top: 0%; font-size: 30px; font-weight: 300;">Login</h1>
        <input type="text" class="entry-field" name="email" placeholder="Email" autofocus="true" required/>
        <input type="password" class="entry-field" name="password" placeholder="Password"  required/>
        <button type="submit" class="button">Login</button>
        <hr>
        <button type=button onClick="location.href='{{ url('/registration') }}'" class="button1">Register</button>
  </form> 

</body>
</html>
