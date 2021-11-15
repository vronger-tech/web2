<?php

class Blog_Controller
{
	public $baseName = 'blog';  //meghat�rozni, hogy melyik oldalon vagyunk
	public function main(array $vars) // a router �ltal tov�bb�tott param�tereket kapja
	{
		//bet�ltj�k a n�zetet
        {

            // A modelben csinálj egy getArticles method-ot
    
            // Dinamikus adatként add át a view-nak a lekérdezett adatokat
            $model = new Blog_Model;
            $getData = $model->getArticles();
            $regData = $model->saveArticle($vars);
            // Módosítsd a view-t (hirke_main.php), iterálj végig a híreken és jelenítsd meg őket 
    
            $view = new View_Loader($this->baseName . "_main");
            foreach ($getData as $name => $value) {
                $view->assign($name, $value);
            }
            foreach ($regData as $name => $value) {
                $view->assign($name, $value);
            }
        }}}
    