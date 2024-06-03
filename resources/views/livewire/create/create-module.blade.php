<div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#module">
        Créer d'abord un Module
    </button>

    <!-- Modal -->
    <div class="modal fade" id="module" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <i type="button" class="mdi mdi-close" aria-label="Close" data-bs-dismiss="modal"></i>
                </div>
                <form  action="">

                            <div class="modal-body ">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Nome de module :</label>
                                    <input type="text" class="form-control" wire:model='module_name'>
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Coefficient de module :</label>
                                    <textarea class="form-control" wire:model='module_Coefficient'></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" wire:click='savemodule'>Save changes</button>
                            </div>

                </form>
            </div>
        </div>
    </div>

  
</div>
