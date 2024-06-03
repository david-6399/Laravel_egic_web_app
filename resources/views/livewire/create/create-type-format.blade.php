<div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Créer d'abord un type de formation
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <i type="button" class="mdi mdi-close" aria-label="Close" data-bs-dismiss="modal"></i>
                </div>
                <form  action="">

                            <div class="modal-body ">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Nome de type :</label>
                                    <input type="text" class="form-control" wire:model='name'>
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Description de type :</label>
                                    <textarea class="form-control" wire:model='description'></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" wire:click='savetypeformation'>Save changes</button>
                            </div>

                </form>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('livewire:load', function () {
        Livewire.on('closeModal', function () {
            // Close your modal here using JavaScript
            $('#exampleModal').modal('hide'); // Assuming you're using Bootstrap modal
        });
    });
</script>
</div>
