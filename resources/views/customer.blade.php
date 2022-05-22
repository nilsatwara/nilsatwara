<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<style>
    table {
        border: 2px solid red;
    }

    /* input[type=text],
    [type=password],
    [type=email] {
        width: 90%;
        height: 25px;

    } */

    tr td {
        text-align: center;
    }

    h1 {
        text-align: center;
        color: blue;
    }

    input[type=submit] {
        background-color: blue;
        color: rgb(255, 255, 255);
        border-radius: 10px;
        width: 170px;
        height: 50px;
        font-size: 25px;
        border: 1px solid white;
    }

    input:hover[type=submit] {
        background-color: rgb(255, 0, 0);
    }

</style>

<body>
    <ul>

        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/customer') }}">Register</a></li>
        <li><a href="{{ url('/customer/view') }}">Customer</a></li>
    </ul>
    <br>
    <br>
    <div class="container">

        <h1>{{ $title }}</h1>
        {{-- <form action="{{ url('/') }}/customer" method="post"> static method --}}
        <form action="{{ $url }}" method="post">
            @csrf
            {{-- @php
            $demo = 1;    
            @endphp --}}
            <table
                style="width:80%; margin: auto; background-color:rgb(255, 255, 255); height:50vh; border-radius:30px">
                <tr>
                    <td><label>Name</label>
                        <input class="form-control" type="text" name="name">
 
                        {{-- <span style="color:red"> --}}

                        </span>
                    </td>
                    <td><label>Email</label>
                        <input class="form-control" type="email" name="email" value="">
                        {{-- <span  style="color:red"> --}}

                        </span>
                    </td>
                    <td><label>Password</label>
                        <input class="form-control" type="password" name="password">
                        {{-- <span style="color:red"> --}}

                        </span>
                    </td>
                    <td><label>Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation">
                        {{-- <span class="text-danger"><br>

                        </span> --}}
                    </td>
                </tr>

                <tr>
                    <td><label>Date Of Birth</label>
                        <input type="date" class="form-control" name="dob" value="">
                    </td>
                    <td><label>Country</label>
                        <input type="text" class="form-control" name="country" value="">
                    </td>
                    <td><label>State</label>
                        <input type="text" class="form-control" name="state" value="">
                    </td>
                    {{-- <td><label>Gender</label>
                        <input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="Female">Female</td> --}}

                </tr>

                <tr>
                    <td colspan="4"><label for="">Address</label>
                        <textarea name="address" class="form-control"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align: center">
                        <input type="submit" name="submit">
                    </td>
                </tr>
            </table>
        </form>
        {{-- <pre>
        @php
            print_r($errors->all());
        @endphp
      </pre> --}}
        {{-- <div><label for="">Name</label>
                <input type="text" class="form-control" name="name" value="{{old('name')}}">
                <span class="text-danger">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div><label for="">email</label>
                <input type="text" class="form-control" name="email" value="{{old('email')}}">
                <span class="text-danger">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div><label for="">password</label>
                <input type="password" class="form-control" name="password">
                <span class="text-danger">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div><label for="">Confirm password</label>
                <input type="password" class="form-control" name="password_confirmation">
                <span class="text-danger">
                    @error('password_confirmation')
                        {{$message}}
                    @enderror
                </span>
            </div> --}}
        {{-- <br><br>
            <div class="text-center"><input type="submit" class="btn btn-primary form-control" name="submit">
            </div> 
        </form>
    </div> --}}
</body>

</html>
