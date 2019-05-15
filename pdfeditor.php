<?php
use setasign\Fpdi\Fpdi;

require_once('vendor/setasign/fpdf/fpdf.php');
require_once('vendor/setasign/FPDI/src/autoload.php');

//Données pour pag e1
$num_recu = $_POST["num_recu"];
$nom = $_POST['nom'];
$numero = $_POST['numero'];
$rue = $_POST['rue'];
$code_postal = $_POST['code_postal'];
$ville = $_POST['ville'];
$objet = $_POST["objet"];
$type_asso = $_POST["type_asso"];

// Données du Donateur (page 2)
$nom_donateur = $_POST["nom_donateur"];
$prenom_donateur = $_POST["prenom_donateur"];
$adresse_donateur = $_POST["adresse_donateur"];
$code_postal_donateur = $_POST["code_postal_donateur"];
$ville_donateur = $_POST["ville_donateur"];
$somme = $_POST["somme"];
$somme_en_lettre = $_POST["somme_en_lettre"];
//Format de date d-m-y
$date_versement = date('d-m-Y', strtotime($_POST['date_versement']));
$cgi = $_POST["cgi"];
$forme_du_don = $_POST["forme_du_don"];
$nature_du_don = $_POST["nature_du_don"];

//Vérification si il y a un don numeraire
if(isset($_POST["don_numeraire"])){
    $don_numeraire = $_POST["don_numeraire"];  
}





// initiate FPDI
$pdf = new Fpdi();
// add a page
$pdf->AddPage();
// set the source file
$pdf->setSourceFile('monpdf.pdf');
// import de la page 1
$tplIdx = $pdf->importPage(1);
// use the imported page and place it at position 10,10 with a width of 100 mm
$pdf->useTemplate($tplIdx);
// now write some text above the imported page
$pdf->SetFont('Arial','','12');
$pdf->SetTextColor(0, 0, 0);

//Numero de recu
$pdf->setXY(159,26);
$pdf->Write(0, $num_recu);

//Nom
$pdf->SetXY(12,57);
$pdf->Write(0,$nom);
 
//Numero pour adresse
$pdf->SetXY(18,68);
$pdf->Write(0,$numero);

//Rue
$pdf->SetXY(40,68);
$pdf->Write(0,$rue);

//Code postal
$pdf->SetXY(35,73);
$pdf->Write(0,$code_postal);

//Ville
$pdf->SetXY(75, 73);
$pdf->Write(0,$ville);

//Objet
$pdf->SetXY(14,81);
$pdf->MultiCell(0,5.5,$objet,0);


//Type d'association
switch ($type_asso) {
    case 1:
        $type_asso = "X";
        $pdf->SetXY(12,117);
        $pdf->Write(0, $type_asso);
        if(isset($_POST['date1']) || isset($_POST['date2']) || isset($_POST['date3']) ){
            // Date1
            $date1 = $_POST['date1'];
            $date1 = date('d-m-Y', strtotime($_POST['date1']));;
            $pdf->SetXY(145,116);
            $pdf->Write(0, $date1);
            //Date2
            $date2 = $_POST['date2'];
            $date2 = date('d-m-Y', strtotime($_POST['date2']));;
            $pdf->SetXY(33,121);
            $pdf->Write(0, $date2);
            //Date3
            $date3 = $_POST['date3'];
            $date3 = date('d-m-Y', strtotime($_POST['date3']));;
            $pdf->SetXY(151,126);
            $pdf->Write(0, $date3);
        }
        break;
    case 2:
        $type_asso = "X";
        $pdf->SetXY(12,132);
        $pdf->Write(0, $type_asso);
        break;
    case 3:
        $type_asso = "X";
        $pdf->SetXY(12,142);
        $pdf->Write(0, $type_asso);
        break;
    case 4:
        $type_asso = "X";
        $pdf->SetXY(12,147);
        $pdf->Write(0, $type_asso);
        break;
    case 5:
        $type_asso = "X";
        $pdf->SetXY(12,152);
        $pdf->Write(0, $type_asso);
        break;
    case 6:
        $type_asso = "X";
        $pdf->SetXY(12,157);
        $pdf->Write(0, $type_asso);
        break;
    case 7:
        $type_asso = "X";
        $pdf->SetXY(12,166);
        $pdf->Write(0, $type_asso);
        break;
    case 8:
        $type_asso = "X";
        $pdf->SetXY(12,171);
        $pdf->Write(0, $type_asso);
        break;
    case 9:
        $type_asso = "X";
        $pdf->SetXY(12,176);
        $pdf->Write(0, $type_asso);
        break;
    case 10:
        $type_asso = "X";
        $pdf->SetXY(12,181);
        $pdf->Write(0, $type_asso);
        break;
    case 11:
        $type_asso = "X";
        $pdf->SetXY(12,191);
        $pdf->Write(0, $type_asso);
        break;
    case 12:
        $type_asso = "X";
        $pdf->SetXY(12,206);
        $pdf->Write(0, $type_asso);
        break;
    case 13:
        $type_asso = "X";
        $pdf->SetXY(12,211);
        $pdf->Write(0, $type_asso);
        break;
    case 14:
        $type_asso = "X";
        $pdf->SetXY(12,220);
        $pdf->Write(0, $type_asso);
        break;
    case 15:
        $type_asso = "X";
        $pdf->SetXY(12,226);
        $pdf->Write(0, $type_asso);
        break;
    case 16:
        $type_asso = "X";
        $pdf->SetXY(12,230);
        $pdf->Write(0, $type_asso);
        break;
    case 17:
        $type_asso = "X";
        $pdf->SetXY(12,235);
        $pdf->Write(0, $type_asso);
        break;
    case 18:
        $type_asso = "X";
        $pdf->SetXY(12,240);
        $pdf->Write(0, $type_asso);
        break;
    case 19:
        $type_asso = "X";
        $pdf->SetXY(12,245);
        $pdf->Write(0, $type_asso);
        if(isset($_POST['autre'])){
            $autre_organisme = $_POST['autre'];
            $pdf->SetXY(55,244);
            $pdf->Write(0, $autre_organisme);
        }
        break;
}


