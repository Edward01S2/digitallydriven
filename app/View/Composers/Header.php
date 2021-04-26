<?php

namespace App\View\Composers;
use Roots\Acorn\View\Composer;

use Log1x\Navi\Facades\Navi;

class Header extends Composer
{
    protected static $views = [
        'partials.header',
    ];

    public function with()
    {
        return [
            'logo' => get_field('Logo', 'options'),
            'navi' => $this->navi('primary'),
            'report' => get_field('report', 'options'),
            'countries' => $this->getCountries(),
        ];
    }

    public function navi($menu) {
      if (Navi::build()->isEmpty()) {
          return;
      }
      
      return Navi::build($menu)->toArray();
    }

    public function getCountries() {
        $args = [
            'numberposts' => -1,
            'post_type' => 'country',
            'orderby' => 'title',
            'order' => 'ASC',
        ];

        $countries = get_posts($args);

        $choices = [];

        foreach($countries as $item) {
            //array_push($choices, get_the_title($item->ID));
            $choices[] = [
                'label' => get_the_title($item->ID),
                'link' => get_the_permalink($item->ID),
            ];
        }

        return $choices;
    }
}