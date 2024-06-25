<div>
    <div class="mb-4">
        @foreach ($type_formation as $type_formation)
            <button wire:click.live='typesearch({{ $type_formation->id }})'
                class="btn btn-get-started">{{ $type_formation->name }}</button>
        @endforeach

    </div>
    <div class="mb-4 pb-5" style="border-bottom: dashed 2px ">
        <button wire:click.live='toutlesformation' class="btn btn-get-started">Afficher Tout</button>
        @if (auth()->check())
            <button wire:click.live='formation_par_niv' class="btn btn-get-started">Afficher Par Mon Niveau
                d'étude</button>
        @endif
    </div>


    <div class="p-5 mb-5">
        @if (count($result_by_niv) >= 1)
            <h1>Des Formation adaptés à votre niveau académique</h1>
            <div class="row">
                @foreach ($result_by_niv as $result_by_niv)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch pb-4">
                        <div class="course-item">
                            <div class="course-content">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4>Web Development</h4>
                                    <p class="price">$169</p>
                                </div>

                                <h3><a
                                        href="{{ route('formation.show', $result_by_niv->id) }}">{{ $result_by_niv->nome_forma }}</a>
                                </h3>
                                <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae
                                    dolores dolorem tempore.</p>
                                <div class="trainer d-flex justify-content-between align-items-center">
                                    <div class="trainer-profile d-flex align-items-center">
                                        {{-- <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt=""> --}}
                                        <span>{{ $result_by_niv->tarif_forma }} DA</span>
                                    </div>
                                    <div class="trainer-rank d-flex align-items-center">
                                        <i class="bx bx-user"></i>&nbsp;50
                                        &nbsp;&nbsp;
                                        <i class="bx bx-heart"></i>&nbsp;65
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End Course Item-->
                @endforeach
            </div>
        @elseif ($niv_without_formation)
            <h1>no formtion muched with your niveau académique</h1>
        @elseif($add_niv)
            <h1>Ajoutez dapord Votre Niveau Académique</h1>
        @endif
    </div>


    {{-- ------------------------------------- --}}

    <h1>Tous les Formation disponibles</h1>
    @if (count($result) >= 1)
        <div class="row">
            @foreach ($result as $result)
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch pb-4">
                    <div class="course-item">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4>Web Development</h4>
                                <p class="price">$169</p>
                            </div>

                            <h3><a href="{{ route('formation.show', $result->id) }}">{{ $result->nome_forma }}</a></h3>
                            <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae
                                dolores dolorem tempore.</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                    {{-- <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt=""> --}}
                                    <span>{{ $result->tarif_forma }} DA</span>
                                </div>
                                <div class="trainer-rank d-flex align-items-center">
                                    <i class="bx bx-user"></i>&nbsp;50
                                    &nbsp;&nbsp;
                                    <i class="bx bx-heart"></i>&nbsp;65
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Course Item-->
            @endforeach
        </div>
    @else
        <div class="row">
            @foreach ($formations as $formation)
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch pb-4">
                    <div class="course-item">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4>Web Development</h4>
                                <p class="price">$169</p>
                            </div>

                            <h3><a href="{{ route('formation.show', $formation->id) }}">{{ $formation->nome_forma }}</a>
                            </h3>
                            <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae
                                dolores dolorem tempore.</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                    {{-- <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt=""> --}}
                                    <span>{{ $formation->tarif_forma }} DA</span>
                                </div>
                                <div class="trainer-rank d-flex align-items-center">
                                    <i class="bx bx-user"></i>&nbsp;50
                                    &nbsp;&nbsp;
                                    <i class="bx bx-heart"></i>&nbsp;65
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Course Item-->
            @endforeach



            {{ $formations->links() }}
        </div>
    @endif
    <div>


        <!-- Rest of your Livewire component -->
    </div>
</div>
