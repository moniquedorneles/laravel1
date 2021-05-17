@extends('layouts.admin')

@section('title', 'Edição de tarefas')

@section('content')
    <h1>Editar Tarefas</h1>
    
    <form method="POST">
        @csrf

        @if($errors->any())
            @alert
                @foreach ($errors->all() as $error)
                   {{ $error }} <br/>
                @endforeach
            @endalert
        @endif
        
        <label>
            Titulo: <br/>
            <input type="text" name="titulo" value="{{ $data->titulo }}"/>   
        </label>
        
        <input type="submit" value="Salvar"/>

    </form>
@endsection