@extends('layouts.admin')

@section('title', 'configurações')

@section('content')

    <h1>Formulário de Cadastro</h1>
    
    

        @if($showForm)
        
        <form method="get">
            
            <label>
                Olá {{$nome}} - <a href="/logout">Sair</a><br/>
            </label>
            <label>
                Nome:<br/>
                <input type="text" name="nome"/><br/>
            </label>
            <label>
                Idade:<br/>
                <input type="text" name="idade"/><br/>
            </label>
            <label>
                Estado:<br/>
                <input type="text" name="estado"/><br/>
            </label>
            <label> 
                Cidade:<br/>
                <input type="text" name="cidade"/><br/>
            </label>
            <label>
                Dados Escolares: <br/>
                <select name="escolaridade">
                    <option value="1">Ensino Fundamental 1</option>
                    <option value="2">Ensino Fundamental 2</option>
                    <option value="3">Ensino Médio-Completo</option>
                    <option value="4">Ensino Médio-Incompleto</option>
                    <option value="5">Ensino Superior-Completo</option>
                    <option value="5">Ensino Superior-Incompleto</option>
                    
                    
                </select>
            </label>
            <label>
                Atividades extracurriculares: <br/>
                <textarea name="checkbox"></textarea>
            </label>
            <label>
                <input type="checkbox" >
                Eu declaro que li e aceito os <a href="" target="_blank">termos de uso.</a>
            </label>
            <label>
                <input type="submit" value="Enviar"/><br/>
            </label>
            <label>
                <a href="/config/info">Informações</a><br/>
            </label>
            <label>
                <a href="/">Página Inicial</a>
            </label>
        </form>
        <br/>
        
        @endif
        <style>
            h1{text-align: center}
            label{display:block; margin-bottom: 20px; margin:20px; text-align: center;}
            form{border: 2px solid #999; background-color: #ddd; margin top: 20px;}

        

@endsection


