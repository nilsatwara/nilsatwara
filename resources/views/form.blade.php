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
        {{-- <form action="{{ url('/') }}/register" method="post" enctype="multipart/form-data"> --}}
        {!! Form::open([
            'url' => url('register'), 
            'method' => 'post',
            'id' => 'contact',
            'role' => 'form',
            'class' => 'bv-form',
           'enctype' => "multipart/form-data"
            ])
            !!}

      

       
        <table style="width:100%; background-color:rgb(255, 255, 255); height:50vh; border-radius:30px">
            <tr>
                <td><label>Name</label>
                    {!! Form::text('name','',['class' =>"form-control"])!!}
                   
                </td>
                <td><label>Email</label>
                    {!! Form::email('email','',['class' =>"form-control"])!!}
                   
                </td>
                <td><label>Password</label>
                    {!! Form::password('password',['class' =>"form-control"])!!}
                  
            
                <td><label>Confirm Password</label>
                    {!! Form::password('password',['class' =>"form-control"])!!}
                   
                </td>
            </tr>

            <tr>
                <td><label>Date Of Birth</label>
                    {!! Form::date('dob','',['class'=>'form-control']) !!} 
                  
                </td>
                <td><label>Country</label>
                    {!! Form::select('country',['india'=>'india',
                    'africa'=>'africa','france'=>'france'],'france',
                    ['class'=>'form-control']) !!}
                
                </td>
                <td><label>State</label>
                    {!! Form::select('state',['gujarat'=>'gujarat',
                    'u.p'=>'u.p','kerala'=>'kerala'],'kerala',['class'=>'form-control']) !!}
                  
                </td>

                <td><label>Profile pic</label>
                    {!! Form::file('state',['gujarat'=>'gujarat',
                    'u.p'=>'u.p','kerala'=>'kerala'],'kerala',['class'=>'form-control']) !!}
                  
                </td>
            </tr>

            <tr>
                <td colspan="4"><label>Address</label>
                    {!! Form::textarea('address','',['class'=>'form-control']) !!}
                    {{-- <textarea name="address" class="form-control" style="width: 100%"></textarea> --}}
                </td>
            </tr>
            <tr>
                <td colspan="4" style="text-align: center">
                    {!! Form::submit('submit')!!}  
                </td>
            </tr>
        </table>

        {!! Form::close() !!}
    </div>
</body>

</html>
