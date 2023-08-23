@extends('layouts.admin')

@section('content')

    <div class="container p-4">
        <div class="row ">
            <div class="col ">
            
                <h1>{{$project->title}}</h1>

                <p>{{$project->content}}</p>
            </div>
        </div>
    </div>

    
@endsection