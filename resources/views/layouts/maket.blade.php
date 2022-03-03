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
            <div class="modal-header">
              <h5 class="modal-title">Регистрация</h5>
            </div>
            <div class="modal-body">
                <form action="{{route('reg')}}" method="post" id="reg">
                    @csrf
                <input type="text" required placeholder="ФИО" class="form-control" name="fio"><br>
                <input type="password" required placeholder="Пароль" class="form-control" name="pass1"><br>
                <input type="password" required placeholder="Повторите пароль" class="form-control" name="pass2"><br>
                <div class="invalid-feedback">
                  Пароли не совпадают
                  </div>
                <input type="email" required placeholder="E-mail" class="form-control" name="email"><br>
                <input type="checkbox" id="sogl" required>
                <label for="sogl" class="form-check-label">Я согласен на обработку персональных даннных</label>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
              <button type="submit" class="btn btn-warning">Отправить</button>
            </form>
            </div>
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
            <form action="" method="POST" id="auth">
                @csrf
              <input type="text" required placeholder="Логин" class="form-control" name="login"><br>
              <input type="password" required placeholder="Пароль" class="form-control" name="pass1">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
              <button type="submit" class="btn btn-warning">Отправить</button>
            </form>
            </div>
          </div>
        </div>
      </div>

    @yield('header')

    <div class="home">
        <div class="overlay h-100">
        <div class="container-fluid">
                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, ut debitis. Vitae, rerum id in et </h3>
                <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, ut debitis. Vitae, rerum id in et </h4>
        </div>
    </div><br><br>

   <div class="container">
       <div class="row">
        <div class="col-8">
           <h2>Наши работы:</h2>
        </div>
        <div class="col-4">
           <h3 style="color: black" >Выполненные заказы:&nbsp;<span class="badge bg-warning">3</span></h3>
        </div>
       </div>
    </div><br>

    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <img src="../../../public/img/order1.jpg" class="card-img" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Категория:</h5>
                      <p class="card-text">Описание: Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-warning">Подробнее</a>
                    </div>
                  </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="../../../public/img/order1.jpg" class="card-img" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-warning">Go somewhere</a>
                    </div>
                  </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="../../../public/img/order1.jpg" class="card-img" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-warning">Go somewhere</a>
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
        

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>