<div>
    <div id="enviar-deseos" class="fh5co-section">
        <div class="max-w-4xl m-auto px-8">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center mb-4">
                        <span class="text-plomo text-center">Unas palabras de amor</span>
                    </div>
                    <h2 class="font-sacramento text-8xl text-center">Envía tus deseos</h2>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="nombre">Nombre</label>
                            <input type="text" wire:model="nombre" id="nombre" class="form-control" placeholder="Ingresa tu nombre">
                            <x-jet-input-error class="px-2 rosado-jym" for="nombre" />
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="deseos">Deseos para los novios</label>
                            <textarea name="deseos" wire:model="deseos" id="deseos" cols="30" rows="10" class="form-control"
                                placeholder="Nos encantará leer tus palabras"></textarea>
                            <x-jet-input-error class="px-2 rosado-jym" for="deseos" />
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="button" wire:click="enviar" value="Enviar mis deseos" class="btn-jym-r">
                        <div class="rosado-jym mt-6">
                            <b>
                                <i>
                                    {{$msg}}
                                </i>
                            </b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
