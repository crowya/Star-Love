<?php
/**
 * 小目标
 * @package custom
 * Author: 鸦鸦
 * Link: https://github.com/crowya/Star-Love
 */

$this->need('base/head.php');
$this->need('base/nav.php');?>
<div class="container text-center my-5">
<h5 class="list-text">小目标<br>梦想还是要有的，万一实现了呢</h5>
<?php echo App::parseShortCode($this->content) ?>
</div>
<?php $this->need('base/footer.php'); ?>
