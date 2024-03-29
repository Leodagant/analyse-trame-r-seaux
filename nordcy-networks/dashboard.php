<?php
session_start();

require_once("inc/pdo.php");
require_once("inc/function.php");

if (empty($_SESSION['user']['id']))
{
    header('Location: 404.php');
}

//debug ($_SESSION);
//print_r ($_SESSION);

include ('inc/headerdash.php')

?>

        <section id="dashboard">
            <div class="dashboard_container0">
                <div class="dashboard_container1">
                    <div class="dashboard_buttons">
                        <div class="dashboard_btn">
                            <h1 class="text-center mt-5 mb-4">Bonjour, <?php echo $_SESSION['user']['prenom']?> <?php echo $_SESSION['user']['nom']?> </h1>
                            <h3 class="text-center"> Bienvenue sur votre tableau de bord </h3>
                        </div>
                        <div class="dashboard_btn">
                            <a href="dashboard.php">Dashboard</a>
                        </div>
                        <div class="logs_btn">
                            <a href="logs.php">Logs</a>
                        </div>
                        <div class="details_btn">
                            <a href="detail.php">Détails</a>
                        </div>
                    </div>
                </div>
                <div class="dashboard_container2">
                    <!-- canvas -->
                    <div>
                        <canvas id="myChart"></canvas>
                    </div>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script src=asset/js/testajax.js></script>

        </section>

    <section id="Container-Graphe-Trames">

            <h2> Données reçu depuis notre serveur </h2>

        <div class="Container-Graphe">

                <div class="container-graphe-donner-0">

                    <canvas id="myChart2"></canvas>

                </div>

                <div class="container-graphe-donner-1">
                    <!-- Taux de ttl -->
                    <canvas id="myChart3"></canvas>

                </div>

                <div class="container-graphe-donner-1">

                    <canvas id="myChart4"></canvas>

                </div>

                <div class="container-graphe-donner-1">

                    <canvas id="myChart5"></canvas>

                </div>

        </div>

        <div class="Container-Graphe-1">
            
        <div class="container-graphe-donner-1">

            <canvas id="myChart6"></canvas>

        </div>

        <div class="container-graphe-donner-1">

            <canvas id="myChart7"></canvas>

        </div>

    </section>
