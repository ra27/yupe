<?php
/**
 * Отображение для index:
 * 
 *   @category YupeView
 *   @package  YupeCMS
 *   @author   Yupe Team <team@yupe.ru>
 *   @license  https://github.com/yupe/yupe/blob/master/LICENSE BSD
 *   @link     http://yupe.ru
 **/
?>
<h1><?php echo Yii::t('InstallModule.install', 'Добро пожаловать!'); ?></h1>

<p><?php echo Yii::t('InstallModule.install', '<b>{app}</b> позволит быстро и легко запустить новый проект на Yiiframework', array('{app}' => Yii::app()->name)); ?></p>
<p><?php echo Yii::t('InstallModule.install', 'Следуйте инструкциям установщика и все у Вас получиться!'); ?></p>

<div class="alert alert-block alert-notice">
    <p><?php echo Yii::t('InstallModule.install', 'Мы всегда рады видеть Вас на нашем сайте {link}, а еще у нас есть {twitter} и {forum} !', array(
        '{twitter}' => CHtml::link('твиттер', 'http://twitter.com/yupecms', array('target' => '_blank')),
        '{link}' => CHtml::link('http://yupe.ru', 'http://yupe.ru?from=install', array('target' => '_blank')),
        '{forum}' => CHtml::link('форум','http://yupe.ru/talk?from=install', array('target' => '_blank'))
     )); ?>
    </p>
    <p><b><?php echo Yii::t('InstallModule.install','При возникновении проблем с установкой, пожалуйста, посетите вот {link}!',array(
                '{link}' => CHtml::link('эту ветку форума','http://yupe.ru/talk/viewforum.php?id=10',array('target' => '_blank'))
            ));?></b></p>
</div>

<?php
$this->widget(
    'bootstrap.widgets.TbButton', array(
        'type'  => 'primary',
        'label' => Yii::t('InstallModule.install', 'Начать установку >'),
        'url'   => array('/install/default/environment'),
    )
); ?>