<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class NewsController extends CrudController{

    public function all($entity){
        parent::all($entity); 

			$this->filter = \DataFilter::source(new \App\News);

			$this->filter->add('active', 'Active', 'select')->options(\App\News::lists("Active", "active")->all());

			$this->filter->add('title', 'Title', 'text');
			$this->filter->add('title_en', 'Title(EN)', 'text');

			$this->filter->add('published_at', 'Pub. Date', 'datetime')->format('Y-m-d H:i:s', 'uk');
			$this->filter->add('created_at', 'Created Date', 'datetime')->format('Y-m-d H:i:s', 'uk');

			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('active', 'Active', 'active');

			$this->grid->add('title', 'Title', 'title');
			$this->grid->add('title_en', 'Title(En)', 'title_en');

			$this->grid->add('segment', 'Segment');
			$this->grid->add('content', 'Content');

			$this->grid->add('published_at', 'Pub. Date', 'published_at');
			$this->grid->add('created_at', 'Created Date', 'created_at');

			$this->grid->add('img_url', 'Image');
			$this->addStylesToGrid();
                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        parent::edit($entity);
	
			$this->edit = \DataEdit::source(new \App\News());

			$this->edit->label('Edit News');

			$this->edit->add('active', 'Active', 'checkbox');
		
			$this->edit->add('title', 'Title', 'text');
			$this->edit->add('title_en', 'Title(En)', 'text');

			$this->edit->add('segment', 'Segment', 'text');
			$this->edit->add('content', 'Content', 'redactor');

			$this->edit->add('published_at', 'Pub. Date', 'datetime')->format('Y-m-d H:i:s', 'uk');

			$this->edit->add('img_url', 'Image', 'file')->move('uploads/images/news/');
       
        return $this->returnEditView();
    }    
}