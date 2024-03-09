<?php

namespace App\Livewire;

use App\Models\Role;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use Livewire\WithPagination;

class Roles extends Component
{
    use WithPagination;
    public Role $role;
    public $title = 'Create new role';
    public function rules()
    {
        return  [
            'role.name' => [
                'required',
                'unique:roles,name,' . ($this->role->id ?? 0)
            ],
            'role.slug' => [
                'required',
                'unique:roles,slug,' . ($this->role->id ?? 0)
            ],
        ];
    }

    public function mount()
    {
        Gate::authorize('hasRole','admin');
        $this->role = new Role;
    }
    public function render()
    {
        $roles = Role::paginate(15);
        return view('livewire.roles', ['roles' => $roles, 'rolesCount'=>$roles->total()]);
    }

    public function save()
    {
        $this->validate();
        $this->role->save();
        $this->dispatch('close', title: 'Role saved!', icon: 'success');
    }
    public function edit(Role $role = (new Role)){
        $this->title = $role->id ?  'Edit role' : 'Create new role';
        $this->role = $role;
    }
}
