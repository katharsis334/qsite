<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>DesignPro</title>
</head>
<body>
    <div class="modal" id="reg" tabindex="-1" aria-labelledby="reg" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <form action="{{route('reg')}}" method="post" id="regForm">
            <div class="modal-header">
              <h5 class="modal-title">Регистрация</h5>
            </div>
            <div class="modal-body">
                    @csrf
                <input type="text" placeholder="ФИО" class="form-control" name="fio"><br>
                <div class="invalid-feedback" id="errorFio"></div>
                <input type="text" placeholder="Логин" class="form-control" name="login"><br>
                <div class="invalid-feedback" id="errorLogin"></div>
                <input type="password" placeholder="Пароль" class="form-control" name="password"><br>
                <input type="password" placeholder="Повторите пароль" class="form-control" name="pass2"><br>
                <div class="invalid-feedback" id="errorPass"></div>
                <input type="email" placeholder="E-mail" class="form-control" name="email"><br>
                <div class="invalid-feedback" id="errorEmail"></div>
                <input type="checkbox" id="sogl">
                <label for="sogl" class="form-check-label">Я согласен на обработку персональных даннных</label>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
              <button type="submit" class="btn btn-success">Отправить</button>
            </div>
          </form>
          </div>
        </div>
      </div>

      <div class="modal" id="auth" tabindex="-1" aria-labelledby="auth" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Авторизация</h5>
            </div>
            <div class="modal-body">
            <form action="{{route('auth')}}" method="POST" id="authForm">
                @csrf
              <input type="text" placeholder="Логин" class="form-control" name="login"><br>
              <div class="invalid-feedback" id="loginError"></div>
              <input type="password" placeholder="Пароль" class="form-control" name="password">
              <div class="invalid-feedback" id="passwordError"></div>
              <div class="alert alert-danger mt-3" role="alert" id="formError" style="display: none"> </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
              <button type="submit" class="btn btn-success">Отправить</button>
            </div>
          </form>
          </div>
        </div>
      </div>

    @yield('header')

    <div class="home">
        <div class="overlay h-100">
        <div class="container-fluid">
                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, ut debitis. Vitae, rerum id in et </h3>
                <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, ut debitis. Vitae, rerum id in et </h4>
                <button class="btn btn-success my-2">Попробовать</button>
        </div>
    </div><br><br>

   <div class="container">
       <div class="row">
        <div class="col-8">
           <h2>Наши работы:</h2>
        </div>
        <div class="col-4">
           <h3 style="color: black" >Выполненные заказы:&nbsp;<span class="badge bg-success">3</span></h3>
        </div>
       </div>
    </div><br>

    <div class="container">
      <div class="orders">
        <div class="row">
            <div class="col-4">
                <div class="card">
                  <div class="img">
                    <img src="../../../public/img/order1.jpg" width="100%" class="img1">
                    <img src="../../../public/img/order1.jpg" width="100%" class="img2">
                  </div>
                    <div class="card-body">
                      <h5 class="card-title">Категория:</h5>
                      <p class="card-text">Описание: Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-success">Подробнее</a>
                    </div>
                  </div>
            </div>

            <div class="col-4">
              <div class="card">
                <div class="img">
                  <img src="../../../public/img/order1.jpg" width="100%" class="img1">
                  <img src="../../../public/img/order1.jpg" width="100%" class="img2">
                </div>
                  <div class="card-body">
                    <h5 class="card-title">Категория:</h5>
                    <p class="card-text">Описание: Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-success">Подробнее</a>
                  </div>
                </div>
          </div>

          <div class="col-4">
            <div class="card">
              <div class="img">
                <img src="../../../public/img/order1.jpg" width="100%" class="img1">
                <img src="../../../public/img/order1.jpg" width="100%" class="img2">
              </div>
                <div class="card-body">
                  <h5 class="card-title">Категория:</h5>
                  <p class="card-text">Описание: Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-success">Подробнее</a>
                </div>
              </div>
        </div>
          </div>
    </div>

        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
              <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <small class="text-muted">© 2022 Company, Inc</small>
          </div>
        </footer>
        
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</body>
</html>