<?php

namespace Tests\Feature;

use App\Livewire\Roles;
use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Livewire\Livewire;

class RoleTest extends TestCase
{
    use RefreshDatabase;

    public function test_roles_livewire_component_can_be_displayed(): void
    {
        $role = Role::create(['name' => 'Admin', 'slug' => 'admin']);
        $this->assertEquals(1, Role::count());
        $user = User::factory()->create();
        $user->roles()->attach($role->id);

        Livewire::actingAs($user)->test(Roles::class)
            ->assertSee('Admin');
    }

    public function test_role_can_be_created(): void
    {
        $this->assertEquals(0, Role::count());
        $role = Role::create(['name' => 'Admin', 'slug' => 'admin']);
        $this->assertEquals(1, Role::count());
        $user = User::factory()->create();
        $user->roles()->attach($role->id);
        Livewire::actingAs($user)->test(Roles::class)
            ->set('role.name', 'Developer')
            ->set('role.slug', 'developer')
            ->call('save');
        $this->assertEquals(2, Role::count());
    }
}
