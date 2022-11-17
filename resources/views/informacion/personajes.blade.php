@extends('layouts/inicio')

@section('tituloPagina', 'Personajes')

@section('contenido')
    <div class="p-5 mx-5 vh-100">

        {{-- Tripulación de Sombrero de Paja --}}
        <p class="text-center text-white fs-3 fw-bold">Tripulación de Sombrero de Paja</p>
        <p class="text-center text-white mb-5 fs-6 fw-bolder">La historia sigue principalmente a esta tripulación de Sombrero
            de Paja, una banda de piratas liderada por su capitán Monkey D. Luffy, el protagonista principal del manga. El
            fogoso y jovial Monkey D. Luffy está en particular en busca de un tesoro legendario dejado por otro pirata, Gol
            D. Roger.

            <br> Barcos : De acuerdo con los diferentes arcos de la historia, el barco de esta tripulación pirata se llama
            Vogue Merry (desde el arco de la aldea de Syrup hasta el arco de Enies Lobby ), luego Thousand Sunny (del arco
            de Post-Enies Lobby).
        </p>
        <div class="row row-cols-1 row-cols-md-4 g-3">
            <div class="col">
                <div class="card h-100 bg-dark border-card border-card">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/51158316-fd7e-48ca-b5fe-8542e9dfe357/dcc9zse-cd8f1dde-3d79-4ac1-83db-cbe94cb08e64.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzUxMTU4MzE2LWZkN2UtNDhjYS1iNWZlLTg1NDJlOWRmZTM1N1wvZGNjOXpzZS1jZDhmMWRkZS0zZDc5LTRhYzEtODNkYi1jYmU5NGNiMDhlNjQucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.VPZUJ9xx2ayXR70ZWXAZwePBOnR-cmmVzVxR3HmHXdU"
                        class="card-img-top rounded-start img-fluid" alt="...">
                    <div class="card-body text-white">
                        <h5 class="card-title fw-bold">Historia <br><br> <span class="fw-bolder fs-6">Monkey D Luffy</span>
                        </h5>
                        <p class="card-text">Luffy nació en la Villa Foosha. Seis años después de su nacimiento, se encontró
                            con una banda de piratas liderados por un capitán llamado Shanks el Pelirrojo. Luffy se hizo
                            amigo de la banda de piratas y desde ese momento, quería convertirse en un pirata también.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-dark border-card">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/51158316-fd7e-48ca-b5fe-8542e9dfe357/dbcd5p4-9e5a4296-2f6d-44b0-aebe-49363049adcb.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzUxMTU4MzE2LWZkN2UtNDhjYS1iNWZlLTg1NDJlOWRmZTM1N1wvZGJjZDVwNC05ZTVhNDI5Ni0yZjZkLTQ0YjAtYWViZS00OTM2MzA0OWFkY2IucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.qu25QcC0Ma9Dn0nNurXy3viWH8bAntm4wVG0xT9QQGM"
                        class="card-img-top rounded-start img-fluid" alt="...">
                    <div class="card-body text-white">
                        <h5 class="card-title fw-bold">Historia <br><br> <span class="fw-bolder fs-6">Roronoa Zoro</span>
                        </h5>
                        <p class="card-text">Zoro, también llamado "el cazador de piratas", es un espadachín experto en el
                            Santōryū (estilo de tres espadas). Usa tres espadas, llevando una en cada mano y otra en la
                            boca. Es valiente, fuerte y siempre cumple su palabra, aunque también bastante temperamental. Su
                            sueño es llegar a ser el mejor espadachín del mundo.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-dark border-card">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/51158316-fd7e-48ca-b5fe-8542e9dfe357/dc5bb2a-b1d2c83e-2f6c-4385-818c-e56bb2a0cfbd.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzUxMTU4MzE2LWZkN2UtNDhjYS1iNWZlLTg1NDJlOWRmZTM1N1wvZGM1YmIyYS1iMWQyYzgzZS0yZjZjLTQzODUtODE4Yy1lNTZiYjJhMGNmYmQucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.ReFCNuxxAO6CNv0WIeh8WDTAdyCh5oDRn66M0Kk6utA"
                        class="card-img-top rounded-start img-fluid" alt="...">
                    <div class="card-body text-white">
                        <h5 class="card-title fw-bold">Historia <br><br> <span class="fw-bolder fs-6">Nami</span></h5>
                        <p class="card-text">Nami es una huérfana de guerra del Reino de Oykot. Fue encontrada cuando era un
                            bebé por una joven Nojiko, y poco después por Bell-mère, una marine, gravemente herida, tras el
                            final de una de los enfrentamientos. A pesar del traumático escenario en el que fue encontrada,
                            su sonrisa y su risa inocentes se ganaron el corazón de la marine. Bell-mère se llevó a Nami y
                            Nojiko a villa Cocoyasi, adoptándolas como sus hijas. </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-dark border-card">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/51158316-fd7e-48ca-b5fe-8542e9dfe357/dbcd4xq-4cb142d8-ecc9-482d-80aa-ccf61221a743.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzUxMTU4MzE2LWZkN2UtNDhjYS1iNWZlLTg1NDJlOWRmZTM1N1wvZGJjZDR4cS00Y2IxNDJkOC1lY2M5LTQ4MmQtODBhYS1jY2Y2MTIyMWE3NDMucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0._GRuGaxpppGiK_x1NXKyOpNGDvsYRvmeADvcPso5XcQ"
                        class="rounded-start img-fluid" alt="...">
                    <div class="card-body text-white">
                        <h5 class="card-title fw-bold">Historia <br><br> <span class="fw-bolder fs-6">Usopp</span></h5>
                        <p class="card-text"> Usopp es el hijo de Yasopp, un pirata que es parte de la tripulación de Shanks
                            "el pelirrojo". Yasopp dejó a Usopp y a su madre para volverse un pirata cuando Usopp era muy
                            joven. Lejos de sentirle rencor, Usopp admiraba a su padre por haber seguido su sueño. </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-dark border-card">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/51158316-fd7e-48ca-b5fe-8542e9dfe357/dbp4u06-9e33eae9-160b-496e-9219-53b9f2ed4fc9.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzUxMTU4MzE2LWZkN2UtNDhjYS1iNWZlLTg1NDJlOWRmZTM1N1wvZGJwNHUwNi05ZTMzZWFlOS0xNjBiLTQ5NmUtOTIxOS01M2I5ZjJlZDRmYzkucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.VSeN6Yl1qc7ChgUkgUYmJsnwe9cVakretEUwp-JjzCA"
                        class="card-img-top rounded-start img-fluid" alt="...">
                    <div class="card-body text-white">
                        <h5 class="card-title fw-bold">Historia <br><br> <span class="fw-bolder fs-6">Sanji Vinsmoke</span>
                        </h5>
                        <p class="card-text">Sanji nació en el North Blue en el seno de la familia Vinsmoke, la familia
                            reinante del Reino de Germa. Él y sus tres hermanos nacieron el mismo día; Sanji es el tercer
                            hijo, siendo el tercer príncipe del reino. Cuando su madre estaba todavía viva, Sanji le
                            preparaba comida.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-dark border-card">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/51158316-fd7e-48ca-b5fe-8542e9dfe357/ddf2y13-c6ec54b0-a4f6-4046-8a57-3549e4245d32.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzUxMTU4MzE2LWZkN2UtNDhjYS1iNWZlLTg1NDJlOWRmZTM1N1wvZGRmMnkxMy1jNmVjNTRiMC1hNGY2LTQwNDYtOGE1Ny0zNTQ5ZTQyNDVkMzIucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.WJ_pAc3e-_4i0okBXtWA_jtNv-L_Vb2EgqWuOdL6X7o"
                        class="card-img-top rounded-start img-fluid" alt="...">
                    <div class="card-body text-white">
                        <h5 class="card-title fw-bold">Historia <br><br> <span class="fw-bolder fs-6">Tony-Tony
                                Chopper</span>
                        </h5>
                        <p class="card-text">Chopper es un reno que siempre sufrió discriminación de parte de su manada, ya
                            que nació con una nariz azul que ningún miembro de la manada poseía. Esta manada pertenecía al
                            antiguo pueblo de Drum. Un día, mientras toda la manada recolectaba frutas para comer, Chopper
                            encontró la Hito Hito no mi, una fruta del diablo.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-dark border-card">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/51158316-fd7e-48ca-b5fe-8542e9dfe357/ddm4w7e-ac8fe41e-5f7c-43dd-a289-067ba4ebcb8c.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzUxMTU4MzE2LWZkN2UtNDhjYS1iNWZlLTg1NDJlOWRmZTM1N1wvZGRtNHc3ZS1hYzhmZTQxZS01ZjdjLTQzZGQtYTI4OS0wNjdiYTRlYmNiOGMucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.XXu9Xo8NS3YXgXSzArJ7TiI4aIioWdvjVt6kwdv_CNE"
                        class="card-img-top rounded-start img-fluid" alt="...">
                    <div class="card-body text-white">
                        <h5 class="card-title fw-bold">Historia <br><br> <span class="fw-bolder fs-6">Nico Robin</span>
                        </h5>
                        <p class="card-text">Nico Robin. Es la séptima integrante de la Piratas del Sombrero de Paja, y fue
                            anteriormente la vicepresidenta de la organización criminal Baroque Works. Comió la Fruta del
                            Diablo Hana Hana no Mi. Es originaria del West Blue. Su sueño es conocer la verdadera historia
                            investigando en los Poneglyphs.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-dark border-card">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/51158316-fd7e-48ca-b5fe-8542e9dfe357/dbm3c0n-5284e6b9-2575-4124-b484-f63ab688ed9c.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzUxMTU4MzE2LWZkN2UtNDhjYS1iNWZlLTg1NDJlOWRmZTM1N1wvZGJtM2Mwbi01Mjg0ZTZiOS0yNTc1LTQxMjQtYjQ4NC1mNjNhYjY4OGVkOWMucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0._mq1Okfa1wP2m90LZ7dHOYpSCyV607I9FA9Y4DYSocw"
                        class="card-img-top rounded-start img-fluid" alt="...">
                    <div class="card-body text-white">
                        <h5 class="card-title fw-bold">Historia <br><br> <span class="fw-bolder fs-6">Franky</span>
                        </h5>
                        <p class="card-text">Franky es un cyborg (mitad androide, mitad humano). Fue el líder de la Franky
                            Family, un grupo de desmanteladores de Water 7 que hacen a la vez el trabajo de cazadores de
                            recompensas. Es el octavo miembro de la tripulación de Luffy tomando el puesto de carpintero.
                            Franky nació en el South Blue.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-dark border-card">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/fa479846-1b0e-4c52-b7c5-905a352fcc4a/d65d6fw-e649d091-847d-4b1d-897a-b1c976a00f90.png/v1/fill/w_1024,h_1249,strp/brook_soul_king_by_orochimarusama1_d65d6fw-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTI0OSIsInBhdGgiOiJcL2ZcL2ZhNDc5ODQ2LTFiMGUtNGM1Mi1iN2M1LTkwNWEzNTJmY2M0YVwvZDY1ZDZmdy1lNjQ5ZDA5MS04NDdkLTRiMWQtODk3YS1iMWM5NzZhMDBmOTAucG5nIiwid2lkdGgiOiI8PTEwMjQifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.N5qQbIi_uCGPMP_WVKoNzNZSPI1VZ49JDmvrV46ju-4"
                        class="card-img-top rounded-start img-fluid" alt="...">
                    <div class="card-body text-white">
                        <h5 class="card-title fw-bold">Historia <br><br> <span class="fw-bolder fs-6">Brook</span>
                        </h5>
                        <p class="card-text">Brook era el guardián de un antiguo reinado en West Blue, razón por la cual
                            también es un espadachín. Sin embargo, por ahora es desconocido por qué dejó este reinado. Brook
                            se unió tiempo después a los piratas Rumbar, lidereados por el capitán Yorki "el Calicó".
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-dark border-card">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/fa479846-1b0e-4c52-b7c5-905a352fcc4a/d6tuu8k-69fa0c0b-8aec-4b5a-a460-1cdc8e6b43ef.png/v1/fill/w_1600,h_1952,strp/jinbei_by_orochimarusama1_d6tuu8k-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTk1MiIsInBhdGgiOiJcL2ZcL2ZhNDc5ODQ2LTFiMGUtNGM1Mi1iN2M1LTkwNWEzNTJmY2M0YVwvZDZ0dXU4ay02OWZhMGMwYi04YWVjLTRiNWEtYTQ2MC0xY2RjOGU2YjQzZWYucG5nIiwid2lkdGgiOiI8PTE2MDAifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.yYpmwFXb6Q1j6Np8jeHMYw-7k8mCy5SVV13xp2ghMhU"
                        class="card-img-top rounded-start img-fluid" alt="...">
                    <div class="card-body text-white">
                        <h5 class="card-title fw-bold">Historia <br><br> <span class="fw-bolder fs-6">Jinbe</span>
                        </h5>
                        <p class="card-text">Jinbe creció en el orfanato que se convirtió en el Distrito Gyojin, junto a
                            Arlong, Macro, y Fisher Tiger. Entrenó en el Dojo de Karate Gyojin a temprana edad y obtuvo un
                            cinturón negro en Karate Gyojin en su infancia.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-dark border-card">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/51158316-fd7e-48ca-b5fe-8542e9dfe357/dep367v-0b3e549a-508e-4024-91ad-d8a582419a10.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzUxMTU4MzE2LWZkN2UtNDhjYS1iNWZlLTg1NDJlOWRmZTM1N1wvZGVwMzY3di0wYjNlNTQ5YS01MDhlLTQwMjQtOTFhZC1kOGE1ODI0MTlhMTAucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.jO8UbnSI3BOAY1ObNbZzi9lO0tFgVgMxEs64cKL18r0"
                        class="card-img-top rounded-start img-fluid" alt="...">
                    <div class="card-body text-white">
                        <h5 class="card-title fw-bold">Historia <br><br> <span class="fw-bolder fs-6">Zeus</span>
                        </h5>
                        <p class="card-text">Zeus la Nube Tormentosa, es un homie que se
                            encuentra fusionado con el sorcery clima tact de Nami. Antes de formar parte del clima-tact, era
                            propiedad de Big Mom, quien lo invocaba con su mano izquierda. Es un tipo especial de
                            homie, ya que está compuesto por un fragmento del alma de la propia Big Mom.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Los Piratas de Roger --}}
        <p class="text-center text-white my-5 fs-3 fw-bold">Los Piratas de Roger</p>
        <p class="text-center text-white mb-5 fs-6 fw-bolder">Los Piratas de Roger fue la banda del que fue conocido como
            el Rey de los Piratas, Gol D. Roger, y la única banda conocida en llegar a Laugh Tale, la última isla del Nuevo
            Mundo, en el Grand Line. Se enfrentaron con el vicealmirante Monkey D. Garp en numerosas ocasiones y fueron los
            rivales más poderosos de los Piratas de Barbablanca.
        </p>
        <div class="row row-cols-1 row-cols-md-2 g-6">
            <div class="col">
                <div class="card h-100 bg-dark border-card border-card">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/51158316-fd7e-48ca-b5fe-8542e9dfe357/deb7c19-3b0c5ae6-7711-4455-8b2d-19894c0256e1.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzUxMTU4MzE2LWZkN2UtNDhjYS1iNWZlLTg1NDJlOWRmZTM1N1wvZGViN2MxOS0zYjBjNWFlNi03NzExLTQ0NTUtOGIyZC0xOTg5NGMwMjU2ZTEucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.gCH_jVitXJ_Fz7QHF2iUnafSUV2lH_sCljDdXA2b0j8"
                        class="card-img-top rounded-start img-fluid" alt="...">
                    <div class="card-body text-white">
                        <h5 class="card-title fw-bold">Historia <br><br> <span class="fw-bolder fs-6">Gol D. Roger</span>
                        </h5>
                        <p class="card-text">Gol D. Roger mejor conocido como Gold Roger, fue el capitán de los Piratas de
                            Roger, siendo a su vez conocido como el Rey de los Piratas, título que le fue concedido tras
                            conquistar todo el Grand Line, y al ser el dueño del legendario tesoro conocido como «One Piece»
                            tras ser el primero junto a su tripulación en llegar a Laugh Tale en los últimos ochocientos
                            años.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-dark border-card">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/51158316-fd7e-48ca-b5fe-8542e9dfe357/dbcd71c-8f0c448c-af86-4bd8-884c-e4fbfff8f1b4.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzUxMTU4MzE2LWZkN2UtNDhjYS1iNWZlLTg1NDJlOWRmZTM1N1wvZGJjZDcxYy04ZjBjNDQ4Yy1hZjg2LTRiZDgtODg0Yy1lNGZiZmZmOGYxYjQucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.js4yy9usa4lTKwnVP-aC0XD9pf6k_FaDHLP-mZ9oNp4"
                        class="card-img-top rounded-start img-fluid" alt="...">
                    <div class="card-body text-white">
                        <h5 class="card-title fw-bold">Historia <br><br> <span class="fw-bolder fs-6">Silvers Rayleigh
                            </span>
                        </h5>
                        <p class="card-text">Silvers Rayleigh, también conocido como Rey Oscuro, o La Mano Derecha del Rey
                            de los Piratas fue el primer oficial de la tripulación de Gol D. Roger y uno de sus fundadores,
                            pero en algún punto posterior a la disolución de la tripulación, se convirtió en ingeniero en el
                            Archipiélago Sabaody y se dedica a recubrir barcos que se preparan para ir a la isla Gyojin. Es
                            también el marido de Shakuyaku.

                            Se convirtió en el maestro de Monkey D. Luffy durante un año y medio, ayudándole a mejorar sus
                            habilidades y enseñándole los tres tipos de haki.</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Tripulación de Sombrero de Paja --}}
        <p class="text-center text-white my-5 fs-3 fw-bold">Piratas del Pelirrojo</p>
        <p class="text-center text-white mb-5 fs-6 fw-bolder">Los Piratas del Pelirrojo, son
            una poderosa banda de piratas que gobiernan el Nuevo Mundo, y es liderada por Shanks el Pelirrojo, uno de los
            Cuatro Emperadores. Esta banda es la responsable de influenciar a dos de los Piratas de Sombrero de Paja, Monkey
            D. Luffy (por parte de Shanks) y Usopp (por parte de su padre, Yasopp).
        </p>
        <div class="row row-cols-1 row-cols-md-4 g-3">
            <div class="col">
                <div class="card h-100 bg-dark border-card border-card">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/51158316-fd7e-48ca-b5fe-8542e9dfe357/dbcd73g-39f78de2-9957-4bcf-92a0-9ec99ea98d77.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzUxMTU4MzE2LWZkN2UtNDhjYS1iNWZlLTg1NDJlOWRmZTM1N1wvZGJjZDczZy0zOWY3OGRlMi05OTU3LTRiY2YtOTJhMC05ZWM5OWVhOThkNzcucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.8BRc6Tx3xx-QHVwgUXphnkKuTjwS1pucV_cHRP1ieVE"
                        class="card-img-top rounded-start img-fluid" alt="...">
                    <div class="card-body text-white">
                        <h5 class="card-title fw-bold">Historia <br><br> <span class="fw-bolder fs-6">Shanks el Pelirrojo
                            </span>
                        </h5>
                        <p class="card-text">Shanks el Pelirrojo, es el capitán de
                            los Piratas del Pelirrojo y uno de los Cuatro Emperadores que gobiernan el Nuevo Mundo.
                            Fue, además, un miembro de la legendaria tripulación de Gol D. Roger, siendo la única banda que
                            logró conquistar con éxito todo Grand Line.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-dark border-card">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/51158316-fd7e-48ca-b5fe-8542e9dfe357/dbo8a0c-fe2d12ad-9ca5-484e-bbb7-fc0d4819f306.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzUxMTU4MzE2LWZkN2UtNDhjYS1iNWZlLTg1NDJlOWRmZTM1N1wvZGJvOGEwYy1mZTJkMTJhZC05Y2E1LTQ4NGUtYmJiNy1mYzBkNDgxOWYzMDYucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.BoM3wd3qpmKmeWJm-sr2Ui0tNTxVytNJUN8jJSptJV8"
                        class="card-img-top rounded-start img-fluid" alt="...">
                    <div class="card-body text-white">
                        <h5 class="card-title fw-bold">Historia <br><br> <span class="fw-bolder fs-6">Benn Beckman</span>
                        </h5>
                        <p class="card-text">Benn Beckman es el primer oficial de los Piratas del Pelirrojo.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-dark border-card">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/51158316-fd7e-48ca-b5fe-8542e9dfe357/dbcd750-1f402005-3ec7-41fe-a428-607567244e79.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzUxMTU4MzE2LWZkN2UtNDhjYS1iNWZlLTg1NDJlOWRmZTM1N1wvZGJjZDc1MC0xZjQwMjAwNS0zZWM3LTQxZmUtYTQyOC02MDc1NjcyNDRlNzkucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.ua0DWQ3GRF6Hse9ffBkLY7FnxhADP4eElMSxXLTcRZQ"
                        class="card-img-top rounded-start img-fluid" alt="...">
                    <div class="card-body text-white">
                        <h5 class="card-title fw-bold">Historia <br><br> <span class="fw-bolder fs-6">Lucky Roux</span>
                        </h5>
                        <p class="card-text">Lucky Roux es un oficial de los Piratas del Pelirrojo, así como su combatiente
                            y cocinero. Él fue el que encontró la fruta Gomu Gomu que comió Luffy. </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-dark border-card">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/51158316-fd7e-48ca-b5fe-8542e9dfe357/de02ep0-d0dddaf2-6a75-4aa8-88a1-747705a69d06.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzUxMTU4MzE2LWZkN2UtNDhjYS1iNWZlLTg1NDJlOWRmZTM1N1wvZGUwMmVwMC1kMGRkZGFmMi02YTc1LTRhYTgtODhhMS03NDc3MDVhNjlkMDYucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.G5NHUtfXriZdb9EOjYPoiDuwy8rijmuuE2KVY2Rhlpg"
                        class="rounded-start img-fluid" alt="...">
                    <div class="card-body text-white">
                        <h5 class="card-title fw-bold">Historia <br><br> <span class="fw-bolder fs-6">Yasopp</span></h5>
                        <p class="card-text"> Yasopp, conocido como Chaser, es uno de los oficial, así como el francotirador y tripulante más veterano de
                            los Piratas del Pelirrojo. Es el padre de Usopp, quien, a su vez, es el francotirador de los
                            Piratas de Sombrero de Paja. </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-dark border-card">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/8105260c-cfc1-463e-b35b-5de2d500fac9/de4o911-c495f6ac-4f7b-43c7-a43a-90960e237e94.png/v1/fill/w_699,h_896,strp/hongou___crew_shanks___one_piece_by_caiquenadal_de4o911-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9ODk2IiwicGF0aCI6IlwvZlwvODEwNTI2MGMtY2ZjMS00NjNlLWIzNWItNWRlMmQ1MDBmYWM5XC9kZTRvOTExLWM0OTVmNmFjLTRmN2ItNDNjNy1hNDNhLTkwOTYwZTIzN2U5NC5wbmciLCJ3aWR0aCI6Ijw9Njk5In1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.BKmtlgs7FJqkfs2CqmsaKAFZDFWZ4O8EeDqDMm6JFIw"
                        class="card-img-top rounded-start img-fluid" alt="...">
                    <div class="card-body text-white">
                        <h5 class="card-title fw-bold">Historia <br><br> <span class="fw-bolder fs-6">Hongo</span>
                        </h5>
                        <p class="card-text">Hongo, es un oficial de los Piratas del Pelirrojo, así como su médico.
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-dark border-card">
                    <img src="https://preview.redd.it/0u6c9tx1cyn81.jpg?auto=webp&s=5d2f59518064b0a325aba03438743ea3e12fd3b5"
                        class="card-img-top rounded-start img-fluid" alt="...">
                    <div class="card-body text-white">
                        <h5 class="card-title fw-bold">Historia <br><br> <span class="fw-bolder fs-6">TBonk Punch</span>
                        </h5>
                        <p class="card-text">Bonk Punch es un oficial de los Piratas del Pelirrojo. Es, junto a Monster, el músico de la banda.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-dark border-card">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/8105260c-cfc1-463e-b35b-5de2d500fac9/de4o8dy-5754660a-f1a8-49df-834b-e312aa8dbf16.png/v1/fill/w_500,h_837,strp/lime_juice___crew_shanks___one_piece_by_caiquenadal_de4o8dy-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9ODM3IiwicGF0aCI6IlwvZlwvODEwNTI2MGMtY2ZjMS00NjNlLWIzNWItNWRlMmQ1MDBmYWM5XC9kZTRvOGR5LTU3NTQ2NjBhLWYxYTgtNDlkZi04MzRiLWUzMTJhYThkYmYxNi5wbmciLCJ3aWR0aCI6Ijw9NTAwIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.6_yC9VEG-RUhNASHocD48Juc_ET4z_p6RR6oCSALzxo"
                        class="card-img-top rounded-start img-fluid" alt="...">
                    <div class="card-body text-white">
                        <h5 class="card-title fw-bold">Historia <br><br> <span class="fw-bolder fs-6">Limejuice</span>
                        </h5>
                        <p class="card-text">Limejuice es un oficial de los Piratas del Pelirrojo.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-dark border-card">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/8105260c-cfc1-463e-b35b-5de2d500fac9/de4of4m-6dbaca24-9e1a-41ef-bde5-e167511e1698.png/v1/fill/w_744,h_1075,strp/building_snake___crew_shanks___one_piece_by_caiquenadal_de4of4m-pre.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTcwMSIsInBhdGgiOiJcL2ZcLzgxMDUyNjBjLWNmYzEtNDYzZS1iMzViLTVkZTJkNTAwZmFjOVwvZGU0b2Y0bS02ZGJhY2EyNC05ZTFhLTQxZWYtYmRlNS1lMTY3NTExZTE2OTgucG5nIiwid2lkdGgiOiI8PTExNzcifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.0f7dtEO0HCgy-8OJyMZ23ht-V0SSU7b5fNNHTjV3ExM"
                        class="card-img-top rounded-start img-fluid" alt="...">
                    <div class="card-body text-white">
                        <h5 class="card-title fw-bold">Historia <br><br> <span class="fw-bolder fs-6">Building Snake</span>
                        </h5>
                        <p class="card-text">Building Snake es un oficial de los Piratas del Pelirrojo, así como su navegante.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Entrega de Baggy --}}

        <p class="text-center text-white my-5 fs-3 fw-bold">Entrega de Buggy</p>
        <p class="text-center text-white mb-5 fs-6 fw-bolder">Los cinco son hombres de avanzada edad, aunque su aspecto
            físico y vejez no han variado en veintidós años. A excepción de uno de ellos, visten con traje negro y llevan
            vello facial. Varios de ellos tienen cicatrices visibles. En la reunión con Sakazuki, se pudo observar que su
            altura es comparable o incluso superior a la del propio almirante de la flota. Sus acciones y decisiones los
            convierten en uno de los principales grupos antagónicos de la serie.</p>
        <div class="row row-cols-2 row-cols-md-4 g-3">
            <div class="col">
                <div class="card h-100 bg-dark border-card">
                    <img src="https://i.pinimg.com/originals/bc/67/1e/bc671e0b412926ea69e476744e7f6118.png"
                        class="rounded-start img-fluid" alt="...">
                    <div class="card-body text-white">
                        <h5 class="card-title fw-bold">Historia <br><br> <span class="fw-bolder fs-6">Buggy</span></h5>
                        <p class="card-text">Este anciano tiene barba regular,su peinado consiste en varios rulos, tiene
                            una
                            cicatriz en el lado izquierdo de su rostro, lleva un sombrero sobre su pelo gris, y esgrime un
                            bastón, en las reuniones siempre permanece sentado. Puede estar basado en Karl Marx,quien fue un
                            célebre sindicalista del siglo XIX.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-dark border-card">
                    <img src="https://i.pinimg.com/originals/c1/f7/90/c1f790977470d8cc86dbdcb3f87eaf64.png"
                        class="rounded-start img-fluid" alt="...">
                    <div class="card-body text-white">
                        <h5 class="card-title fw-bold">Historia <br><br> <span class="fw-bolder fs-6">Alvida</span></h5>
                        <p class="card-text">Él habló con Clover y ordenó a Spandine dispararle al arqueólogo por intentar
                            decir el nombre perdido del Gran Reino. Después de la guerra, también preguntó la conexión entre
                            Luffy y Silvers Rayleigh y reconoció la comprensión de Barbanegra en los territorios de
                            Barbablanca. El etiquetó a la Familia Nefertari de traidores.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-dark border-card">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/51158316-fd7e-48ca-b5fe-8542e9dfe357/dbcd0fw-769eed59-2af9-46a2-a7e9-1a634a105b32.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzUxMTU4MzE2LWZkN2UtNDhjYS1iNWZlLTg1NDJlOWRmZTM1N1wvZGJjZDBmdy03NjllZWQ1OS0yYWY5LTQ2YTItYTdlOS0xYTYzNGExMDViMzIucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.LtEvNEaC73cv2olVO2Muanjc6eUv674Aurq95leha-k"
                        class="rounded-start img-fluid" alt="...">
                    <div class="card-body text-white">
                        <h5 class="card-title fw-bold">Historia <br><br> <span class="fw-bolder fs-6">Galdino el
                                usurero</span></h5>
                        <p class="card-text">Fue él quien cogió el nuevo cartel de Luffy y comentó la traición de Crocodile
                            y como no deberían permitir dejar libre a Luffy. También comentó que Aokiji debería tener
                            cuidado con su puesto, por sus despreocupadas payasadas. Cuando la guerra contra los Piratas de
                            Barbablanca había terminado, se lamentó de la deserción de Jinbe como uno de los Siete Señores
                            de la Guerra del Mar (cuyo título le había sido otorgado para mejorar las relaciones
                            interespecies) e indica sobre la forma característica y única de Barbanegra de poseer dos
                            poderes de fruta del diablo le ha permitido estar más cerca del puesto de Emperador del Mar que
                            cualquier otro pirata. </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-dark border-card">
                    <img src="https://static.wikia.nocookie.net/onepiece/images/e/ed/Cabaji_in_Bounty_Rush.png/revision/latest?cb=20190720213204"
                        class="rounded-start img-fluid" alt="...">
                    <div class="card-body text-white">
                        <h5 class="card-title fw-bold">Historia</h5>
                        <p class="card-text">Es quien demandó un reemplazo en los Siete Señores de la Guerra del Mar para
                            cubrir la vacante dejada por Crocodile,es quien responde a los marines para informar que Shanks
                            y Barbablanca se han encontrado con éxito. Después de la batalla de Marineford, él estaba
                            limpiando su espada al comentar sobre el colapso de los Tres Grandes Poderes y la forma de
                            ocupar de nuevo las tres vacantes libres que quedaron en los Siete Señores de la Guerra del Mar,
                            así como la «D» es un nombre que significa «peligro» para el mundo. </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-dark border-card">
                    <img src="https://anime.atsit.in/es/wp-content/uploads/2022/07/quienes-son-los-cinco-ancianos-en-one-piece-que-tan-fuertes-e-importantes-son-4.webp"
                        class="rounded-start img-fluid" alt="...">
                    <div class="card-body text-white">
                        <h5 class="card-title fw-bold">Historia</h5>
                        <p class="card-text">Este anciano no habla o contribuye hasta después de la muerte de Barbablanca y
                            el aumento de la Nueva Era. Él habló acerca de ocupar las vacantes de los Siete Señores de la
                            Guerra del Mar con piratas influyentes cuando hacen sus movimientos, y ponderar si Marco «el
                            Fénix» y el resto de los Piratas de Barbablanca, o uno de los Emperadores del Mar restantes,
                            sería capaz de hacer caer a Barbanegra. El reveló el verdadero nombre de la Fruta Gomu Gomu.
                        </p>
                    </div>
                </div>
            </div>
        </div>


        {{-- Los Cinco Ancianos --}}

        <p class="text-center text-white my-5 fs-3 fw-bold">Los Cinco Ancianos</p>
        <p class="text-center text-white mb-5 fs-6 fw-bolder">Los cinco son hombres de avanzada edad, aunque su aspecto
            físico y vejez no han variado en veintidós años. A excepción de uno de ellos, visten con traje negro y llevan
            vello facial. Varios de ellos tienen cicatrices visibles. En la reunión con Sakazuki, se pudo observar que su
            altura es comparable o incluso superior a la del propio almirante de la flota. Sus acciones y decisiones los
            convierten en uno de los principales grupos antagónicos de la serie.</p>
        <div class="row row-cols-1 row-cols-md-4 g-3">
            <div class="col">
                <div class="card h-100 bg-dark border-card">
                    <img src="https://anime.atsit.in/es/wp-content/uploads/2022/07/quienes-son-los-cinco-ancianos-en-one-piece-que-tan-fuertes-e-importantes-son.webp"
                        class="rounded-start img-fluid" alt="...">
                    <div class="card-body text-white">
                        <h5 class="card-title fw-bold">Historia</h5>
                        <p class="card-text">Este anciano tiene barba regular,su peinado consiste en varios rulos, tiene
                            una
                            cicatriz en el lado izquierdo de su rostro, lleva un sombrero sobre su pelo gris, y esgrime un
                            bastón, en las reuniones siempre permanece sentado. Puede estar basado en Karl Marx,quien fue un
                            célebre sindicalista del siglo XIX.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-dark border-card">
                    <img src="https://anime.atsit.in/es/wp-content/uploads/2022/07/quienes-son-los-cinco-ancianos-en-one-piece-que-tan-fuertes-e-importantes-son-1.webp"
                        class="rounded-start img-fluid" alt="...">
                    <div class="card-body text-white">
                        <h5 class="card-title fw-bold">Historia</h5>
                        <p class="card-text">Él habló con Clover y ordenó a Spandine dispararle al arqueólogo por intentar
                            decir el nombre perdido del Gran Reino. Después de la guerra, también preguntó la conexión entre
                            Luffy y Silvers Rayleigh y reconoció la comprensión de Barbanegra en los territorios de
                            Barbablanca. El etiquetó a la Familia Nefertari de traidores.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-dark border-card">
                    <img src="https://anime.atsit.in/es/wp-content/uploads/2022/07/quienes-son-los-cinco-ancianos-en-one-piece-que-tan-fuertes-e-importantes-son-2.webp"
                        class="rounded-start img-fluid" alt="...">
                    <div class="card-body text-white">
                        <h5 class="card-title fw-bold">Historia</h5>
                        <p class="card-text">Fue él quien cogió el nuevo cartel de Luffy y comentó la traición de Crocodile
                            y como no deberían permitir dejar libre a Luffy. También comentó que Aokiji debería tener
                            cuidado con su puesto, por sus despreocupadas payasadas. Cuando la guerra contra los Piratas de
                            Barbablanca había terminado, se lamentó de la deserción de Jinbe como uno de los Siete Señores
                            de la Guerra del Mar (cuyo título le había sido otorgado para mejorar las relaciones
                            interespecies) e indica sobre la forma característica y única de Barbanegra de poseer dos
                            poderes de fruta del diablo le ha permitido estar más cerca del puesto de Emperador del Mar que
                            cualquier otro pirata. </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-dark border-card">
                    <img src="https://anime.atsit.in/es/wp-content/uploads/2022/07/quienes-son-los-cinco-ancianos-en-one-piece-que-tan-fuertes-e-importantes-son-3.webp"
                        class="rounded-start img-fluid" alt="...">
                    <div class="card-body text-white">
                        <h5 class="card-title fw-bold">Historia</h5>
                        <p class="card-text">Es quien demandó un reemplazo en los Siete Señores de la Guerra del Mar para
                            cubrir la vacante dejada por Crocodile,es quien responde a los marines para informar que Shanks
                            y Barbablanca se han encontrado con éxito. Después de la batalla de Marineford, él estaba
                            limpiando su espada al comentar sobre el colapso de los Tres Grandes Poderes y la forma de
                            ocupar de nuevo las tres vacantes libres que quedaron en los Siete Señores de la Guerra del Mar,
                            así como la «D» es un nombre que significa «peligro» para el mundo. </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-dark border-card">
                    <img src="https://anime.atsit.in/es/wp-content/uploads/2022/07/quienes-son-los-cinco-ancianos-en-one-piece-que-tan-fuertes-e-importantes-son-4.webp"
                        class="rounded-start img-fluid" alt="...">
                    <div class="card-body text-white">
                        <h5 class="card-title fw-bold">Historia</h5>
                        <p class="card-text">Este anciano no habla o contribuye hasta después de la muerte de Barbablanca y
                            el aumento de la Nueva Era. Él habló acerca de ocupar las vacantes de los Siete Señores de la
                            Guerra del Mar con piratas influyentes cuando hacen sus movimientos, y ponderar si Marco «el
                            Fénix» y el resto de los Piratas de Barbablanca, o uno de los Emperadores del Mar restantes,
                            sería capaz de hacer caer a Barbanegra. El reveló el verdadero nombre de la Fruta Gomu Gomu.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Nobles Mundiales --}}
        <p class="text-center text-white my-5 fs-3 fw-bold">Nobles Mundiales "Dragones Celestiales"</p>
        <p class="text-center text-white mb-5 fs-6 fw-bolder">Los Nobles Mundiales o también conocidos como Dragones
            Celestiales, son los descendientes de los veinte reyes (en realidad, de 19 de ellos) que destruyeron el Gran
            Reino 800 años atrás, y establecieron lo que es conocido en la actualidad como el Gobierno Mundial.</p>
        <div class="row row-cols-1 row-cols-md-4 g-3">
            <div class="col">
                <div class="card h-100 bg-dark border-card">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/51158316-fd7e-48ca-b5fe-8542e9dfe357/dbcd74d-bb29d708-4139-49ac-a72d-8f114d584e71.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzUxMTU4MzE2LWZkN2UtNDhjYS1iNWZlLTg1NDJlOWRmZTM1N1wvZGJjZDc0ZC1iYjI5ZDcwOC00MTM5LTQ5YWMtYTcyZC04ZjExNGQ1ODRlNzEucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.hu9qHJPLDbKRNOPZN8bzROkKiXwcA-TtflZ1hhpJRpU"
                        class="card-img-top rounded-start img-fluid" alt="...">
                    <div class="card-body text-white">
                        <h5 class="card-title fw-bold">Historia <br><br> <span class="fw-bolder fs-6">Saint Roswald</span>
                        </h5>
                        <p class="card-text">Este anciano tiene barba regular,su peinado consiste en varios rulos, tiene
                            una cicatriz en el lado izquierdo de su rostro, lleva un sombrero sobre su pelo gris, y esgrime
                            un bastón, en las reuniones siempre permanece sentado. Puede estar basado en Karl Marx,quien fue
                            un célebre sindicalista del siglo XIX.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-dark border-card">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/51158316-fd7e-48ca-b5fe-8542e9dfe357/dbcd74h-ba8722da-f244-40a9-8dfa-9a7b19cae5fa.png/v1/fit/w_414,h_331,strp/saint_charloss_by_bodskih_dbcd74h-414w.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9NTEyIiwicGF0aCI6IlwvZlwvNTExNTgzMTYtZmQ3ZS00OGNhLWI1ZmUtODU0MmU5ZGZlMzU3XC9kYmNkNzRoLWJhODcyMmRhLWYyNDQtNDBhOS04ZGZhLTlhN2IxOWNhZTVmYS5wbmciLCJ3aWR0aCI6Ijw9NjQwIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.xl6rcA0ulfW-24Dek7r00PC7pBRM2MWL6rbJmgyANwg"
                        class="card-img-top rounded-start img-fluid" alt="...">
                    <div class="card-body text-white">
                        <h5 class="card-title fw-bold">Historia <br><br> <span class="fw-bolder fs-6">Saint Charlos</span>
                        </h5>
                        <p class="card-text">Él habló con Clover y ordenó a Spandine dispararle al arqueólogo por intentar
                            decir el nombre perdido del Gran Reino. Después de la guerra, también preguntó la conexión entre
                            Luffy y Silvers Rayleigh y reconoció la comprensión de Barbanegra en los territorios de
                            Barbablanca. El etiquetó a la Familia Nefertari de traidores.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-dark border-card">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/51158316-fd7e-48ca-b5fe-8542e9dfe357/dbcd74a-2381dc86-b36f-41f4-8233-1c74a8247ba1.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzUxMTU4MzE2LWZkN2UtNDhjYS1iNWZlLTg1NDJlOWRmZTM1N1wvZGJjZDc0YS0yMzgxZGM4Ni1iMzZmLTQxZjQtODIzMy0xYzc0YTgyNDdiYTEucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.SUmDnl0J4TjJykKm48OdFXWNB-w7SsbYTQ5c-AOtbZk"
                        class="card-img-top rounded-start img-fluid" alt="...">
                    <div class="card-body text-white">
                        <h5 class="card-title fw-bold">Historia <br><br> <span class="fw-bolder fs-6">Saint
                                Shalulia</span></h5>
                        <p class="card-text">Fue él quien cogió el nuevo cartel de Luffy y comentó la traición de Crocodile
                            y como no deberían permitir dejar libre a Luffy. También comentó que Aokiji debería tener
                            cuidado con su puesto, por sus despreocupadas payasadas. Cuando la guerra contra los Piratas de
                            Barbablanca había terminado, se lamentó de la deserción de Jinbe como uno de los Siete Señores
                            de la Guerra del Mar (cuyo título le había sido otorgado para mejorar las relaciones
                            interespecies) e indica sobre la forma característica y única de Barbanegra de poseer dos
                            poderes de fruta del diablo le ha permitido estar más cerca del puesto de Emperador del Mar que
                            cualquier otro pirata. </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-dark border-card">
                    <img src="https://static.wikia.nocookie.net/villains/images/0/02/Saint_Jalmack_render.png/revision/latest?cb=20210808093012"
                        class="rounded-start img-fluid" alt="...">
                    <div class="card-body text-white">
                        <h5 class="card-title fw-bold">Historia <br><br> <span class="fw-bolder fs-6">Saint Jalmack</span>
                        </h5>
                        <p class="card-text">Es quien demandó un reemplazo en los Siete Señores de la Guerra del Mar para
                            cubrir la vacante dejada por Crocodile,es quien responde a los marines para informar que Shanks
                            y Barbablanca se han encontrado con éxito. Después de la batalla de Marineford, él estaba
                            limpiando su espada al comentar sobre el colapso de los Tres Grandes Poderes y la forma de
                            ocupar de nuevo las tres vacantes libres que quedaron en los Siete Señores de la Guerra del Mar,
                            así como la «D» es un nombre que significa «peligro» para el mundo. </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-dark border-card">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/e8ec609a-f5e5-4a17-8390-9f819fcd8e1b/ddgzdmp-b857f2cd-d1b3-4d74-a0c5-2bfc4c012e3d.png/v1/fill/w_640,h_512,strp/saint_donquixote_mjosgard_by_kaizokujotei_ddgzdmp-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9NTEyIiwicGF0aCI6IlwvZlwvZThlYzYwOWEtZjVlNS00YTE3LTgzOTAtOWY4MTlmY2Q4ZTFiXC9kZGd6ZG1wLWI4NTdmMmNkLWQxYjMtNGQ3NC1hMGM1LTJiZmM0YzAxMmUzZC5wbmciLCJ3aWR0aCI6Ijw9NjQwIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.Bdpsyrps_jvypHyLdSh7DlEC-aVL-AnsfscU8FxoGrQ"
                        class="card-img-top rounded-start img-fluid" alt="...">
                    <div class="card-body text-white">
                        <h5 class="card-title fw-bold">Historia <br><br> <span class="fw-bolder fs-6">Saint
                                Mjosgard</span></h5>
                        <p class="card-text">Este anciano no habla o contribuye hasta después de la muerte de Barbablanca y
                            el aumento de la Nueva Era. Él habló acerca de ocupar las vacantes de los Siete Señores de la
                            Guerra del Mar con piratas influyentes cuando hacen sus movimientos, y ponderar si Marco «el
                            Fénix» y el resto de los Piratas de Barbablanca, o uno de los Emperadores del Mar restantes,
                            sería capaz de hacer caer a Barbanegra. El reveló el verdadero nombre de la Fruta Gomu Gomu.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
