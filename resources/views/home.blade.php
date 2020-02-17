@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        <form action="">
                            <div class="form-group">
                                <label for="thought">Ahora estoy pensando en ti...</label>
                                <input type="text" class="form-control" name="thought">
                            </div>
                        </form>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Publicado el 08/09/2020</div>

                <div class="panel-body">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        It has survived not only five centuries.
                    </p>
                </div>
                <div class="panel-footer">
                    <button class="btn btn-default">Editar</button>
                    <button class="btn btn-danger">Eliminar</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
