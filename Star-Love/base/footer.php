<script src="<?php $this->options->themeUrl('/js/star.js'); ?>"></script>

<div class="footer">
	<p>© <a href="<?php Helper::options()->siteUrl() ?>"><?php $this->options->title() ?></a> · <?php if($this->options->beianhao) echo '<a href="https://beian.miit.gov.cn" target="_blank">'. $this->options->beianhao.'</a> · '; ?>Theme <a href="https://github.com/crowya/Star-Love" target="_blank">Star Love</a> · <a href="/admin" target="_blank">登录</a>
	</p>
</div>

<script>
if (window.console && window.console.log) {
    console.log("%c Theme Star-Love v1.0 %c https://github.com/crowya/Star-Love ","color: #fff; margin: 1em 0; padding: 5px 0; background: #000;","margin: 1em 0; padding: 5px 0; background: #efefef;");
}
</script>

</body>
</html>