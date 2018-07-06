@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Update task</div>
                    <div class="panel-body">



                        {!!Form::model($task,array('route'=>['task.update',$task->id],'method'=>'PUT')) !!}
                        <div class="form-group">
                            {!! Form::label('title','Enter Title') !!}
                            {!! Form::text('title',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('body','Enter Body') !!}
                            {!! Form::textarea('body',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">

                            {!! Form::button('Update',['type'=>'submit']) !!}
                        </div>

                        {!! Form::close() !!}





                    </div>
                </div>
                @if($errors->any())
                    <ul class="aler alert-danger">
                        @foreach($errors->all() as $error)
                            {{$error}}
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
    </div>
@endsection