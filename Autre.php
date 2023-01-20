
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
        <script src="<?php echo base_url(); ?>assets/USA/js/script_autre.js"></script>
        
        <script src="<?php echo base_url(); ?>assets/USA/js/script.js"></script>
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
                        <div class="step step1">
                            <div class="d-flex flex-row">
                                <div class=""><span class="badge me-3 mt-3 rounded-pill text-bg-light">3</span></div>
                                <div class=""><span>Passport Information<span></div>
                            </div>
                        </div>
                        <div class="step step1">
                            <div class="d-flex flex-row">
                                <div class=""><span class="badge me-3 mt-3 rounded-pill text-bg-light">4</span></div>
                                <div class=""><span>Voyage Information<span></div>
                            </div>
                        </div>
                        <div class="step step1">
                            <div class="d-flex flex-row">
                                <div class=""><span class="badge me-3 mt-3 rounded-pill text-bg-light">5</span></div>
                                <div class=""><span>Emploi Information<span></div>
                            </div>
                        </div>
                        <div class="triangle step1left"></div>
                        <div class="step step1left">Révision paiement</div>
                        <div class="step step1left">Téléchargement ESTA</div>
                    </div>


                </div>
                <!--RESPONSIVE STEP-->
                <h1 id="h_step" style="display:none" class="text-center fs-5 border border-success pb-3 pt-3 text-success">Emploi Information</h1>
                <!--RESPONSIVE STEP-->
                <!--STEP PROGRESS-->
                <!--STEP PROGRESS-->
                <!--AIDE-->
                
                <!--AIDE-->
                <!--FORM-->
                <form id="form_emploi" method="POST" action="<?php echo base_url(); ?>USA/ESTA/FormEmploi">
                    <div class="row mt-5" style="min-height: 300px;">
                        
                        <div class="col-lg-6 col_coord2">
                            <h1  class="fs-5 text-center h_form" style="margin-bottom: 24px !important;">RENSEIGNEMENTS SUR L’EMPLOI</h1>
                            <!--INPUT-->
                            <div class="row" >
                                <div class="col-md-9">Avez-vous ou avez-vous eu un employeur ?</div>
                                <div class="col-md-3">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" name="CBX_EMPLOI[]" role="switch" id="cbx_emploi">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Non</label>
                                    </div>
                                </div>
                            </div>
                            <aside id="as_emploi_ouinon"></aside>
                            <!--SI OUI-->
                            <aside id="as_emploi_oui" style="display:none;">
                                <h2 class="mt-4 fs-6 text-primary">Employeur actuel ou précédent</h2>
                                <p>Saisissez le nom de votre employeur actuel ou précédent. Vous pouvez saisir UNKNOWN pour les champs où l'information n'est pas disponible.</p>
                                <!--INPUT-->
                                <div>
                                    <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">*  </span>Nom de l’employeur</label>
                                    <div class="input-group input-group-sm mb-3">
                                        <input id="in_nom" class="form-control  form-control-lg border-info  rounded-0" name="NOM_EM" type="text" value="" placeholder="" aria-label=".form-control-sm example">
                                        <div class="dropdown">
                                            <span class="btn btn-secondary ps-2 pe-2 btn-sm dropdown-toggle rounded-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="i-info fa fa-info fa-2xs"></i>
                                            </span>
                                            <div class="dropdown-menu p-4 text-muted" style="width: 335px;">
                                                <p>
                                                Indiquez le nom de votre employeur actuel. Si vous êtes sans emploi, saisissez le nom de votre employeur précédent. Le nom de l’employeur est un renseignement obligatoire pour la demande. Vous pouvez également saisir SELF-EMPLOYED (travailleur indépendant), STUDENT (étudiant), CHILD (enfant), HOMEMAKER (femme ou homme au foyer), STAY-AT-HOME PARENT (parent au foyer), ou tout autre mot qui décrit votre statut d’emploi.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--INPUT-->
                                <!--INPUT-->
                                <div>
                                    <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">*  </span>Ligne d’adresse 1</label>
                                    <div class="input-group input-group-sm mb-3">
                                        <input id="in_addresse1" class="form-control  form-control-lg border-info  rounded-0" name="ADDRESSE_EMA" type="text" value="" placeholder="" aria-label=".form-control-sm example">
                                        <div class="dropdown">
                                            <span class="btn btn-secondary ps-2 pe-2 btn-sm dropdown-toggle rounded-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="i-info fa fa-info fa-2xs"></i>
                                            </span>
                                            <div class="dropdown-menu p-4 text-muted" style="width: 335px;">
                                                <p>
                                                Dans le champ Adresse ligne 1, remplissez le numéro et la rue de l’employeur que vous avez indiqué. N’inscrivez pas la ville et l’État dans ce champ. La ligne 1 de l’adresse est un renseignement obligatoire pour la demande. Si vous ne connaissez pas l’adresse de l’employeur que vous avez indiqué, vous pouvez choisir UNKNOWN (inconnu).
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
                                        <input id="in_etat" class="form-control  form-control-lg border-info  rounded-0" type="text" name="ETAT_EM" value="" placeholder="" aria-label=".form-control-sm example">
                                        <div class="dropdown">
                                            <span class="btn btn-secondary ps-2 pe-2 btn-sm dropdown-toggle rounded-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="i-info fa fa-info fa-2xs"></i>
                                            </span>
                                            <div class="dropdown-menu p-4 text-muted" style="width: 335px;">
                                                <p>
                                                Dans le champ État/province/région, indiquez l’État, la province ou la région. Le champ État/province/région est un champ obligatoire pour la demande. Si vous ne connaissez pas l’État, la province ou la région, vous pouvez saisir UNKNOWN (inconnu).
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--INPUT-->
                                <!--INPUT-->
                                <div>
                                    <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">*  </span>Ville</label>
                                    <div class="input-group input-group-sm mb-3">
                                        <input id="in_ville" class="form-control  form-control-lg border-info  rounded-0" type="text" name="VILLE_EM" value="" placeholder="" aria-label=".form-control-sm example">
                                        <div class="dropdown">
                                            <span class="btn btn-secondary ps-2 pe-2 btn-sm dropdown-toggle rounded-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="i-info fa fa-info fa-2xs"></i>
                                            </span>
                                            <div class="dropdown-menu p-4 text-muted" style="width: 335px;">
                                                <p>
                                                Dans le champ Ville, indiquez la ville, l’agglomération, le village, ou le hameau. La ville, l’agglomération, le village, ou le hameau est un renseignement obligatoire pour remplir la demande. Si vous ne connaissez pas la ville, vous pouvez saisir UNKNOWN (inconnu).
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--INPUT-->
                                <!--INPUT-->
                                <div>
                                    <label for="exampleInputEmail1" class="form-label pb-2"><span class="text-dark fw-semibold fs-5">*  </span>Pays</label>      
                                    <select id="slt_pays" class="form-select border-info select_gray  rounded-0" name="PAYS_EM" aria-label="Default select example">
                                        
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
                                        $( "select" ).change(function () {
                                            var str = $(this).val();
                                            if(str!="") {
                                                $(this).addClass("text-dark");
                                            } else {
                                                $(this).removeClass("text-dark");
                                            }
                                            console.log(str);
                                        })
                                    </script>
                                </div>
                                <!--INPUT-->





                            </aside>
                            <!--SI OUI-->
                            <!--SI NON-->
                            <!--SI NON-->
                            <aside id="as_emploi_non">
                                
                            </aside>

                            <!--INPUT-->
                        
                        </div>
                        <div class="col-lg-6 col_coord1">
                            
                        </div>
                    </div>
                    <div class="d-flex flex-row-reverse mt-5">
                        <div class="p-2"><a id="a_suivant" class="btn btn-success">Demamder l'ESTA</a></div>
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