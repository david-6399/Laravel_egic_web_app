<div>
    <!-- Button trigger modal -->
    <button type="button" class="btn get-started-btn my-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Choisir votre niveau académique 
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <p>Si vous avez plusieurs niveaux scolaires, saisissez-le à nouveau</p>
                    <i type="button" class="bi bi-x-lg" aria-label="Close" data-bs-dismiss="modal"></i>
                </div>
                <form action="">
                    <div class="modal-body ">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Votre niveau d'etude : </label>
                            <select wire:model='user_niv' class="form-control">
                                <option value="">Choisir votre niveau d'étude</option>
                                @foreach ($niv_etudiant as $niv_etudiant )
                                    <option value="{{$niv_etudiant->id}}">{{$niv_etudiant->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn get-started-btn" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn" wire:click='saveuserniv({{ auth()->user()->id }})'>Save changes</button>
                        {{-- <input type="submit" class="btn"> --}}
                    </div>

                </form>
            </div>
        </div>
    </div>

    
</div>