//Ajout et édition de la page 2

$pdf->AddPage();
$tplIdx = $pdf->importPage(2);
$pdf->useTemplate($tplIdx); 
$pdf->SetFont('Arial','','12');
$pdf->SetTextColor(0, 0, 0);

//Nom
$pdf->SetXY(12,35);
$pdf->Write(0,$nom_donateur);

//Prenom
$pdf->SetXY(110,35);
$pdf->Write(0,$prenom_donateur);

//Adresse
$pdf->SetXY(12,51);
$pdf->Write(0,$adresse_donateur);

//Code postal
$pdf->SetXY(35,57);
$pdf->Write(0,$code_postal_donateur);

//Ville
$pdf->SetXY(86,57
);
$pdf->Write(0,$ville_donateur);

//Sommz
$pdf->SetXY(35,90.5);
$pdf->Write(0,$somme);

//Somme en lettre 
$pdf->SetXY(61,101);
$pdf->Write(0,$somme_en_lettre);

//Date du versement
$pdf->SetXY(68,111);
$pdf->Write(0,$date_versement);

//CGI
switch ($cgi) {
    case 1:
        $cgi = "X";
        $pdf->SetXY(85,129);
        $pdf->Write(0, $cgi);
    
        break;
    case 2:
        $cgi = "X";
        $pdf->SetXY(118.5,129);
        $pdf->Write(0, $cgi);
        break;
    case 3:
        $cgi = "X";
        $pdf->SetXY(161,129);
        $pdf->Write(0, $cgi);
        break;
}

//Forme du don
switch ($forme_du_don) {
    case 1:
        $forme_du_don = "X";
        $pdf->SetXY(12,150);
        $pdf->Write(0, $forme_du_don);
    
        break;
    case 2:
        $forme_du_don = "X";
        $pdf->SetXY(51,150);
        $pdf->Write(0, $forme_du_don);
        break;
    case 3:
        $forme_du_don = "X";
        $pdf->SetXY(106.5,150);
        $pdf->Write(0, $forme_du_don);
        break;
    case 4:
        $forme_du_don = "X";
        $pdf->SetXY(159,150);
        $pdf->Write(0, $forme_du_don);
        break;
}

//Nature du don
switch ($nature_du_don) {
    case 1:
        $nature_du_don = "X";
        $pdf->SetXY(12,171);
        $pdf->Write(0, $nature_du_don);
        //En cas de con numéraire
        switch(isset($_POST['don_numeraire']))
        {   case 1:
                $don_numeraire = "X";
                $pdf->SetXY(12,192.5);
                $pdf->Write(0, $don_numeraire);
            break;
            case 2:
                $don_numeraire = "X";
                $pdf->SetXY(52,192.5);
                $pdf->Write(0, $don_numeraire);
            break;
            case 3:
                $don_numeraire = "X";
                $pdf->SetXY(107.5,192.5);
                $pdf->Write(0, $don_numeraire);
            break;
             
        }
        break;
    case 2:
        $nature_du_don = "X";
        $pdf->SetXY(51,171);
        $pdf->Write(0, $nature_du_don);
        break;
    case 3:
        $nature_du_don = "X";
        $pdf->SetXY(107,171);
        $pdf->Write(0, $nature_du_don);
        break;
}

//Date et signature
$date_actuel = date('d-m-y');
$pdf->SetXY(140,265);
$pdf->Write(0, $date_actuel);

//On génère le pdf avec les données
$pdf->Output();

