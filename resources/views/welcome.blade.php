@extends('layouts/inicio')

@section('tituloPagina', 'Laravel')

@section('contenido')
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card mb-3 border border-info border-4 shadow p-5 one-piece" style="max-width: 90%">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('img/one-piece.png') }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body text-white">
                        <h5 class="card-title text-center fw-bold">ONE PIECE</h5>
                        <p class="card-text fw-bolder">One Piece es una serie de manga japonesa escrita e ilustrada por
                            Eiichiro.
                            Oda. Ha sido serializado en la revista de manga shōnen de Shueisha Weekly Shōnen Jump desde
                            julio de 1997.
                            con sus capítulos individuales compilados en 104 volúmenes de tankōbon a noviembre de 2022</p>
                        <p class="card-text"><small class="text-muted">11/11/2022</small></p>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
