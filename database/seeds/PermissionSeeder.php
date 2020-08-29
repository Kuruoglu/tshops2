<?php
use App\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manageUser = new Permission();
        $manageUser->name = 'Manage users';
        $manageUser->slug = \Str::slug($manageUser->name, '-');
        $manageUser->save();

        $createPost = new Permission();
        $createPost->name = 'Create post';
        $createPost->slug = \Str::slug($createPost->name, '-');
        $createPost->save();

        $addCategory = new Permission();
        $addCategory->name = 'Add category';
        $addCategory->slug = \Str::slug($addCategory->name, '-');
        $addCategory->save();


    }
}
