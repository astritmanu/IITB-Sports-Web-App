<?php

class EventsController extends Controller
{
	public function actions()
	{
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			return array(
				'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	public function actionEventfeed()
	{
		header('Content-Type: text/xml');	

		$connection = Yii::app()->db;
		$event = $connection->createCommand()->SELECT('*')->FROM('events')->ORDER('date DESC')->queryAll();
		$this->renderPartial('eventfeed',array(
			'event'=> $event,
			));
	}
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionGc()
	{
		$connection = Yii::app()->db;
		$result = $connection->createCommand()->SELECT('*')->FROM('gc')->queryAll();
		$pg = $connection->createCommand()->SELECT('*')->FROM('pggc')->queryAll();

		$this->render('gc',array(
			'result'=> $result,
			'pg'=> $pg,
			));
	}

	public function actionCalendar()
	{
	
		$this->render('calendar');
	}

	public function actionPutevent()
	{
	
		$this->render('putevent');
	}


	public function actionSubmit()   //For News
	{
		$connection = Yii::app()->db;
		$usr=Yii::app()->user->id;
		$date=\Yii::app()->request->getPost('date');
		$title = \Yii::app()->request->getPost('title');
		$time = \Yii::app()->request->getPost('time');
		$venue = \Yii::app()->request->getPost('venue');
		$descr = \Yii::app()->request->getPost('descr');

		$post=new Events();
		$post->title=$title;
		$post->published=date('Y-m-d H:i:s');
		$post->time=$time;
		$post->venue=$venue;
		$post->date=$date;
		$post->descr=$descr;
		$post->usr=$usr;

		if($post->save())
		{
			echo "Success!";
		}

		else echo "Please try again";
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}