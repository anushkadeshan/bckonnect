<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 3,
                'parent_id' => NULL,
                'order' => 2,
                'name' => 'Men',
                'slug' => 'men',
                'created_at' => '2020-05-27 09:42:15',
                'updated_at' => '2020-05-27 09:43:24',
            ),
            1 => 
            array (
                'id' => 4,
                'parent_id' => NULL,
                'order' => 2,
                'name' => 'Women',
                'slug' => 'women',
                'created_at' => '2020-05-27 09:42:27',
                'updated_at' => '2020-05-27 09:43:39',
            ),
            2 => 
            array (
                'id' => 5,
                'parent_id' => 4,
                'order' => 1,
                'name' => 'Cosmetics',
                'slug' => 'cosmetics',
                'created_at' => '2020-05-27 09:43:09',
                'updated_at' => '2020-05-27 09:43:09',
            ),
            3 => 
            array (
                'id' => 6,
                'parent_id' => 3,
                'order' => 1,
                'name' => 'Watch',
                'slug' => 'watch',
                'created_at' => '2020-05-27 09:45:22',
                'updated_at' => '2020-05-27 09:45:22',
            ),
            4 => 
            array (
                'id' => 7,
                'parent_id' => 5,
                'order' => 1,
                'name' => 'Lipstick',
                'slug' => 'lipstick',
                'created_at' => '2020-05-27 09:46:43',
                'updated_at' => '2020-05-27 09:46:43',
            ),
        ));
        
        
    }
}