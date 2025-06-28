<?php get_header(); ?>

    <div id="contents">
      <div class="nmv" id="mvslideArea">
        <div class="mv-item mvbg01">
          <div class="pc"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/mv01.png" alt="みらい、解放"></div>
          <div class="sp"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/sp_mv01.jpg" alt="みらい、解放"></div>
        </div>
        <div class="mv-item mvbg01">
          <div class="pc"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/mv01.png" alt="みらい、解放"></div>
          <div class="sp"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/sp_mv01.jpg" alt="みらい、解放"></div>
        </div>
      </div>

      <div class="concept">
        <div class="concept--scene" id="scene01">
          <h2>CONCEPT</h2>
          <p>1年目<br>新しい知識を吸収し挑戦することで、<br>未来への第一歩を踏み出します。<br><br>
            3年目<br>経験を積み、自信を持って仕事に取り組むことで、<br>周囲へのポジティブな変化を生み出し始めます。<br><br>
            5年目<br>リーダーシップを発揮し、新しいアイデアを実行に移すことで、<br>あなたのビジョンが現実化します。</p>
        </div>

        <div class="concept--scene" id="scene02">
          <p>
            未来とは、今ここで私たちが織り成す物語です。 <br>
            成長こそが、夢を現実に変える力となります。<br><br>
            私たちの目標は、明日をより良くするために今日を生きることです。
          </p>
        </div>

        <div class="concept--scene" id="scene03">
          <p>
            「みらい、解放」というコンセプトは、未来を自らの手で創造し、<br>新しい世界を築くことを意味しています。<br><br>
            私たちは、新しいアイデアを受け入れ、変化を恐れず、<br>限界を設けないことで、未来を解放します。<br><br>
            私たちが共に築く希望の物語。それが、
          </p>
          <h3>みらい、解放</h3>
        </div>
      </div>

      <div class="philosophy home--content center_pos">
        <div class="textarea">
          <h2><span class="box">想い</span>を、解放</h2>
          <h3>経営理念</h3>
          <p>「現状維持は衰退」<br>
            大峰産業の価値観です。<br>
            一人ひとりがリーダーとなり<br>
            次世代への架け橋となる未来へ。</p>
          <a href="<?php echo home_url(); ?>/policy" class="linkbtn">詳しく見る</a>
        </div>
        <?php
        $args = array(
          'post_type' => 'notice',
          'posts_per_page' => 3,
          'post_status' => 'publish',
        );

        $notices = new WP_Query($args);

        if ($notices->have_posts()) :
          echo '<div class="flex-list">';
          while ($notices->have_posts()) : $notices->the_post();
            $notice_img = get_field('notice_img');
            $notice_date = get_the_date('Y年m月d日');
            $notice_link = get_permalink();
        ?>

            <div class="flex-item">
              <a href="<?php echo esc_url($notice_link); ?>" class="flex-img-link">
                <div class="flex-img-wrap">
                  <?php if ($notice_img): ?>
                    <img src="<?php echo esc_url($notice_img); ?>" alt="<?php the_title_attribute(); ?>" class="flex-img" />
                  <?php endif; ?>
                </div>
                <p class="flex-date"><?php echo esc_html($notice_date); ?></p>
                <h3 class="flex-title">
                    <?php the_title(); ?>
                </h3>
              </a>
            </div>

        <?php
          endwhile;
          echo '</div>';
          wp_reset_postdata();
        else :
          echo '<p>お知らせはまだないよ！</p>';
        endif;
        ?>


      </div>

      <div class="works home--content center_pos">
        <div class="textarea">
          <h2><span class="box">スキル</span>を、解放</h2>
          <h3>仕事内容</h3>
          <p>
            スキルを身につけることは、<br>
            自己成長のための投資であり、<br>
            未来への準備です。
          </p>
          <a href="<?php echo home_url(); ?>/works" class="linkbtn">詳しく見る</a>
        </div>
        <?php
        $args = array(
          'post_type' => 'about-works',         // カスタム投稿タイプ
          'posts_per_page' => 3,           // 最新3件
          'post_status' => 'publish',      // 公開済みのみ
        );

        $works = new WP_Query($args);

        if ($works->have_posts()) :
          echo '<div class="flex-list">';
          while ($works->have_posts()) : $works->the_post();
            // カスタムフィールド「notice_img」から画像URL取得
            $works_img = get_field('works_img');
            $works_date = get_the_date('Y年m月d日');
            $works_link = get_permalink();
        ?>

            <div class="flex-item">
              <a href="<?php echo esc_url($works_link); ?>" class="flex-img-link">
                <div class="flex-img-wrap">
                  <?php if ($works_img): ?>
                    <img src="<?php echo esc_url($works_img); ?>" alt="<?php the_title_attribute(); ?>" class="flex-img" />
                  <?php endif; ?>
                </div>
                <h3 class="flex-title"><?php the_title(); ?></h3>
                <p class="flex-date"><?php echo esc_html($works_date); ?></p>
              </a>
            </div>

        <?php
          endwhile;
          echo '</div>';
          wp_reset_postdata();
        else :
          echo '<p>お知らせはまだないよ！</p>';
        endif;
        ?>
      </div>

      <div class="member home--content center_pos">
        <div class="textarea">
          <h2><span class="box">キャリア</span>を、解放</h2>
          <h3>キャリア<br>ステップ</h3>
          <p>
            キャリアの構築は、単なる職業選択ではなく、<br>
            自身の興味や情熱を反映したものです。<br>
            自分らしい成功のためのプロセスが、<br>
            ここにはあります。
          </p>
          <a href="special.html" class="linkbtn">詳しく見る</a>
        </div>
      </div>

      <div class="recruit home--content center_pos">
        <div class="textarea">
          <h2><span class="box">評価</span>を、解放</h2>
          <h3>募集要項</h3>
          <p>
            評価をされることは、<br>
            新たな学習の機会をもたらします。<br>
            明確な基準に則った評価制度により、<br>
            ふさわしい報酬を受け取りながら、<br>
            自己改善に目を向けることができます。
          </p>
          <a href="requirement.html" class="linkbtn">詳しく見る</a>
        </div>
      </div>

    </div>

    <?php get_footer() ?>