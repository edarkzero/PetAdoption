<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico" type="image/x-icon" />
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

    <!--[if gte IE 9]>
    <style type="text/css">
        .gradient {
            filter: none;
        }
    </style>
    <![endif]-->

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <?php
    //Need to register this two cores in this order
    Yii::app()->clientScript->registerCoreScript('jquery');
    Yii::app()->clientScript->registerCoreScript('jquery.ui');
    ?>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><img src="<?php echo Yii::app()->request->baseUrl ?>/images/site/paw.png" alt="paw"><span><?php echo CHtml::encode(Yii::app()->name); ?></span><img src="<?php echo Yii::app()->request->baseUrl ?>/images/site/paw.png" alt="paw"></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>Yii::t('app','Home'), 'url'=>array('/site/index')),
				array('label'=>Yii::t('app','About'), 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>Yii::t('app','Contact'), 'url'=>array('/site/contact')),
				array('label'=>Yii::t('app','Pet'), 'url'=>array('/pet/admin')),
				array('label'=>Yii::t('app','User'), 'url'=>array(Yii::app()->user->isGuest ? '/user/create' : '/user/admin')),
                array('label'=>Yii::t('app','User rol'), 'url'=>array('/userRol/admin')),
				array('label'=>Yii::t('app','Login'), 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>Yii::t('app','Logout').'('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
