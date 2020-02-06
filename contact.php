<?php include_once 'includes/header.php'; ?>

    <section id="page-title" class="py-5 text-light">
        <div class="container mt-5">
            <h1><strong>Contact</strong></h1>
        </div>
    </section>

    <section id="contact-info" class="py-3 text-light">
        <div class="container p-5 scard">
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-md-4">
                    <i class="fas fa-phone-volume"></i>
                    <span>09.88.55.67.42</span>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-envelope-open-text"></i>
                    <span>Gameclub@gmail.com</span>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-home"></i>
                    <span>7 Rue Henri de Gaulle, 44000 Nantes</span>
                </div>
            </div>
        </div>
    </section>

    <section id="contact-form">
        <div class="container p-5 scard">
            <form action="" method="POST">

                <div class="form-row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Prénom</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Téléphone</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" id="">
                </div>

                <div class="form-group">
                    <label for="">Message</label>
                    <textarea class="form-control" id="" rows="8"></textarea>
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="">
                        <label class="form-check-label" for="">Check me out</label>
                    </div>
                </div>

                <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
            </form>

        </div>
    </section>

<?php include_once 'includes/footer.php'; ?>