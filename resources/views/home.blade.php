@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} 
                    <div class="text-right">
                        <a href="/addTodo" class="btn btn-primary" style="margin-top: -2rem;">Add Todo</a>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(count($todos) > 0)
                        @foreach($todos as $todo)
                            <div class="card-header">
                                <h5>{{$todo->todo}}</h5>
                                <div class="text-right" style="margin-top: -2rem;">
                                    <a href="/edit/{{$todo->id}}" class="btn btn-primary">Edit</a>
                                    <a href="/delete/{{$todo->id}}" class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                            <div class="card-body bg-dark text-white">
                                Description: {{$todo->description}}
                                <br>
                                <br>
                                <p> Due <span class="text-danger" >{{$todo->duration}} </span></p>
                                <br>
                                <br>
                                <p> Created at <span class="text-danger"> {{$todo->created_at}} </span></p>
                                <br>
                                <br>
                                <p> Updated at: <span class="text-danger"> {{$todo->updated_at}} </span></p>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
