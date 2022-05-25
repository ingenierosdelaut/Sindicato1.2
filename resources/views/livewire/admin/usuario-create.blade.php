<div>
    <form wire:submit.prevent="crear">
        <div class="container cont-user">
            <div class="card-header">
                <h2>Formulario de registro de usuarios</h2>
            </div>
            @include('livewire.admin.formulario')
            <br>
            <div class="card-footer">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="float-right btn btn-success"><i class="fa fa-save"></i> Guardar</button>
                </div>
            </div>

        </div>
    </form>
</div>
