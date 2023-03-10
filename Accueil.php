
<!DOCTYPE html>

<html>
<head>
    <title>ESTA</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/USA/css/index.css">

    
    <script src="<?php echo base_url(); ?>assets/jquery/jquery-3.6.1.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/USA/css/flatpickr.min.css">
        <script src="<?php echo base_url(); ?>assets/USA/js/flatpickr"></script>
        <script src="<?php echo base_url(); ?>assets/USA/js/fr.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css">
        <script src="<?php echo base_url(); ?>assets/jquery/jquery-ui.js"></script>
    <script src="<?php echo base_url(); ?>assets/USA/js/script_index.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <script src="<?php echo base_url(); ?>assets/bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>

    <link href="<?php echo base_url(); ?>assets/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/fontawesome/css/brands.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/fontawesome/css/solid.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/fontawesome/css/regular.css" rel="stylesheet">
</head>
<body id="body">
    <!--MENU--> 
    <?php
        $this->load->view('Include/Menu');
    ?>
    <!--MENU-->
    
    <section class="container" style="
            height: 480px; 
            background-image:url('<?php echo base_url(); ?>assets/USA/image/couverture.jpeg');
            background-repeat: no-repeat;
            background-position: 50% 50%;
            ">
        <!--BACKGROUND IMAGE-->
        <div id="dv_iddemande" class="dv_demande text-white">
            <h2  class="fs-5">Demande d???ESTA ??tats-Unis</h2>
            <h3  class="fs-5">Faire directement sa demande en ligne</h3>
            <form method="POST" action="<?php echo base_url(); ?>USA/demandez-esta">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Date d'arriv??e pr??vue</label>
                    <div class="input-group">
                        <span style="background: #ecf2f7;" class="fa-solid fa-calendar-days  input-group-text border-0 rounded-0 pt-2" id="basic-addon1"></span>
                        <input type="text" placeholder="yyyy-MM-dd" class="form-control border border-0 rounded-0" id="pickadateandtime" aria-describedby="emailHelp">
               
                    </div>
                </div>
                <script>
                   $("#pickadateandtime").flatpickr({enableTime: false,dateFormat: "Y-m-d",locale:"fr",minDate: "today"});
                </script>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Adresse e???mail</label>
                    <div class="input-group">
                        <span style="background: #ecf2f7;" class="fa-regular fa-envelope  input-group-text border-0 rounded-0 pt-2" id="basic-addon1"></span>
                        <input type="text" class="form-control border border-0 rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
                <button id="bt_demande" type="submit" class="btn btn-primary rounded-0 pt-2 pb-2 mt-2">Demander d??s maintenant</button>
            </form>
        </div>
        
    </section>
    <!--BACKGROUND IMAGE--> 
    <!--ETAPE-->   
    <section id="dv_sctB">
       
        <div id="dv_BA">
            <h1 class="fs-4 text-center r mb-5 fw-semibold a_link">Demande d???un ESTA en trois ??tapes</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="text-center mt-2 mb-4 fw-semibold">1. Formulaire ESTA</div>
                    <div class="dv_etap_img"><img src="<?php echo base_url(); ?>assets/USA/image/formulaire2.png"/></div>
                    <div class="text-center mt-4 textlightB">Vous pouvez demander votre ESTA en quelques minutes gr??ce au simple formulaire d???ESTA fran??ais num??rique.</div>
                </div>
                <div class="col-md-4">
                        <div class="text-center mt-2 mb-4 fw-semibold">2. Paiement en ligne</div>
                        <div class="dv_etap_img"><img src="<?php echo base_url(); ?>assets/USA/image/paiement2.png"/></div>
                        <div class="text-center mt-4 textlightB">Vous pouvez payer les frais de votre ESTA USA en toute s??curit?? avec Carte Bancaire, carte Visa, Mastercard, American Express, Bancontact ou PayPal.</div>
                </div>
                <div class="col-md-4">
                        <div class="text-center mt-2 mb-4 fw-semibold">3. L???ESTA officiel</div>
                        <div class="dv_etap_img"><img src="<?php echo base_url(); ?>assets/USA/image/officiel2.png"/></div>
                        <div class="text-center mt-4 textlightB">D??s que votre ESTA officiel est accord??, vous recevrez un e???mail et un SMS. En cas d???urgence, il faut compter en moyenne 60 minutes.</div>
                </div>
            </div>
        </div>
    </section>
    <!--ETAPE-->
    <!--INFORMATION-->
    <section id="dv_sctC" class="dv_csectC bg-white shadow-sm">
        <!--MODALE VERIFICATION -->
        <!-- Button trigger modal -->
        <div>
            <h1 class="fs-4 htext text-center mt-5">V??rifiez le statut de votre ESTA</h1>
            <p>
            Vous avez une demande d???ESTA en cours ou vous avez effectu?? une demande il y plusieurs semaines ou plusieurs mois ? Vous pouvez v??rifier le statut de votre demande pour la finaliser ou tout simplement la retrouver pour la t??l??charger.
            </p>
            <P><strong>Voici les diff??rentes actions que vous allez pouvoir r??aliser pour votre demande :</strong></P>
            <ul>
                <li class="liaction ps-4 textlightB">V??rifier le statut de son ESTA (demande en cours).</li>
                <li class="liaction ps-4 textlightB">Acc??der ?? sa demande finalis??e afin de l???actualiser.</li>
                <li class="liaction ps-4 textlightB">Valider sa demande d???ESTA en effectuant le paiement.</li>
                <li class="liaction ps-4 textlightB">T??l??charger et/ou imprimer son ESTA.</li>
            </ul>
            <button type="button" class="btn btn-primary d-flex justify-content-center" style="margin: 0 auto;" data-bs-toggle="modal" data-bs-target="#exampleModal">
            V??RIFIER LE STATUT INDIVIDUEL
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">R??CUP??RER ET/OU V??RIFIER LE STATUT DE SA DEMANDE D'ESTA</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Num??ro de passeport<span class="text-danger"> *<span></label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Num??ro de demande<span class="text-danger"> *</span></label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">Ouvrir votre email pour obtenir le numero de demande.</div>
                            </div>
                            <button style="width: 100%;" type="submit" class="btn btn-primary">R??CUP??RER MA DEMANDE</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button  type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!--MODALE VERIFICATION -->
        <!-- Modal -->
        <h1 class="fs-4 htext text-center mt-5">Quelques informations ?? propos de l???ESTA</h1> 
        <p>
        <span class="tabu"></span>D??s lors que vous ??tes citoyen ou ressortissant d???un des pays participant au Programme d???Exemption de Visa, vous pouvez b??n??ficier d???une alternative au visa classique : l???autorisation ESTA. Obligatoire pour entrer sur le territoire des ??tats-Unis, elle contribue cependant ?? faciliter les d??marches administratives n??cessaires ?? tout voyage ?? destination des ??tats-Unis.
        </p>
        <p>
        <span class="tabu"></span>Mais en quoi consiste exactement l???autorisation ESTA et quelles sont ses modalit??s ? R??ponses aux questions les plus populaires.
        </p>
        <h2 class="fs-4 htext">Qu???est-ce que l???ESTA USA: Electronic System for Travel Authorization ?</h2>
        <p><span class="tabu"></span>Comme son nom l???indique, l???ESTA ou Electronic System for Travel Authorization est une autorisation de voyage ??lectronique qu???on peut acqu??rir aupr??s du gouvernement am??ricain pour pouvoir voyager sur le territoire am??ricain.</p>
        <p>Seul un ressortissant d???un pays membre du Visa Waiver Program peut pr??tendre ?? un ESTA. Ils sont 38 ?? b??n??ficier de ce programme d'exemption de visa dont la plupart sont  des pays europ??ens et quelques pays asiatiques. Les citoyens fran??ais font bien ??videmment partie de ce programme. Il s???agit, d???une part, de rectification ?? ce dernier programme, pour pouvoir filtrer les citoyens exempt??s de visa lors de leurs voyages aux Etats-Unis. Question de s??curit??, il s???agit de pouvoir tracer les aller et retour de ces voyageurs et v??rifier les ant??c??dents judiciaires de ces derniers.  En effet, la demande d???ESTA se fait int??gralement en ligne, notamment sur le site officiel esta.cbp.dhs.gov, cependant, d???autres sites proposent ??galement de vous accompagner dans votre proc??dure de demande de A ?? Z , comme ce site. Des avantages sont rapport??s dans cet accompagnement. (avantages)
        </p>
        <h2 class="fs-4 htext">L???ESTA est-il ??quivalent au VISA?</h2>
        <div class="row">
            <div class="col-md-6">
                <p><span class="tabu"></span>Aussi, l???ESTA remplace t-il le visa? Ces questions sont souvent pos??es, s???il s???agit d???un remplacement de visa. C???est plut??t l???exemption de visa qu???est la raison de l???existence de l???ESTA. L???ESTA serait un second filtre pour que le gouvernement am??ricain ait mainmise sur les voyageurs exempt??s de visa entrant sur le territoire am??ricain.</p>
                <p>Il est faux de penser que l???ESTA pourrait remplacer un visa car il y a plusieurs limitations s???a ?? l???ESTA comme <strong>la limite sur la dur??e du s??jour qui est de 90 jours au maximum</strong>, la restriction sur le type d???activit?? ?? exercer sur le territoire am??ricain mais ??galement sur l'objet du voyage , car il est interdit d???exercer une activit?? r??mun??r??e sur les lieux avec un ESTA. </p>
                <p>Toutefois, les facilit??s se pr??sentent sur la proc??dure pour l???obtention de ce dernier, ??conomisant temps et argent car la demande se fait en ligne avec un co??t minimal par rapport ?? celui du visa et le temps de r??ponse pourrait m??me ??tre dans les minutes qui suivent la demande selon le dossier.</p>
            </div>
            <div class="col-md-6">
                <img src="<?php echo base_url(); ?>assets/USA/image/visa.jpg" alt="">
            </div>
        </div>
    </section>
    <!--INFORMATION-->
    <!--QUESTION-->  
    <section id="dv_sctC">
        <div id="dv_CA" class="pe-4 ps-4">
            <h1 class="fs-4 text-center fw-semibold mb-5 a_link">BESOIN D???AIDE ?</h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="mt-2 mb-4  fs-4 fw-semibold">Les essentielles</div>
                    <div class="mt-4">
                        <ul class="list-group list-group-flush ul_question">
                            <li class="list-group-item">
                                <img class="img_question" src="<?php echo base_url(); ?>assets/image/right.png" alt="">
                                <a href="#">Qu???est-ce que l???ESTA ?</a>
                            </li>
                            <li class="list-group-item">
                                <img class="img_question" src="<?php echo base_url(); ?>assets/image/right.png" alt="">
                                <a href="#">Faut-il faire une demande d???ESTA en cas de transit aux USA ?</a>
                            </li>
                            <li class="list-group-item">
                                <img class="img_question" src="<?php echo base_url(); ?>assets/image/right.png" alt="">
                                <a href="#">Quel d??lai pour obtenir mon autorisation de voyage (ESTA) ?</a>
                            </li>
                            <li class="list-group-item">
                                <img class="img_question" src="<?php echo base_url(); ?>assets/image/right.png" alt="">
                                <a href="#">Combien co??te la demande d???application ?? l???ESTA ?</a>
                            </li>
                        </ul>   
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fs-4 fw-semibold mt-2 mb-4">Pour aller plus loin</div>
                    <div class="mt-4">
                        <ul class="list-group list-group-flush ul_question">
                            <li class="list-group-item">
                                <img class="img_question" src="<?php echo base_url(); ?>assets/image/right.png" alt="">
                                <a href="#">Quelle diff??rence entre l???ESTA et un Visa pour les ??tats-Unis ?</a>
                            </li>
                            
                            <li class="list-group-item">
                                <img class="img_question" src="<?php echo base_url(); ?>assets/image/right.png" alt="">
                                <a href="#">Pourquoi effectuer une demande d???ESTA pour les USA ?</a>
                            </li>
                            <li class="list-group-item">
                                <img class="img_question" src="<?php echo base_url(); ?>assets/image/right.png" alt="">
                                <a href="#">Comment renouveler mon autorisation de voyage (ESTA) ?</a>
                            </li>
                            <li class="list-group-item">
                                <img class="img_question" src="<?php echo base_url(); ?>assets/image/right.png" alt="">
                                <a href="#">Quelle est la dur??e de validit?? de l???ESTA ?</a>
                            </li>
                        </ul>  
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--QUEISTION-->
    <!--SECTION FOOTER-->
    <?php
        $this->load->view('Include/Footer');
    ?>
    <button class="btn btn-info rounded-0" id="toTop"><i class="fa-sharp fa-solid fa-caret-up"></i></button>
    
    <!--SECTION FOOTER-->
</body>


</html>