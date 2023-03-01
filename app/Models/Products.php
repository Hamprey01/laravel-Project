<?php

namespace App\Models;

class Products{
    public static function all(){

        $product_info =[
                [
                    'id'        =>  '1',
                    'productName'    =>  'AquaSpritz',
                    'productNumber' => 'Spray Item No.1',
                    'desc'      =>  'Price: P 100.00',
                    'img' => 'https://www.naturescolours.com.au/wp-content/uploads/2020/12/Munash-Organics-Set-605x605.jpg',
                    'function' => 'AquaSpritz: Stay hydrated and refreshed with AquaSpritz! Our water spray is perfect for outdoor activities, workouts, or any time you need a quick pick-me-up. The fine mist is gentle on your skin and wont leave you feeling sticky or damp. Plus, with a convenient travel size, you can take AquaSpritz with you wherever you go!'
                ],

                [
                    'id'        =>  '2',
                    'productName'    =>  'Oasis Mist',
                    'productNumber' => 'Spray Item No.2',
                    'desc'      =>  'Price:200.00',
                    'img' => 'https://lzd-img-global.slatic.net/g/p/2fb131123ecd5aa3673906f58b84973b.jpg_720x720q80.jpg_.webp',
                    'function' => 'Oasis Mist: Relax and rejuvenate with Oasis Mist! Our water spray is infused with essential oils and natural botanicals to create a soothing and refreshing experience. Perfect for hot summer days or after a tough workout, Oasis Mist will leave you feeling revitalized and ready to take on the day.'
                ],

                [
                    'id'        =>  '3',
                    'productName'    =>  'H2O Cool',
                    'productNumber' => 'Spray Item No.3',
                    'desc'      =>  'Price:250.00',
                    'img' => 'https://5.imimg.com/data5/SELLER/Default/2021/8/JK/KR/WC/132375993/garden-water-spray-bottle-500x500.jpg',
                    'function' => 'H2O Cool: Keep cool and refreshed with H2O Cool! Our water spray is designed to lower your body temperature and keep you feeling comfortable in hot, humid weather. With a refreshing scent and a fine mist that wont soak your clothes, H2O Cool is the perfect way to beat the heat this summer.'
                ],

                [
                    'id'        =>  '4',
                    'productName'    =>  'AquaBlast',
                    'productNumber' => 'Spray Item No.4',
                    'desc'      =>  'Price:150.00',
                    'img' => 'https://images-na.ssl-images-amazon.com/images/I/31oEr2OVIqL._SS400_.jpg',
                    'function' => 'AquaBlast: Stay refreshed and energized with AquaBlast! Our water spray is infused with caffeine and vitamins to give you a quick boost whenever you need it. Perfect for early mornings or mid-afternoon slumps, AquaBlast will help you power through your day with ease. Plus, with a light, refreshing scent, you will love the way it smells!'
                ],


        ];

        return ($product_info);
        
    }
}

