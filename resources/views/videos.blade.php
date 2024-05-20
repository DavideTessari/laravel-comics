@extends('layout.main')

@section('content')

    <div class="main-wrapper undefined-page">
        <div class="container">

            <h1>La pagina non è stata creata : <span id="url-name">"{{ Route::currentRouteName() }}"</span></h1>

        </div>
    </div>

@endsection