<section id="qa">
    <div class="inner">
        <h3 class="title-home">
            <span class="text-es montserrat">Q&A</span>
            <span class="text-jp">よくあるご質問や<br class="sp-br">問題事例</span>
        </h3>
        <ul class="list-faq">
            <?php
            $args = array(
                'post_type' => 'qa_detail',
                'posts_per_page' => 5,
            );
            $posts = get_posts($args);
            foreach($posts as $post) {
                $qa_id = $post->ID;
                $qa_link = get_the_permalink($qa_id);
                $qa_title = get_the_title($qa_id);
                $qa_answer_ttl = get_field('qa-answer-ttl', $qa_id);
                $qa_answer_txt = get_field('qa-answer-txt', $qa_id);

                //ob_start();
                echo <<< EMO
                <li class="item-faq js-fadein">
                    <h4 class="faq-title">
                        <span class="q-es">Q</span>
                        {$qa_title}
                    </h4>
                    <dl class="dl-faq">
                        <span class="a-es">A</span>
                        <dt class="dt-faq">{$qa_answer_ttl}</dt>
                        <dd class="dd-faq">
                            {$qa_answer_txt}
                        </dd>                        
                    </dl>
                </li>
                EMO;
                //ob_end_clean();
            }
            ?>
        </ul>
        <div class="box-link-page flex">
                <a href="<?php bloginfo('url');?>/qa" class="link-page">さらに質問や、問題事例を探す</a>
            </div>
        <div class="box-contact js-fadein">
            <a href="<?php bloginfo('url');?>/#contact" class="a-box flex">
                <div class="left-contact">
                    <p class="text-01">その疑問、私たちにお任せください。<br class="pc-br">社労士・行政書士が無料でお答えします。</p>
                    <p class="link-contact mobi" target="_blank">まずはご相談・問い合わせ</p>
                    <p class="link-contact destop" target="_blank">社労士・行政書士が無料でお答えします。</p>
                    <div class="phone flex">
                        <div class="phone-left">
                            <div class="top">
                                <picture class="box-img">
                                    <source srcset="<?php bloginfo('template_url');?>/images/top_icon_contact.png">
                                    <img class="sizes"
                                        src="<?php bloginfo('template_url');?>/images/top_icon_contact.png" alt="">
                                </picture>
                                <span class="text-phone">お問合せ</span>
                            </div>
                            <p class="time">営業時間:10時〜18時（月〜金）</p>
                        </div>
                        <p class="number-phone montserrat">03-6738-9686</p>
                    </div>
                </div>
                <div class="right-contact">
                          <ul class="list-img flex list-home">
							 <li class="item-img full">
                                <picture class="box-img">
                                    <source srcset="<?php bloginfo('template_url');?>/images/top_case_people_full.png">
                                    <img class="sizes" src="<?php bloginfo('template_url');?>/images/top_case_people_full.png" alt="">
                                </picture>
                            </li>
<!--                             <li class="item-img">
                                <picture class="box-img">
                                    <source srcset="<?php bloginfo('template_url');?>/images/top_case_people_01.png">
                                    <img class="sizes" src="<?php bloginfo('template_url');?>/images/top_case_people_01.png" alt="">
                                </picture>
                            </li>
                            <li class="item-img">
                                <picture class="box-img">
                                    <source srcset="<?php bloginfo('template_url');?>/images/top_case_people_06.png">
                                    <img class="sizes" src="<?php bloginfo('template_url');?>/images/top_case_people_06.png" alt="">
                                </picture>
                            </li>
                            <li class="item-img">
                                <picture class="box-img">
                                    <source srcset="<?php bloginfo('template_url');?>/images/top_case_people_05.png">
                                    <img class="sizes" src="<?php bloginfo('template_url');?>/images/top_case_people_05.png" alt="">
                                </picture>
                            </li> -->
<!--                             <li class="item-img">
                                <picture class="box-img">
                                    <source srcset="<?php bloginfo('template_url');?>/images/top_case_people_04.png">
                                    <img class="sizes" src="<?php bloginfo('template_url');?>/images/top_case_people_04.png" alt="">
                                </picture>
                            </li>
                            <li class="item-img">
                                <picture class="box-img">
                                    <source srcset="<?php bloginfo('template_url');?>/images/top_case_people_04.png">
                                    <img class="sizes" src="<?php bloginfo('template_url');?>/images/top_case_people_04.png" alt="">
                                </picture>
                            </li>
                            <li class="item-img">
                                <picture class="box-img">
                                    <source srcset="<?php bloginfo('template_url');?>/images/top_case_people_02.png">
                                    <img class="sizes" src="<?php bloginfo('template_url');?>/images/top_case_people_02.png" alt="">
                                </picture>
                            </li> -->
                        </ul>

                </div>
            </a>
        </div>
    </div>
</section>