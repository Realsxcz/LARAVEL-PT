<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
           Home
        </title>
        <style>
            *{
    margin: 0;
    padding: 0;
    box-sizing: 0;
}
body{
    font-family: 'Lucida Sans';
    background-color: white;
}
.home-content{
    overflow: hidden;
}


.page-content{
    padding-top: 30px;
    overflow: hidden;
}
.adjustments{
    padding-bottom: 3%;
}
.adjust{
    float: right;
    color: white;
    font-size: 2rem;
    margin-top: 0.6%;
    margin-right: 3%;
}
.mainFrame{
    height: 1000px;
    width: auto;
    display: flex;
    justify-content: center;
}
.frame {
    margin: 100px ;
    width: auto;
    padding: 30px 25px;
    background: white;
    border: 2px solid rgb(74, 184, 248);
    border-radius: 5px;
}
.fspeck{
    color: rgb(79, 0, 224);
    text-align: left;
    font-size: 27px;
}
.exit {
    color: #fff;
    background: #ff0000;
    border-radius: 5px;
    width: 10%;
    height: 25px;
    font-size: auto;
    text-align: center;
    cursor: pointer;
    margin-bottom: 10px;
}
html{
    scroll-behavior: smooth;
}

.alert1 {
    margin: 2px 2px;
    position: right;
    width: 250px;
    border: 2px solid rgb(255, 2, 2);
    border-radius: 5px;
    color: red;

}
.topnav {

    overflow: hidden;
    position: sticky;
    position: fixed;
    width: 100%;
    display: flex;
    background-color: rgba(0,0,0,0.5);
    justify-content: left;
    
} 
.topnav ul{
    display: flex;
    list-style: none;
    margin: 0px 5px;
    
}

.topnav ul a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
    transition: all .5sec ease;
}
.topnav ul a:hover {
    background-color: #ddd;
    color: black;
    box-shadow: 0 0 10px white;
}

.topnav a.active {
    background-color: rgb(1, 73, 73);
    color: white;
}
.topnav .icon {
    display: none;
}

#home{
    display: flex;
    flex-direction: column;
    background-color: white;
    height: 700px;
    justify-content: center;
    align-items: center;
}
#home::before{
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    background-color: white center cover;
    height: 900px;
    width: 100%;
    z-index: -1;
    opacity: .8;
}

table {
	font-family: arial,sans-serif;
	font-size:14px;
	color:#333333;
	border: solid 1px #666;
	border-collapse: collapse;
}
table th {
     border: solid 1px #025B85;
	padding: 10px;
	background-color: #025B85;
    color:#fff;
}
table td {
	padding: 10px;
    border: solid 1px #666;
	background-color: #ffffff;
}
#table1{
    height: 1000px;
    background-color: grey;
    margin: auto;
    font-family: 'Lucida Sans';
    line-height: 1.5;
}



        </style>
    </head>

    <body>
        <div class="topnav">
            <ul>
                <a class="active" href="#home">Home</a>
                <a href="#table1">Table</a>
                <div class="adjust">
                    <ul>
                        <li>DeptBase</li>
                    </ul>
                </div>
                <div class="onRight">
                    <a onClick="location.href='{{ url('/login') }}'">LogOut</a>
                </div>

            </ul>
            <ul>

            </ul>
        </div>

        <div class="page-content">
            <section id="home">
                <figure>
                    <ul>
                        <p><b style="text-align: center;color: #666; margin-top: 0%; font-size: 40px; font-weight: 300;">Wecome to</b><b style="text-align: center;color: blue; margin-top: 0%; font-size: 70px; font-weight: 300;">DeptBase!</b></p>   
                        <figcaption>I am Asareel a beginner web developer in</figcaption>
                    </ul>
                </figure>
                <div class="home-content">
                    <p style="color: orangered; font-size: 3rem;text-align: center; top:370px;right:420px">/>HTML</p>
                    <p><b style="color: rgb(15, 127, 255); text-align: center; font-size: 3rem;">#css</b>
                    <b style="color: rgb(79, 0, 224); text-align: center; font-size: 3rem;">php?></b></p>
                </div>
            </section>
        </div>
        <section id="table1">
        <div class="mainFrame">
            <div class="frame">
                <header class="fspeck">
                    Table
                    <button style="cursor: pointer;font-size:30px;float:right;">
                        <a style="text-decoration:none;" href="{{url('/add')}}">+</a>
                    </button>
                </header>

                <table border='1' cellpadding='2' cellspacing='2'>
                    <thead">
                        <th>id</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Birthdate</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Acttion</th>

                    </thead>
                    @foreach ($row as $trow)
                    
                    <tbody>
       
                        <td>{{$trow->id}}</td>
                        <td>{{$trow->name}}</td>
                        <td>{{$trow->gender}}</td>
                        <td>{{$trow->datebirth}}</td>
                        <td>{{$trow->address}}</td>
                        <td>{{$trow->email}}</td>
                        <td>
                            <a style="text-decoration:none;margin-right:10px;" href="/edit/{{$trow->id}}">edit</a>
                            <a style="text-decoration:none;" href="/delete/{{$trow->id}}">delete</a>
                        </td>
                    </tbody>
                    @endforeach
                </table>
                @if(Session::has('noteDEL'))
                    <div class="alert1">
                        {{Session::get('noteDEL')}}
                    </div>
                @endif
            </div>
        </div>
        </section>
    </body>
</html>
