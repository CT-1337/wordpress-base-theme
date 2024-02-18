<?php

function {{theme_name}}_theme_pagination($numpages = '', $paged) {
    if (empty($numpages)){
        global $wp_query;
        $numpages = $wp_query;
    }
    if (empty($paged)) {
        $paged = 1;
    }

  //We construct the pagination arguments to enter into our paginate_links
  $pagination_args = array(
    'format'          => 'page/%#%',
    'total'           => $numpages->max_num_pages,
    'current'         => $paged,
    'show_all'        => false,
    'end_size'        => 2,
    'mid_size'        => 4,
    'prev_next'       => true,
    'prev_text'       => __('<span class="previous"></span>'),
    'next_text'       => __('<span class="next"></span>'),
    'type'            => 'array',
    'add_args'        => false,
    'add_fragment'    => ''
  );
  //run though worpress function
  $paginate_links = paginate_links($pagination_args);

  $output = '';

    if ($paginate_links) {
        $output .= "<nav class='pagination col-12'>";
        foreach ($paginate_links as $key => $value) {
            $output .= $value;
        }
        $output .=  '</nav>';
    }
    return $output;
}


function render_{{theme_name}}_theme_tag_manager(){

    $head = '';
    $body = '';
    $tracking =  get_theme_mod( '{{theme_name}}_theme_theme_tracking_tags');

    if (!empty($tracking)) {
        $head = "<!-- Google Tag Manager -->
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','$tracking');</script>
            <!-- End Google Tag Manager -->";

        $body = "<!-- Google Tag Manager (noscript) -->
                <noscript><iframe src='https://www.googletagmanager.com/ns.html?id=$tracking'
                height='0' width='0' style='display:none;visibility:hidden'></iframe></noscript>
                <!-- End Google Tag Manager (noscript) -->";
    }

    return array('head' =>  $head, 'body' =>  $body);
}

function render_{{theme_name}}_theme_social_media_links() {
    $output = '';
    $helper = new {{Theme_ClassName}}();

    if ( isset($helper->social_links) && is_array($helper->social_links) ) {

        foreach ( $helper->social_links as $key => $value ) {

            $link = get_theme_mod( $value['key'] );

            if ( !empty($link) ) {

                $label = $value['label'];
                $title = 'Visit us on' . $label;
                $class = $value['class'];

                $output .= "<li><a href='$link' target='_blank' rel='noopener' title='$title'><i class='icon-social $class'></i><span class='visually-hidden'>$label</span></a></li>";
            }

        }
    }

    return $output;
}

function change_logo_class( $logo ) {
    $logo = str_replace( 'custom-logo', '{{theme-name}}-custom-logo', $logo );

    return $logo;
}
add_filter( 'get_custom_logo', 'change_logo_class' );

function {{theme_name}}_theme_custom_excerpt_length( $length ) {
    return 100;
}
add_filter( 'excerpt_length', '{{theme_name}}_theme_custom_excerpt_length', 999 );

//custom excerpt filter
function {{theme_name}}_theme_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', '{{theme_name}}_theme_excerpt_more' );


function wrap_oembed_html( $cached_html, $url, $attr, $post_id ) {
    if ( false !== strpos( $url, "://youtube.com") || false !== strpos( $url, "://youtu.be" ) ) {
        $cached_html = '<div class="ratio ratio-16x9">' . $cached_html . '</div>';
    }
    return $cached_html;
}
add_filter( 'embed_oembed_html', 'wrap_oembed_html', 99, 4 );



