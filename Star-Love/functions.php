<?php
use Typecho\Widget\Helper\Form\Element\Text;
use Typecho\Widget\Helper\Form\Element\Textarea;
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
require_once("core/shortcodes.php");
require_once("core/App.php");
function themeInit()
{
    Helper::options()->commentsAntiSpam = false; //关闭反垃圾
    Helper::options()->commentsCheckReferer = false; //关闭检查评论来源URL与文章链接是否一致判断(否则会无法评论)
    Helper::options()->commentsMaxNestingLevels = '999'; //最大嵌套层数
    Helper::options()->commentsPageDisplay = 'first'; //强制评论第一页
    Helper::options()->commentsOrder = 'DESC'; //将最新的评论展示在前
    Helper::options()->commentsHTMLTagAllowed = '<a href=""> <img src=""> <img src="" class=""> <code> <del>';
    Helper::options()->commentsMarkdown = true;
}
/**
 * 主题后台设置
 */
function themeConfig($form)
{
    $knowTime = new Typecho_Widget_Helper_Form_Element_Text('knowTime', NULL, NULL, _t('相识时间'), _t('格式为：YYYY/MM/DD HH:mm:ss'));
    $loveTime = new Typecho_Widget_Helper_Form_Element_Text('loveTime', NULL, NULL, _t('相恋时间'), _t('格式为：YYYY/MM/DD HH:mm:ss'));
    $meetTime = new Typecho_Widget_Helper_Form_Element_Text('meetTime', NULL, NULL, _t('上一次见面时间'), _t('格式为：YYYY/MM/DD HH:mm:ss'));

    $form->addInput($knowTime);
    $form->addInput($loveTime);
    $form->addInput($meetTime);
    
    $slogan_list = new Typecho_Widget_Helper_Form_Element_Textarea('slogan_list', NULL, NULL, _t('标题轮换内容'), _t('文本内容用英文双引号包裹，换行用&lt;br&gt;表示，以英文逗号分隔。例如：<br>
    "&lt;br&gt;我爱你！",<br>
    "我的爱意流过二极管，&lt;br&gt;永不逆转！",<br>
    "我的思念流过三极管，&lt;br&gt;被放大无数倍∞",<br>
    '));
    $form->addInput($slogan_list);
    
    $tags_list = new Typecho_Widget_Helper_Form_Element_Textarea('tags_list', NULL, NULL, _t('抽签轮换内容'), _t('文本内容用英文双引号包裹，以英文逗号分隔。例如："标签1", "标签2", "标签3",'));
    $form->addInput($tags_list);
    
    $page_url_1 = new Text('page_url_1', NULL, NULL, _t('小目标链接'), _t('新建一个页面，选择对应模板，然后将链接填到这里'));
    $page_url_2 = new Text('page_url_2', NULL, NULL, _t('回忆录链接'), _t('无需新建页面，一般为：站点链接/blog/，与站点设置有关'));
    $page_url_3 = new Text('page_url_3', NULL, NULL, _t('祝福墙链接'), _t('新建一个页面，选择对应模板，然后将链接填到这里'));
    $page_url_4 = new Text('page_url_4', NULL, NULL, _t('照片墙链接'), _t('新建一个页面，选择对应模板，然后将链接填到这里'));
    $page_url_5 = new Text('page_url_5', NULL, NULL, _t('我们俩链接'), _t('新建一个页面，选择对应模板，然后将链接填到这里'));
    $page_url_6 = new Text('page_url_6', NULL, NULL, _t('朋友们链接'), _t('新建一个页面，选择对应模板，然后将链接填到这里'));
    
    $form->addInput($page_url_1);
    $form->addInput($page_url_2);
    $form->addInput($page_url_3);
    $form->addInput($page_url_4);
    $form->addInput($page_url_5);
    $form->addInput($page_url_6);
    
    $beianhao = new Text('beianhao', NULL, NULL, _t('备案号'), _t('可以不填'));
    $form->addInput($beianhao);
}
