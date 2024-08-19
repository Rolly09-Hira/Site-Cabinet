@extends('admin.base.baseadmin')

@section('title','Dashboard')

@section('contente')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="admin">
            <img src="{{ asset(Auth::guard('admin')->User()->profile) }}" alt="image" style="width: 50px; height:50px; border-radius:100%; border:solid 2px #171f1c; padding:2px;">
            <label class="bg-light nomadmin">{{ Auth::guard('admin')->User()->name }}</label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Nombre des client en externalisation :</h5>
                    <p class="card-text">{{ $externalisation }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Nombre d'etudiant inscrit en formation/stage :</h5>
                    <p class="card-text">{{ $nbruser }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Nombre des clients en formation/Stage</h5>
                    <p class="card-text">{{ $inscription }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container col-md-4">
            <div class="card">
                <div class="card-header">
                    Statistic des services d'externalisation par mois
                </div>
                <div class="card-body">
                    <canvas id="myChart" height="100"></canvas>
                </div>
            </div>
        </div>
        <div class="container col-md-4">
            <div class="card">
                <div class="card-header">
                    Statistic des etudiants inscrit en formation/stage par mois
                </div>
                <div class="card-body">
                    <canvas id="myCharte" height="100"></canvas>
                </div>
            </div>
        </div>
        <div class="container col-md-4">
            <div class="card">
                <div class="card-header">
                    Statistic des client en formation/stage par mois
                </div>
                <div class="card-body">
                    <canvas id="myChartes" height="100"></canvas>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript">
        var labels = {{ Js::from($labels) }};
        var data = {{ Js::from($data) }};

        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Nombre d\'externalisations',
                    data: data,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });


        var labels = {{ Js::from($label) }};
        var data = {{ Js::from($datas) }};

        var ctx = document.getElementById('myCharte').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Nombre d\'inscrit',
                    data: data,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        var labels = {{ Js::from($labeletu) }};
        var data = {{ Js::from($dataetu) }};

        var ctx = document.getElementById('myChartes').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Nombre d\'inscrit',
                    data: data,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</main>
@endsection

