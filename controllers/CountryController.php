<?php

namespace app\controllers;

use yii\rest\ActiveController;

/**
 * CountryController implements the CRUD actions for Country model.
 */
class CountryController extends ActiveController
{
    public $modelClass = 'app\models\Country';
}
