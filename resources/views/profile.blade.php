<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>DesignPro</title>
</head>
<body>
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
              <a class="navbar-brand" href="#">LeGoDoTa</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Контакты</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Партнеры</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">О компании</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">FAQs</a>
                  </li>
                </ul>
                <form class="d-flex">
                  @if (Auth::check())
                  @if (Auth::user()->is_admin == 1)
                  <a href="/logOut" class="btn btn-success mx-2">Выйти</a>
                  @else
                  <a href="{{route('profile')}}" class="btn btn-success mx-2">Личный кабинет</a>
                  <a href="/logOut" class="btn btn-success mx-2">Выйти</a>
                  @endif
                  @else
                  <button class="btn btn-success mx-2" type="button" data-bs-toggle="modal" data-bs-target="#auth">Войти</button>
                  <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#reg">Зарегистрироваться</button>
                  @endif
                </form>
              </div>
            </div>
          </nav>
        </div><br><br>

        <div class="container">
            <div>
                <span>Ваши заявки:</span>
            </div>
           <div>
               <select name="sort" id="sort" class="form-select">
                 <option value="Все">Все</option>
                 <option value="Новая">Новая</option>
                 <option value="Принято в работу">Принято в работу</option>
                 <option value="Выполнено">Выполнено</option>
              </select>
    </div>
       </div>

          <div class="container mt-4">
            <div>
              <span>Создайте заявку</span>
            </div>
            <div>
              <form action="{{route('addOrder')}}" method="post" enctype="multipart/form-data">
                @csrf
              <input type="text" placeholder="Название" class="form-control" name="name"><br>
                  <div class="invalid-feedback" id="errorName"></div>
                  <input type="text" placeholder="Описание" class="form-control" name="desc"><br>
                  <div class="invalid-feedback" id="errorDesc"></div>
                  <select name="cat" class="form-select">
                    @foreach ($cat as $c)
                      <option value="{{$c->id}}">{{$c->name}}</option>
                    @endforeach
                  </select>
                  <div class="invalid-feedback" id="errorSelect"></div>
                  <input type="file" placeholder="Фото" class="form-control my-4" name="img">
                  <div class="invalid-feedback" id="errorFile"></div>
                  <button class="btn btn-success my-4" type="submit">Отправить</button>
              </form>
            </div>
          </div>

          <div id="OrderCard">
          @include('incl.SortOrders');
          </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</body>
</html>