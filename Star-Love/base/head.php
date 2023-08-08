<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $this->archiveTitle(array(
            'category' => _t('分类 %s 下的文章'),
            'search' => _t('包含关键字 %s 的文章'),
            'tag' => _t('标签 %s 下的文章'),
            'author' => _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <?php $this->header(); ?>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('/css/h.css'); ?>">
    <!--<link rel="stylesheet" href="https://lf3-cdn-tos.bytecdntp.com/cdn/expire-1-M/bootstrap/4.6.1/css/bootstrap.min.css">-->
    <link rel="apple-touch-icon-precomposed" href="<?php $this->options->themeUrl('/img/heartbeat.png'); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php $this->options->themeUrl('/img/heartbeat.png'); ?>">
    <script src="https://lf3-cdn-tos.bytecdntp.com/cdn/expire-1-M/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
  <div class="background">
    <canvas id="startrack"></canvas>
    <div class="cover"></div>
  </div>
