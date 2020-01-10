@extends('layouts.base')
@section('content')

  <header class="bg-primary text-white">
    <div class="container text-center">
      <h1>Добро пожаловать в Scrolling Nav</h1>
      <p class="lead">Шаблон целевой страницы, недавно переработанный для Bootstrap 4</p>
    </div>
  </header>

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Об этой странице</h2>
          <p class="lead">Это отличное место, чтобы поговорить о вашей веб-странице. 
             Этот шаблон специально не стилизован, так что вы можете использовать его 
             в качестве шаблона или отправной точки для вашего собственного дизайна 
             целевой страницы! Этот шаблон имеет:</p>
          <ul>
            <li>Кликабельные навигационные ссылки, которые плавно переходят к разделам страницы</li>
            <li>Отзывчивое поведение при нажатии на навигационные ссылки идеально подходит для одностраничного веб-сайта</li>
            <li>Функция Bootstrap scrollspy которая выделяет какой раздел страницы вы находитесь на панели навигаци</li>
            <li>Минимальный пользовательский CSS, так что вы можете свободно исследовать свои собственные уникальные варианты дизайна</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="services" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Услуги, которые мы предлагаем</h2>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                          Aut optio velit inventore, expedita quo laboriosam possimus 
                          ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda 
                          laborum vel, labore ut velit dignissimos.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- <li style="list-style: none;"> -->
  <section id="products">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <ol>
            @foreach($objs as $one)    
            <li>
              <p>Категория: <a href=#> {{$one->name}} </a></p>
                <ul>
                  @foreach($one->products()->get() as $prod)
                  <li> 
                    <p>Продукт: {{$prod->name}} </p>  
                    <p>   Цена: {{$prod->price}} </p>
                    <p>   Описание: {{$prod->body}} </p>
                  </li>
                  @endforeach
                </ul>
            </li>
            @endforeach
          </ol>
        </div>
      </div>
    </div>
  </section>
  
  @endsection