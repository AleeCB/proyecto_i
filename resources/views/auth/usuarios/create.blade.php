@extends('layout.layout')
@section('content')

    <!-- <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
                Formulario para registrar una nueva computadora
            </p>
        </div>
    </section>

    <section class="section">
        <form action="{{ route('computadora.store') }}" method="post">
            @csrf

            <div class="columns">

                <div class="column">

                    <div>
                        <label for="">Marca: </label>
                        <input class="input is-large" type="text" name="marca" id="">
                    </div>

                    <div>
                        <label for="">Modelo: </label>
                        <input class="input is-large" type="text" name="modelo" id="">
                    </div>

                    <div>
                        <label for="">Descripción: </label>
                        <textarea class="input is-large" name="descripcion" id="" cols="30" rows="5"></textarea>
                    </div>

                    <div>
                        <label for="">Tipo de computadora: </label>
                        <select class="input is-large" name="tipo" id="">
                            <option value="Computadora portátil">Computadora portátil</option>
                            <option value="PC de escritorio">PC de escritorio</option>
                            <option value="PC gamming">PC gamming</option>
                            <option value="Chromebook">Chromebook</option>
                        </select>
                    </div>

                </div>

                <div class="column">

                    <div>
                        <label for="">Precio de compra:</label>
                        <input class="input is-large" type="number" name="precioDeCompra" step="0.1" min="0" id="">
                    </div>

                    <div>
                        <label for="">Precio de venta:</label>
                        <input class="input is-large" type="number" name="precioDeVenta" step="0.1" min="0" id="">
                    </div>

                    <div>
                        <label for="">Stock:</label>
                        <input class="input is-large" type="number" name="stock" id="">
                    </div>

                    <div>
                        <label for="">Disponible:</label>
                        <select class="input is-large" name="disponible" id="">
                            <option value="1">Sí</option>
                            <option value="0">No</option>
                        </select>
                    </div>

                </div>

            </div>

            <div>
            <div class="is-flex is-justify-content-space-around">
                <a href="{{ url('computadora/') }}" class="button is-danger is-large">X Cancelar</a>
                <input class="button is-light is-large" type="reset" value="Restablecer">
                <input class="button is-link is-large" type="submit" value="Guardar">
            </div>
            </div>


        </form>
    </section> -->

    <!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
    <title>Mi primer Login</title>

    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="static/css/index.css" th:href="@{/css/index.css}">

</head>
<body>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="static/img/user.png" th:src="@{/img/user.png}"/>
                </div>
                <form class="col-12" th:action="@{/login}" method="get">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Nombre de usuario" name="username"/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contrasena" name="password"/>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>
                </form>
                <div class="col-12 forgot">
                    <a href="#">Recordar contrasena?</a>
                </div>
                <div th:if="${param.error}" class="alert alert-danger" role="alert">
		            Invalid username and password.
		        </div>
		        <div th:if="${param.logout}" class="alert alert-success" role="alert">
		            You have been logged out.
		        </div>
            </div>
        </div>
    </div>
</body>
</html>

@endsection
