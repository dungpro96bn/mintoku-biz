<section id="news">
    <div class="inner">
        <div class="content-news flex">
            <div class="box-title-news">
                <h3 class="title-home">
                    <span class="text-es montserrat">NEWS</span>
                    <span class="text-jp">お知らせ</span>
                </h3>
                <div class="box-link-page flex destop">
                    <a href="" class="link-page">他の事例を探す</a>
                </div>
            </div>
            <ul class="new-content">
                <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 5,
                    );
                    $posts = get_posts($args);
                    foreach($posts as $post) {
                        $post_id = $post->ID;
                        $post_title = get_the_title($post_id);
                        $post_link = get_the_permalink($post_id);
                        $post_date = get_the_time('Y.m.d', $post_id);

                        $post_cats = get_the_terms($post_id, 'category' );
                        ob_start();
                        foreach ($post_cats as $cat) {
                            $cat_link = get_tag_link($cat->term_id);
                            echo '<li class="cat-item">'.$cat->name.'</li>';
                        }
                        $cat_list = ob_get_contents();
                        ob_end_clean();
                        echo <<< EMO
                            <li class="item-news">
                                <a href="{$post_link}" title="{$post_title}" class="flex"> 
                                    <div class="date-cat flex">
                                        <ul class="cat">{$cat_list}</ul>
                                        <p class="time">{$post_date}</p>
                                    </div>
                                    <p class="text-content">{$post_title}</p>
                                </a>
                            </li>
                    EMO;
                    }
                ?>
            </ul>
        </div>
        <div class="box-link-page flex mobi">
            <a href="" class="link-page">他の事例を探す</a>
        </div>
    </div>
</section>