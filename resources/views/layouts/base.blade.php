<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Добросфера</title>
  <meta name="description" content="1-2-3">
  <meta name="keywords" content=",,,">
  <meta name="author" content="Плинда Светлана">
  <link type="text/css" href="media/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link type="text/css" href="media/style.css" rel="stylesheet" />
 </head>
 <body>
  <div id="header">
    <a href="/"><img id="logo" src="media/img/logo_house.png" /></a>
	<h1 id="logotext">Добросфера</h1>
  </div>
  <nav class="topmenu">
   <a href="#">Главная</a>
   <a href="#">Каталог</a>
   <a href="#">Галерея</a>
   <a href="#">Новости</a>
   <a href="#">Полинор</a>
   <a href="#">Контакты</a>
  </nav>
  <div id="body">
   <div class="con">
	<div class="row">
		<div class="col-md-2">
		  <div>Меню</div>
		  <a class="btn btn-info btn-block" href="#">Info</a>
		  <a class="btn btn-info btn-block" href="#">Info</a>
		  <a class="btn btn-info btn-block" href="#">Info</a>
		  <a class="btn btn-info btn-block" href="#">Info</a>
		</div>
		<div class="col-md-8">
		  @yield('content')
		  <ul>
		   @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
						</ul>
		</div>
		<div class="col-md-2">
		<a class="btn btn-warning btn-block" href="/login">Вход</a>
		<a class="btn btn-warning btn-block" href="/registr">Регистрация</a>
<table width="100%" height="180" style="background-color:#f2f2f2; border: #cccccc 1px solid; font-family:Tahoma; font-size:12px; color:#000000;" cellpadding="2" cellspacing="0">
<tr><td><a href="http://6.pogoda.by/26850" style="font-family:Tahoma; font-size:12px; color:#003399;" title="Погода Минск на 6 дней - Гидрометцентр РБ" target="_blank">Погода Минск</a>
</td></tr>
<tr><td>

<table width=100% height=100% style="background-color:#f2f2f2; font-family:Tahoma; font-size:12px; color:#000000;" cellpadding="0" cellspacing="0">
<tr><td>
<script type="text/javascript" charset="windows-1251" src="http://www.pogoda.by/meteoinformer/js/26850_1.js"></script>
</td></tr>
</table>

</td></tr>

<tr><td align="right">Информация сайта <a href="http://www.pogoda.by" target="_blank" style="font-family:Tahoma; font-size:12px; color:#003399;">http://www.pogoda.by</a>
</td></tr>
</table>
		</div>
	 </div>
	</div>
  </div>
  <div id="footer">
    <a href="mailto:sv.plinda@yandex.ru">sv.plinda@yandex.ru</a>
  </div>
 </body>
</html>