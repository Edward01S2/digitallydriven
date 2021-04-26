<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;


class Post extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {   
        $args = [
            'numberposts' => -1,
            'post_type' => 'country',
        ];

        $countries = get_posts($args);

        $choices = [
            'None',
        ];
        foreach($countries as $item) {
            array_push($choices, get_the_title($item->ID));
        }

        $post = new FieldsBuilder('country', [
            'position' => 'side',
            'style' => 'seamless',
        ]);

        $post
            ->setLocation('post_type', '==', 'post');

        $post
            ->addSelect('country', [
                'choices' => $choices,
            ]);

        return $post->build();
    }
}
