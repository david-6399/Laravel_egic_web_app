@extends('admin.index')
@section('content')
    
    <div class="main-panel">
        <div class="content-wrapper">



            <div class="row">
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="d-flex align-items-center align-self-start">
                                        <h3 class="mb-0">0{{ count($formation) }}</h3>
                                        <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="icon icon-box-success ">
                                        <span class="mdi mdi-arrow-top-right icon-item"></span>
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-muted font-weight-normal">Nombre De Formation</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="d-flex align-items-center align-self-start">
                                        <h3 class="mb-0">{{ count($userinfos) }}</h3>
                                        <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="icon icon-box-success">
                                        <span class="mdi mdi-arrow-top-right icon-item"></span>
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-muted font-weight-normal">Nombre D'utilisateur</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="d-flex align-items-center align-self-start">
                                        <h3 class="mb-0">$12.34</h3>
                                        <p class="text-danger ml-2 mb-0 font-weight-medium">-2.4%</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="icon icon-box-danger">
                                        <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-muted font-weight-normal">Daily Income</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="d-flex align-items-center align-self-start">
                                        <h3 class="mb-0">$31.53</h3>
                                        <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="icon icon-box-success ">
                                        <span class="mdi mdi-arrow-top-right icon-item"></span>
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-muted font-weight-normal">Expense current</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Transaction History</h4>
                            <canvas id="transaction-history" class="transaction-chart"></canvas>
                            <div
                                class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                                <div class="text-md-center text-xl-left">
                                    <h6 class="mb-1">Transfer to Paypal</h6>
                                    <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                                </div>
                                <div
                                    class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                                    <h6 class="font-weight-bold mb-0">$236</h6>
                                </div>
                            </div>
                            <div
                                class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                                <div class="text-md-center text-xl-left">
                                    <h6 class="mb-1">Tranfer to Stripe</h6>
                                    <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                                </div>
                                <div
                                    class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                                    <h6 class="font-weight-bold mb-0">$593</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row justify-content-between">
                                <h4 class="card-title mb-1">Les Dernier Objet Ajoutez</h4>
                                <p class="text-muted mb-1">Your data status</p>
                            </div>
                            <div class="row">
                                <div class="col-12">

                                    @forelse ($lastadditions as $lastadditions)
                                        @if ($lastadditions instanceof \App\Models\formation)
                                            <div class="preview-list">
                                                <div class="preview-item border-bottom">
                                                    <div class="preview-thumbnail">
                                                        <div class="preview-icon bg-primary">
                                                            <i class="mdi mdi-file-document"></i>
                                                        </div>
                                                    </div>
                                                    <div class="preview-item-content d-sm-flex flex-grow">
                                                        <div class="flex-grow">
                                                            <h6 class="preview-subject">Formation</h6>
                                                            <p class="text-muted mb-0">{{ $lastadditions->nome_forma }}</p>
                                                        </div>
                                                        <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                                            <p class="text-muted">15 minutes ago</p>
                                                            <p class="text-muted mb-0">30 tasks, 5 issues </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @elseif ($lastadditions instanceof \App\Models\program)
                                            <div class="preview-list">
                                                <div class="preview-item border-bottom">
                                                    <div class="preview-thumbnail">
                                                        <div class="preview-icon bg-warning">
                                                            <i class="mdi mdi-file-document"></i>
                                                        </div>
                                                    </div>
                                                    <div class="preview-item-content d-sm-flex flex-grow">
                                                        <div class="flex-grow">
                                                            <h6 class="preview-subject"> Program</h6>
                                                            <p class="text-muted mb-0">{{ $lastadditions->titre }}</p>
                                                        </div>
                                                        <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                                            <p class="text-muted">15 minutes ago</p>
                                                            <p class="text-muted mb-0">30 tasks, 5 issues </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @elseif ($lastadditions instanceof \App\Models\event)
                                            <div class="preview-list">
                                                <div class="preview-item border-bottom">
                                                    <div class="preview-thumbnail">
                                                        <div class="preview-icon bg-success">
                                                            <i class="mdi mdi-clock"></i>
                                                        </div>
                                                    </div>
                                                    <div class="preview-item-content d-sm-flex flex-grow">
                                                        <div class="flex-grow">
                                                            <h6 class="preview-subject"> Evenement</h6>
                                                            <p class="text-muted mb-0">{{ $lastadditions->titre }}</p>
                                                        </div>
                                                        <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                                            <p class="text-muted">15 minutes ago</p>
                                                            <p class="text-muted mb-0">30 tasks, 5 issues </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                    @empty
                                        <h6>Aucun addition</h6>
                                    @endforelse

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h5>Revenue</h5>
                            <div class="row">
                                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                                        <h2 class="mb-0">$32123</h2>
                                        <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                                    </div>
                                    <h6 class="text-muted font-weight-normal">11.38% Since last month</h6>
                                </div>
                                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                    <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h5>Sales</h5>
                            <div class="row">
                                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                                        <h2 class="mb-0">$45850</h2>
                                        <p class="text-success ml-2 mb-0 font-weight-medium">+8.3%</p>
                                    </div>
                                    <h6 class="text-muted font-weight-normal"> 9.61% Since last month</h6>
                                </div>
                                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                    <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h5>La Formation Le Plus Demander</h5>
                            <div class="row">
                                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                    @if ($mostfavoris)
                                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                                            <h2 class="mb-0">NB - {{ $mostfavoris->favoris }}</h2>
                                            <p class="text-success ml-2 mb-0 font-weight-medium">+8.3%</p>
                                        </div>
                                        <h6 class="text-muted font-weight-normal">{{ $mostfavoris->nome_forma }}</h6>
                                    @else
                                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                                            <h2 class="mb-0">NB - 0</h2>
                                            <p class="text-danger ml-2 mb-0 font-weight-medium">0.00%</p>
                                        </div>
                                        <h6 class="text-muted font-weight-normal">aucun formation</h6>
                                    @endif
                                </div>
                                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                    <i class="icon-lg mdi mdi-monitor text-success ml-auto"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row ">

                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            @livewire('usertable')
                        </div>
                    </div>
                </div>
            </div>


            <div class="row ">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Les Commentaire</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="form-check form-check-muted m-0">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input">
                                                    </label>
                                                </div>
                                            </th>
                                            <th></th>
                                            <th> Nom d'utilisateur </th>
                                            <th> Commentaire </th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($comment as $comment)
                                            <tr>
                                                <td style="width:20px">
                                                    <div class="form-check form-check-muted m-0">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td style="max-width: 20px"><img
                                                        src="{{ asset('images/65cb232eec61e-formation 1.png') }}"
                                                        alt="image" />
                                                </td>
                                                <td>{{ $comment->name }}</td>
                                                <td>{{ $comment->contenu }}</td>

                                                <td>
                                                    <div class="badge badge-outline-success">Approved</div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row justify-content-between">
                                <h4 class="card-title">Messages</h4>
                                <p class="text-muted mb-1 small">View all</p>
                            </div>
                            <div class="preview-list">
                                <div class="preview-item border-bottom">
                                    <div class="preview-thumbnail">
                                        {{-- <img src="assets/images/faces/face6.jpg" alt="image" class="rounded-circle" /> --}}
                                    </div>
                                    <div class="preview-item-content d-flex flex-grow">
                                        <div class="flex-grow">
                                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                                <h6 class="preview-subject">Leonard</h6>
                                                <p class="text-muted text-small">5 minutes ago</p>
                                            </div>
                                            <p class="text-muted">Well, it seems to be working now.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="preview-item border-bottom">
                                    <div class="preview-thumbnail">
                                        {{-- <img src="assets/images/faces/face8.jpg" alt="image" class="rounded-circle" /> --}}
                                    </div>
                                    <div class="preview-item-content d-flex flex-grow">
                                        <div class="flex-grow">
                                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                                <h6 class="preview-subject">Luella Mills</h6>
                                                <p class="text-muted text-small">10 Minutes Ago</p>
                                            </div>
                                            <p class="text-muted">Well, it seems to be working now.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="preview-item border-bottom">
                                    <div class="preview-thumbnail">
                                        {{-- <img src="assets/images/faces/face9.jpg" alt="image" class="rounded-circle" /> --}}
                                    </div>
                                    <div class="preview-item-content d-flex flex-grow">
                                        <div class="flex-grow">
                                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                                <h6 class="preview-subject">Ethel Kelly</h6>
                                                <p class="text-muted text-small">2 Hours Ago</p>
                                            </div>
                                            <p class="text-muted">Please review the tickets</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="preview-item border-bottom">
                                    <div class="preview-thumbnail">
                                        {{-- <img src="assets/images/faces/face11.jpg" alt="image"
                                            class="rounded-circle" /> --}}
                                    </div>
                                    <div class="preview-item-content d-flex flex-grow">
                                        <div class="flex-grow">
                                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                                <h6 class="preview-subject">Herman May</h6>
                                                <p class="text-muted text-small">4 Hours Ago</p>
                                            </div>
                                            <p class="text-muted">Thanks a lot. It was easy to fix it .</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Portfolio Slide</h4>
                            <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel"
                                id="owl-carousel-basic">
                                <div class="item">
                                    {{-- <img src="assets/images/dashboard/Rectangle.jpg" alt=""> --}}
                                </div>
                                <div class="item">
                                    {{-- <img src="assets/images/dashboard/Img_5.jpg" alt=""> --}}
                                </div>
                                <div class="item">
                                    {{-- <img src="assets/images/dashboard/img_6.jpg" alt=""> --}}
                                </div>
                            </div>
                            <div class="d-flex py-4">
                                <div class="preview-list w-100">
                                    <div class="preview-item p-0">
                                        <div class="preview-thumbnail">
                                            {{-- <img src="assets/images/faces/face12.jpg" class="rounded-circle"
                                                alt=""> --}}
                                        </div>
                                        <div class="preview-item-content d-flex flex-grow">
                                            <div class="flex-grow">
                                                <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                                    <h6 class="preview-subject">CeeCee Bass</h6>
                                                    <p class="text-muted text-small">4 Hours Ago</p>
                                                </div>
                                                <p class="text-muted">Well, it seems to be working now.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-muted">Well, it seems to be working now. </p>
                            <div class="progress progress-md portfolio-progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 50%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xl-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">To do list</h4>
                            <div class="add-items d-flex">
                                <input type="text" class="form-control todo-list-input" placeholder="enter task..">
                                <button class="add btn btn-primary todo-list-add-btn">Add</button>
                            </div>
                            <div class="list-wrapper">
                                <ul class="d-flex flex-column-reverse text-white todo-list todo-list-custom">
                                    <li>
                                        <div class="form-check form-check-primary">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox"> Create invoice </label>
                                        </div>
                                        <i class="remove mdi mdi-close-box"></i>
                                    </li>
                                    <li>
                                        <div class="form-check form-check-primary">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox"> Meeting with Alita
                                            </label>
                                        </div>
                                        <i class="remove mdi mdi-close-box"></i>
                                    </li>
                                    <li class="completed">
                                        <div class="form-check form-check-primary">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox" checked> Prepare for
                                                presentation </label>
                                        </div>
                                        <i class="remove mdi mdi-close-box"></i>
                                    </li>
                                    <li>
                                        <div class="form-check form-check-primary">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox"> Plan weekend outing
                                            </label>
                                        </div>
                                        <i class="remove mdi mdi-close-box"></i>
                                    </li>
                                    <li>
                                        <div class="form-check form-check-primary">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox"> Pick up kids from
                                                school </label>
                                        </div>
                                        <i class="remove mdi mdi-close-box"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <canvas id="usernbcahrt"></canvas>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>

        </div>
        
       <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctxx = document.getElementById('usernbcahrt').getContext('2d');

            // Get the data from Blade
            const labels = @json($userchart['label']);
            const datasets = @json($userchart['dataset']);

            new Chart(ctxx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: datasets
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>

        <script>
            const ctx = document.getElementById('myChart').getContext('2d');

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: @json($mycahrt['label']),
                    datasets: @json($mycahrt['dataset'])
                },
                options: {
                    // responsive: true,
                    scales: {
                        'y-left': {
                            type: 'logarithmic',
                            position: 'left',
                            ticks: {
                                beginAtZero: true
                            }
                        },
                        'y-right': {
                            type: 'linear',
                            position: 'right',
                            ticks: {
                                beginAtZero: true
                            },
                            grid: {
                                drawOnChartArea: false // only want the grid lines for one axis to show up
                            }
                        }

                    }
                }
            });
        </script>

        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                    bootstrapdash.com
                    2020</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                        href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap
                        admin
                        templates</a> from Bootstrapdash.com</span>
            </div>
        </footer>
        <!-- partial -->
    </div>
@endsection
