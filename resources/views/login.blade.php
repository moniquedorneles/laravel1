@extends('layouts.admin')

@section('titulo', 'Login')

@section('content')
    <h1>Login</h1>

    @if (session('warning'))
        @alert
            {{session('warning')}}
        @endalert
    @endif
    <br/>

    <form method="POST">
        @csrf
        <label>
        <input type="email" name="email" placeholder="Digite um E-mail"/><br/><br/>
        </label>
        <label>
        <input type="password" name="password" placeholder="Digite uma senha"/><br/><br/>
        </label>

        <label>
        <input type="submit" value="Entrar" /><br/><br/>
        </label>
        <label>
        <a href="/">Página Inicial</a>
        </label>
    </form>
    <style>
        h1{text-align: center}
        label{display:block; margin-bottom: 20px; margin:20px; text-align: center;}
        form{border: 2px solid #999; background-color: #eee; margin top: 20px;}

    Tentativas: {{$tries}}
    
@endsection