<div>
    <div x-data="{
        show: @entangle('open').defer,
        edit: false,
    }" @modal-edit.window="show = true; edit= true; $wire.edit($event.detail);"
        @modal-create.window="show = true; edit= false; $wire.create();">
        {{ $slot }}
    </div>
</div>
