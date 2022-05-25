@extends('layout.layout')
@section('content')

    <section class="section">
      <div class="columns">
          <div class="column is-one-third">
             <a href="/dispositivo" class="button is-primary">
              Regresar
             </a>
          </div>
          <div class="columns">
             <p class="title">
                 Detalles de {{ $dispositivo->numeroSerie }}
                 {{ $dispositivo->marca }}
                 {{ $dispositivo->modelo }}
                </p>
          </div>
        </div>
    </section>


    <section class="section"></section>

        <p class="title">{{ $dispositivo->numeroSerie }}</p>
        <p class="subtitle">{{ $dispositivo->marca }}</p>
        <p class="has-text-justify">{{ $dispositivo->modelo }}</p>

    </section>
@endsection    