@extends('layouts.page')

@section('main')
<?php
$html = '<div class="l_news l_info">';
    $html .= '<ul class="default_list">';
        $html .= '<li class="news_list">';
            $html .= '<div class="news_text">';
                $html .= '<div class="news_content">';
                    $html .= '<h3>TEST h3</h3>';
                    $html .= '<span class="news_date">TEST news</span>';
                    $html .= '<div>TEST MESSAGE</div>';
                $html .= '</div>';
            $html .= '</div>';
// if (!empty(get_the_post_thumbnail($the_query->ID,'full', array('class' => 'news_img')))) :
// 	$html .= '<div class="news_img_box">';
// 	$html .= get_the_post_thumbnail($the_query->ID,'full', array('class' => 'news_img'));
// 	$html .= '</div>';
// endif;
        $html .= '</li>';
    $html .= '</ul>';
$html .= '</div>';
?>
<?php echo $html; ?>

@endsection