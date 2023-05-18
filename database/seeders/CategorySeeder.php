<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {   
        $CategoryData = array(

            array(
                'name' =>'Men',
                'parent_id' =>0,
            ), 
            array(
                'name' =>'Clothing',
                'parent_id' =>1,
            ), 
            array(
                'name' =>'Shirt',
                'parent_id' =>2,
            ), 
            array(
                'name' =>'Women',
                'parent_id' =>0,
            ), 
            array(
                'name' =>'Jewellery',
                'parent_id' =>4,
            ), 
            array(
                'name' =>'Bracelets',
                'parent_id' =>5,
            ), 
            array(
                'name' =>'Shoes',
                'parent_id' =>1,
            ), 
            array(
                'name' =>'Sports Shoes',
                'parent_id' =>7,
            ), 
            array(
                'name' =>'Sneakers',
                'parent_id' =>7,
            ), 
            array(
                'name' =>'Casual Shirt',
                'parent_id' =>3,
            ), 
            array(
                'name' =>'Formal Shirt',
                'parent_id' =>3,
            ), 
            array(
                'name' =>'Pants & Trousers',
                'parent_id' =>2,
            ), 
            array(
                'name' =>'Joggers',
                'parent_id' =>12,
            ), 
            array(
                'name' =>'Casual Trousers',
                'parent_id' =>12,
            ), 
            array(
                'name' =>'Boots',
                'parent_id' =>7,
            ), 
            array(
                'name' =>'Casual Boot',
                'parent_id' =>15,
            ), 
            array(
                'name' =>'Dress Boot',
                'parent_id' =>15,
            ), 
            array(
                'name' =>'Bangle',
                'parent_id' =>6,
            ), 
        );

        /* Start For Loop for Default Category Data */

        foreach($CategoryData as $key => $value) {
            
            if(Category::where('name',$value['name'])->count()==0){

                Category::create(array("name" => $value['name'],"parent_id" => $value['parent_id'],'created_at' => date("Y-m-d H:i:s")));
            }  
        }
 
        /* End For Loop */

    }
}
