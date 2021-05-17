@extends('layouts.admin')

@section('titulo', 'Contato')

@section('content')
    <h1>Contato</h1>

    @if ($errors->any())
        @component('components.alert')
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endcomponent
    @endif

    
    <form method="GET">
        <label>
            <input type="text" name="name" placeholder="Nome" value="{{old('name')}}" /><br/>
        </label>
        <label>
            <input type="email" name="email" placeholder="E-mail" value="{{old('email')}}"/><br/>
        </label>
        <label>
            <input type="text" name="assunto" placeholder="Assunto" value=""/><br/>
        </label>
        <label>
            <textarea name="message" placeholder="Digite sua mensagem..."></textarea><br/>
        </label>
        <label>
            <input type="submit" value="Enviar" /><br/>
        </label>
        <label>
            <a href="/">Página Inicial</a>
        </label>
    </form>
    
    <style>
        h1{text-align: center}
        label{display:block; margin-bottom: 20px; margin:20px; text-align: center;}
        form{border: 2px solid #999; background-color: #eee; margin top: 20px;}
    
   
@endsection
