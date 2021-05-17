@extends('layouts.admin')

@section('titulo', 'Lista de tarefas')

@section('content')
    <h1>Lista</h1>
    <form>
        <label>
            <a href="{{ route('tarefas.add') }}">anexar nova tarefa</a>
        </label>

        @if(count($list) > 0)
            <label>
            <ul>
                @foreach ($list as $item)
                    <li>
                        <a href="">[@if($item->resolvido === 1) desmarcar @else marcar @endif]</a>
                        {{$item->titulo}}
                        <a href="">[Editar]</a>
                        <a href="" onclick="return confirm('Tem certeza que deseja excluir?')">[Excluir]</a>
                    </li>
                @endforeach
                
            </ul>
            </label>
        
        @else
            Não há itens a serem listados.
            
        @endif
        <label>
            <a href="/">Página Inicial</a>
        <label>
    </form> 
    <style>
        h1{text-align: center}
        label{display:block; margin-bottom: 20px; margin:20px;}
        form{border: 2px solid #888; background-color: #999; margin top: 20px;}
@endsection