<style>
.sub-listMenu .sub-itemMenu {
    width: calc(100%/3 - 20px);
    margin-left:10px
}
.sub-listMenu {
    justify-content: flex-start!important
}
.category-manual {
    margin-top:30px
}
h3 {
    text-align: center;
    font-size: 30px;
    margin-bottom: 10px;
}
#qa-archive .all-qa {
    width: 100%;
}

</style>
<?php
session_start();
?>

<div class="category-manual">
    <?php 
    $term = get_term_by( 'slug', 
    get_query_var( 'term' ), 
    get_query_var( 'taxonomy' ) 
    );
    $args = array(       
        'taxonomy' => 'mannual_tag',
        'hide_empty' => false,
        'parent' => 0
    );
 
    $query = new WP_Query(array(
        'post_type'=>'manual_qa', 
        'post_status'=>'any')
    );
    $count_posts = $query->found_posts;
    ?>
    <div class="category-main" >

        <ul class="sub-listMenu flex">
            <li class="sub-itemMenu <?php if(is_post_type_archive('manual_qa')) echo 'is-active '; ?>all">
                <a  href="<?php echo home_url(); ?>/camcat_manual" title="すべて">すべて (<?php echo $count_posts; ?>)</a>
            </li>
            <?php

            $cats = get_categories($args);
            ob_start();
            foreach ($cats as $cat) {
                if (stripos( $_SERVER['REQUEST_URI'] , $cat->slug ) !== false) {
                    $is_active = 'is-active';
                }
                else {$is_active =  '';}
                $cat_link = get_category_link($cat->term_id);
                echo '<li class="sub-itemMenu '.$is_active.'"><a class="link-cate-manual" data-id="'.$cat->term_id.'" href="'.$cat_link.'" title="'.$cat->name.'">'.$cat->name.'</a></li>';
            }
            $cat_list = ob_get_contents();
            ob_end_clean();
            echo $cat_list;
            ?>
        </ul>

    </div>
    <div class="category-sub" >
        <?php 
            $id_cat = $_GET["id-cat"];
            if ($id_cat == NULL) {$id_cat = 999999999999;}
        ?>
       <?php
            $parent = get_terms( array( 'taxonomy' => 'mannual_tag', 'hide_empty' => 1, 'parent' => $id_cat) );
            if($parent): ?>
            <ul class ="sub-listMenu flex">
                <?php foreach($parent as $term): ?>
                    <?php
                        if (stripos( $_SERVER['REQUEST_URI'] , $term->slug ) !== false) {
                        $is_active = 'is-active';
                        }
                        else {$is_active =  '';}
                    ?>
                    <li class = "sub-itemMenu <?php echo $is_active ?>" >
                        <a  data-id ="<?php echo $id_cat ?>"  href="<?php echo get_term_link( $term ) ?>"><?php echo  $term->name  ?> (<?php echo $term->count  ?>)</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

    </div>
</div>


