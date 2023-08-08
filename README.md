# Star-Love
繁星之恋主题 — A Romantic Theme for Typecho

由于可能会鸽很久，先把这个临时版放出来和大家分享一下。

演示站点： [BN & SY's Love](https://love.crowya.com/)

![image](https://github.com/crowya/Star-Love/assets/61354956/cf386b22-0df5-47f3-9d82-ac8d723a3ea9)

![cut_20230809010128](https://github.com/crowya/Star-Love/assets/61354956/69be4fe2-f73a-49a8-89ac-f11a15a6d924)

关于主题开发进展，目前已经初步整合了各方代码，增添了后台设置项。
一些小改进：
1. 修复祝福墙点不进去问题
2. 美化板块入口图标
3. 新增相册模板页以及关于和友链板块

仍然存在的问题以及 todo 事项：
1. 子页面太丑
2. pjax 框架被我吃了，亟待恢复
3. 背景音乐以及暂停播放按钮（计划放在右上角）

还有一些杂七杂八的问题比如相册是否应对访客可见、导航栏太丑以及连个搜索功能都没有…

如果给作者一点金钱上的鼓励，极有可能加速这一进程…

![cut_20230809012222](https://github.com/crowya/Star-Love/assets/61354956/3ba4dbdd-d2ab-456d-94a2-bfe51511d6dc)

## 安装与使用
1. 点亮右上角小星星。
2. 下载最新版[Release](https://github.com/crowya/Star-Love/releases)。
3. 上传并解压到网站目录`/www/wwwroot/typecho/usr/themes/`文件夹下。
4. 在后台切换主题并在“设置外观”页面根据提示完成设置。
5. 其他需要注意的设置项：
    - 请在Typecho自带的设置里将首页设置为：直接调用`homepage.php`模板文件。
    - 请在Typecho自带的设置里更改站点描述。
    - 小目标页面的用法：在页面正文填入以下内容即可。
      ```
      [loveList]
      [item status="0" img=""]一起看日出[/item]
      [item status="1" img=""]一起看日落[/item]
      [/loveList]
      ```
      0表示未完成，1表示已完成。图片链接可以为空。
    - 照片墙页面的用法：在页面正文填入以下内容即可。
      ```
      picture1,2020年01月01日拍摄,https://ww2.sinaimg.cn/large/006uAlqKgy1fzlbjrxju2j31400u04qz.jpg
      picture2,2020年01月02日拍摄,https://ww2.sinaimg.cn/large/006uAlqKgy1fzlbjrxju2j31400u04qz.jpg
      picture3,2020年01月03日拍摄,https://ww2.sinaimg.cn/large/006uAlqKgy1fzlbjrxju2j31400u04qz.jpg
      ```
      格式为：`标题,简介,图片链接`。其中标题和简介可以为空，即`,,图片链接`。自定义字段的用法请参考致谢4。
6. 请保留页脚的“Theme Star Love”，祝99。

## 致谢
本主题由以下素材缝合而来。
1. https://flag.moe/
2. https://sc.chinaz.com/jiaoben/210829301800.htm
3. https://blog.zwying.com/archives/59.html
4. https://github.com/zzd/photo-page-for-typecho
