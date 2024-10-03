
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        .cover-photo {
            height: 200px;
            background: url('https://via.placeholder.com/820x200') center center no-repeat;
            background-size: cover;
        }

        .profile-photo {
            width: 250px;
            height: 250px;
            border-radius: 50%;
            margin-top: -75px;
            border: 5px solid white;
        }

        .profile-info {
            margin-top: 15px;
        }

        .friends-photos img {
            width: 100px;
            height: 100px;
            border-radius: 5px;
            margin: 5px;
        }
    </style>

</div>
    <div class="container-fluid m-0 w-100 p-0">
        <!-- Cover Photo -->
        <div class="cover-photo h-100 ">
            <img class="w-100 "
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYZfae0s7MR-3_HCr0uSEoaDBIyXw0wq8m-Q&s"
                alt="" srcset="">
        </div>


        <!-- Profile Info -->
        <div class="row text-center m-0">
            <div class="col-lg-12 text-center p-0 "> 
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQa4CDlBpe2xLOcxLKDYra_KIeQeh1LxMs7dw&s"
                    alt="Profile Photo" class="profile-photo">
                <h2>Alexander Mayhua</h2>
                <p class="text-muted">alexander.mayhua12@gmail.com</p>
                <button class="btn btn-primary btn-sm">Agregar amigo</button>
                <a href="https://www.messenger.com/?locale=es_ES"> <button
                        class="btn btn-secondary btn-sm">Mensaje</button></a>
            </div>
        </div>

        <div class="m-5">
            <h4>detalles</h4>
            <h5>-vive Huanta</h5>
            <h5>-De Ayacucho</h5>
            <h5>-Soltero</h5>
        </div>
        <div class="col-md-12 text-center pt-5 ">
            <ul class="nav nav-tabs" id="profileTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="timeline-tab" data-toggle="tab" href="#timeline" role="tab"
                        aria-controls="timeline" aria-selected="true">Publicaciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about"
                        aria-selected="false">Videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="friends-tab" data-toggle="tab" href="#friends" role="tab"
                        aria-controls="friends" aria-selected="false">Fotos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="photos-tab" data-toggle="tab" href="#photos" role="tab"
                        aria-controls="photos" aria-selected="false">Amigos</a>
                </li>

            </ul>
            <div class="tab-content" id="profileTabContent" style="height: 100px;">
                <div class="tab-pane fade show active" id="timeline" role="tabpanel" aria-labelledby="timeline-tab">
                    <div class="card mt-3">
                        <div class="card-body">
                            <h5 class="card-title">Nueva Publicacion</h5>
                            <p class="card-text"><img style="width: 400px;"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrigfVCbFBiqUwr2k37tHpOErsRZsSzVWy5w&s"
                                    alt=""></p>
                            <a href="#" class="btn btn-primary">Like</a>
                            <a href="#" class="btn btn-secondary">Commentar</a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Nueva Publicacion</h5>
                            <img style="width: 400px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8CuqDs27n_ttLqfrglx1NKjZw_K2q9H2OmQ&s"
                                alt="">
                                <br>

                            <br>
                            <a href="#" class="btn btn-primary">Like</a>
                            <a href="#" class="btn btn-secondary">Commentar</a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade row " id="about" role="tabpanel" aria-labelledby="about-tab">
                    <div class="card mt-3 row ">
                        <div class="card-body row " style="justify-content: center;" >
                            <h5 class="card-title">video</h5>
                            <iframe class="m-4" style=" width:650px;"  height="325"
                                src="https://www.youtube.com/embed/8pqnb71Y7Es?si=JLzoABrNApIRymmI"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                            <iframe class="m-4"  style=" width:650px;" height="325"
                                src="https://www.youtube.com/embed/8pqnb71Y7Es?si=JLzoABrNApIRymmI"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen>
                            </iframe>


                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="friends" role="tabpanel" aria-labelledby="friends-tab">
                    <div class="card mt-3">
                        <div class="card-body">
                            <h5 class="card-title">Fotos</h5>
                            <div class="friends-photos p-3" >
                                <img style="width: 250px; height: 300px; margin: 20px;"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSG272S1pQI1wyqkkDggahAVQifSusfzjyNCQ&s"
                                    alt="Friend 1">

                                <img style="width: 250px; height: 300px; margin: 20px;"
                                    src="https://www.prensalibre.com/wp-content/uploads/2018/12/ccbc74c6-7149-42c4-aa43-a9c30641fff3.jpg?quality=52"
                                    alt="Friend 1">
                                <img style="width: 250px; height: 300px; margin: 20px;"
                                    src="https://tse2.mm.bing.net/th?id=OIP.6t7muO62q2itNWP23kr9dAHaFQ&pid=Api&P=0&h=180"
                                    alt="Friend 1">
                                <img style="width: 250px; height: 300px; margin: 20;"
                                    src="https://tse4.mm.bing.net/th?id=OIP.6GFZO_8Cx2IEXY5VIiO6xQHaE7&pid=Api&P=0&h=180"
                                    alt="Friend 1">
                                <img style="width: 250px; height: 300px; margin: 20px;"
                                    src="https://tse1.mm.bing.net/th?id=OIP.0KisavXsmDKCIcGBchrUNAHaE8&pid=Api&P=0&h=180"
                                    alt="Friend 1">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="photos" role="tabpanel" aria-labelledby="photos-tab">
                    <div class="container-fluid m-0 p-3 mt-4 row " style="background:rgba(189, 190, 189, 0.277);">
                        <div class="col-lg-3 col-md-4 col-sm-6 p-3 row ">
                            <div class="card " style="min-height: 330px;">
                                <H4></H4>
                                <div class="card-body p-2 pt-1">
                                    <h5 class="card-title text-center row">

                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSG272S1pQI1wyqkkDggahAVQifSusfzjyNCQ&s"
                                            alt="">
                                        <h4>Juan Guisado</h4>
                                    </h5>
                                    <h4 class="btn btn-primary">Agregar Amigo</h4><br>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 p-3 row">
                            <div class="card " style="min-height: 300px;">
                                <H4></H4>
                                <div class="card-body p-2 pt-1">
                                    <h5 class="card-title text-center row">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSG272S1pQI1wyqkkDggahAVQifSusfzjyNCQ&s"
                                            alt="">
                                        <h4>Alon Guisado</h4>
                                    </h5>
                                    <h4 class="btn btn-primary">Agregar Amigo</h4><br>
                                    </h5>
                                    <br>
                                    <div class="text-center">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 p-3 row">
                            <div class="card" style="min-height: 320px;">
                                <H4></H4>
                                <div class="card-body p-2 pt-1">
                                    <h5 class="card-title text-center row">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSG272S1pQI1wyqkkDggahAVQifSusfzjyNCQ&s"
                                            alt="">
                                        <h4>Alexander Guisado</h4>
                                    </h5>
                                    <h4 class="btn btn-primary">Agregar Amigo</h4><br>
                                    </h5>
                                    <br>
                                    <div class="text-center">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 p-3 row">
                            <div class="card" style="min-height: 320px;">

                                <div class="card-body p-2 pt-2">
                                    <h5 class="card-title text-center row">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSG272S1pQI1wyqkkDggahAVQifSusfzjyNCQ&s"
                                            alt="">
                                        <h4>Alex Guisado</h4>
                                    </h5>
                                    <h4 class="btn btn-primary">Agregar Amigo</h4><br>
                                    </h5><br>
                                    <div class="text-center">

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    


