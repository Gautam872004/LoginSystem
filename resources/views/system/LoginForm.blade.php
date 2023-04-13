<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login-Form</title>

    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>

</head>
<body>
    
    <center>
        <h1>
            Login-Form
        </h1>

        @if ($message = Session::get('message'))
                <h2>{{$message}}</h2>       
         @endif
    </center>

    <center>
        <form action="/check-login" method="post" id="form">
            @csrf
            <table>
                <tr>
                    <th class="label">
                        E-mail:
                    </th>
                    <td>
                        <input type="text" name="email" placeholder="text@gmail.com" class="txt"/>
                    </td>
                </tr>
                <tr>
                    <th  class="label">
                        Password:
                    </th>
                    <td>
                        <input type="password" name="password" placeholder="Password" class="txt"/>
                    </td>
                </tr>
                <tr>
                    <th colspan="2">
                        <button type="submit">Login</button>
                    </th>
                </tr>
            </table>
            <h2>
                Or
            </h2>
            <h3>
                <a href="/register">Create Account....</a>
            </h3>
        </form>
    </center>

</body>
</html>