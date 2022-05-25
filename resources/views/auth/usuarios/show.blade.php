@extends('layout.layout')
@section('content')

    <section class="section">
      <div class="columns">
          <div class="column is-one-third">
             <a href="/computadora" class="button is-primary">
              Regresar
             </a>
          </div>
          <div class="columns">
             <p class="title">
                 Detalles de {{ $computadora->marca }}
                 {{ $computadora->modelo }}
                </p>
          </div>
        </div>
    </section>


    <section class="section"></section>

        <p class="title">{{ $computadora->modelo }}</p>
        <p class="subtitle">{{ $computadora->marca }}</p>
        <p class="has-text-justify">{{ $computadora->descripcion }}</p>

    </section>
@endsection    