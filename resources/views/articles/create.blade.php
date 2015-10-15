@extends('sharing')

@section('content')
    <h1>A New Article</h1>
    <hr/>
   {!!Form::open(['url'=>'articles'])!!}
    <div class="form-group">
        {!!Form::label('title','Title:')!!}
        {!!Form::text('title',null,['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
    {!!Form::label('body','Body:')!!}
    {!!Form::textarea('body',null,['class'=>'form-control'])!!}   <!--3rd field is not working video 10-->
    </div>
 
   <div class="form-group">
    {!!Form::submit('Add-Article')!!}

     </div>

{!!Form::close()!!}
@stop
