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
   <a href="{{asset('main')}}">Главная</a>
   <a href="#">Каталог</a>
   <a href="#">Галерея</a>
   <a href="#">Новости</a>
   <a href="#">Полинор</a>
   <a href="{{asset('contact')}}">Контакты</a>
  </nav>
  <div id="body">
   <div class="con">
	<div class="row">
		<div class="col-md-2">
		  <div>Меню</div>
		  @foreach($v_categories as $cat)
		  <a href="{{asset('category/'.$cat->id)}}" class="btn btn-info btn-block">{{$cat->name}}</a>
		  @endforeach
		</div>
		<div class="col-md-8">
		  @yield('content')

		</div>
		<div class="col-md-2">
		  <ul>
		   @guest
                            <li>
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li>
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li>
                                <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </li>
                        @endguest
						</ul>
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