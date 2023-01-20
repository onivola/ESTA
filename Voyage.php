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
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/USA/css/flatpickr.min.css">
        <script src="<?php echo base_url(); ?>assets/USA/js/flatpickr"></script>
        <script src="<?php echo base_url(); ?>assets/USA/js/fr.js"></script>
        <script src="<?php echo base_url(); ?>assets/USA/js/script_voyage.js"></script>
        
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
                        <div class="triangle step1left"></div>
                        <div class="step step1left">Emploi Information</div>
                        <div class="step step1left">Révision paiement</div>
                        <div class="step step1left">Téléchargement ESTA</div>
                    </div>


                </div>
                <!--RESPONSIVE STEP-->
                <h1 id="h_step" style="display:none" class="text-center fs-5 border border-success pb-3 pt-3 text-success">Voyage Information</h1>
                <!--RESPONSIVE STEP-->
                <!--STEP PROGRESS-->
                <!--STEP PROGRESS-->
                <!--AIDE-->
                
                <!--AIDE-->
                <!--FORM-->
                <form id="form_voyage" action="<?php echo base_url(); ?>USA/ESTA/FormVoyage" method="POST">
                    <div class="row mt-5">
                        <div class="col-lg-6 col_coord1">
                            <h1 class="fs-5 text-center h_form">Questions relatives au voyageur</h1>
                            <!--INPUT-->
                            <div>
                                <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">*  </span>Date d'arrivée prévue</label>
                                <div class="input-group input-group-sm mb-3">
                                    <input id="in_arriver" class="form-control  form-control-lg border-info  rounded-0" type="text" name="DATE_ARRIVE" value="" placeholder="yyyy-MM-dd" aria-label=".form-control-sm example">
                                    
                                </div>
                            </div>
                            <script>
                            $("#in_arriver").flatpickr({enableTime: false,dateFormat: "Y-m-d",locale:"fr",minDate: "today"});
                            </script>
                            <!--INPUT-->
                            <!--INPUT-->
                            
                            <div class="row mb-3">
                                 <div class="col-md-9">
                                 Ce voyageur souffre-t-il d'un trouble physique ou mental qui peut constituer un danger pour son environnement immédiat, consomme-t-il des drogues ou souffre-t-il actuellement d'une maladie grave contagieuse ? Choléra,
                                    Maladies:<!-- Button trigger modal -->
                                    <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#Maladies">
                                    List des maladies
                                    </a>

                                    <!-- Modal -->
                                    <div class="modal fade" id="Maladies" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Maladies</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Vous devez répondre à cette question par « Oui » si ce voyageur est atteint d'une ou de plusieurs des maladies suivantes :</p>
                                                    <ul>
                                                        <li>Choléra</li>
                                                        <li>Diphthérie</li>
                                                        <li>Tuberculose, infectieuse</li>
                                                        <li>Peste</li>
                                                        <li>Variole</li>
                                                        <li>Fièvre jaune</li>
                                                        <li>Fières hémorragiques virales, y compris Ébola, Lassa, Marburg, Crimée-Congo</li>
                                                        <li>Maladies respiratoire aigües sévères avec risque de transmission à d'autres personnes et pouvant provoquer la mort</li>
                                                    </ul>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-md-3">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" name="CBX_VO_QA[]" role="switch" id="cbx_q1">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Non</label>
                                    </div>
                                 </div>
                             </div>
                            <!--INPUT-->
                            <!--INPUT-->
                            <div class="row mb-3">
                                <div class="col-md-9">
                                    Avez-vous été arrêté ou condamné pour une infraction ayant provoqué des dommages matériels graves ou un dommage grave à une autre personne ou une autorité gouvernementale ?
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" name="CBX_VO_QB[]" role="switch" id="cbx_q2">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Non</label>
                                    </div>
                                </div>
                            </div>
                            <!--INPUT-->
                            <!--INPUT-->
                            <div class="row mb-3">
                                <div class="col-md-9">
                                    Avez-vous déjà violé une loi en relation avec la possession, l'usage ou le trafic de drogues illicites ? 
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" name="CBX_VO_QC[]" role="switch" id="cbx_q3">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Non</label>
                                    </div>
                                </div>
                            </div>
                            <!--INPUT-->
                             <!--INPUT-->
                             <div class="row mb-3">
                                <div class="col-md-9">
                                Avez-vous l'intention de participer ou avez-vous participé à des activités terroristes, d'espionnage, de sabotage ou de génocide ?
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" name="CBX_VO_QD[]" role="switch" id="cbx_q4">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Non</label>
                                    </div>
                                </div>
                            </div>
                            <!--INPUT-->
                            <!--INPUT-->
                            <div class="row mb-3">
                                <div class="col-md-9">
                                Avez-vous déjà commis une fraude ou avez-vous fait de fausses déclarations sur vous-même ou d'autres personnes en vue d'obtenir ou aider d'autres personnes à obtenir un visa ou un droit d'entrée aux États-Unis ?
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" name="CBX_VO_QE[]" role="switch" id="cbx_q5">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Non</label>
                                    </div>
                                </div>
                            </div>
                            <!--INPUT-->
                            <!--INPUT-->
                            <div class="row mb-3">
                                <div class="col-md-9">
                                Cherchez-vous à présent un emploi aux États-Unis ou avez-vous travaillé dans le passé aux États-Unis sans avoir obtenu une permission préalable du gouvernement américain ?
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" name="CBX_VO_QF[]" role="switch" id="cbx_q6">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Non</label>
                                    </div>
                                </div>
                            </div>
                            <!--INPUT-->
                            <!--INPUT-->
                            <div class="row mb-3">
                                <div class="col-md-9">
                                Vous a-t-on déjà refusé un visa américain dont vous avez fait la demande avec votre passeport actuel ou un ancien passeport ou vous-a-t-on un jour refusé l'entrée aux États-Unis ou retiré votre droit d'admission à un point d'entrée américain ?
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input cbx_refuse" name="CBX_VO_QG[]" type="checkbox" role="switch" id="cbx_q7">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Non</label>
                                    </div>
                                    <div id="as_refuse_ouinon"></div>
                                    <div id="as_refuse_oui" style="display:none;">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Quand:</label>
                                            <input id="in_quand" type="text" name="CBX_VO_QG_QUAND" class="form-control border-info  rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Où:</label>
                                            <input id="in_ou" type="text" name="CBX_VO_QG_OU" class="form-control  border-info  rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                    <div id="as_refuse_non"></div>
                                </div>
                            </div>
                            <!--INPUT-->
                            <!--INPUT-->
                             <div class="row mb-3">
                                <div class="col-md-9">
                                Êtes-vous déjà resté aux États-Unis plus longtemps que la période d'admission que vous avait accordée le gouvernement américain ?
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" name="CBX_VO_QH[]" type="checkbox" role="switch" id="cbx_q8">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Non</label>
                                    </div>
                                </div>
                            </div>
                            <!--INPUT-->
                            <!--INPUT-->
                            <div class="row mb-3">
                                <div class="col-md-9">
                                Avez-vous voyagé où étiez-vous présent en Iran, Iraq, Libye, Corée du Nord, Somalie, Soudan, Syrie ou Yémen le 1er mars 2011 ou après ?
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" name="CBX_VO_QI[]" type="checkbox" role="switch" id="cbx_q9">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Non</label>
                                    </div>
                                </div>
                            </div>
                            <!--INPUT-->
                        </div>
                        <div class="col-lg-6 col_coord2">
                            <h1  class="fs-5 text-center h_form">DONNÉES RÉCAPITULATIVES DE VOTRE VOYAGE</h1>
                            <div class="row">
                                <div class="col-md-9">
                                Votre voyage aux États-Unis a-t-il lieu en transit vers un autre pays ?
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" name="CBX_VO_TRANSIT[]" type="checkbox" role="switch" id="cbx_transit">
                                        <label class="form-check-label" for="flexSwitchCheckDefault" id="lb_ounon_transit">Non</label>
                                    </div>
                                </div>
                            </div>
                            <aside id="as_transit_ouinon"></aside>
                            <!-- SI NON-->
                            <aside id="as_transit_non" style="display:none;">
                                <div class="mt-5 mb-5">
                                
                                    <h2 class="fs-6 text-primary">Coordonnées du point de contact aux États-Unis</h2>
                                    <!--INPUT-->
                                   
                                    <div>
                                        <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">*  </span>Point de contact aux États-Unis</label>
                                        <div class="input-group input-group-sm mb-3">
                                            <input id="in_pointcontact" name="TST_CONTACT" class="form-control  form-control-lg border-info  rounded-0" type="text" name="nom" value="" placeholder="" aria-label=".form-control-sm example">
                                            <div class="dropdown">
                                                <span class="btn btn-secondary ps-2 pe-2 btn-sm dropdown-toggle rounded-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="i-info fa fa-info fa-2xs"></i>
                                                </span>
                                                <div class="dropdown-menu p-4 text-muted" style="width: 335px;">
                                                    <p>
                                                    Un point de contact aux États-Unis peut être un ami, un parent ou un partenaire commercial. Si vous ne disposez pas d’un point de contact aux États-Unis, veuillez indiquer le nom, l’adresse et le numéro de téléphone de l’endroit où vous serez logé (par exemple un nom d’hôtel). Vous pouvez également indiquer UNKNOWN (inconnu).
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
                                            <input id="in_address1" name="TST_ADDRESSA" class="form-control  form-control-lg border-info  rounded-0" type="text" placeholder="" aria-label=".form-control-sm example">
                                            <div class="dropdown">
                                                <span class="btn btn-secondary ps-2 pe-2 btn-sm dropdown-toggle rounded-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="i-info fa fa-info fa-2xs"></i>
                                                </span>
                                                <div class="dropdown-menu p-4 text-muted" style="width: 335px;">
                                                    <p>
                                                    Dans le champ Adresse ligne 1, remplissez le numéro et la rue de l’adresse de votre point de contact aux États-Unis. N’inscrivez pas la ville et l’État dans ce champ. La ligne 1 de l’adresse est un renseignement obligatoire pour la demande. Vous pouvez également indiquer UNKNOWN (inconnu).
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--INPUT-->
                                   
                                    <!--INPUT-->
                                    <div>
                                        <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">   </span>Ligne d’adresse 2 (en option)</label>
                                        <div class="input-group input-group-sm mb-3">
                                            <input id="in_address2" name="TST_ADDRESSB" class="form-control  form-control-lg border-info  rounded-0" type="text" placeholder="" aria-label=".form-control-sm example">
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
                                    <div class="mb-4">
                                        <label for="exampleInputEmail1" class="form-label pb-2"><span class="text-dark fw-semibold fs-5">*  </span>État</label>      
                                        
                                        <select id="slt_etat" name="TST_ETATA" class="form-select border-info select_gray rounded-0" aria-label="Default select example">
                                            <option class="option_gray" value="" selected>État</option>
                                            <option class="option_gray" value="AL">ALABAMA</option>
                                            <option class="option_gray" value="AK">ALASKA</option>
                                            <option class="option_gray" value="AS">AMERICAN SAMOA</option>
                                            <option class="option_gray" value="AZ">ARIZONA</option>
                                            <option class="option_gray" value="AR">ARKANSAS</option>
                                            <option class="option_gray" value="CA">CALIFORNIA</option>
                                            <option class="option_gray" value="CO">COLORADO</option>
                                            <option class="option_gray" value="CT">CONNECTICUT</option>
                                            <option class="option_gray" value="DE">DELAWARE</option>
                                            <option class="option_gray" value="DC">DISTRICT OF COLUMBIA</option>
                                            <option class="option_gray" value="FL">FLORIDA</option>
                                            <option class="option_gray" value="GA">GEORGIA</option>
                                            <option class="option_gray" value="GU">GUAM</option>
                                            <option class="option_gray" value="HI">HAWAII</option>
                                            <option class="option_gray" value="ID">IDAHO</option>
                                            <option class="option_gray" value="IL">ILLINOIS</option>
                                            <option class="option_gray" value="IN">INDIANA</option>
                                            <option class="option_gray" value="IA">IOWA</option>
                                            <option class="option_gray" value="KS">KANSAS</option>
                                            <option class="option_gray" value="KY">KENTUCKY</option>
                                            <option class="option_gray" value="LA">LOUISIANA</option>
                                            <option class="option_gray" value="ME">MAINE</option>
                                            <option class="option_gray" value="MD">MARYLAND</option>
                                            <option class="option_gray" value="MA">MASSACHUSETTS</option>
                                            <option class="option_gray" value="MI">MICHIGAN</option>
                                            <option class="option_gray" value="MN">MINNESOTA</option>
                                            <option class="option_gray" value="MS">MISSISSIPPI</option>
                                            <option class="option_gray" value="MO">MISSOURI</option>
                                            <option class="option_gray" value="MT">MONTANA</option>
                                            <option class="option_gray" value="NE">NEBRASKA</option>
                                            <option class="option_gray" value="NV">NEVADA</option>
                                            <option class="option_gray" value="NH">NEW HAMPSHIRE</option>
                                            <option class="option_gray" value="NJ">NEW JERSEY</option>
                                            <option class="option_gray" value="NM">NEW MEXICO</option>
                                            <option class="option_gray" value="NY">NEW YORK</option>
                                            <option class="option_gray" value="NC">NORTH CAROLINA</option>
                                            <option class="option_gray" value="ND">NORTH DAKOTA</option>
                                            <option class="option_gray" value="OH">OHIO</option>
                                            <option class="option_gray" value="OK">OKLAHOMA</option>
                                            <option class="option_gray" value="OR">OREGON</option>
                                            <option class="option_gray" value="PA">PENNSYLVANIA</option>
                                            <option class="option_gray" value="PR">PUERTO RICO</option>
                                            <option class="option_gray" value="RI">RHODE ISLAND</option>
                                            <option class="option_gray" value="SC">SOUTH CAROLINA</option>
                                            <option class="option_gray" value="SD">SOUTH DAKOTA</option>
                                            <option class="option_gray" value="TN">TENNESSEE</option>
                                            <option class="option_gray" value="TX">TEXAS</option>
                                            <option class="option_gray" value="UM">UNITED STATES MINOR OUTLYING ISLANDS</option>
                                            <option class="option_gray" value="UT">UTAH</option>
                                            <option class="option_gray" value="VT">VERMONT</option>
                                            <option class="option_gray" value="VI">VIRGIN ISLANDS (U.S.)</option>
                                            <option class="option_gray" value="VA">VIRGINIA</option>
                                            <option class="option_gray" value="WA">WASHINGTON</option>
                                            <option class="option_gray" value="WV">WEST VIRGINIA</option>
                                            <option class="option_gray" value="WI">WISCONSIN</option>
                                            <option class="option_gray" value="WY">WYOMING</option>
                                            <option class="option_gray" value="XX">UNKNOWN</option>
                                        </select>
                                    </div>
                                    <!--INPUT-->
                                    <!--INPUT-->
                                    <div>
                                        <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">*  </span>Ville</label>
                                        <div class="input-group input-group-sm mb-3">
                                            <input id="in_ville" name="TST_VILLEA" class="form-control  form-control-lg border-info  rounded-0" type="text" placeholder="" aria-label=".form-control-sm example">
                                            <div class="dropdown">
                                                <span class="btn btn-secondary ps-2 pe-2 btn-sm dropdown-toggle rounded-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="i-info fa fa-info fa-2xs"></i>
                                                </span>
                                                <div class="dropdown-menu p-4 text-muted" style="width: 335px;">
                                                    <p>
                                                    Dans le champ Ville, indiquez la ville. La ville est un renseignement obligatoire pour la demande. Vous pouvez également indiquer UNKNOWN (inconnu).
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--INPUT-->
                                    <!--INPUT-->
                                    <div>
                                        <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">*  </span>Numéro de téléphone</label>
                                        <div class="input-group input-group-sm mb-3">
                                            <input id="in_phone" name="TST_TELEPHONE" class="form-control  form-control-lg border-info  rounded-0" type="text" placeholder="" aria-label=".form-control-sm example">
                                            <div class="dropdown">
                                                <span class="btn btn-secondary ps-2 pe-2 btn-sm dropdown-toggle rounded-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="i-info fa fa-info fa-2xs"></i>
                                                </span>
                                                <div class="dropdown-menu p-4 text-muted" style="width: 335px;">
                                                    <p>
                                                    Saisissez le numéro de téléphone de votre point de contact aux États-Unis Le numéro est un renseignement obligatoire pour remplir la demande. S’il n’y a pas de numéro de téléphone pour votre point de contact, vous pouvez saisir des zéros.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--INPUT-->

                                </div>
                                <div>
                                    <h2 class="fs-6 text-primary">Adresse Aux États-Unis</h2>
                                    <!--INPUT-->
                                    <div>
                                        <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">*  </span>Ligne d’adresse 1</label>
                                        <div class="input-group input-group-sm mb-3">
                                            <input id="in_addresse3" name="TST_ADDRESSC" class="form-control  form-control-lg border-info  rounded-0" type="text" placeholder="" aria-label=".form-control-sm example">
                                            <div class="dropdown">
                                                <span class="btn btn-secondary ps-2 pe-2 btn-sm dropdown-toggle rounded-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="i-info fa fa-info fa-2xs"></i>
                                                </span>
                                                <div class="dropdown-menu p-4 text-muted" style="width: 335px;">
                                                    <p>
                                                    Dans le champ Adresse ligne 1, tapez le numéro et la rue de l'emplacement où vous allez rester lors de votre séjour aux États-Unis. N'incluez pas la ville et l'État dans ce champ. L'adresse ligne 1 est optionnelle pour pouvoir poursuivre la demande.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--INPUT-->
                                    <!--INPUT-->
                                    <div>
                                        <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">   </span>Ligne d’adresse 2 (en option)</label>
                                        <div class="input-group input-group-sm mb-3">
                                            <input id="in_addresse4" name="TST_ADDRESSD" class="form-control  form-control-lg border-info  rounded-0" type="text" placeholder="" aria-label=".form-control-sm example">
                                            <div class="dropdown">
                                                <span class="btn btn-secondary ps-2 pe-2 btn-sm dropdown-toggle rounded-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="i-info fa fa-info fa-2xs"></i>
                                                </span>
                                                <div class="dropdown-menu p-4 text-muted" style="width: 335px;">
                                                    <p>
                                                    Dans le champ Adresse ligne 2, tapez l'étage, l'immeuble ou autre le cas échéant. N'incluez pas la ville et l'État dans ce champ. L'adresse ligne 2 est optionnelle pour pouvoir poursuivre la demande.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--INPUT-->
                                    <!--INPUT-->
                                    <div class="mb-4">
                                        <label for="exampleInputEmail1" class="form-label pb-2"><span class="text-dark fw-semibold fs-5">*  </span>État</label>      
                                        
                                        <select id="slt_etat2" name="TST_ETATB" class="form-select border-info select_gray  rounded-0" aria-label="Default select example">
                                            <option class="option_gray" value="" selected>État</option>
                                            <option class="option_gray" value="AL">ALABAMA</option>
                                            <option class="option_gray" value="AK">ALASKA</option>
                                            <option class="option_gray" value="AS">AMERICAN SAMOA</option>
                                            <option class="option_gray" value="AZ">ARIZONA</option>
                                            <option class="option_gray" value="AR">ARKANSAS</option>
                                            <option class="option_gray" value="CA">CALIFORNIA</option>
                                            <option class="option_gray" value="CO">COLORADO</option>
                                            <option class="option_gray" value="CT">CONNECTICUT</option>
                                            <option class="option_gray" value="DE">DELAWARE</option>
                                            <option class="option_gray" value="DC">DISTRICT OF COLUMBIA</option>
                                            <option class="option_gray" value="FL">FLORIDA</option>
                                            <option class="option_gray" value="GA">GEORGIA</option>
                                            <option class="option_gray" value="GU">GUAM</option>
                                            <option class="option_gray" value="HI">HAWAII</option>
                                            <option class="option_gray" value="ID">IDAHO</option>
                                            <option class="option_gray" value="IL">ILLINOIS</option>
                                            <option class="option_gray" value="IN">INDIANA</option>
                                            <option class="option_gray" value="IA">IOWA</option>
                                            <option class="option_gray" value="KS">KANSAS</option>
                                            <option class="option_gray" value="KY">KENTUCKY</option>
                                            <option class="option_gray" value="LA">LOUISIANA</option>
                                            <option class="option_gray" value="ME">MAINE</option>
                                            <option class="option_gray" value="MD">MARYLAND</option>
                                            <option class="option_gray" value="MA">MASSACHUSETTS</option>
                                            <option class="option_gray" value="MI">MICHIGAN</option>
                                            <option class="option_gray" value="MN">MINNESOTA</option>
                                            <option class="option_gray" value="MS">MISSISSIPPI</option>
                                            <option class="option_gray" value="MO">MISSOURI</option>
                                            <option class="option_gray" value="MT">MONTANA</option>
                                            <option class="option_gray" value="NE">NEBRASKA</option>
                                            <option class="option_gray" value="NV">NEVADA</option>
                                            <option class="option_gray" value="NH">NEW HAMPSHIRE</option>
                                            <option class="option_gray" value="NJ">NEW JERSEY</option>
                                            <option class="option_gray" value="NM">NEW MEXICO</option>
                                            <option class="option_gray" value="NY">NEW YORK</option>
                                            <option class="option_gray" value="NC">NORTH CAROLINA</option>
                                            <option class="option_gray" value="ND">NORTH DAKOTA</option>
                                            <option class="option_gray" value="OH">OHIO</option>
                                            <option class="option_gray" value="OK">OKLAHOMA</option>
                                            <option class="option_gray" value="OR">OREGON</option>
                                            <option class="option_gray" value="PA">PENNSYLVANIA</option>
                                            <option class="option_gray" value="PR">PUERTO RICO</option>
                                            <option class="option_gray" value="RI">RHODE ISLAND</option>
                                            <option class="option_gray" value="SC">SOUTH CAROLINA</option>
                                            <option class="option_gray" value="SD">SOUTH DAKOTA</option>
                                            <option class="option_gray" value="TN">TENNESSEE</option>
                                            <option class="option_gray" value="TX">TEXAS</option>
                                            <option class="option_gray" value="UM">UNITED STATES MINOR OUTLYING ISLANDS</option>
                                            <option class="option_gray" value="UT">UTAH</option>
                                            <option class="option_gray" value="VT">VERMONT</option>
                                            <option class="option_gray" value="VI">VIRGIN ISLANDS (U.S.)</option>
                                            <option class="option_gray" value="VA">VIRGINIA</option>
                                            <option class="option_gray" value="WA">WASHINGTON</option>
                                            <option class="option_gray" value="WV">WEST VIRGINIA</option>
                                            <option class="option_gray" value="WI">WISCONSIN</option>
                                            <option class="option_gray" value="WY">WYOMING</option>
                                            <option class="option_gray" value="XX">UNKNOWN</option>
                                        </select>
                                    </div>
                                    <script>
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
                                    <!--INPUT-->
                                    <!--INPUT-->
                                    <div>
                                        <label for="exampleInputEmail1" class="form-label"><span class="text-dark fw-semibold fs-5">*  </span>Ville</label>
                                        <div class="input-group input-group-sm mb-3">
                                            <input id="in_ville2" name="TST_VILLEB" class="form-control  form-control-lg border-info  rounded-0" type="text" placeholder="" aria-label=".form-control-sm example">
                                            <div class="dropdown">
                                                <span class="btn btn-secondary ps-2 pe-2 btn-sm dropdown-toggle rounded-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="i-info fa fa-info fa-2xs"></i>
                                                </span>
                                                <div class="dropdown-menu p-4 text-muted" style="width: 335px;">
                                                    <p>
                                                    Dans le champ Ville, tapez la ville. La ville est optionnelle pour pouvoir poursuivre la demande.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--INPUT-->
                                </div>
                            </aside>
                            <!-- SI NON-->
                            <!-- SI OUI-->
                            <aside id="as_transit_oui">
                                
                                
                            </aside>
                            <!-- SI OUI-->
                            <script>
                            
                            </script>
                            <!-- SI OUI-->
                        </div>
                    </div>
                    <div class="d-flex flex-row-reverse mt-5">
                        <div class="p-2"><a id="a_suivant" class="btn btn-success">Suivant</a></div>
                        <div class="p-2"><a href="<?php echo base_url(); ?>USA/demandez-esta/passeport" class="btn btn-success">Retour</a></div>
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