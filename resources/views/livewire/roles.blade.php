<div>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th colspan="20">
                            <div class="d-flex align-items-center justify-content-between">
                                <span>{{ $rolesCount }} {{ __('Roles') }}</span>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#modal-role" wire:click="edit">
                                    {{ __('Create new role') }}
                                </button>

                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->slug }}</td>
                            <td>
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#modal-role" wire:click="edit({{ $item->id }})">
                                    <i class="fa-solid fa-pencil"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="20">
                            {{ $roles->links() }}
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <x-b5-modal wire:ignore.self id="modal-role" :title="$title" class="modal-dialog-centered">
        <x-slot:body>
            <div class="mb-3">
                <label for="rolename" class="form-label">{{ __('Name') }}</label>
                <input type="text" class="form-control" id="rolename" wire:model="role.name"
                    onchange="@this.role.slug = slugify(this.value)">
                <x-b5-error input="role.name" />
            </div>
            <div class="mb-3">
                <label for="roleslug" class="form-label">{{ __('Slug') }}</label>
                <input type="text" class="form-control" id="roleslug" wire:model="role.slug" readonly>
                <x-b5-error input="role.slug" />
            </div>
        </x-slot>
        <x-slot:footer>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Close') }}</button>
            <button wire:click="save" type="button" class="btn btn-primary">{{ __('Save changes') }}</button>
        </x-slot>
    </x-b5-modal>
</div>
