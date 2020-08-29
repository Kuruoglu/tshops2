<?php
use App\Role;
use Illuminate\Database\Seeder;
use App\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $create_post = Permission::where('slug','create-post')->first();
        $manage_user = Permission::where('slug','manage-users')->first();
        $add_category = Permission::where('slug','add-category')->first();

        $admin = new Role();
        $admin->name = 'admin';
        $admin->slug = \Str::slug($admin->name, '-');
        $admin->save();
        $admin->permissions()->sync( [$create_post->id, $manage_user->id, $add_category->id]);



        $organizer = new Role();
        $organizer->name = 'organizer';
        $organizer->slug = \Str::slug($organizer->name. '-');
        $organizer->save();

        $organizer->permissions()->sync( [$add_category->id, $create_post->id]);


        $user = new Role();
        $user->name = 'user';
        $user->slug = \Str::slug($user->name, '-');
        $user->save();
//        $user->permissions()->attach('create-post');


    }
}
