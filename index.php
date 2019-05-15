<?php

if(isset($_POST["enregistrer"])){
    if(isset($_POST) && !empty($_POST["nom"]) && !empty($_POST["num_recu"]) && !empty($_POST["nom_donateur"])){

        $num_recu = htmlspecialchars(trim(addslashes($_POST["num_recu"])));
        $nom = htmlspecialchars(trim(addslashes($_POST["nom"])));
        $numero = htmlspecialchars(trim(addslashes($_POST["numero"])));
        $rue = htmlspecialchars(trim(addslashes($_POST["rue"])));
        $code_postal = htmlspecialchars(trim(addslashes($_POST["code_postal"])));
        $ville = htmlspecialchars(trim(addslashes($_POST["ville"])));
        $objet = htmlspecialchars(trim(addslashes($_POST["objet"])));
        $type_asso = htmlspecialchars(trim(addslashes($_POST["type_asso"])));
        
        // INFOS DONATEUR
        $nom_donateur = htmlspecialchars(trim(addslashes($_POST["nom_donateur"])));
        $prenom_donateur = htmlspecialchars(trim(addslashes($_POST["prenom_donateur"])));
        $adresse_donateur = htmlspecialchars(trim(addslashes($_POST["adresse_donateur"])));
        $code_postal_donateur = htmlspecialchars(trim(addslashes($_POST["code_postal_donateur"])));
        $ville_donateur = htmlspecialchars(trim(addslashes($_POST["ville_donateur"])));
        $somme = htmlspecialchars(trim(addslashes($_POST["somme"])));
        $somme_en_lettre = htmlspecialchars(trim(addslashes($_POST["somme_en_lettre"])));
        $date_versement = htmlspecialchars(trim(addslashes($_POST["date_versement"])));
        $cgi = htmlspecialchars(trim(addslashes($_POST["cgi"])));
        $forme_du_don = htmlspecialchars(trim(addslashes($_POST["forme_du_don"])));
        $nature_du_don = htmlspecialchars(trim(addslashes($_POST["nature_du_don"])));
        $don_numeraire = htmlspecialchars(trim(addslashes($_POST["don_numeraire"])));
        
        



        
    };
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire donateur</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <form method="POST" action="pdfeditor.php" accept-charset="utf-8">  
        <div class="form-row">
                <div class="form-group">
                    <label for="nom">Numéro d'ordre du reçu</label>
                    <input type="number" class="form-control" id="nom" name="num_recu" required>
                </div>
            </div>
            <h1 class="h3">Bénéficiaire des versements </h2>
            <div class="form-row">
                <div class="form-group">
                    <label for="nom">Nom ou dénomination</label>
                    <input type="text" class="form-control" id="nom" placeholder="Entrez votre nom" name="nom" required>
                </div>
            </div>
            <span>Adresse</span>
            <div class="form-row">
                <div class="col-md-2 mb-2">
                    <label for="numero">N°</label>
                    <input type="number" class="form-control" id="numero" placeholder="N°" name="numero" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="rue">Rue</label>
                    <input type="text" class="form-control" id="rue" placeholder="Rue" name="rue" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="code_postal">Code postal</label>
                    <input type="number" class="form-control" id="code_postal" placeholder="Code postal"name="code_postal" required>
                </div> 
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="ville">Ville</label>
                    <input type="text" class="form-control" id="ville" placeholder="Entrez votre ville" name="ville" required> 
                </div>
            </div>
            <div class="form-group">
                <label for="objet">Objet :</label>
                <textarea class="form-control" id="objet" rows="4" name="objet" noresize></textarea>
            </div>

            <h5>Cochez la case concernée (1) : </h5>

            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio1" name="type_asso" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="customRadio1">
                    Association ou fondation reconnue d’utilité publique par décret en date du <input type="date" name="date1" data-date-format="DD MMMM YYYY"> publié au Journal officiel du <input type="date" name="date2"> ou association située dans le département de la Moselle, du Bas-Rhin ou du Haut-Rhin dont la mission a été reconnue d’utilité publique par arrêté en date du <input type="date"  name="date3">
                </label>
            </div>

            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio2" name="type_asso" class="custom-control-input" value="2">
                <label class="custom-control-label" for="customRadio2">
                    Fondation universitaire ou fondation partenariale mentionnées respectivement aux articles L. 719-12 et L. 719-13 du code de l’éducation
                </label>
            </div>
            
            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio3" name="type_asso" class="custom-control-input" value="3">
                <label class="custom-control-label" for="customRadio3">
                    Fondation d’entreprise
                </label>
            </div>

            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio4" name="type_asso" class="custom-control-input" value="4">
                <label class="custom-control-label" for="customRadio4">
                    Oeuvre ou organisme d’intérêt général
                </label>
            </div>

            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio5" name="type_asso" class="custom-control-input" value="5">
                <label class="custom-control-label" for="customRadio5">
                    Musée de France
                </label>
            </div>

            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio6" name="type_asso" class="custom-control-input" value="6">
                <label class="custom-control-label" for="customRadio6">
                    Etablissement d’enseignement supérieur ou d’enseignement artistique public ou privé, d’intérêt général, à but non lucratif
                </label>
            </div>

            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio7" name="type_asso" class="custom-control-input" value="7">
                <label class="custom-control-label" for="customRadio7">
                    Organisme ayant pour objectif exclusif de participer financièrement à la création d’entreprises
                </label>
            </div>

            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio8" name="type_asso" class="custom-control-input" value="8">
                <label class="custom-control-label" for="customRadio8">
                    Association cultuelle ou de bienfaisance et établissement public reconnus d’Alsace–Moselle
                </label>
            </div>

            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio9" name="type_asso" class="custom-control-input" value="9">
                <label class="custom-control-label" for="customRadio9">
                    Organisme ayant pour activité principale l’organisation de festivals
                </label>
            </div>

            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio10" name="type_asso" class="custom-control-input" value="10">
                <label class="custom-control-label" for="customRadio10">
                    Association fournissant gratuitement une aide alimentaire ou des soins médicaux à des personnes en difficultés ou favorisant leur logement
                </label>
            </div>

            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio11" name="type_asso" class="custom-control-input" value="11">
                <label class="custom-control-label" for="customRadio11">
                    Fondation du patrimoine ou fondation ou association qui affecte irrévocablement les dons à la Fondation du patrimoine, en vue de subventionner les travaux prévus par les conventions conclues entre la Fondation du patrimoine et les propriétaires des immeubles (article L. 143-2-1 du code du patrimoine)
                </label>
            </div>

            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio12" name="type_asso" class="custom-control-input" value="12">
                <label class="custom-control-label" for="customRadio12">
                    Etablissement de recherche public ou privé, d’intérêt général, à but non lucratif
                </label>
            </div>

            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio13" name="type_asso" class="custom-control-input" value="13">
                <label class="custom-control-label" for="customRadio13">
                    Entreprise d’insertion ou entreprise de travail temporaire d’insertion (articles L. 5132-5 et L. 5132-6 du code du travail)
                </label>
            </div>

            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio14" name="type_asso" class="custom-control-input" value="14">
                <label class="custom-control-label" for="customRadio14">
                    Association intermédiaire (article L.5132-7 du code du travail)
                </label>
            </div>

            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio15" name="type_asso" class="custom-control-input" value="15">
                <label class="custom-control-label" for="customRadio15">
                    Ateliers et chantiers d’insertion (article L.5132-15 du code du travail)
                </label>
            </div>

            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio16" name="type_asso" class="custom-control-input" value="16">
                <label class="custom-control-label" for="customRadio16">
                    Entreprises adaptées (article L.5213-13 du code du travail)
                </label>
            </div>

            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio17" name="type_asso" class="custom-control-input" value="17">
                <label class="custom-control-label" for="customRadio17">
                    Agence nationale de la recherche (ANR)
                </label>
            </div>

            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio18" name="type_asso" class="custom-control-input" value="18">
                <label class="custom-control-label" for="customRadio18">
                    Société ou organisme agrée de recherche scientifique ou technique (2)
                </label>
            </div>

            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio19" name="type_asso" class="custom-control-input" value="19">
                <label class="custom-control-label" for="customRadio19">
                    Autres organismes : <input type=text name="autre">
                </label>
            </div>
            <br>
            <p>(1) ou n’indiquez que les renseignements concernant l’organisme</p>
            <p>(2) dons effectués par les entreprises</p>

            <!-- Infos du DONATEUR  -->

            <h1 class="h3">Donateur</h2>
            <div class="form-row">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" id="nom" placeholder="Entrez votre nom" name="nom_donateur" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="prenom">Prenom</label>
                    <input type="text" class="form-control" id="prenom" placeholder="Entrez votre prenom" name="prenom_donateur" required> 
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="adresse">Adresse</label>
                    <input type="text" class="form-control" id="adresse" placeholder="Adresse" name="adresse_donateur" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="code_postal">Code postal</label>
                    <input type="number" class="form-control" id="code_postal" placeholder="Code postal"name="code_postal_donateur" required>
                </div> 
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="ville">Ville</label>
                    <input type="text" class="form-control" id="ville" placeholder="Entrez votre ville" name="ville_donateur" required> 
                </div>
            </div>

            <!--  -->
            <p>Le bénéficiaire reconnaît avoir reçu au titre des dons et versements ouvrant droit à réduction
            d’impôt, la somme de :  <input type="number" id="somme" placeholder="€" name="somme" required> </p>

            <!--  -->
            <p>Somme en toutes lettres  <input type="text" id="somme_en_lettre" name="somme_en_lettre" required> </p>

            <!--  -->
            <p>Date du versement ou du don : <input type="date"class="form-control"  name="date_versement" data-date-format="DD MMMM YYYY" required></p>

            <!-- CGI -->
            <p>Le bénéficiaire certifie sur l’honneur que les dons et versements qu’il reçoit ouvrent droit à la
            réduction d’impôt prévue à l’article (3) 
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="cgi" id="cg1" value="1" required>
                    <label class="form-check-label" for="cg1">200 du CGI</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="cgi" id="cgi2" value="2">
                    <label class="form-check-label" for="cgi2">238 du CGI</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="cgi" id="cgi3" value="3">
                    <label class="form-check-label" for="cgi3">978 du CGI</label>
                </div>
            </p>

            <!-- Forme du don  -->
            <p>Forme du don :
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="forme_du_don" id="forme1" value="1" required>
                    <label class="form-check-label" for="forme1">Acte authentique</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="forme_du_don" id="forme2" value="2">
                    <label class="form-check-label" for="forme2">Acte sous seing privé </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="forme_du_don" id="forme3" value="3">
                    <label class="form-check-label" for="forme3">Déclaration de don manuel </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="forme_du_don" id="forme4" value="4">
                    <label class="form-check-label" for="forme4">Autres</label>
                </div>
            </p>

            <!-- Nature du don  -->
            <p>Nature du don :
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="nature_du_don" id="nature1" value="1" required>
                    <label class="form-check-label" for="nature1">Numéraire</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="nature_du_don" id="nature2" value="2">
                    <label class="form-check-label" for="nature2">Titres de sociétés cotés</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="nature_du_don" id="nature3" value="3">
                    <label class="form-check-label" for="nature3">Autres (4)</label>
                </div>
            </p>

            <!-- En cas de don numéraire -->
            <p>En cas de don en numéraire, mode de versement du don : 
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="don_numeraire" id="don_numeraire1" value="1">
                    <label class="form-check-label" for="don_numeraire1">Remise d’espèces</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="don_numeraire" id="don_numeraire2" value="2">
                    <label class="form-check-label" for="don_numeraire2">Chèque</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="don_numeraire" id="don_numeraire3" value="3">
                    <label class="form-check-label" for="don_numeraire3">Virement, prélèvement, carte bancaire</label>
                </div>
            </p>
            <button type="submit" class="btn btn-primary" name="enregistrer">Enregistrer</button>
        </form>
    </div>
</body>
</html>
