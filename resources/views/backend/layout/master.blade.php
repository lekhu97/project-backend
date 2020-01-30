<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("backend/assets/bootstrap/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("backend/assets/css/material-icons.css")}}">
    <link rel="stylesheet" href="{{asset("backend/assets/css/style.min.css")}}">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler sideMenuToggler" type="button">
         <span class="navbar-toggler-icon"></span>
        </button>
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">

        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

    </ul>

  </div>
</nav>

<div class="wrapper d-flex">
    <div class="sideMenu">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="material-icons">dashboard</i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="material-icons">person</i>
                    <span class="text">User Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="material-icons">insert_chart</i>
                    <span class="text">Charts</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="material-icons">settings</i>
                    <span class="text">Settings</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="material-icons">computer</i>
                    <span class="text">Demo</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="content">
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus ullam deleniti ex repudiandae placeat dicta fugit nobis culpa nesciunt incidunt rerum necessitatibus, maiores dolorum odio repellat eos vel? Recusandae, consequatur.</div>
            <div class="col-md-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus ullam deleniti ex repudiandae placeat dicta fugit nobis culpa nesciunt incidunt rerum necessitatibus, maiores dolorum odio repellat eos vel? Recusandae, consequatur.</div>
            <div class="col-md-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus ullam deleniti ex repudiandae placeat dicta fugit nobis culpa nesciunt incidunt rerum necessitatibus, maiores dolorum odio repellat eos vel? Recusandae, consequatur.</div>
        </div>
    </div>
</main>
    </div>
</div>

    <script src="{{asset("backend/assets/js/jquery.min.js")}}"></script>
    <script src="{{asset("backend/assets/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("backend/assets/js/jquery.slimscroll.min.js")}}"></script>
    <script src="{{asset("backend/assets/js/script.js")}}"></script>
</body>
</html>
