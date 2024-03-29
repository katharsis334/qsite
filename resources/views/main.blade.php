@extends('layouts.maket')

@section('header')
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
              <a href="{{route('admin')}}" class="btn btn-success mx-2">Админ кабинет</a>
              <a href="/logOut" class="btn btn-success mx-2">Выйти</a>
              @else
              <a href="{{route('profile')}}" class="btn btn-success mx-2">Личный кабинет</a>
              <a href="/logOut" class="btn btn-success mx-2">Выйти</a>
              @endif
              @else
                <a href="{{route('profile')}}" class="btn btn-success mx-2" type="button" data-bs-toggle="modal" data-bs-target="#auth">Войти</a>
              <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#reg">Зарегистрироваться</button>
              @endif
            </form>
          </div>
        </div>
      </nav>
@endsection