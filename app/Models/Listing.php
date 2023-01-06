<?php

namespace App\Models;

class Listing
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non velit et nulla volutpat vestibulum. Suspendisse vel placerat ipsum, in congue elit. Aenean sem nunc, suscipit sed elementum a, vulputate eu justo. Duis hendrerit sagittis lorem eu tincidunt. Nunc ac suscipit ante. Suspendisse et mauris sit amet leo porta pulvinar nec id mauris. Nam vestibulum sollicitudin arcu, posuere dignissim odio faucibus vitae. Phasellus blandit est at risus varius commodo. In hac habitasse platea dictumst. Curabitur augue orci, laoreet eu cursus ac, sodales ultricies ipsum. Donec sit amet consectetur risus. In volutpat enim ut neque tempor, sed blandit mi suscipit. Duis et ante mattis urna imperdiet tristique.'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non velit et nulla volutpat vestibulum. Suspendisse vel placerat ipsum, in congue elit. Aenean sem nunc, suscipit sed elementum a, vulputate eu justo. Duis hendrerit sagittis lorem eu tincidunt. Nunc ac suscipit ante. Suspendisse et mauris sit amet leo porta pulvinar nec id mauris. Nam vestibulum sollicitudin arcu, posuere dignissim odio faucibus vitae. Phasellus blandit est at risus varius commodo. In hac habitasse platea dictumst. Curabitur augue orci, laoreet eu cursus ac, sodales ultricies ipsum. Donec sit amet consectetur risus. In volutpat enim ut neque tempor, sed blandit mi suscipit. Duis et ante mattis urna imperdiet tristique.'
            ]
        ];
    }

    public static function find($id)
    {
        $listings = self::all();

        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}
