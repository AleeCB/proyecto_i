@extends('layout.layout')
@section('content')

<section class="hero is-link">
    <div class="hero-body">
        <p class="title">
            Resgistro de dispositivos
        </p>
    </div>
</section>

<section class="section">
    <form action="{{ route('dispositivo.store') }}" method="post">
        @csrf

        <div class="columns">

            <div class="column">

                <div>
                    <label for="">Número de serie: </label>
                    <input class="input is-large" type="text" name="marca" id="">
                </div>

                <div>
                    <label for="">Marca: </label>
                    <input class="input is-large" type="text" name="modelo" id="">
                </div>

                <div>
                    <label for="">Modelo: </label>
                    <textarea class="input is-large" name="descripcion" id="" cols="30" rows="5"></textarea>
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
</section>

@endsection