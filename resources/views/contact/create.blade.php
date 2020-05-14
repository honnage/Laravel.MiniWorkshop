@extends('layouts.app')
@section('content')
<div class="container">

    @if($errors->all())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['action' => 'ContactController@store','method'=>'POST']) !!}
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('Name') !!}
                {!! Form::text('name',"",["class"=>"form-control"]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Email') !!}
                {!! Form::text('email',"",["class"=>"form-control"]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Phone') !!}
                {!! Form::text('phone',"",["class"=>"form-control"]) !!}
            </div>
            <input type="submit" value="บันทึก" class="btn btn-primary">
            <a href="/contact" class="btn btn-success">กลับ</a>
        </div>
    {!! Form::close() !!}
</div>
@endsection
