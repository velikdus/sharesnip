<?php

class UsersController extends Controller
{
    public function actionNew()
    {
        $user = new User;
        $this->render('new', array('user' => $user));
    }

    public function actionCreate()
    {
        $user = new User;
        $user->attributes = $_POST['User'];
        if ($user->save()) {
            Yii::app()->user->setFlash('success', Helpers::getSuccessSignupMessage());
            $this->redirect(Helpers::createUrl('/'));
        } else {
            $this->render('new', array('user' => $user));
        }
    }
}