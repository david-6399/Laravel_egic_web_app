<div>
            
            <button class="dropdown-item" 
                wire:click='checkstudient({{ auth()->user()->id }})'
                wire:confirm='whould you want to be student'>
                Déjà étudiant
            </button>

            
        
</div>
