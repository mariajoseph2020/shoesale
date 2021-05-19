<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Monk Shoes',
                "size"=>"38",
                "color"=>"brown",
                "category"=>"men",
                "price"=>"190",
                "brand"=>"Leather",
                "quantity"=>"1",
                "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6AzO8q6eOza4YSVltKg1wpXkHWcYiND7o5IG1avPQ_YSqGIXEKERhg5CsD3PpmoWyMVv3jRCX&usqp=CAc"
                
            ],
            [
            'name'=>'Running Shoes',
            "size"=>"35",
            "color"=>"Grey",
            "category"=>"women",
            "price"=>"1250",
            "brand"=>"Adidas",
            "quantity"=>"1",
            "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7VT7u3D-le598t7LUPSHSa1U4RtGiNv9NPw&usqp=CAU"
            
        ],
        [
            'name'=>'Sports Shoes',
            "size"=>"38",
            "color"=>"white",
            "category"=>"men",
            "price"=>"1200",
            "brand"=>"Nike",
            "quantity"=>"2",
            "gallery"=>"https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/0812a694-8e18-4ebe-8dc0-8d74b34b8399/air-zoom-pegasus-38-running-shoe-Hmsj6Q.png"
            
        ],
        [
            'name'=>'Moxy Sneakers',
            "size"=>"30",
            "color"=>"black",
            "category"=>"women",
            "price"=>"1000",
            "brand"=>"Sneakers",
            "quantity"=>"1",
            "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-nTqeVyJTxcV_U1FdQh3x3d17X7OCuH7Bwg&usqp=CAU"
            
        ],
        [
            'name'=>'Leather shoes',
            "size"=>"36",
            "color"=>"navy blue",
            "category"=>"men",
            "price"=>"2800",
            "brand"=>"Nike",
            "quantity"=>"2",
            "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhYfRbz-8QV8ZQ3z2Qb71YojqVnRldzeDmFA&usqp=CAU"
            
        ],
        [
            'name'=>'Leather shoes',
            "size"=>"36",
            "color"=>"Red",
            "category"=>"women",
            "price"=>"600",
            "brand"=>"Bata",
            "quantity"=>"2",
            "gallery"=>"https://2-be-cdn.bata.eu/gallery/1/8/6/d/8/4.jpg"
            
        ],
        [
            'name'=>'Walking shoes',
            "size"=>"36",
            "color"=>"Brown",
            "category"=>"men",
            "price"=>"850",
            "brand"=>"Sneakers",
            "quantity"=>"2",
            "gallery"=>"https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcSUdxbHbFagihu41O9Jhf6nBS6OtGseXkzmd2gLLWfnw4_QdKJ4PjySIsmYU_tWolMoWzU1NHbvod0&usqp=CAc"
            
        ],
        [
            'name'=>'Sports shoe',
            "size"=>"36",
            "color"=>"blue",
            "category"=>"men",
            "price"=>"1200",
            "brand"=>"Nike",
            "quantity"=>"2",
            "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTVXGAMVNlRQaCYHjd5sV_wQRmhzweE8aiBAw-_kyWJIJGdMTh6184hopqjHF7KuXW-G-4&usqp=CAU"
            
        ],
        [
            'name'=>'Mocky Women shoes',
            "size"=>"28",
            "color"=>"Pink",
            "category"=>"women",
            "price"=>"900",
            "brand"=>"Puma",
            "quantity"=>"1",
            "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwFxuSoH0y-M1Wj2Iyz4Vumfp6Yxn3EfBSCQ&usqp=CAU"
            
        ],
        [
            'name'=>'Puma sports shoes',
            "size"=>"36",
            "color"=>"Mid-grey",
            "category"=>"men",
            "price"=>"2500",
            "brand"=>"Adidas",
            "quantity"=>"2",
            "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFgc5MUVOhlna7dV3st3XP_pdYWTLwU8xP6w&usqp=CAU"
            
        ],
        [
            'name'=>'Running shoes',
            "size"=>"36",
            "color"=>"Blue",
            "category"=>"women",
            "price"=>"1400",
            "brand"=>"Reebok",
            "quantity"=>"1",
            "gallery"=>"https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcSCaDQ9xPlamTw5oVBlM_TxGmT1VOF0wxFf6ONuLFIkWSTdRfu6HmdaIK7cgf7UlR_5qBQGKeJhn2g&usqp=CAc"
            
        ],
        [
            'name'=>'Fancy shoes',
            "size"=>"30",
            "color"=>"Brown",
            "category"=>"women",
            "price"=>"700",
            "brand"=>"Allen solly",
            "quantity"=>"1",
            "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQnIrUxBL4HYoXbtg4LRONVaGkrSVNyNjqnQA&usqp=CAU"
            
        ]
        ]);
    }
}
