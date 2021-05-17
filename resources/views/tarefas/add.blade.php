@extends('layouts.admin')

@section('title', 'Adição de tarefas')

@section('content')
    <h1>Adição</h1>
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
            <input type="text" name="titulo"/>

        </label>
        
        <input type="submit" value="Adicionar"/>

    </form>
@endsection