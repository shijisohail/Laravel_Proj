<?php
namespace App\Models;

class Listings {

    public static function all() 
    {
        return [
            [
                'id' => 1,
                'title' => 'Listings One           ',
                'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                   Tenetur dolore distinctio esse veniam iste aliquid animi enim tempora laborum maxime! 
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ea iure modi consequatur
                   reiciendis saepe itaque optio pariatur alias molestiae accusamus nihil, natus, enim est
                   iusto assumenda aspernatur dicta omnis!'
            ],
            [
                'id' => 2,
                'title' => 'Listings Two                   ',
                'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Tenetur dolore distinctio esse veniam iste aliquid animi enim tempora laborum maxime!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ea iure modi consequatur
                    reiciendis saepe itaque optio pariatur alias molestiae accusamus nihil, natus, enim est 
                    iusto assumenda aspernatur dicta omnis!'
                ]
        ];
    }
        public static function find($id){
            $listings = self::all();
            foreach($listings as $listing) {
                if($listing['id'] == $id)
                {
                    return $listing;
                }
            }
        }
}
