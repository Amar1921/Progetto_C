<?php
setcookie("progetto", "C", time() + 3600 * 365);
setcookie("cf", "SYLMRA91T05Z343W", time() + 3600 * 365);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Progetto_C</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- SCRIPT -->
    <script defer src="../dist/main.js"></script>
</head>
<body
<div class="container">
    <div class="divider"></div>
    <div class="heading">
        <h2>Product Information</h2>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-8">
            <!-- FORMULAIRE -->
            <form id="contact-form" method="get" action="https://dev.gestisconet.it/candidate/endpoint.php
" role="form">
                <div class="row">
                    <div class="col-md-6">
                        <label for="cf"> Codici Fiscale<span class="blue">*</span></label>
                        <input type="text" name="cf" class="form-control"
                               value="<?php echo $_COOKIE["cf"]; ?>"/>
                    </div>
                    <div class="col-md-6">
                        <label for="description">Progetto <span class="blue">*</span></label>
                        <input type="text" name="progetto" value="<?php echo $_COOKIE["progetto"]; ?>"
                               class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="codice"> Codice <span class="blue">*</span></label>
                        <input type="text" name="codice" class="form-control" placeholder="Codici">
                    </div>
                    <div class="col-md-6">
                        <label for="description">Descrizione <span class="blue">*</span></label>
                        <input type="text" name="descrizione" class="form-control"
                               placeholder="Description product">
                    </div>
                    <div class="col-md-6">
                        <label for="prezzo">Prezzo <span class="blue">*</span></label>
                        <input type="text" name="prezzo" class="form-control" placeholder="Prezzo (&euro;)">
                    </div>
                    <div class="col-md-6">
                        <label for="barcode">Barcode</label>
                        <input type="tel" name="barcode" class="form-control" placeholder="code barre">
                    </div>
                    <div class="col-md-12 ">
                        <div class="form-inline my-2 d-flex justify-content-center">
                            <section>
                                <select name="categoria" style="min-width: 50px" class="custom-select mt-3 mb-1 mx-1">
                                    <option selected>Categorie...</option>
                                    <option value="1">Cat1</option>
                                    <option value="2">Cat2</option>
                                    <option value="3">Cat3</option>
                                </select>
                            </section>
                            <section>
                                <select name="sottocategoria" class="custom-select mt-3 mb-1 mx-1">
                                    <option selected>Sous Categorie...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </section>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="button1" value="Envoyer">Envoyer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- FOOTER -->
<div class="footer mt-4">
    <h4 class="text-center">Copyrigth&copy; <span id="date"> </span> amarsyll</h4>
</div>

</body>

</html>
