<?php
/**
 * Created by PhpStorm.
 * User: zouqianli
 * Date: 2017/9/14
 * Time: 21:23
 */
/**
 * 应用入口文件--线上部署
 * 1 调整入口文件public/index.php 为/index.php 定义如下
 * 2 调整public/static 为/static,不然静态资源(css.js.image)找不到
 *   或者配置:
 *      'view_replace_str'       => [__STATIC__=>'/public/static'],
 * 3 调整public/.htaccess 为/.htaccess 隐藏index.php
 * 4 调整数据库
 * 5 如果配置了应用配置目录,调整app/extra 为conf/extra,封装的地图|邮件配置生效
 */

// 定义应用目录
define('APP_PATH', __DIR__ .'/app/');
// 定义应用配置目录
define('CONF_PATH', __DIR__ . '/conf/');
// 加载框架引导文件
require __DIR__ .'/thinkphp/start.php';