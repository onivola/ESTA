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
        <script src="<?php echo base_url(); ?>assets/USA/js/script_passeport.js"></script>
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
                        <div class="triangle step1left"></div>
                        <div class="step step1left">Voyage Information</div>
                        <div class="step step1left">Emploi Information</div>
                        <div class="step step1left">Révision paiement</div>
                        <div class="step step1left">Téléchargement ESTA</div>
                    </div>


                </div>
                <!--RESPONSIVE STEP-->
                <h1 id="h_step" style="display:none" class="text-center fs-5 border border-success pb-3 pt-3 text-success">Passport Information</h1>
                <!--RESPONSIVE STEP-->
                <!--STEP PROGRESS-->
                <!--STEP PROGRESS-->
                <!--AIDE-->
                
                <!--AIDE-->
                <!--FORM-->
                <form method="POST" id="form_passeport" action="<?php echo base_url(); ?>USA/ESTA/FormPasseport">
                    <div class="row mt-5">
                        <div class="col-lg-6 col_coord1">
                            <h1 class="fs-5 text-center h_form">RENSEIGNEMENTS CONCERNANT LE PASSEPORT</h1>
                             <!--INPUT-->
                             <div>
                                <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">*  </span>Numéro de passeport</label>
                                <div class="input-group input-group-sm mb-3">
                                    <input id="in_numpasseport" class="form-control  form-control-lg border-info  rounded-0" type="text" name="NUMERO_PASSEPORT" placeholder="" aria-label=".form-control-sm example">
                                    <div class="dropdown">
                                        <span class="btn btn-secondary ps-2 pe-2 btn-sm dropdown-toggle rounded-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="i-info fa fa-info fa-2xs"></i>
                                        </span>
                                        <div class="dropdown-menu p-4 text-muted" style="width: 335px;">
                                            <p>
                                            Entrez votre numéro de passeport, tel qu'il figure sur votre passeport. Le numéro du passeport peut contenir des nombres et / ou des caractères. Veuillez faire la distinction entre le chiffre zéro et la lettre O.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--INPUT-->
                            <!--INPUT-->
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">*  </span>Pays ayant délivré le passeport</label>
                                <select id="sct_pays" class="form-select border-info  rounded-0 select_gray" name="PAYS_PASSEPORT" aria-label="Default select example">
                                    
                                </select>
                                <script>
                                    $.getJSON("<?php echo base_url()."assets/USA/js/allcountry.json"; ?>", function(json) {
                                        //console.log(json)); // this will show the info it in firebug console
                                        var option="<option class=\"option_gray\" value=\"\" selected>Pays</option>";
                                        for(var i=0;i<json.length;i++) {
                                            option =option+ "<option class=\"option_gray\" value=\""+json[i].name+"\">"+json[i].name+"</option>"
                                        }
                                        $('#sct_pays').html(option);
                                    });
                                </script>
                            </div>
                            <!--INPUT-->
                            <!--INPUT-->
                            <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">*  </span>Date de délivrance du passeport</label>      
                            <div class="row ps-1">
                                <div class="col-md-4">
                                    <select id="sct_jour_deliv" name="DATE_DELIV_JOUR" class="form-select border-info  rounded-0 select_gray" aria-label="Default select example">
                                        <option value="" selected>Jour</option>
                                        <?php for($i=1;$i<32;$i++) { ?>
                                        <option class="option_gray" value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select id="sct_mois_deliv" name="DATE_DELIV_MOIS" class="form-select select_gray border-info  rounded-0" aria-label="Default select example">
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
                                <div class="col-md-4">
                                    <select id="sct_ans_deliv" name="DATE_DELIV_ANS" class="form-select border-info select_gray  rounded-0" aria-label="Default select example">
                                        <option  selected value="">Année</option>
                                        <?php for($i=date("Y");$i>date("Y")-100;$i--) { ?>
                                        <option class="option_gray" value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <!--INPUT-->
                            <!--INPUT-->
                            <label for="exampleInputEmail1" class="form-label mt-3"><span class="text-dark fw-semibold fs-5">*  </span>Date d’expiration du passeport</label>      
                            <div class="row ps-1">
                                <div class="col-md-4">
                                    <select  id="sct_jour_expi" name="DATE_EXPI_JOUR" class="form-select border-info select_gray  rounded-0" aria-label="Default select example">
                                        <option value="" selected>Jour</option>
                                        <?php for($i=1;$i<32;$i++) { ?>
                                        <option class="option_gray" value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select id="sct_mois_expi"  name="DATE_EXPI_MOIS" class="form-select select_gray border-info  rounded-0" aria-label="Default select example">
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
                                <div class="col-md-4">
                                    <select id="sct_ans_expi" name="DATE_EXPI_ANS" class="form-select select_gray border-info  rounded-0" aria-label="Default select example">
                                        <option class="option_gray" selected  value="">Année</option>
                                        <?php for($i=date("Y");$i>date("Y")-100;$i--) { ?>
                                        <option class="option_gray" value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <!--INPUT-->
                            <!--INPUT-->
                            <div class="mb-3 mt-3">
                                <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">*  </span>Nationalité</label>
                                <select id="sct_pays2" class="form-select border-info select_gray  rounded-0" name="NATIONALITE" aria-label="Default select example">
                                    
                                </select>
                                <script>
                                    $.getJSON("<?php echo base_url()."assets/USA/js/allcountry.json"; ?>", function(json) {
                                        //console.log(json)); // this will show the info it in firebug console
                                        var option="<option class=\"option_gray\" value=\"\" selected>Pays</option>";
                                        for(var i=0;i<json.length;i++) {
                                            option =option+ "<option class=\"option_gray\" value=\""+json[i].name+"\">"+json[i].name+"</option>"
                                        }
                                        $('#sct_pays2').html(option);
                                    });
                                </script>
                            </div>
                            <!--INPUT-->
                            
                        

                            
                        </div>
                        <div class="col-lg-6 col_coord2">
                            <h1 class="fs-5 text-center h_form">Questions relatives au voyageur</h1>
                            <!--INPUT-->
                            <div class="row">
                                <div class="col-md-9">
                                Un passeport ou une carte nationale d'identité vous ont-ils déjà été délivrés par un autre pays ?
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" name="CBA_PA[]" role="switch" id="cbx_q1">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Non</label>
                                    </div>
                                </div>
                            </div>
                            <aside id="as_q1_ouinon"></aside>
                            <!--SI OUI-->
                            <aside id="as_q1_oui" style="display:none">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3 mt-3">
                                            <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">*  </span>Pays de la délivrance</label>
                                            <select id="sct_pays3" class="select_gray form-select border-info  rounded-0"  name="PAYS_DELIV_CBA_PA" aria-label="Default select example">
                                                
                                            </select>
                                            <script>
                                                $.getJSON("<?php echo base_url()."assets/USA/js/allcountry.json"; ?>", function(json) {
                                                    //console.log(json)); // this will show the info it in firebug console
                                                    var option="<option class=\"option_gray\" value=\"\" selected>Pays</option>";
                                                    for(var i=0;i<json.length;i++) {
                                                        option =option+ "<option class=\"option_gray\" value=\""+json[i].name+"\">"+json[i].name+"</option>"
                                                    }
                                                    $('#sct_pays3').html(option);
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
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3 mt-3">
                                            <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">*  </span>Type de document</label>
                                            <select id="slt_document" name="TYPE_DOC_CBA_PA" class="form-select border-info  rounded-0" aria-label="Default select example">
                                                <option value="Numéro de passeport" selected>Numéro de passeport</option>
                                                <option value="Numéro de la carte nationale d'identité">Numéro de la carte nationale d'identité</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--INPUT-->
                                        <div>
                                            <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">*  </span>Numéro du document</label>
                                            <div class="input-group input-group-sm mb-3">
                                                <input id="in_numerodoc" name="NUMERO_DOC_CBA_PA" class="form-control  form-control-lg border-info  rounded-0" type="email" placeholder="" aria-label=".form-control-sm example">
                                                <div class="dropdown">
                                                    <span class="btn btn-secondary ps-2 pe-2 btn-sm dropdown-toggle rounded-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="i-info fa fa-info fa-2xs"></i>
                                                    </span>
                                                    <div class="dropdown-menu p-4 text-muted" style="width: 335px;">
                                                        <p>
                                                        Entrez votre numéro de passeport, tel qu'il figure sur votre passeport. Le numéro du passeport peut contenir des nombres et / ou des caractères. Veuillez faire la distinction entre le chiffre zéro et la lettre O.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--INPUT-->
                                    </div>
                                    <div class="col-md-6">
                                         <!--INPUT-->
                                        <div>
                                            <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">*  </span>Année d'expiration</label>
                                            <div class="input-group input-group-sm mb-3">
                                                <input id="in_ansexp" name="ANNEE_EXP_CBA_PA" class="form-control  form-control-lg border-info  rounded-0" type="email" placeholder="" aria-label=".form-control-sm example">
                                                <div class="dropdown">
                                                    <span class="btn btn-secondary ps-2 pe-2 btn-sm dropdown-toggle rounded-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="i-info fa fa-info fa-2xs"></i>
                                                    </span>
                                                    <div class="dropdown-menu p-4 text-muted" style="width: 335px;">
                                                        <p>
                                                        Entrez votre numéro de passeport, tel qu'il figure sur votre passeport. Le numéro du passeport peut contenir des nombres et / ou des caractères. Veuillez faire la distinction entre le chiffre zéro et la lettre O.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--INPUT-->
                                    </div>
                                </div>
                            </aside>
                            <!--SI OUI-->
                            <!--SI NON-->
                            <aside id="as_q1_non"></aside>
                            <!--SI NON-->
                            <!--INPUT-->
                            <!--INPUT-->
                            <div class="row mt-4">
                                <div class="col-md-9">
                                Êtes-vous à présent citoyen ou ressortissant d'un autre pays ?
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check form-switch">
                                        <input name="CBB_PA[]"  class="form-check-input" type="checkbox" role="switch" id="cbx_q2">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Non</label>
                                    </div>
                                </div>
                            </div>
                            <!--SI OUI-->
                            <aside id="as_q2_ouinon"></aside>
                            <aside id="as_q2_oui" style="display:none">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3 mt-3">
                                            <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">*  </span>Pays de la citoyenneté/nationalité</label>
                                            <select id="slt_pays4" name="PAYS_CBB_PA" class="select_gray form-select border-info  rounded-0" aria-label="Default select example">
                                                
                                            </select>
                                            <script>
                                                $.getJSON("<?php echo base_url()."assets/USA/js/allcountry.json"; ?>", function(json) {
                                                    //console.log(json)); // this will show the info it in firebug console
                                                    var option="<option class=\"option_gray\" value=\"\" selected>Pays</option>";
                                                    for(var i=0;i<json.length;i++) {
                                                        option =option+ "<option class=\"option_gray\" value=\""+json[i].name+"\">"+json[i].name+"</option>"
                                                    }
                                                    $('#slt_pays4').html(option);
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
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3 mt-3">
                                            <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">*  </span>Comment l'avez-vous acquis?</label>
                                            <select id="slt_acquis" name="AQUIS_CBB_PA" class="form-select border-info  rounded-0" aria-label="Default select example">
                                                <option value="De naissance" selected>De naissance</option>
                                                <option value="Par les parents">Par les parents</option>
                                                <option value="Naturalisé">Naturalisé</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                            <!--SI OUI-->
                            <!--SI NON-->
                            <aside  id="as_q2_non"></aside>
                            <!--SI NON-->
                            <!--INPUT-->
                             <!--INPUT-->
                             <div class="row mt-4">
                                <div class="col-md-9">
                                Avez-vous été citoyen ou ressortissant d'un autre pays ?
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input"  name="CBC_PA[]" type="checkbox" role="switch" id="cbx_q3">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Non</label>
                                    </div>
                                </div>
                            </div>
                            <aside id="as_q3_ouinon"></aside>
                            <!--SI OUI-->
                            <!--INPUT-->
                            <aside id="as_q3_oui" class="mb-3" style="display:none">
                                <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">*  </span>Pays de la citoyenneté/nationalité</label>
                                <select id="slt_pays5" name="PAYS_CBC_PA" class="select_gray form-select border-info  rounded-0" aria-label="Default select example">
                                    
                                </select>
                                <script>
                                    $.getJSON("<?php echo base_url()."assets/USA/js/allcountry.json"; ?>", function(json) {
                                        //console.log(json)); // this will show the info it in firebug console
                                        var option="<option class=\"option_gray\" value=\"\" selected>Pays</option>";
                                        for(var i=0;i<json.length;i++) {
                                            option =option+ "<option class=\"option_gray\" value=\""+json[i].name+"\">"+json[i].name+"</option>"
                                        }
                                        $('#slt_pays5').html(option);
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
                            </aside>
                            <!--INPUT-->
                            <!--SI OUI-->
                            <!--SI NON-->
                            <aside id="as_q3_non"></aside>
                            <!--SI NON-->
                            <!--INPUT-->
                        
                        </div>
                    </div>
                    <div class="d-flex flex-row-reverse mt-5">
                        <div class="p-2"><a id="a_suivant" class="btn btn-success">Suivant</a></div>
                        <div class="p-2"><a href="<?php echo base_url(); ?>USA/demandez-esta/coordonnees" class="btn btn-success">Retour</a></div>
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