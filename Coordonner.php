<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ESTA</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/USA/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/USA/css/style-esta.css">
        <script src="<?php echo base_url(); ?>assets/jquery/jquery-3.6.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/USA/js/script.js"></script>
        <script src="<?php echo base_url(); ?>assets/USA/js/script_coordonnee.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap-5.2.2-dist/css/bootstrap.min.css">
        <script src="<?php echo base_url(); ?>assets/bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>
        <link href="<?php echo base_url(); ?>assets/fontawesome/css/fontawesome.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/fontawesome/css/brands.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/fontawesome/css/solid.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/fontawesome/css/regular.css" rel="stylesheet">

    </head>
    <body id="body">
        <?php
            $this->load->view('Include/Menu');
        ?>
        <div class="text-center fs-3 text-white bg-success pt-5 pb-5" style="
            
            background-image:url('<?php echo base_url(); ?>assets/USA/image/washington.jpg');
            background-repeat: no-repeat;
            background-position: 99% 65%;
            ">
            Formulaire ESTA en ligne
        </div>
        
        <div class="container pe-4 ps-4">
            <!--TITRE-->
            <section class=" pe-5 ps-5">
                <h1 class="fs-4 text-center mb-5 h1_demande fw-semibold a_link">Faites une demande d'ESTA</h1>
                <p>
                Veuillez entrer tous les renseignements demandés. Chaque membre de votre groupe de voyage doit remplir une demande séparée. Veuillez donner toutes les réponses en anglais.
                </p>
            </section>
            <!--TITRE-->
            <!--FORMULAIRE-->
            <section id="sct_A" class=" bg-white shadow-sm pe-5 ps-5">
                <!--AIDE-->
                <!--STEP PROGRESS-->
                <div id="dv_step"  style="display:none">
                    <div class="d-flex flex-row justify-content-center mb-3">
                        <div class="step step1">
                            <div class="d-flex flex-row">
                                <div class=""><span class="badge me-3 mt-3 rounded-pill text-bg-light">1</span></div>
                                <div class=""><span>Informations personnelles<span></div>
                            </div>    
                        </div>    
                        <div class="step step1">
                            <div class="d-flex flex-row">
                                <div class=""><span class="badge me-3 mt-3 rounded-pill text-bg-light">2</span></div>
                                <div class=""><span>Coordonnées personnelles<span></div>
                            </div>
                        </div>
                        <div class="triangle step1left"></div>
                        <div class="step step1left">Passport Information</div>
                        <div class="step step1left">Voyage Information</div>
                        <div class="step step1left">Emploi Information</div>
                        <div class="step step1left">Révision paiement</div>
                        <div class="step step1left">Téléchargement ESTA</div>
                    </div>


                </div>
                <!--RESPONSIVE STEP-->
                <h1 id="h_step" style="display:none" class="text-center fs-5 border border-success pb-3 pt-3 text-success">Coordonnées personnelles</h1>
                <!--RESPONSIVE STEP-->
                <!--STEP PROGRESS-->
                <!--AIDE-->
                
                <!--AIDE-->
                <!--FORM-->
                <form id="form_coord" method="POST" action="<?php echo base_url(); ?>USA/ESTA/FormCoordonner">
                    <div class="row mt-5">
                        <div class="col-lg-6 col_coord1">
                            <h1 class="fs-5 text-center h_form">Vos coordonnées personnelles</h1>
                            <!--INPUT-->
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">*  </span>Ligne d’adresse 1</label>
                                <div class="input-group input-group-sm mb-3">
                                    <input id="in_addresse1" class="form-control  form-control-lg border-info  rounded-0" type="text" name="ADDRESSE_A" placeholder="" aria-label=".form-control-sm example">
                                    <div class="dropdown">
                                        <span class="btn btn-secondary ps-2 pe-2 btn-sm dropdown-toggle rounded-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="i-info fa fa-info fa-2xs"></i>
                                        </span>
                                        <div class="dropdown-menu p-4 text-muted" style="width: 335px;">
                                            <p>
                                            Dans le champ Adresse ligne 1, remplissez le numéro et la rue de l’adresse de votre domicile. N’inscrivez pas la ville et l’État dans ce champ. La ligne 1 de l’adresse est un renseignement obligatoire pour la demande.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--INPUT-->
                            <!--INPUT-->
                            <div>
                                <label for="exampleInputEmail1" class="form-label">Ligne d’adresse 2 (en option)</label>
                                <div class="input-group input-group-sm mb-3">
                                    <input id="in_addresse2" class="form-control  form-control-lg border-info  rounded-0" type="text" name="ADDRESSE_B" placeholder="" aria-label=".form-control-sm example">
                                    <div class="dropdown">
                                        <span class="btn btn-secondary ps-2 pe-2 btn-sm dropdown-toggle rounded-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="i-info fa fa-info fa-2xs"></i>
                                        </span>
                                        <div class="dropdown-menu p-4 text-muted" style="width: 335px;">
                                            <p>
                                            Dans le champ Adresse, ligne 2, indiquez l’étage, le bâtiment, ou autre, selon ce qui s’applique. N’inscrivez pas la ville et l’État dans ce champ. La ligne 2 de l’adresse est un renseignement facultatif pour la demande.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--INPUT-->
                             <!--INPUT-->
                             <div>
                                <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">*  </span>État/Province/Région</label>
                                <div class="input-group input-group-sm mb-3">
                                    <input id="in_etat" class="form-control  form-control-lg border-info  rounded-0" type="text" name="ETAT_CO" placeholder="" aria-label=".form-control-sm example">
                                    <div class="dropdown">
                                        <span class="btn btn-secondary ps-2 pe-2 btn-sm dropdown-toggle rounded-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="i-info fa fa-info fa-2xs"></i>
                                        </span>
                                        <div class="dropdown-menu p-4 text-muted" style="width: 335px;">
                                            <p>
                                            Dans le champ État/province/région, indiquez l’État, la province ou la région. Le champ État/province/région est un renseignement obligatoire pour la demande.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--INPUT-->
                            <!--INPUT-->
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">*  </span>Ville</label>
                                    <div class="input-group input-group-sm mb-3">
                                        <input id="in_ville" class="form-control  form-control-lg border-info  rounded-0" type="text"  name="VILLE_CO" placeholder="" aria-label=".form-control-sm example">
                                        <div class="dropdown">
                                            <span class="btn btn-secondary ps-2 pe-2 btn-sm dropdown-toggle rounded-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="i-info fa fa-info fa-2xs"></i>
                                            </span>
                                            <div class="dropdown-menu p-4 text-muted" style="width: 335px;">
                                                <p>
                                                Dans le champ Ville, indiquez la ville, l’agglomération, le village, ou le hameau. La ville, l’agglomération, le village, ou le hameau est un renseignement obligatoire pour la demande.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">*  </span>Pays</label>      
                                    
                                    <select id="slt_pays" class="form-select border-info select_gray  rounded-0" name="PAYS_PA" aria-label="Default select example">
                                        
                                    </select>
                                    <script>
                                        $.getJSON("<?php echo base_url()."assets/USA/js/allcountry.json"; ?>", function(json) {
                                            //console.log(json)); // this will show the info it in firebug console
                                            var option="<option class=\"option_gray\" value=\"\" selected>Pays</option>";
                                            for(var i=0;i<json.length;i++) {
                                                option =option+ "<option class=\"option_gray\" value=\""+json[i].name+"\">"+json[i].name+"</option>"
                                            }
                                            $('#slt_pays').html(option);
                                        });
                                    </script>
                                </div>
                            </div>
                                
                            <!--INPUT-->
                            <!--INPUT-->
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">*  </span>Numéro de téléphone</label>      
                                    <div class="row">
                                        <div class="col-md-6">
                                            <select id="slt_dtpa" name="PHONE_DTPA_COA" class="form-select border-info  rounded-0 text-black" aria-label="Default select example">
                                            <option value="mobile" class="text-black">Portable</option>
                                                <option value="home">Domicile</option>
                                                <option value="work">Travail</option>
                                                
                                                <option value="other">Autre</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <select id="slt_pays2" name="PHONE_PAYS_COA" class="form-select border-info  rounded-0 text-black" aria-label="Default select example">
                                                
                                            </select>
                                            <script>
                                                $.getJSON("<?php echo base_url()."assets/USA/js/allcountry.json"; ?>", function(json) {
                                                    console.log(json); // this will show the info it in firebug console
                                                    var option="";
                                                    for(var i=0;i<json.length;i++) {
                                                        if(json[i].name=="France") {
                                                            option =option+ "<option selected value=\""+json[i].name+"\">"+json[i].name+" (+"+json[i].callingCodes[0]+")"+"</option>"
                                                        
                                                        } else {
                                                            option =option+ "<option value=\""+json[i].name+"\">"+json[i].name+" (+"+json[i].callingCodes[0]+")"+"</option>"
                                                        }
                                                        
                                                    }
                                                    $('#slt_pays2').html(option);
                                                });
                                            </script>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label" style="margin-top:24px;"><span class="text-danger fs-5"></span></label>      
                                   
                                    <div class="input-group input-group-sm mb-3">
                                        <input id="in_phone" class="form-control  form-control-lg border-info  rounded-0" type="text" name="PHONE_COA" placeholder="" value="+33" aria-label=".form-control-sm example">
                                        <div class="dropdown">
                                            <span class="btn btn-secondary ps-2 pe-2 btn-sm dropdown-toggle rounded-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="i-info fa fa-info fa-2xs"></i>
                                            </span>
                                            <div class="dropdown-menu p-4 text-muted" style="width: 335px;">
                                                <p>
                                                Il est obligatoire de saisir au moins un numéro de téléphone pour compléter la demande. Si vous ne possédez pas de numéro de téléphone, vous pouvez fournir à la place un numéro de téléphone tiers appartenant à un point de contact (par exemple, un membre de la famille, un ami ou un partenaire commercial).
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--INPUT-->
                            
                        

                            
                        </div>
                        <div class="col-lg-6 col_coord2">
                            <h1  class="fs-5 text-center h_form" style="margin-bottom: 24px !important;">Coordonnées de la personne à contacter en cas d'urgence aux États-Unis ou hors des États-Unis</h1>
                        
                            <!--INPUT-->
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">*  </span>Nom de famille</label>
                                    <div class="input-group input-group-sm mb-3">
                                        <input id="in_nom" class="form-control  form-control-lg border-info  rounded-0" type="text" name="NOM_CO" placeholder="" aria-label=".form-control-sm example">
                                        <div class="dropdown">
                                            <span class="btn btn-secondary ps-2 pe-2 btn-sm dropdown-toggle rounded-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="i-info fa fa-info fa-2xs"></i>
                                            </span>
                                            <div class="dropdown-menu p-4 text-muted" style="width: 335px;">
                                                <p>
                                                Dans le champ Nom de famille, indiquez le nom de famille de votre contact d’urgence. Vous devez remplir ce champ pour remplir la demande. Si vous n’avez pas de contact en cas d’urgence, saisissez UNKNOWN (inconnu).
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">*  </span>Prénom</label>
                                    <div class="input-group input-group-sm mb-3">
                                        <input id="in_prenom" class="form-control  form-control-lg border-info  rounded-0" type="text" name="PRENOM_CO" placeholder="" aria-label=".form-control-sm example">
                                        <div class="dropdown">
                                            <span class="btn btn-secondary ps-2 pe-2 btn-sm dropdown-toggle rounded-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="i-info fa fa-info fa-2xs"></i>
                                            </span>
                                            <div class="dropdown-menu p-4 text-muted" style="width: 335px;">
                                                <p>
                                                Dans le champ Prénom, indiquez le prénom du contact d’urgence. Vous devez remplir ce champ pour remplir la demande. Si vous n’avez pas de contact d’urgence (ou si votre interlocuteur ne possède pas de prénom), saisissez UNKNOWN (inconnu).
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <!--INPUT-->
                            <!--INPUT-->
                            <div class="row">
                                <label for="exampleInputEmail1" class="form-label pb-2"><span class="text-dark fw-semibold fs-5">*  </span>Numéro de téléphone</label>      
                                    
                                 <div class="col-md-4">
                                        <select id="slt_pays3" class="form-select border-info  rounded-0 text-black" name="PHONE_PAYS_COB"  aria-label="Default select example">     
                                        </select>
                                        <script>
                                            $.getJSON("<?php echo base_url()."assets/USA/js/allcountry.json"; ?>", function(json) {
                                                console.log(json); // this will show the info it in firebug console
                                                var option="<option value=\"\" selected>-- Choisir --</option>";
                                                for(var i=0;i<json.length;i++) {
                                                    if(json[i].name=="France") {
                                                        option =option+ "<option selected value=\""+json[i].name+"\">"+json[i].name+" (+"+json[i].callingCodes[0]+")"+"</option>"
                                                    
                                                    } else {
                                                        option =option+ "<option value=\""+json[i].name+"\">"+json[i].name+" (+"+json[i].callingCodes[0]+")"+"</option>"
                                                    }
                                                }
                                                $('#slt_pays3').html(option);
                                            });
                                        </script>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="input-group input-group-sm mb-3">
                                        <input id="in_phone2" class="form-control  form-control-lg border-info  rounded-0" type="text" name="PHONE_COB" value="+33" placeholder="" aria-label=".form-control-sm example">
                                        <div class="dropdown">
                                            <span class="btn btn-secondary ps-2 pe-2 btn-sm dropdown-toggle rounded-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="i-info fa fa-info fa-2xs"></i>
                                            </span>
                                            <div class="dropdown-menu p-4 text-muted" style="width: 335px;">
                                                <p>
                                                Dans le champ Code Pays, saisissez le code pays du numéro de téléphone de la personne à contacter en cas d’urgence. Le code pays est nécessaire pour remplir la demande. S’il n’y a pas de code pays du numéro de téléphone à appeler en cas d’urgence, vous pouvez saisir des zéros. Dans le champ Numéro, saisissez le numéro de téléphone de la personne à contacter en cas d’urgence. Ce numéro est un renseignement obligatoire pour la demande. S’il n’y a pas de numéro de téléphone à appeler en cas d’urgence, vous pouvez saisir des zéros.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--INPUT-->
                            <div>
                                <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">*  </span>Adresse e-mail</label>      
                                    
                                <div class="input-group input-group-sm mb-3">
                                    <input id="in_email" class="form-control  form-control-lg border-info  rounded-0" type="text" name="EMAIL_CO" placeholder="" aria-label=".form-control-sm example">
                                    <div class="dropdown">
                                        <span class="btn btn-secondary ps-2 pe-2 btn-sm dropdown-toggle rounded-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="i-info fa fa-info fa-2xs"></i>
                                        </span>
                                        <div class="dropdown-menu p-4 text-muted" style="width: 335px;">
                                            <p>
                                            Indiquez l’adresse électronique de votre contact d’urgence. L’adresse électronique est un renseignement obligatoire pour la demande. Vous pouvez également indiquer UNKNOWN (inconnu)
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                    <div class="d-flex flex-row-reverse mt-5">
                        <div class="p-2"><a id="a_suivant" class="btn btn-success">Suivant</a></div>
                        <div class="p-2"><a href="<?php echo base_url(); ?>USA/demandez-esta/information" class="btn btn-success">Retour</a></div>
                    </div>
                </form>
                <!--FORM-->
            </section>
            <!--FORMULAIRE-->
        </div>
        <!--FOOTER-->
        <?php
            $this->load->view('Include/Footer');
        ?>
    <!--FOOTER-->
    </body>
</html>