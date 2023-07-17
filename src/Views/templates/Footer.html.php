<footer id="footer">
    <div class="container-fluid">
        <div class="row p-3">
            <div class="col-md-3">

                <h4>Nos horaires</h4>
                <p>Horaires d'ouverture et de fermeture :</p>
                
                <?php if (isset($horaires) && is_array($horaires)) : ?>

                    <?php foreach ($horaires as $horaire) : ?>
                        <p><?php echo $horaire['jour']; ?> :
                            <?php echo $horaire['heure_debut']; ?> / <?php echo $horaire['heure_fin']; ?></p>
                    <?php endforeach; ?>

                <?php endif; ?>


            </div>
            <div class="col-md-3">
                <h4>Liens rapides</h4>
                <a href="#" class="text-decoration-none link-light">
                    <p>FAQ</p>
                </a>
                <a href="#" class="text-decoration-none link-light">
                    <p>Politique de confidentialité</p>
                </a>
                <a href="#" class="text-decoration-none link-light">
                    <p>Conditions d’utilisations</p>
                </a>

            </div>
            <div class="col-md-3">
                <h4>Nos expertises</h4>
                <p>INSTALLATION DES CAMERAS</p>
                <p>INSTALLATION DES GPS</p>
                <p>INSTALLATION ELECTRIQUES</p>
                <p>CAMERAS DE RECUL</p>
                <p>CONTROLE D’ACCES</p>
                <p>ALARMES ANTI-INCENDIE</p>
                <p>CAPTEURS BIOMETRIQUES</p>
                <p>ALARMES ANTI-INTRUSION</p>
            </div>
            <div class="col-md-3">
                <h4>Contact</h4>
                <p><i class="bi bi-geo-alt-fill"></i> 123 Rue du Garage, 75000 Ville</p>
                <p><i class="bi bi-telephone-fill"></i> +1 234 567 890</p>
                <p><i class="bi bi-envelope-fill"></i> contact@example.com</p>
                <h4>Suivez nous sur :</h4>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#"><i
                    class="bi bi-whatsapp link-light fs-1"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i
                    class="bi bi-facebook link-light fs-1"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i
                    class="bi bi-instagram link-light fs-1"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i
                    class="bi bi-twitter link-light fs-1"></i></a></li>
                </ul>
            </div>
</footer>

<section id="copy-right">
    <div class="container-fluid">
        <div class="d-flex flex-wrap justify-content-between align-items-center py-3 my-1 ">

            <a href="#" class="col-md-4 d-flex align-items-center justify-content-start mb-3 mb-md-0
        me-md-autolink-body-emphasistext-decoration-none">
                <img
                src="/ECF_Garage/Assets/images/Header & Footer/Logo_garage.png"
                width="100"
                height="auto"
                alt="Logo Garage">
                </img>
            </a>

            <p class="col-md-4 mb-0 text-body-secondary d-flex align-items-center justify-content-start
        text-uppercase fw-bold fs-5">
                Garage V.Parrot © 2022 tous droits reserves </p>

            <div class="col-md-3 d-flex align-items-center justify-content-end
        me-md-autolink-body-emphasistext-decoration-none">
                <a href="#" class="col-md-4 d-flex align-items-center justify-content-end mb-3 mb-md-0
        me-md-autolink-body-emphasistext-decoration-none">
                    <img
                    src="/ECF_Garage/Assets/images/Header & Footer/bouton_question.png"
                    width="60"
                    height="auto"
                    alt="Logo Garage">
                    </img>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Inclure jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
</script>

<!-- JS du projet -->
<script src="/ECF_Garage/Assets/JS/script.js"></script>
</body>

</html>