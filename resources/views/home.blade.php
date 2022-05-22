{{-- @include('about');

@include('first');
@include('user2'); --}}
{{-- @include('components.about'); --}}

{{-- <h1>
    Welcome{{$name}} 
</h1> --}}

{{-- <h1>
    Welcome{{$name ?? "mahadev"}} 
</h1> --}}

{{-- <h2> --}}
    {{-- Go to your {{$demo}} --}}
{{-- </h2> --}}
{{-- 
<h1>
    Welcome{!!$demo!!}
</h1> --}}

{{-- @if($name == "")

{
    {{"Name is empty"}}
}
@elseif($name=="nilesh"){
    {{"name is correct"}}
} --}}

{{-- @unless($name=='nilesh')

<h1 style="color: blue">the name is not nilesh </h1>

@endunless --}}

{{-- 
@else{
    {{"Name is incorrect"}}
}
@endif{

    {{"Congratulation"}} 
} --}}

{{-- @isset($name)
 <h1>My name is {{$name}}</h1>   
@endisset --}}

{{-- @for ($i = 1; $i <= 10; $i++)

   <h2>{{$i}}.</h2> 
     {{-- liar {{$name}} --}}
{{-- @endfor --}}

{{-- @php
    $i = 1;
@endphp

@while ($i<=10)
        {{$i++}}
    @endwhile --}}

  {{-- @php

$countries = array(" Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

echo "<pre>";
    print_r($countries);
@endphp 

<select>
    @foreach ($countries as $key => $country)
    {{++$key}}
    <option class="form-control">{{$country}}</option>
    
    @endforeach
</select> --}}
{{-- 

@for($i=1; $i<=10; $i++)
    @if ($i==8)

      @continue;

      @endif
      {{$i}}
@endfor


@for($i=1; $i<=10; $i++)
    @if ($i==8)

      @break;

      @endif
      {{$i}}
@endfor --}}

