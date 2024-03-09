@props(['id', 'title', 'body', 'footer'])

<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-labelledby="{{ $id }}Label" {{$attributes}}
    aria-hidden="true">
    <div {{ $attributes->class(['modal-dialog']) }}>
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="{{ $id }}Label">{{ __($title) }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{ $body }}
            </div>
            <div {{ $footer->attributes->class(['modal-footer']) }}>
                {{ $footer }}
            </div>
        </div>
    </div>
</div>
