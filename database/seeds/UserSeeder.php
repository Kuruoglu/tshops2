<?php
use App\Role;
use App\User;
use App\Permission;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::where('slug','admin')->first();
        $organizer = Role::where('slug', 'organizer')->first();
        $createPost = Permission::where('slug','create-post')->first();
        $manageUsers = Permission::where('slug','manage-users')->first();
        $addCategory = Permission::where('slug','add-category')->first();

        $user = new User();
        $user->name = 'Kuruohlu Andrey';
        $user->email = '7395836@gmail.com';
        $user->password = '12345678';
        $user->save();
        $user->roles()->sync($admin);
        $user->permissions()->sync([$manageUsers->id, $createPost->id, $addCategory->id]);

        $user1 = new User();
        $user1->name = 'Jhon Deo';
        $user1->email = 'jhon@deo.com';
        $user1->password = '12345678';
        $user1->save();
        $user1->roles()->sync($admin);
        $user1->permissions()->sync($manageUsers);


        $user2 = new User();
        $user2->name = 'Mike Thomas';
        $user2->email = 'mike@thomas.com';
        $user2->password = '12345678';
        $user2->save();
        $user2->roles()->sync($organizer);
        $user2->permissions()->sync($createPost);
    }
}
