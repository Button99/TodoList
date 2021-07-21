@extends('layouts.app')

@section('content')
    <h1> Add Todo </h1>

    {!! Form::open( ['action' => 'App\Http\Controllers\AddTodoController@store', 'method' => 'POST']) !!}
        {{Form::label('Todo: ')}}
        <br>
        {{Form::text('text', '', ['placeholder' => 'Todo'])}}
        <br>
        {{Form::label('Description: ')}}
        <br>
        {{Form::textarea('description', '', ['placeholder' => 'description'])}}
        <br>
        {{Form::label('Date: ')}}
        <br>
        {{Form::date('date', '', ['placeholder' => 'Date'])}}
        <br>
        <br>
        {{Form::submit('Submit', null)}}
    {!! Form::close() !!}
@endsection