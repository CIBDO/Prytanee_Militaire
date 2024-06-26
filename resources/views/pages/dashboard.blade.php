@extends('layouts.master')
@section('content')
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Tableau de Bord</h3>
        <ul>
            <li>
                <a href="/">Accueil</a>
            </li>
            <li>Admin</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Dashboard summery Start Here -->
    <div class="row gutters-20">
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="dashboard-summery-one mg-b-20">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="item-icon bg-light-green ">
                            <i class="flaticon-classmates text-green"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-content">
                            <div class="item-title">Etudiants</div>
                            <div class="item-number"><span class="counter" data-num="150000">{{$nombreEleves}}</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="dashboard-summery-one mg-b-20">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="item-icon bg-light-blue">
                            <i class="flaticon-multiple-users-silhouette text-blue"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-content">
                            <div class="item-title">Enseignants</div>
                            <div class="item-number"><span class="counter" data-num="2250">{{$nombreEnseignants}}</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="dashboard-summery-one mg-b-20">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="item-icon bg-light-yellow">
                            <i class="flaticon-couple text-orange"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-content">
                            <div class="item-title">Parents</div>
                            <div class="item-number"><span class="counter" data-num="5690">{{$nombreParents}}</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="dashboard-summery-one mg-b-20">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="item-icon bg-light-red">
                            <i class="flaticon-money text-red"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-content">
                            <div class="item-title">Revenus</div>
                            <div class="item-number"><span class="counter" data-num="193000">{{$montantTotalPaiementsEleves}} F CFA</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Dashboard summery End Here -->
    <!-- Dashboard Content Start Here -->
    <div class="row gutters-20">
        <div class="col-12 col-xl-8 col-6-xxxl">
            <div class="card dashboard-card-one pd-b-20">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Revenus</h3>
                        </div>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                               aria-expanded="false">...</a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-times text-orange-red"></i>Fermer</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-cogs text-dark-pastel-green"></i>Editer</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-redo-alt text-orange-peel"></i>Raffraichir</a>
                            </div>
                        </div>
                    </div>
                    <div class="earning-report">
                        <div class="item-content">
                            <div class="single-item pseudo-bg-blue">
                                <h4>Total Recouvrements</h4>
                                <span>75,000</span>
                            </div>
                            <div class="single-item pseudo-bg-red">
                                <h4>Perception Rédevances</h4>
                                <span>15,000</span>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a class="date-dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                               aria-expanded="false">Jan 20, 2019</a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Jan 20, 2019</a>
                                <a class="dropdown-item" href="#">Jan 20, 2021</a>
                                <a class="dropdown-item" href="#">Jan 20, 2020</a>
                            </div>
                        </div>
                    </div>
                    <div class="earning-chart-wrap">
                        <canvas id="earning-line-chart" width="660" height="320"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-4 col-3-xxxl">
            <div class="card dashboard-card-two pd-b-20">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Dépenses</h3>
                        </div>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                               aria-expanded="false">...</a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-times text-orange-red"></i>Fermer</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-cogs text-dark-pastel-green"></i>Editer</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-redo-alt text-orange-peel"></i>Actualiser</a>
                            </div>
                        </div>
                    </div>
                    <div class="expense-report">
                        <div class="monthly-expense pseudo-bg-Aquamarine">
                            <div class="expense-date">Jan 2019</div>
                            <div class="expense-amount"><span>$</span> 15,000</div>
                        </div>
                        <div class="monthly-expense pseudo-bg-blue">
                            <div class="expense-date">Feb 2019</div>
                            <div class="expense-amount"><span>$</span> 10,000</div>
                        </div>
                        <div class="monthly-expense pseudo-bg-yellow">
                            <div class="expense-date">Mar 2019</div>
                            <div class="expense-amount"><span>$</span> 8,000</div>
                        </div>
                    </div>
                    <div class="expense-chart-wrap">
                        <canvas id="expense-bar-chart" width="100" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-6 col-3-xxxl">
            <div class="card dashboard-card-three pd-b-20">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Etudiants</h3>
                        </div>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                               aria-expanded="false">...</a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-times text-orange-red"></i>Fermer</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-cogs text-dark-pastel-green"></i>Editer</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-redo-alt text-orange-peel"></i>Actualiser</a>
                            </div>
                        </div>
                    </div>
                    <div class="doughnut-chart-wrap">
                        <canvas id="student-doughnut-chart" width="100" height="300"></canvas>
                    </div>
                    <div class="student-report">
                        <div class="student-count pseudo-bg-blue">
                            <h4 class="item-title">Filles</h4>
                            <div class="item-number">{{$nombreFilles}}</div>
                        </div>
                        <div class="student-count pseudo-bg-yellow">
                            <h4 class="item-title">Garçons</h4>
                            <div class="item-number">{{$nombreGarcons}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-6 col-4-xxxl">
            <div class="card dashboard-card-four pd-b-20">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Calendrier des évènements</h3>
                        </div>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                               aria-expanded="false">...</a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-times text-orange-red"></i>Fermer</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-cogs text-dark-pastel-green"></i>Editer</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-redo-alt text-orange-peel"></i>Actualiser</a>
                            </div>
                        </div>
                    </div>
                    <div class="calender-wrap">
                        <div id="fc-calender" class="fc-calender"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-6 col-4-xxxl">
            <div class="card dashboard-card-five pd-b-20">
                <div class="card-body pd-b-14">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Trafic</h3>
                        </div>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                               aria-expanded="false">...</a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-times text-orange-red"></i>Fermer</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-cogs text-dark-pastel-green"></i>Editer</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-redo-alt text-orange-peel"></i>Actualiser</a>
                            </div>
                        </div>
                    </div>
                    <h6 class="traffic-title">Visiteurs</h6>
                    <div class="traffic-number">2,590</div>
                    <div class="traffic-bar">
                        <div class="direct" data-toggle="tooltip" data-placement="top" title="Direct">
                        </div>
                        <div class="search" data-toggle="tooltip" data-placement="top" title="Search">
                        </div>
                        <div class="referrals" data-toggle="tooltip" data-placement="top" title="Referrals">
                        </div>
                        <div class="social" data-toggle="tooltip" data-placement="top" title="Social">
                        </div>
                    </div>
                    <div class="traffic-table table-responsive">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td class="t-title pseudo-bg-Aquamarine">Direct</td>
                                <td>12,890</td>
                                <td>50%</td>
                            </tr>
                            <tr>
                                <td class="t-title pseudo-bg-blue">Recherche</td>
                                <td>7,245</td>
                                <td>27%</td>
                            </tr>
                            <tr>
                                <td class="t-title pseudo-bg-yellow">Références</td>
                                <td>4,256</td>
                                <td>8%</td>
                            </tr>
                            <tr>
                                <td class="t-title pseudo-bg-red">Social</td>
                                <td>500</td>
                                <td>7%</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-6 col-4-xxxl">
            <div class="card dashboard-card-six pd-b-20">
                <div class="card-body">
                    <div class="heading-layout1 mg-b-17">
                        <div class="item-title">
                            <h3>Tableau d'Affichage</h3>
                        </div>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                               aria-expanded="false">...</a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-times text-orange-red"></i>Fermer</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-cogs text-dark-pastel-green"></i>Editer</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-redo-alt text-orange-peel"></i>Actualiser</a>
                            </div>
                        </div>
                    </div>
                    <div class="notice-box-wrap">
                        <div class="notice-list">
                            <div class="post-date bg-skyblue">16 June, 2019</div>
                            <h6 class="notice-title"><a href="#">Great School manag mene esom text of the
                                    printing.</a></h6>
                            <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                        </div>
                        <div class="notice-list">
                            <div class="post-date bg-yellow">16 June, 2019</div>
                            <h6 class="notice-title"><a href="#">Great School manag printing.</a></h6>
                            <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                        </div>
                        <div class="notice-list">
                            <div class="post-date bg-pink">16 June, 2019</div>
                            <h6 class="notice-title"><a href="#">Great School manag meneesom.</a></h6>
                            <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                        </div>
                        <div class="notice-list">
                            <div class="post-date bg-skyblue">16 June, 2019</div>
                            <h6 class="notice-title"><a href="#">Great School manag mene esom text of the
                                    printing.</a></h6>
                            <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                        </div>
                        <div class="notice-list">
                            <div class="post-date bg-yellow">16 June, 2019</div>
                            <h6 class="notice-title"><a href="#">Great School manag printing.</a></h6>
                            <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                        </div>
                        <div class="notice-list">
                            <div class="post-date bg-pink">16 June, 2019</div>
                            <h6 class="notice-title"><a href="#">Great School manag meneesom.</a></h6>
                            <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Dashboard Content End Here -->
    <!-- Social Media Start Here -->
    <div class="row gutters-20">
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card dashboard-card-seven">
                <div class="social-media bg-fb hover-fb">
                    <div class="media media-none--lg">
                        <div class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </div>
                        <div class="media-body space-sm">
                            <h6 class="item-title">Like notre page facebook</h6>
                        </div>
                    </div>
                    <div class="social-like">30,000</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card dashboard-card-seven">
                <div class="social-media bg-twitter hover-twitter">
                    <div class="media media-none--lg">
                        <div class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </div>
                        <div class="media-body space-sm">
                            <h6 class="item-title">Like notre page twitter</h6>
                        </div>
                    </div>
                    <div class="social-like">1,11,000</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card dashboard-card-seven">
                <div class="social-media bg-gplus hover-gplus">
                    <div class="media media-none--lg">
                        <div class="social-icon">
                            <i class="fab fa-google-plus-g"></i>
                        </div>
                        <div class="media-body space-sm">
                            <h6 class="item-title">Suivez-nous sur googleplus</h6>
                        </div>
                    </div>
                    <div class="social-like">19,000</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card dashboard-card-seven">
                <div class="social-media bg-linkedin hover-linked">
                    <div class="media media-none--lg">
                        <div class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </div>
                        <div class="media-body space-sm">
                            <h6 class="item-title">Suivez-nous sur linked</h6>
                        </div>
                    </div>
                    <div class="social-like">45,000</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Social Media End Here -->
    <!-- Footer Area Start Here -->
@stop
@section('add-js')
    <script>
        if ($("#student-doughnut-chart").length) {

            var doughnutChartData = {
                labels: ["Female Students", "Male Students"],
                datasets: [{
                    backgroundColor: ["#304ffe", "#ffa601"],
                    data: [{{$nombreFilles}}, {{$nombreGarcons}}],
                    label: "Total Students"
                }, ]
            };
            var doughnutChartOptions = {
                responsive: true,
                maintainAspectRatio: false,
                cutoutPercentage: 65,
                rotation: -9.4,
                animation: {
                    duration: 2000
                },
                legend: {
                    display: false
                },
                tooltips: {
                    enabled: true
                },
            };
            var studentCanvas = $("#student-doughnut-chart").get(0).getContext("2d");
            var studentChart = new Chart(studentCanvas, {
                type: 'doughnut',
                data: doughnutChartData,
                options: doughnutChartOptions
            });
        }
    </script>
@endsection
