<?php

namespace App\Livewire;

use App\Models\Role;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;

class Roles extends Component
{
    public Role $role;
    public function rules()
    {
        return  [
            'role.name' => [
                'required',
                'unique:roles,name,' . $this->role->id
            ],
            'role.slug' => [
                'required',
                'unique:roles,slug,' . $this->role->id
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
    }
}
