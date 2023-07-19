<main>

    <div class="container-lg">
        <div class="row">
            <!-- Section header -->
            <div class="col-lg-6">
                <section id="header">
                    <div class="container">
                        
                        <div class="justify-content-start">
                            <a href="/cars"
                            class="text-decoration-none">
                                <span>
                                    <button class="btn">
                                        <i class="bi bi-arrow-left"></i>
                                        Retour à la liste
                                    </button>
                                </span>
                            </a>
                        </div>
                        
                    <?php
                    // Récupérer les données binaires de l'image depuis la base de données
                    $imageData = $details->image;
                    ?>
                    
                    <img class="mb-3 mt-5" src="data:image/jpeg;base64, <?= $imageData ?>"
                    alt="ImageBoucle" class="img-fluid">
                    </div>
                </section>
            </div>
            
            <!-- Section description -->
            <div class="col-lg-6">
                <div class="row">

                    <div class="col-lg-12">
                        <section id="description">
                            <div class="m-2 fw-4"><p>Hot Sale</p></div>
                            <div class="m-2 d-lg-flex">
                                <h1><?= $details->marque?>®</h1>
                                
                                <h2><?= $details->description?></h2>
                            </div>
                            <div class="m-2">
                                <h3>Année de la mise en circulation :
                                    <?= $details->annee?>
                                </h3>
                            </div>
                            <div class="m-3 mt-5 d-flex">
                                <h4 class=""> <?= $details->modele?></h4>

                                <!-- <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i> -->
                                
                            </div>
                            <div class="mb-2">
                                <h5 class="m-3 mt-5">Description :</h5>
                                <ul class="list-unstyled">
                                    <li><p><?= $details->description?></p></li>
                                    <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Odit inventore possimus repudiandae molestiae quaerat cum, velit,
                                    saepe excepturi itaque officia aperiam neque voluptate atque! Impedit
                                    veritatis magni quibusdam labore ea?</p></li>
                                </ul>
                            </div>
                        </section>
                    </div>

                    <!-- Section image modal & poids -->
                    <div class="col-lg-12">
                        <section id="modal-image">
                            <div>
                                
                                <div class="m-2">
                                    <button class="btn" data-bs-toggle="modal" data-bs-target="#imageModal1">
                                        <img
                                        width="50px"
                                        height="50px"
                                        src="/Assets/images/Car_details/miniature-1.jpg"
                                        alt="miniature-1">
                                    </button>
                                    <button class="btn" data-bs-toggle="modal" data-bs-target="#imageModal2">
                                        <img
                                        width="50px"
                                        height="50px"
                                        src="/Assets/images/Car_details/miniature-2.jpg"
                                        alt="miniature-1">
                                    </button>
                                    <button class="btn" data-bs-toggle="modal" data-bs-target="#imageModal3">
                                        <img
                                        width="50px"
                                        height="50px"
                                        src="/Assets/images/Car_details/miniature-3.jpg"
                                        alt="miniature-1">
                                    </button>
                                </div>

                                <div class="mb-3 mt-4">
                                    <h5 class="m-2 mb-4">Kilométrage & Prix :</h5>
                                    <div class="btn my-btn-danger mb-2 btn-danger"> <?= $details->kilometrage?> km
                                    </div>
                                    <div class="btn my-btn-danger mb-2 btn-danger"> <?= $details->prix?> €
                                    </div>
                                </div>

                            </div>
                        </section>
                    </div>

                    <!-- Modal 1 -->
                    <div
                    class="modal fade"
                    id="imageModal1"
                    tabindex="-1"
                    aria-labelledby="imageModalLabel1"
                    aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="imageModalLabel1">Image 1</h5>
                                    <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <img
                                            src="/Assets/images/Car_details/miniature-1.jpg"
                                            alt="miniature-1"
                                            class="img-fluid">
                                        </div>
                                        <div class="col-lg-6">
                                            <h6>Title</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Donec accumsan, ligula id convallis imperdiet,
                                                lorem nisl elementum mi, non finibus sem nisi eu ante.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button
                                    type="button"
                                    class="btn btn-secondary"
                                    data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <!-- Modal 2 -->
                    <div
                    class="modal fade"
                    id="imageModal2"
                    tabindex="-1"
                    aria-labelledby="imageModalLabel2"
                    aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="imageModalLabel2">Image 2</h5>
                                    <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                    <img
                                    width= "480px"
                                    height= "320px"
                                    src="/Assets/images/Car_details/miniature-2.jpg"
                                    alt="miniature-2"
                                    class="img-fluid">
                                </div>
                                <div class="col-lg-6">
                                            <h6>Title</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Donec accumsan, ligula id convallis imperdiet,
                                                lorem nisl elementum mi, non finibus sem nisi eu ante.
                                            </p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Donec accumsan, ligula id convallis imperdiet,
                                                lorem nisl elementum mi, non finibus sem nisi eu ante.
                                            </p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Donec accumsan, ligula id convallis imperdiet,
                                                lorem nisl elementum mi, non finibus sem nisi eu ante.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                        <button
                                        type="button"
                                        class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Modal 3 -->
                    <div
                    class="modal fade"
                    id="imageModal3" tabindex="-1"
                    aria-labelledby="imageModalLabel3"
                    aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="imageModalLabel3">Image 3</h5>
                                    <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                    <img src="/Assets/images/Car_details/miniature-3.jpg"
                                    alt="miniature-3"
                                    class="img-fluid">
                                </div>
                                <div class="col-lg-6">
                                            <h6>Title</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Donec accumsan, ligula id convallis imperdiet,
                                                lorem nisl elementum mi, non finibus sem nisi eu ante.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                        <button
                                        type="button"
                                        class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

</main>
