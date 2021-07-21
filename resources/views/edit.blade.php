@extends('layouts.app')

@section('content')
    <h1> Edit Todo </h1>

    {!! Form::open( ['action' => ['App\Http\Controllers\AddTodoController@update', $todo->id], 'method' => 'POST']) !!}
        {{Form::label('Todo: ')}}
        <br>
        {{Form::text('text', $todo->todo)}}
        <br>
        {{Form::label('Description: ')}}
        <br>
        {{Form::textarea('description', $todo->description)}}
        <br>
        {{Form::label('Date: ')}}
        <br>
        {{Form::date('date', $todo->duration)}}
        <br>
        <br>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection