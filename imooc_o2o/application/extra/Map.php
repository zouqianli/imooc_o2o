<?php
/**
 * 百度地图  扩展配置
 */

return [
    // 百度地图应用 访问ak
    'ak' => 'sK0wQFqCiIqy59wpcadHDCzkZCyCcLx9',
    // Geocoding api配置
    'baidu_map_url' => 'http://api.map.baidu.com/',
    'geocoder' => 'geocoder/v2/', // v2后面有斜线
    'output'    => 'json',
    // 静态图 api配置
    'width' =>  400,
    'height'    => 300,
    'staticimage'   => 'staticimage/v2', // v2后面没有斜线

];