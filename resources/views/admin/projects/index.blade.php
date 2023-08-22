@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h3>My Projects</h3>
                    </div>
                </div>

                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Titolo</th>
                                <th>Descrizione progetto</th>
                                <th>Slug</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                                <tr>
                                    <td>{{ $project->title}}</td>
                                    <td>{{ $project->content}}</td>
                                    <td>{{ $project->slug}}</td>
                                    
                                   
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    
@endsection