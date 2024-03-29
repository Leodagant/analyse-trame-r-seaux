<?php

include('inc/function.php');

session_start();


if (empty($_SESSION['user']['id']))
    {
        header('Location:404.php');
    }
else {
   //var_dump($_SESSION['user']);
    }


    include('inc/headerclient.php');

/*REGARDER LES FONCTIONS POUR ENLEVER LE BONTON DECONNEXION QUAND ONT EST PAS CONNECTER */
?>

    <section id="container-header">
        <div class="vh">
            <div class="box-header">
                <img src="asset/img/globe.svg">
                <h1>Sécurisez votre réseau <br>
                    grâce à NORDCY NETWORK </h1>
                <div id="cta">
                    <div class="cta-header-ins">
                        <a href="dashboard.php">Dashboard</a>
                    </div>
                    <div class="cta-header-con">
                        <a href="contact.php">Contact</a>
                    </div>
                </div>
                <div class="cta-fleche">
                    <!-- Ajout par la suite l'animations avec le boutton-->
                    <a href="#container-a-pro"> <img src="asset/img/fleche.svg" alt="fleche"></a>
                </div>
            </div>

            <div class="cta-fleche">
                <!-- Ajout par la suite l'animations avec le boutton-->
                <a href="#container-a-pro"> <img src="asset/img/fleche.svg" alt="fleche" ></a>
            </div>
        </div>
    </section>

    <section id="container-a-pro" >
        <div class="container-pro">
            <div class="item-pro-0">
                <h2>A propos de <br>Nordcy Network</h2>

            </div>
            <div class="item-pro-1">
                <p>Nordcy Network est une société innovante, spécialisée dans la sécurité des systèmes d’information. Ses experts sont mondialement reconnus pour leurs activités de R & D dans le domaine des systèmes de détection d’intrusion et de réaction contre les cyberattaques.
                    <br>
                    <br> Nordcy Network fournit des solutions pour la défense active contre les attaques sur les systèmes et réseaux d’information pour garantir la disponibilité et la qualité des services de ses clients.
                    <br>
                    <br> Ces solutions sont de nature à répondre aux problématiques des acteurs de l’internet que ce soit pour leurs propres besoins ou pour offrir un service à valeur ajoutée à leurs clients.</p>
            </div>
        </div>
    </section>

    <section id="partenaire">
        <div class="vh">
            <div class="container-partenaire">
                <div class="item-partenaire">
                    <h2> Des millions de propriétés <br> Internet nous font confiance </h2>
                </div>
                <div class="item-logo-partenaire">
                    <div class="logo-partenaire">
                        <img src="asset/img/23andMe_Logo.png" alt="" class="andme">
                    </div>
                    <div class="logo-partenaire">
                        <img src="asset/img/R.png" alt="" class="R">
                    </div>
                    <div class="logo-partenaire">
                        <img src="asset/img/R2.png" alt="" class="R2">
                    </div>
                    <div class="logo-partenaire">
                        <img src="asset/img/R65.png" alt="" class="R65">
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section id="service">
        <div class="container-service">

            <div class="item-service-0">
                <h2>Protection DDoS</h2>
                <p>Garantissez la disponibilité de vos services face aux attaques <br>
                    les plus avancées avec une protection adaptée sur site, cloud ou hybride.</p>
            </div>
        </div>
        <div class="item-service-0">
            <h2>Intelligence DDoS</h2>
            <p>Evaluez la résilience de vos services face aux attaques et bénéficiez de <br>
                notre expertise de la menace DDoS.</p>
        </div>

        <div class="container-service">
            <div class="item-service-1">
                <h2>Sécurité DNS</h2>
                <p>Profitez du meilleur de la sécurité DNS pour garantir l'intégrité et la disponibilité <br>
                    de vos services aux utilisateurs, et prévenir infections et fuites de données.</p>
            </div>
        </div>
    </section>
    <script src="asset/js/ajax.js">

    </script>
<?php include('footer.php');
?>