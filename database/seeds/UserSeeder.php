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

//        $user = new User();
//        $user->name = 'Kuruohlu Andrey';
//        $user->email = '7395836@gmail.com';
//        $user->password = bcrypt('12345678');
//        $user->save();
//        $user->roles()->attach($admin);
//        $user->permissions()->attach([$manageUsers->id, $createPost->id]);

        $user1 = new User();
        $user1->name = 'Jhon Deo';
        $user1->email = 'jhon@deo.com';
        $user1->password = bcrypt('secret');
        $user1->save();
        $user1->roles()->attach($admin);
        $user1->permissions()->attach($manageUsers);


        $user2 = new User();
        $user2->name = 'Mike Thomas';
        $user2->email = 'mike@thomas.com';
        $user2->password = bcrypt('secret');
        $user2->save();
        $user2->roles()->attach($organizer);
        $user2->permissions()->attach($createPost);
    }
}
