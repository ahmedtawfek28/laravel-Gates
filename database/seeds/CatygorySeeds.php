<?php
use App\Category;
use Illuminate\Database\Seeder;


class CatygorySeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
 
    public function run()
    {   
      
        $categories = factory(Category::class, 100)->create();
    
        // DB::table('categories')->insert([
        //     'title' => str_random(10),
        //     'description' => str_random(200)
        // ]);
        
    }
}
