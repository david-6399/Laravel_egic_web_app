@extends('user.index')
@section('content')
<main id="main">
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Tout Mes Formation</h2>
            <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit
                quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
        </div>
    </div>
    {{-- <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-8">
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">

                        <ul>
                            @foreach ($test as $test)

                            <a href="{{route('formation.show',$test->formation_id)}}"><i
                                    class="bi bi-check-circle px-2"></i>{{$test->nome_forma}}</a>

                            @endforeach

                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    <section id="trainers" class="trainers">
        <div class="container" data-aos="fade-up">

            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                @foreach ($test as $test)
                    
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member " style="width: 100%">
                        <img src="assets/images/{{$test->testimage}}" class="img-fluid" alt="">
                        <div class="member-content" >
                            <h4><a href="{{route('formation.show', $test->formationid)}}">{{$test->nome_forma}}</a></h4>
                            <span>{{$test->name}}</span>
                            <p >
                                La Date On : {{  \Carbon\Carbon::parse($test->testcreatedat)->format('j F y')}}
                            </p>
                            <div class="">
                                <button>
                                    <a href="{{route('imprimer')}}">
                                        imprimer
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </section>
</main>
@endsection