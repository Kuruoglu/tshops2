<?php
use App\Role;
use App\User;
use App\Permission;
use App\Anons;
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
        $user = Role::where('slug', 'user')->first();
        $createPost = Permission::where('slug','create-post')->first();
        $manageUsers = Permission::where('slug','manage-users')->first();
        $addCategory = Permission::where('slug','add-category')->first();


        $user = new User();
        $user->name = 'Kuruohlu Andrey';
        $user->email = '7395836@gmail.com';
        $user->password = '12345678';
        $user->save();
        $user->roles()->sync([$admin->id, $organizer->id]);
        $user->permissions()->sync([$manageUsers->id, $createPost->id, $addCategory->id]);

//        $user1 = new User();
//        $user1->name = 'Jhon Deo';
//        $user1->email = 'jhon@deo.com';
//        $user1->password = '12345678';
//        $user1->save();
//        $user1->roles()->sync($admin);
//        $user1->permissions()->sync($manageUsers);


        $user2 = new User();
        $user2->name = 'Organizer';
        $user2->email = 'mike@thomas.com';
        $user2->password = '12345678';
        $user2->save();
        $user2->roles()->sync($organizer);
        $user2->permissions()->sync($createPost);

        $user4 = new User();
        $user4->name = 'User3';
        $user4->email = 'user3@thomas.com';
        $user4->password = '12345678';
        $user4->save();
        $user4->roles()->sync($organizer);

        $user5 = new User();
        $user5->name = 'User4';
        $user5->email = 'user4@thomas.com';
        $user5->password = '12345678';
        $user5->save();
        $user5->roles()->attach($user->id);

    }
}
