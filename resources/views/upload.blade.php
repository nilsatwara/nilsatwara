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
    .container {
        border: 2px solid red;
    }

    h1 {
        text-align: center;
        color: blue;
    }

    input[type=submit] {
        background-color: blue;
        color: rgb(255, 255, 255);
        border-radius: 10px;
        width: 150px;
        height: 50px;
        font-size: 25px;
        border: 1px solid white;
    }

    input:hover[type=submit] {
        background-color: rgb(255, 0, 0);
    }

</style>

<body><br>
    <br>
    <div class="container">
        <h1>Registration</h1>
        <form method="post" action="{{'/upload'}}" enctype="multipart/form-data">

       @csrf

        <table style="width:100%; background-color:rgb(255, 255, 255); height:50vh; border-radius:30px">
            <tr>
                
                <td><label>Profile pic</label>
                    <input type="file" name="photo" class="form-control">
                </td>
            </tr>

            <tr>
                <td colspan="4" style="text-align: center">
                    <input type="submit" name="submit" class="form-control">
                    
                </td>
            </tr>
        </table>

        </form>
    </div>
</body>

</html>
