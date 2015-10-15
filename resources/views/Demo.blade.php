@extends('sharing')

@section('content')

@if($first=='Ankur')
   if condition is here
   <br> similarly foreach and while also exists 5
@else
     else condition is here

@endif
<br><br>
      A random html added to this , where you can attach your files for look...(cool isn't it)<br>
      Variable is passed : {{$first}} {{$last}}
@stop