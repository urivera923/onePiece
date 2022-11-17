@extends('layouts/inicio')

@section('tituloPagina', 'Creador')

@section('contenido')


    <!--Main layout-->

    <div class="container">
        <div class="d-flex justify-content-center">
            <section>
                <!-- Card -->
                <div class="card mt-4 text-withe bg-dark shadow border-4 border-info" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block h-100">
                            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active car_img" data-bs-interval="3000">
                                        <!-- <img src="https://pbs.twimg.com/media/EYfEhiiX0AA9Xma?format=jpg&name=900x900" alt="login form" class="img-fluid " style="border-radius: 1rem 0 0 1rem;" /> -->
                                    </div>
                                    <div class="carousel-item car_img1" data-bs-interval="3000">
                                        <!-- <img src="https://pbs.twimg.com/media/EUNSfNQWAAEP2BW.jpg" alt="login form" class="img-fluid " style="border-radius: 1rem 0 0 1rem;" /> -->
                                    </div>
                                    <div class="carousel-item car_img2" data-bs-interval="3000">
                                        <!-- <img src="https://pbs.twimg.com/media/D9CijIgWsAIrUXl.jpg" alt="login form" class="img-fluid " style="border-radius: 1rem 0 0 1rem;" /> -->
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-7">
                            <h2 class="text-white text-center m-4">Eiichiro Oda (Eiichirō Oda)</h2>
                            <p class="text-white px-5">Eiichiro Oda es un artista de manga japonés y el creador de la serie
                                One Piece. Con más de 516,5 millones de copias de tankōbon en circulación en todo el mundo,
                                One Piece es tanto el manga más vendido de la historia como la serie de cómics más vendida
                                impresa en volumen, lo que a su vez convierte a Oda en uno de los autores de ficción más
                                vendidos.</p>
                        </div>

                    </div>
                </div>
            </section>
        </div>

        <hr class="my-5 bg-light" />

        <section>
            <div class="row mt-5">
                <div class="col-md-6 gx-5 mb-4">
                    <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                        <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/cab70fd2-bf8f-4847-bc41-f06bfcd49c73/d9x0ugx-edef2ea4-437d-4ebe-850d-c4f45d98caeb.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2NhYjcwZmQyLWJmOGYtNDg0Ny1iYzQxLWYwNmJmY2Q0OWM3M1wvZDl4MHVneC1lZGVmMmVhNC00MzdkLTRlYmUtODUwZC1jNGY0NWQ5OGNhZWIucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.WGET_ji8wmSx6Q29lFuFx-xSBCinCilVWKhHVCt_Qhk"
                            class="img-fluid" />
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 gx-5 mb-4 text-white">
                    <h4 class="fw-bolder">Historia</h4>
                    <p class="fst-normal">
                        One Piece (Wan Pīsu) es un Manga y Anime del autor Eiichirō Oda. La serie narra la historia de un
                        joven llamado Monkey D. Luffy, que inspirado por su amigo pirata Shanks, comienza un viaje para
                        alcanzar su sueño, ser el Rey de los piratas, para lo cual deberá encontrar el tesoro One Piece
                        dejado por el anterior rey de los piratas Gol D. Roger. <br><br>

                        El manga es publicado en la revista Shōnen Jump de Shūeisha desde 1997 y lleva editados un total de
                        60 volúmenes. Por otra parte, el anime es realizado por Toei Animation y se transmite en Fuji TV
                        desde agosto de 1999 contando con 527 episodios hasta la fecha. <br> <br>

                        Larp editores se encarga de su publicación en Argentina, Planeta DeAgostini se encarga de la
                        publicación del manga en España y en México fue publicado por Editorial Toukan. Y posiblemente haya
                        una nueva reimpresión en Grupo Editorial Vid. <br> <br>

                        One Piece es el manga más vendido de la historia de la revista Shōnen Jump, con más de 158 millones
                        de copias vendidas. <br> <br>
                    </p>
                </div>
            </div>
        </section>
        <!--Section: Content-->

        <hr class="my-5 bg-light" />

        <!--Section: Content-->
        <section class="text-center">
            <h4 class="mb-5 fw-bold text-white">Animes</h4>

            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card h-100 bg-dark text-white borde-card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/846d2eb4-e3ab-41d4-885d-54390a312676/d391avj-da975c40-8392-4799-b89a-206b37a31b4e.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzg0NmQyZWI0LWUzYWItNDFkNC04ODVkLTU0MzkwYTMxMjY3NlwvZDM5MWF2ai1kYTk3NWM0MC04MzkyLTQ3OTktYjg5YS0yMDZiMzdhMzFiNGUucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.pUq_NQkLcYsejWj-jHBnOICeaIcQPlVnnwlPmoIkxfU"
                                class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">One Piece </h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the
                                card's content.
                            </p>
                            <a href="#!" class="btn btn-primary">Button</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 bg-dark text-white borde-card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/80e1213e-0e9a-4a0a-812f-9c66069e8b90/d2ezywt-18b3340f-a711-468e-a7af-cd0b97003496.jpg/v1/fill/w_1187,h_673,q_70,strp/_itadaki___masu__by_ladygt_d2ezywt-pre.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9NjgxIiwicGF0aCI6IlwvZlwvODBlMTIxM2UtMGU5YS00YTBhLTgxMmYtOWM2NjA2OWU4YjkwXC9kMmV6eXd0LTE4YjMzNDBmLWE3MTEtNDY4ZS1hN2FmLWNkMGI5NzAwMzQ5Ni5qcGciLCJ3aWR0aCI6Ijw9MTIwMCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.pwukAd6zprwNfVoJ1e_cR2s7UfiSd2TuOwpp2OqMN6A"
                                class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Dragon Ball x One Piece: Cross Epoch</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the
                                card's content.
                            </p>
                            <a href="#!" class="btn btn-primary">Button</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 bg-dark text-white borde-card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="https://external-preview.redd.it/jKznVycUrnbMNwLRadmwB7WNgcXlgsx9pTifQwifq6Y.jpg?auto=webp&s=527bf8d64b83ce64730eafd52f7d133e22c311d7"
                                class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Wanted! (1998), Colección de las siguientes historias one-shot</h5>
                            <span class="card-text text-start">
                                <ul>
                                    <li>Wanted! (1991)</li>
                                    <li>God's Gift for the Future (1993)</li>
                                    <li>Itsuki yakou (1993)</li>
                                    <li>Monsters (1994)</li>
                                    <li>Romance Dawn (Versión 2, 1996)</li>
                                </ul>
                            </span>
                            <a href="#!" class="btn btn-primary">Button</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--Section: Content-->
    </div>

@endsection
