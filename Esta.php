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
        <script src="<?php echo base_url(); ?>assets/USA/js/script_esta.js"></script>
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
                        <div class="triangle step1left"></div>
                        <div class="step step1left">Coordonnées personnelles</div>
                        <div class="step step1left">Passport Information</div>
                        <div class="step step1left">Voyage Information</div>
                        <div class="step step1left">Emploi Information</div>
                        <div class="step step1left">Révision paiement</div>
                        <div class="step step1left">Téléchargement ESTA</div>
                    </div>

                </div>
                <!--RESPONSIVE STEP-->
                <h1 id="h_step" style="display:none" class="text-center fs-5 border border-success pb-3 pt-3 text-success">Informations personnelles</h1>
                <!--RESPONSIVE STEP-->
                <!--STEP PROGRESS-->
                <!--AIDE-->
                
                <!--AIDE-->
                <!--FORM-->
                <form id="form_information" method="POST" action="<?php echo base_url(); ?>USA/ESTA/FormInfoPerso">
                    <div class="row mt-5">
                        <div class="col-lg-6 col_coord1">
                            <h1 class="fs-5 text-center h_form">Vos informations personnelles</h1>
                             <!--INPUT-->
                             <div class="row">
                               
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">*  </span>Nom de famille</label>
                                    <div class="input-group input-group-sm mb-3">
                                        <input id="in_nom" name="NOM" class="form-control  form-control-lg border-info  rounded-0" type="text" placeholder="Nom de famille" aria-label=".form-control-sm example">
                                        <div class="dropdown">
                                            <span class="btn btn-secondary ps-2 pe-2 btn-sm dropdown-toggle rounded-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="i-info fa fa-info fa-2xs"></i>
                                            </span>
                                            <div class="dropdown-menu p-4 text-muted" style="width: 335px;">
                                                <p>
                                                Saisissez votre nom de famille tel qu’il figure sur votre passeport dans le champ « Nom de famille » ou « Nom ». Le nom de famille est obligatoire pour remplir la demande.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">*  </span>Prénom(s)</label>
                                    <div class="input-group input-group-sm mb-3">
                                        <input id="in_prenom" name="PRENOM" class="form-control  form-control-lg border-info  rounded-0" type="text" placeholder="Prénom(s)" aria-label=".form-control-sm example">
                                        <div class="dropdown">
                                            <span class="btn btn-secondary ps-2 pe-2 btn-sm dropdown-toggle rounded-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="i-info fa fa-info fa-2xs"></i>
                                            </span>
                                            <div class="dropdown-menu p-4 text-muted" style="width: 335px;">
                                                <p>
                                                Dans le champ de Prénom (Prénom), entrez TOUS les noms exactement tels qu'ils apparaissent sur votre passeport dans le champ de Prénom (Prénom). Si un deuxième nom ou un deuxième prénom est inclus dans le champ de Prénom (Prénom) de votre passeport, il doit également être inclus ici. Ce champ est requis pour compléter la demande. 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                            <!--INPUT-->
                            <!--INPUT-->
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">*  </span>Date de naissance</label>      
                                    <div class="d-flex flex-row mb-3">
                                        <div class="p-2">
                                            <select id="sl_jour" name="DN_JOUR" class="form-select border-info  rounded-0 select_gray" aria-label="Default select example">
                                                <option class="option_gray" value="" selected>Jour</option>
                                                <?php for($i=0;$i<32;$i++) { ?>
                                                <option class="option_gray" value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="p-2">
                                            <select  id="sl_mois" name="DN_MOIS" class="form-select border-info select_gray  rounded-0" aria-label="Default select example">
                                                    <option class="option_gray" value="" selected>Mois</option>
                                                    <option class="option_gray" value="1">Janvier</option>
                                                    <option class="option_gray" value="2">Février</option>
                                                    <option class="option_gray" value="3">Mars</option>
                                                    <option class="option_gray" value="4">Avril</option>
                                                    <option class="option_gray" value="5">Mai</option>
                                                    <option class="option_gray" value="6">Juin</option>
                                                    <option class="option_gray" value="7">Juillet</option>
                                                    <option class="option_gray" value="8">Août</option>
                                                    <option class="option_gray" value="9">Septembre</option>
                                                    <option class="option_gray" value="10">Octobre</option>
                                                    <option class="option_gray" value="11">Novembre</option>
                                                    <option class="option_gray" value="12">Décembre</option>

                                            </select>
                                        </div>
                                        <div class="p-2">
                                            <select  id="sl_ans" name="DN_ANS" class="form-select border-info  select_gray rounded-0" aria-label="Default select example">
                                                <option class="option_gray" selected value="">Année</option>
                                                <?php for($i=date("Y");$i>date("Y")-100;$i--) { ?>
                                                <option class="option_gray" value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    
                                    <label for="exampleInputEmail1" class="form-label pb-2"><span class="text-dark fw-semibold fs-5">*  </span>Sexe</label>      
                                    <select id="sl_sex" name="SEX" class="select_gray form-select border-info  rounded-0" aria-label="Default select example">
                                        <option class="option_gray" value="" selected>Sexe</option>
                                        <option class="option_gray" value="Féminin">Féminin</option>
                                        <option class="option_gray" value="Masculin">Masculin</option>

                                    </select>
                                    
                                    <script type="text/javascript">
                                           
                                        </script>

                                </div>
                            </div>
                            <!--INPUT-->
                            <!--INPUT-->
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label pb-2"><span class="text-dark fw-semibold fs-5">*  </span>Ville de naissance</label>
                                    <div class="input-group input-group-sm mb-3">
                                        <input id="in_ville" name="VILLE_NAISSANCE" class="form-control  form-control-lg border-info  rounded-0" type="text" placeholder="Ville de naissance" aria-label=".form-control-sm example">
                                        <div class="dropdown">
                                            <span class="btn btn-secondary ps-2 pe-2 btn-sm dropdown-toggle rounded-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="i-info fa fa-info fa-2xs"></i>
                                            </span>
                                            <div class="dropdown-menu p-4 text-muted" style="width: 335px;">
                                                <p>
                                                Indiquez votre ville, agglomération, village, ou hameau de naissance. La ville, l’agglomération, le village, ou le hameau est un renseignement obligatoire pour la demande.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label pb-2"><span class="text-dark fw-semibold fs-5">*  </span>Pays de naissance</label>      
                                    <select id="sl_pays_naissance" name="PAYS_NAISSANCE" class="form-select select_gray border-info  rounded-0" aria-label="Default select example">
                                        
                                    </select>
                                    <script>
                                        $.getJSON("<?php echo base_url()."assets/USA/js/allcountry.json"; ?>", function(json) {
                                            //console.log(json)); // this will show the info it in firebug console
                                            var option="<option class=\"option_gray\" value=\"\" selected>Pays</option>";
                                            for(var i=0;i<json.length;i++) {
                                                option =option+ "<option class=\"option_gray\" value=\""+json[i].name+"\">"+json[i].name+"</option>"
                                            }
                                            $('#sl_pays_naissance').html(option);
                                        });
                                    </script>
                                </div>
                            </div>
                            <!--INPUT-->
                            <!--INPUT-->
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">*  </span>Pays de la citoyenneté</label>
                                <select id="sl_ctry_citoyen" name="PAYS_CITOYEN" class="form-select border-info select_gray  rounded-0" aria-label="Default select example">
                                    
                                </select>
                                <script>
                                    $.getJSON("<?php echo base_url()."assets/USA/js/allcountry.json"; ?>", function(json) {
                                        //console.log(json)); // this will show the info it in firebug console
                                        var option="<option class=\"option_gray\" value=\"\" selected>Pays</option>";
                                        for(var i=0;i<json.length;i++) {
                                            option =option+ "<option class=\"option_gray\" value=\""+json[i].name+"\">"+json[i].name+"</option>"
                                        }
                                        $('#sl_ctry_citoyen').html(option);
                                    });
                                </script>
                            </div>
                            <!--INPUT-->
                            <!--INPUT-->
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">*  </span>Votre adresse email</label>
                                    <div class="input-group input-group-sm mb-3">
                                        <input id="in_email" name="EMAIL" class="form-control  form-control-lg border-info  rounded-0" type="text" placeholder="Votre adresse email" aria-label=".form-control-sm example">
                                        <div class="dropdown">
                                            <span class="btn btn-secondary ps-2 pe-2 btn-sm dropdown-toggle rounded-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="i-info fa fa-info fa-2xs"></i>
                                            </span>
                                            <div class="dropdown-menu p-4 text-muted" style="width: 335px;">
                                                <p>
                                                Indiquez l’adresse électronique à laquelle vous pouvez être contacté. L’adresse électronique est un renseignement obligatoire pour la demande. Si vous ne possédez pas d’adresse électronique, vous pouvez fournir à la place une adresse électronique tierce appartenant à un point de contact (par exemple, un membre de la famille, un ami ou un partenaire commercial).
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">*  </span>Confirmer l'adresse email</label>
                                    <div class="input-group input-group-sm mb-3">
                                        <input id="in_email_confirm" class="form-control  form-control-lg border-info  rounded-0" type="text" placeholder="" aria-label=".form-control-sm example">
                                        <div class="dropdown">
                                            <span class="btn btn-secondary ps-2 pe-2 btn-sm dropdown-toggle rounded-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="i-info fa fa-info fa-2xs"></i>
                                            </span>
                                            <div class="dropdown-menu p-4 text-muted" style="width: 335px;">
                                                <p>
                                                Indiquez l’adresse électronique à laquelle vous pouvez être contacté. L’adresse électronique est un renseignement obligatoire pour la demande. Si vous ne possédez pas d’adresse électronique, vous pouvez fournir à la place une adresse électronique tierce appartenant à un point de contact (par exemple, un membre de la famille, un ami ou un partenaire commercial).
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--INPUT-->
                           
                            
                            
                            <div class="row mt-2">
                                <div class="col-md-9">Êtes-vous membre du programme CBP Global Entry ?</div>
                                <div class="col-md-3">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" name="CBP_CBX[]" type="checkbox" role="switch" id="cbx_cbp">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Non</label>
                                    </div>
                                </div>
                            </div>
                            <div id="as_cbp_ouinon"></div>
                            <!--SI OUI-->
                            <div class="mt-4" id="as_cbp_oui" style="display:none">
                                <!--INPUT-->
                                <label for="exampleInputEmail1" class="form-label mt-3"><span class="text-dark fw-semibold fs-5">*  </span>Numéro PASSID / Numéro de membre</label>
                                <div class="input-group input-group-sm mb-3">
                                    <input id="in_gbp" name="NUMERO_CBP" class="form-control  form-control-lg border-info  rounded-0" type="email" placeholder="" aria-label=".form-control-sm example">
                                    <div class="dropdown">
                                        <span class="btn btn-secondary ps-2 pe-2 btn-sm dropdown-toggle rounded-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="i-info fa fa-info fa-2xs"></i>
                                        </span>
                                        <div class="dropdown-menu p-4 text-muted" style="width: 335px;">
                                            <p>
                                            Le numéro de membre contient exactement neuf chiffres. L’intitulé est Numéro de membre / PASSID et vous le trouverez en vous connectant à votre compte GOES.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <!--INPUT-->
                            </div>
                            <!--SI OUI-->
                            <!--SI NON-->
                            <div id="as_cbp_non"></div>
                            <!--SI NON-->
                            
                        </div>
                        <div class="col-lg-6 col_coord2">
                            <h1  class="fs-5 text-center h_form">Informations sur vos parents</h1>
                        
                            <!--INPUT-->
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">*  </span>Parent 1 (Prénom)</label>
                                    <div class="input-group input-group-sm mb-3">
                                        <input name="PRENON_PARENTA" id="in_p1prenom" class="form-control  form-control-lg border-info  rounded-0" type="text" placeholder="" aria-label=".form-control-sm example">
                                        <div class="dropdown">
                                            <span class="btn btn-secondary ps-2 pe-2 btn-sm dropdown-toggle rounded-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="i-info fa fa-info fa-2xs"></i>
                                            </span>
                                            <div class="dropdown-menu p-4 text-muted" style="width: 335px;">
                                                <p>
                                                Dans le champ Prénom, tapez le prénom de votre parent. N'incluez pas le deuxième prénom dans ce champ. Le prénom est requis pour remplir la demande. Si votre parent n'a pas de prénom ou si vous ne connaissez pas l'un ou vos deux parents, tapez UNKNOWN.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">*  </span>Parent 1 (Nom)</label>
                                    <div class="input-group input-group-sm mb-3">
                                        <input id="in_p1nom" name="NOM_PARENTA" class="form-control  form-control-lg border-info  rounded-0" type="text" placeholder="" aria-label=".form-control-sm example">
                                        <div class="dropdown">
                                            <span class="btn btn-secondary ps-2 pe-2 btn-sm dropdown-toggle rounded-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="i-info fa fa-info fa-2xs"></i>
                                            </span>
                                            <div class="dropdown-menu p-4 text-muted" style="width: 335px;">
                                                <p>
                                                Dans le champ Nom, tapez le nom de famille de votre parent. Le nom de famille est requis pour remplir la demande. Si vous ne connaissez le nom de l'un ou de vos deux parents, tapez UNKNOWN.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--INPUT-->
                             <!--INPUT-->
                             <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">*  </span>Parent 2 (Prénom)</label>
                                    <div class="input-group input-group-sm mb-3">
                                        <input id="in_p2prenom" name="PRENOM_PARENTB" class="form-control  form-control-lg border-info  rounded-0" type="text" placeholder="" aria-label=".form-control-sm example">
                                        <div class="dropdown">
                                            <span class="btn btn-secondary ps-2 pe-2 btn-sm dropdown-toggle rounded-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="i-info fa fa-info fa-2xs"></i>
                                            </span>
                                            <div class="dropdown-menu p-4 text-muted" style="width: 335px;">
                                                <p>
                                                Dans le champ Prénom, tapez le prénom de votre parent. N'incluez pas le deuxième prénom dans ce champ. Le prénom est requis pour remplir la demande. Si votre parent n'a pas de prénom ou si vous ne connaissez pas l'un ou vos deux parents, tapez UNKNOWN.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">*  </span>Parent 2 (Nom)</label>
                                    <div class="input-group input-group-sm mb-3">
                                        <input id="in_p2nom" name="NOM_PARENTB" class="form-control  form-control-lg border-info  rounded-0" type="text" placeholder="" aria-label=".form-control-sm example">
                                        <div class="dropdown">
                                            <span class="btn btn-secondary ps-2 pe-2 btn-sm dropdown-toggle rounded-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="i-info fa fa-info fa-2xs"></i>
                                            </span>
                                            <div class="dropdown-menu p-4 text-muted" style="width: 335px;">
                                                <p>
                                                Dans le champ Nom, tapez le nom de famille de votre parent. Le nom de famille est requis pour remplir la demande. Si vous ne connaissez le nom de l'un ou de vos deux parents, tapez UNKNOWN.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--INPUT-->
                        
                        
                        </div>
                    </div>
                    <div class="d-flex flex-row-reverse mt-5">
                        <div class="p-2"><a id="a_continuer" class="btn btn-success">Continuer</a></div>
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