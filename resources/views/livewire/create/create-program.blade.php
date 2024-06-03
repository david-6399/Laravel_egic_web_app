<div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
        Créer d'abord un Program
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <i type="button" class="mdi mdi-close" aria-label="Close" data-bs-dismiss="modal"></i>
                </div>
                <form action="">
                    <div class="modal-body ">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nome de program :</label>
                            <input type="text" class="form-control" wire:model='program_name'>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" wire:click='saveprogram'>Save changes</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

   
</div>
