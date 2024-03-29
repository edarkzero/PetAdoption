<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();

    protected function beforeAction($action)
    {
        //Titulo de pagina
        $this->pageTitle=Yii::app()->name.' - '.$this->action->id;

        $languageTrans = array('es' => 'es_ve','en' => 'en_us');

        if(isset($_GET['lang']))
        {
            Yii::app()->setLanguage($languageTrans[$_GET['lang']]);
            Yii::app()->session['lang'] = Yii::app()->getLanguage();
        }

        elseif(isset(Yii::app()->session['lang']))
            Yii::app()->setLanguage(Yii::app()->session['lang']);

        else
            Yii::app()->session['lang'] = Yii::app()->getLanguage();

        if(!Yii::app()->request->isAjaxRequest && $this->id !== 'hybridauth' && $this->id !== 'gii')
            Yii::app()->session['lastUrl'] = Yii::app()->request->getUrl();

        return parent::beforeAction($action);
    }
}