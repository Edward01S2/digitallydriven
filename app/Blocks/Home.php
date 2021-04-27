<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

use App\Fields\Partials\GForm;

class Home extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Home';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Home block.';

    /**
     * The block category.
     *
     * @var string
     */
    public $category = 'acf';

    /**
     * The block icon.
     *
     * @var string|array
     */
    public $icon = 'editor-ul';

    /**
     * The block keywords.
     *
     * @var array
     */
    public $keywords = [];

    /**
     * The block post type allow list.
     *
     * @var array
     */
    public $post_types = [];

    /**
     * The parent block type allow list.
     *
     * @var array
     */
    public $parent = [];

    /**
     * The default block mode.
     *
     * @var string
     */
    public $mode = 'edit';

    /**
     * The default block alignment.
     *
     * @var string
     */
    public $align = 'wide';

    /**
     * The default block text alignment.
     *
     * @var string
     */
    public $align_text = '';

    /**
     * The default block content alignment.
     *
     * @var string
     */
    public $align_content = '';

    /**
     * The supported block features.
     *
     * @var array
     */
    public $supports = [
        'align' => true,
        'align_text' => false,
        'align_content' => false,
        'anchor' => false,
        'mode' => false,
        'multiple' => true,
        'jsx' => true,
    ];

    /**
     * The block styles.
     *
     * @var array
     */
    public $styles = [
        [
            'name' => 'light',
            'label' => 'Light',
            'isDefault' => true,
        ],
        [
            'name' => 'dark',
            'label' => 'Dark',
        ]
    ];

    /**
     * The block preview example data.
     *
     * @var array
     */
    public $example = [
        'items' => [
            ['item' => 'Item one'],
            ['item' => 'Item two'],
            ['item' => 'Item three'],
        ],
    ];

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'report' => get_field('report', 'options'),
            'heading_1'=> get_field('heading 1'),
            'bg_1' => get_field('bg 1'),
            'bg_1_mobile' => get_field('bg mobile'),
            'video' => get_field('video'),

            'content_2' => get_field('content 2'),
            'logos_2' => get_field('logos 2'),

            'findings' => get_field('findings'),

            'show_5' => get_field('show 5'),
            'title_5' => get_field('title 5'),
            'content_5' => get_field('content 5'),  
            'image_5' => get_field('image 5'),
            'content_6' => get_field('content 6'),
            'image_6' => get_field('image 6'),
            'link_6' => get_field('button 6'),

            'title_dd' => get_field('title dd'),
            'content_dd' => get_field('content dd'),
            'link_dd' => get_field('link dd'),

            'heading_10' => get_field('heading 10'),
            'content_10' => get_field('content 10'),
            'link_10' => get_field('link 10'),
            'bg_10' => get_field('bg 10'),

            'form' => get_field('gravity'),
            'heading_12' => get_field('heading 12'),
            'content_12' => get_field('content 12'),
            'past_title' => get_field('past title'),
            'past_link' => get_field('past link'),            

        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $home = new FieldsBuilder('home');

        $home
            ->addTab('section 1')
                ->addText('heading 1')
                ->addImage('bg 1')
                ->addImage('bg mobile')
                ->addFile('video')

            ->addTab('section 2')
                ->addWysiwyg('content 2')
                ->addGallery('logos 2')

            ->addTab('section 3')
                ->addRepeater('findings')
                    ->addText('heading')
                    ->addRepeater('stats')
                        ->addText('percent')
                        ->addText('heading')
                        ->addTextarea('content')
                    ->endRepeater()
                    ->addLink('link')
                    ->addImage('image')
                    ->addTextarea('quote')
                    ->addText('attrib')
                ->endRepeater()
                
            ->addTab('section 4')
                ->addText('title 5')
                ->addWysiwyg('content 5')
                ->addImage('image 5')
                ->addWysiwyg('content 6')
                ->addLink('button 6')
                ->addImage('image 6')

            ->addTab('section 5')
                ->addTrueFalse('show 5')
                ->addText('title dd')
                ->addTextarea('content dd')
                ->addLink('link dd')
                
                
            ->addTab('section 6')
                ->addText('heading 10')
                ->addWysiwyg('content 10')
                ->addLink('link 10')
                ->addImage('bg 10')

            ->addTab('section 7')
                ->addText('heading 12')
                ->addTextarea('content 12')
                ->addFields($this->get(GForm::class))
                ->addText('past title')
                ->addLink('past link')
                ;

        return $home->build();
    }

    // public function getPosts() {
    //     $args = array(
    //         'post_type' => ['post'],
    //         'post_status' => 'publish',
    //         'posts_per_page' => '-1',
    //         'order' => 'DESC',
    //     );

    //     $posts = new \WP_Query($args);

    //     $post_data = [];
    //     while($posts->have_posts()): $posts->the_post();
        
    //     $id = get_the_ID();

    //     //return $term;

    //     $post_data[] = [
    //         'title' => get_the_title(),
    //         'excerpt' => get_the_excerpt(),
    //         'image' => get_the_post_thumbnail_url(),
    //         'url' => get_the_permalink(),
    //     ];

    //     endwhile;
    //     wp_reset_query();

    //     return $post_data;
    // }




}
