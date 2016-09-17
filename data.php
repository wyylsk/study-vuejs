<?php
/**
 * 开发由  快兔科技 开发 ktucms.com sjmoban.com
 * User: 团长
 * Date: 16-9-17
 * Time: 下午3:56
 * 联系方式： 79089679  859916828
 */
//获得数据开始
$data=array(
    'rows'=>array(
        array('title'=>'快兔兵团','smallinfo'=>'开源分享技术，互联网交流'),
        array('title'=>'条目二的标题','smallinfo'=>'条目二的简介'),
        array('title'=>'条目三的标题','smallinfo'=>'条目三的简介')
    )
);
exit(json_encode($data));
?>