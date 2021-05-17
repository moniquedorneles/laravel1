<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('title') Monique Dorneles</title><meta charset="utf-8"/>
    <link rel="stylesheet" href={{url(mix('site/css/style.css'))}}/>
</head>

<body>
<header>
    <div class="menu">
        <nav>
          <ul>
            <li class="active"><a href="/home">Home</a></li>
            <li><a href="config/info">Info</a> </li>
            <li><a href="config">Form</a></li>
            <li><a href="register">Registro</a></li>
            <li><a href="login">Login</a></li>
            <li><a href="tarefas">Tarefas</a></li>
            <li><a href="contact">Contato</a></li>
          </ul>
        </nav>
      </div>

</header>
<section>
    @yield('content')
</section>

<div class="conteiner">
<main>
    <br/>
<h1>Monique Dorneles</h1>
<br/>
<p> Psicóloga CRP: 09/00000</p>
<a href="register" class="botao">Cadastre-se</a>
</main>
</div>
<hr/>
<footer>
Contato:
<address>
  <br/>
  Aparecida de Goiânia - GO<br/>
  nick.6.dorneles@gmail.com<br/>
  Site criado por - Monique Dorneles<br/>
  Ano: 2021.<br/>
<br/><br/>
<div class="footer_copy">
  copyright - todos os direitos reservados 
</div>
</address>
</footer>
</body>
