@extends('layouts.admin')

@section('content')

    <div class="container p-4">
        <div class="row ">
            <div class="col-12 ">
                <h1>Aggiungi un nuovo post</h1>
            </div>
            <div class="col-12">
                <form action="{{route('admin.prijects.store')}}" method="POST">
                    {{-- token obbligatorio --}}
                    @csrf
                    <div class="form-group">
                        <label class="control-table">Titolo</label>
                        <input type="text" name="title" id="title" required>
                    </div>


                </form>
            </div>
            <div class="col">
                <a href="{{route('admin.projects.index')}}" class="btn btn-primary">
                    ritorna alla pagina precedente
                </a>
            </div>
        </div>
    </div>

    
@endsection