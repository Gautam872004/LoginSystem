<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Regestration</title>

    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>

</head>
<body>
    
    <center>
        <h1>
            Registration
        </h1>

        @if ($message = Session::get('message'))
            <h2>{{$message}}</h2>
        @endif
    </center>

    <center>
        <form action="{{route('logisystem.store')}}" method="post" id="form">
            @csrf
            <table>
                <tr>
                    <th class="label">
                        Name:
                    </th>
                    <td>
                        <input type="text" name="name" placeholder="Name" class="txt"/>
                    </td>
                </tr>
                <tr>
                    <th class="label">
                        E-mail:
                    </th>
                    <td>
                        <input type="text" name="email" placeholder="text@gmail.com" class="txt"/>
                    </td>
                </tr>
                <tr>
                    <th class="label">
                        Password:
                    </th>
                    <td>
                        <input type="password" name="password" placeholder="Password" class="txt"/>
                    </td>
                </tr>
                <tr>                  
                    <th class="label">
                        Phone-Number:
                    </th>
                    <td>
                        <input type="number" name="phone_no" placeholder="Phone-No" class="txt"/>
                    </td>                        
                </tr>
                <tr>
                    <th colspan="2">
                        <button type="submit">Registration</button>
                    </th>
                </tr>
            </table>
        </form>
    </center>

</body>
</html>