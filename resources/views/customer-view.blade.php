<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
    <div class="container"><br><br>
<div><form action="" method="GET" class="col-9">
    
    <input type="search" name="search" class="form-control" placeholder="Search by name or id" id="" value="{{$search}}"><br>
    <button class="btn btn-success" name="">Search</button>
    {{-- <input type="submit" class=" btn btn-success" name="submit" value="Search"> --}}
</form><br>
        <button class="btn btn-primary"><a href="{{url('/customer');}}" style="text-decoration: none" class="text-white">add</a></button>
       <br><br>
       <button class="btn btn-danger"><a href="{{url('/customer/trash');}}" style="text-decoration: none" class="text-white">Go to trash</a></button>
     
    </div>
       {{-- <a href="" class="text-success">{{session()->get("name")}}
    @if (session()->has ('name'))
    {{session()->has('name')}}
    {{session()->get('name')}}
    @else
       Guest
           
    @endif --}}
    
    </a>
           {{session()->get('name')}}</h1><br>
        <table class="table table-bordered">
            
            <thead>
                <tr>
                    <th>Sr.No</th>
                    <th>name</th>
                    <th>email</th>
                    <th>address</th>
                    <th>state</th>
                    <th>gender</th>
                    <th>country</th>
                    <th>dob</th>
                    <th>status</th>
                    <th class="text-center" colspan="4">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer_list)
                 
                <tr>
                    <td>{{$customer_list->customer_id}}</td>
                    <td>{{$customer_list->name}}</td>
                    <td>{{$customer_list->email}}</td>
                    
                    <td>{{$customer_list->address}}</td>
                    <td>{{$customer_list->state}}</td>
                    <td>
                        @if ($customer_list->gender=="M")
                        Male
                           @elseif($customer_list->gender=="F")
                           Female
                        @else
                           Others 
                        @endif
                         </td>
                    <td>{{$customer_list->country}}</td>
                    {{-- <td>{{get_format_date($customer_list->dob,"d-M-y")}}</td> ////from helper file --}}
                    <td>{{$customer_list->dob}}</td>
                    <td>@if ($customer_list->status)
                        <button class="btn-success">Active</button>
                            
                        @else
                        <button class="btn-warning">Inactive</button>
                        @endif
                
                </td>
                {{-- <td><button class="btn btn-primary"><a href="" style="text-decoration: none" class="text-white">Create</a></button></td>

                <td><button class="btn btn-secondary"><a style="text-decoration: none" class="text-white" href="">Read</a></button></td> --}}

                <td><button class="btn btn-info"><a href="{{route('customer.edit',['id'=> $customer_list->customer_id])}}" style="text-decoration: none" class="text-white">Edit</a></button></td>

                <td><button class="btn btn-danger">
                    <a href="{{route('customer.delete',['id' => $customer_list->customer_id])}}" style="text-decoration: none;" class="text-white">Trash</a>
                </button>
                </td>

                {{-- <td><button class="btn-danger">
                    <a href="{{url('/customer/delete')}}/{{$customer_list->customer_id}}" style="text-decoration: none;" class="text-white">Delete</a>
                </button>
                </td> --}}



                </tr>
                @endforeach
            </tbody>
       
    </table>
    <div class="row">
    {{$customers->links()}}
</div>
    </div>
</body>

</html>
