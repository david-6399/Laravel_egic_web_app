@extends('user.index')
@section('content')
    <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs aos-init aos-animate" data-aos="fade-in">
      <div class="container">
        <h2>Les Evenements</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="row">
          @foreach ($event as $event)
          <div class="col-md-4 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="{{asset('indexuser/assets/img/events-1.jpg')}}" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="{{route('event.show',$event->id)}}">{{$event->titre}}</a></h5>
                <p class="fst-italic text-center">{{\carbon\carbon::parse($event->event_start)->format('D d M Y | H:i')}}</p>
                <p class="card-text">Lor{{$event->description}}</p>
              </div>
            </div>
          </div>
              
          @endforeach

          
        </div>

      </div>
    </section><!-- End Events Section -->

  </main>
@endsection