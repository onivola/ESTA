
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
            <h2  class="fs-5">Demande d’ESTA États-Unis</h2>
            <h3  class="fs-5">Faire directement sa demande en ligne</h3>
            <form method="POST" action="<?php echo base_url(); ?>USA/demandez-esta">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Date d'arrivée prévue</label>
                    <div class="input-group">
                        <span style="background: #ecf2f7;" class="fa-solid fa-calendar-days  input-group-text border-0 rounded-0 pt-2" id="basic-addon1"></span>
                        <input type="text" placeholder="yyyy-MM-dd" class="form-control border border-0 rounded-0" id="pickadateandtime" aria-describedby="emailHelp">
               
                    </div>
                </div>
                <script>
                   $("#pickadateandtime").flatpickr({enableTime: false,dateFormat: "Y-m-d",locale:"fr",minDate: "today"});
                </script>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Adresse e‑mail</label>
                    <div class="input-group">
                        <span style="background: #ecf2f7;" class="fa-regular fa-envelope  input-group-text border-0 rounded-0 pt-2" id="basic-addon1"></span>
                        <input type="text" class="form-control border border-0 rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
                <button id="bt_demande" type="submit" class="btn btn-primary rounded-0 pt-2 pb-2 mt-2">Demander dès maintenant</button>
            </form>
        </div>
        
    </section>
    <!--BACKGROUND IMAGE--> 
    <!--ETAPE-->   
    <section id="dv_sctB">
       
        <div id="dv_BA">
            <h1 class="fs-4 text-center r mb-5 fw-semibold a_link">Demande d’un ESTA en trois étapes</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="text-center mt-2 mb-4 fw-semibold">1. Formulaire ESTA</div>
                    <div class="dv_etap_img"><img src="<?php echo base_url(); ?>assets/USA/image/formulaire2.png"/></div>
                    <div class="text-center mt-4 textlightB">Vous pouvez demander votre ESTA en quelques minutes grâce au simple formulaire d’ESTA français numérique.</div>
                </div>
                <div class="col-md-4">
                        <div class="text-center mt-2 mb-4 fw-semibold">2. Paiement en ligne</div>
                        <div class="dv_etap_img"><img src="<?php echo base_url(); ?>assets/USA/image/paiement2.png"/></div>
                        <div class="text-center mt-4 textlightB">Vous pouvez payer les frais de votre ESTA USA en toute sécurité avec Carte Bancaire, carte Visa, Mastercard, American Express, Bancontact ou PayPal.</div>
                </div>
                <div class="col-md-4">
                        <div class="text-center mt-2 mb-4 fw-semibold">3. L’ESTA officiel</div>
                        <div class="dv_etap_img"><img src="<?php echo base_url(); ?>assets/USA/image/officiel2.png"/></div>
                        <div class="text-center mt-4 textlightB">Dès que votre ESTA officiel est accordé, vous recevrez un e‑mail et un SMS. En cas d’urgence, il faut compter en moyenne 60 minutes.</div>
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
            <h1 class="fs-4 htext text-center mt-5">Vérifiez le statut de votre ESTA</h1>
            <p>
            Vous avez une demande d’ESTA en cours ou vous avez effectué une demande il y plusieurs semaines ou plusieurs mois ? Vous pouvez vérifier le statut de votre demande pour la finaliser ou tout simplement la retrouver pour la télécharger.
            </p>
            <P><strong>Voici les différentes actions que vous allez pouvoir réaliser pour votre demande :</strong></P>
            <ul>
                <li class="liaction ps-4 textlightB">Vérifier le statut de son ESTA (demande en cours).</li>
                <li class="liaction ps-4 textlightB">Accéder à sa demande finalisée afin de l’actualiser.</li>
                <li class="liaction ps-4 textlightB">Valider sa demande d’ESTA en effectuant le paiement.</li>
                <li class="liaction ps-4 textlightB">Télécharger et/ou imprimer son ESTA.</li>
            </ul>
            <button type="button" class="btn btn-primary d-flex justify-content-center" style="margin: 0 auto;" data-bs-toggle="modal" data-bs-target="#exampleModal">
            VÉRIFIER LE STATUT INDIVIDUEL
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">RÉCUPÉRER ET/OU VÉRIFIER LE STATUT DE SA DEMANDE D'ESTA</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Numéro de passeport<span class="text-danger"> *<span></label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Numéro de demande<span class="text-danger"> *</span></label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">Ouvrir votre email pour obtenir le numero de demande.</div>
                            </div>
                            <button style="width: 100%;" type="submit" class="btn btn-primary">RÉCUPÉRER MA DEMANDE</button>
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
        <h1 class="fs-4 htext text-center mt-5">Quelques informations à propos de l’ESTA</h1> 
        <p>
        <span class="tabu"></span>Dès lors que vous êtes citoyen ou ressortissant d’un des pays participant au Programme d’Exemption de Visa, vous pouvez bénéficier d’une alternative au visa classique : l’autorisation ESTA. Obligatoire pour entrer sur le territoire des États-Unis, elle contribue cependant à faciliter les démarches administratives nécessaires à tout voyage à destination des États-Unis.
        </p>
        <p>
        <span class="tabu"></span>Mais en quoi consiste exactement l’autorisation ESTA et quelles sont ses modalités ? Réponses aux questions les plus populaires.
        </p>
        <h2 class="fs-4 htext">Qu’est-ce que l’ESTA USA: Electronic System for Travel Authorization ?</h2>
        <p><span class="tabu"></span>Comme son nom l’indique, l’ESTA ou Electronic System for Travel Authorization est une autorisation de voyage électronique qu’on peut acquérir auprès du gouvernement américain pour pouvoir voyager sur le territoire américain.</p>
        <p>Seul un ressortissant d’un pays membre du Visa Waiver Program peut prétendre à un ESTA. Ils sont 38 à bénéficier de ce programme d'exemption de visa dont la plupart sont  des pays européens et quelques pays asiatiques. Les citoyens français font bien évidemment partie de ce programme. Il s’agit, d’une part, de rectification à ce dernier programme, pour pouvoir filtrer les citoyens exemptés de visa lors de leurs voyages aux Etats-Unis. Question de sécurité, il s’agit de pouvoir tracer les aller et retour de ces voyageurs et vérifier les antécédents judiciaires de ces derniers.  En effet, la demande d’ESTA se fait intégralement en ligne, notamment sur le site officiel esta.cbp.dhs.gov, cependant, d’autres sites proposent également de vous accompagner dans votre procédure de demande de A à Z , comme ce site. Des avantages sont rapportés dans cet accompagnement. (avantages)
        </p>
        <h2 class="fs-4 htext">L’ESTA est-il équivalent au VISA?</h2>
        <div class="row">
            <div class="col-md-6">
                <p><span class="tabu"></span>Aussi, l’ESTA remplace t-il le visa? Ces questions sont souvent posées, s’il s’agit d’un remplacement de visa. C’est plutôt l’exemption de visa qu’est la raison de l’existence de l’ESTA. L’ESTA serait un second filtre pour que le gouvernement américain ait mainmise sur les voyageurs exemptés de visa entrant sur le territoire américain.</p>
                <p>Il est faux de penser que l’ESTA pourrait remplacer un visa car il y a plusieurs limitations s’a à l’ESTA comme <strong>la limite sur la durée du séjour qui est de 90 jours au maximum</strong>, la restriction sur le type d’activité à exercer sur le territoire américain mais également sur l'objet du voyage , car il est interdit d’exercer une activité rémunérée sur les lieux avec un ESTA. </p>
                <p>Toutefois, les facilités se présentent sur la procédure pour l’obtention de ce dernier, économisant temps et argent car la demande se fait en ligne avec un coût minimal par rapport à celui du visa et le temps de réponse pourrait même être dans les minutes qui suivent la demande selon le dossier.</p>
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
            <h1 class="fs-4 text-center fw-semibold mb-5 a_link">BESOIN D’AIDE ?</h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="mt-2 mb-4  fs-4 fw-semibold">Les essentielles</div>
                    <div class="mt-4">
                        <ul class="list-group list-group-flush ul_question">
                            <li class="list-group-item">
                                <img class="img_question" src="<?php echo base_url(); ?>assets/image/right.png" alt="">
                                <a href="#">Qu’est-ce que l’ESTA ?</a>
                            </li>
                            <li class="list-group-item">
                                <img class="img_question" src="<?php echo base_url(); ?>assets/image/right.png" alt="">
                                <a href="#">Faut-il faire une demande d’ESTA en cas de transit aux USA ?</a>
                            </li>
                            <li class="list-group-item">
                                <img class="img_question" src="<?php echo base_url(); ?>assets/image/right.png" alt="">
                                <a href="#">Quel délai pour obtenir mon autorisation de voyage (ESTA) ?</a>
                            </li>
                            <li class="list-group-item">
                                <img class="img_question" src="<?php echo base_url(); ?>assets/image/right.png" alt="">
                                <a href="#">Combien coûte la demande d’application à l’ESTA ?</a>
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
                                <a href="#">Quelle différence entre l’ESTA et un Visa pour les États-Unis ?</a>
                            </li>
                            
                            <li class="list-group-item">
                                <img class="img_question" src="<?php echo base_url(); ?>assets/image/right.png" alt="">
                                <a href="#">Pourquoi effectuer une demande d’ESTA pour les USA ?</a>
                            </li>
                            <li class="list-group-item">
                                <img class="img_question" src="<?php echo base_url(); ?>assets/image/right.png" alt="">
                                <a href="#">Comment renouveler mon autorisation de voyage (ESTA) ?</a>
                            </li>
                            <li class="list-group-item">
                                <img class="img_question" src="<?php echo base_url(); ?>assets/image/right.png" alt="">
                                <a href="#">Quelle est la durée de validité de l’ESTA ?</a>
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