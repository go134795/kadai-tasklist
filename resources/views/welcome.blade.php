@extends('layouts.app')

@section('content')
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to the Tasklist</h1>
            {!! link_to_route('sign.up.get', 'Sign up now!', [], 
['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
@endsection