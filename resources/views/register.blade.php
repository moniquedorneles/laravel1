@extends('layouts.admin')

@section('titulo', 'Cadastrar')

@section('content')
    <h1>Cadastro de novo usuário</h1>

    @if ($errors->any())
        @component('components.alert')
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endcomponent
    @endif

    
    <form method="POST">
        @csrf
        <label>
            <input type="text" name="name" placeholder="Digite seu Nome" value="{{old('name')}}" /><br/><br/>
        </label>
        <label>
            <input type="email" name="email" placeholder="Digite um E-mail" value="{{old('email')}}"/><br/><br/>
        </label>
        <label>
            <input type="password" name="password" placeholder="Digite uma Senha"/><br/><br/>
        </label>
        <label>
            <input type="password" name="password_confirmation" placeholder="Confirme a Senha"/><br/><br/>
        </label>
        <label>
            <input type="submit" value="Cadastrar" /><br/><br/>
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
