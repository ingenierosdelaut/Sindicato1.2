<div>
    <div class="mx-auto card" style="width: 45rem;">
        <div class="card-header">
            <h1>¿Quieres eliminar este anuncio?</h2>
        </div>
        <div class="card-body">
            <h4>{{ $anuncio->titulo }}</h2>
            <p>{{ $anuncio->contenido }}</p>
            <img src="{{ Storage::disk('public')->url($anuncio->url_img != null ? $anuncio->url_img : 'images/anuncios/anuncio.jpg') }}"
            class="card-img-top" alt="">
        </div>
        <div class="card-footer">
            <button wire:click="delete" class="float-right btn btn-primary btn-sm">Confirmar</button>
            <a href="{{ route('admin.anuncios') }}" class="btn btn-danger btn-sm">Cancelar</a>
        </div>
    </div>
</div>
