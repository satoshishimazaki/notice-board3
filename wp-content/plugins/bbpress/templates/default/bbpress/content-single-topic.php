<?php

/**
 * Single Topic Content Part
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<div id="bbpress-forums">

	<?php bbp_breadcrumb(); ?><a href="http://localhost:8001/forums/forum/何でも掲示板">(トピック一覧)へ戻る</a>

	<?php do_action( 'bbp_template_before_single_topic' ); ?>

	<?php if ( post_password_required() ) : ?>

		<?php bbp_get_template_part( 'form', 'protected' ); ?>

	<?php else : ?>

		<?php bbp_topic_tag_list(); ?>


		<?php if ( bbp_show_lead_topic() ) : ?>

			<?php bbp_get_template_part( 'content', 'single-topic-lead' ); ?>

		<?php endif; ?>

		<?php if ( bbp_has_replies() ) : ?>

			

			<?php bbp_get_template_part( 'loop',       'replies' ); ?>

			<?php bbp_get_template_part( 'pagination', 'replies' ); ?>

		<?php endif; ?>

		<?php bbp_get_template_part( 'form', 'reply' ); ?>

	<?php endif; ?>

	<?php do_action( 'bbp_template_after_single_topic' ); ?>
  <div>みんなの掲示板です。<a href="http://localhost:8001/%E5%89%8A%E9%99%A4%E3%82%AC%E3%82%A4%E3%83%89%E3%83%A9%E3%82%A4%E3%83%B3">削除ガイドライン</a>を読んでお使いください。</div>
</div>
