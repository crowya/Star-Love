<?php

/**
 * 繁星之恋主题 — A Romantic Theme for Typecho
 * @package     Star Love
 * @author      鸦鸦
 * @version     1.0
 * @link        https://github.com/crowya/Star-Love
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('base/head.php');
$this->need('base/nav.php');
?>

<div class="list-content mx-auto mt-5">
    <div class="list-top">
        <h5 class="list-text">回忆录<br>相信以后会有更多美好的事情发生</h5>
        <?php if ($this->have()) : ?>
            <?php while ($this->next()) : ?>
                <article style="padding: 20px;border-bottom: 1px solid rgba(0,123,255,.2);text-align: center;" class="post">
                    <h4 class="post-title" itemprop="name headline"><a class=" list-wbc" itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h4>
                    <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->author(); ?> 深情地写于 <?php $this->date(); ?></time>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <article class="post">
                <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
            </article>
        <?php endif; ?>
        <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    </div>
</div>

<?php $this->need('base/footer.php'); ?>