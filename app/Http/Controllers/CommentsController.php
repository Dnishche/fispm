<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class CommentsController extends CrudController{

    public function all($entity){
        parent::all($entity); 

			$this->filter = \DataFilter::source(new \App\Comments);

			$this->filter->add('active', 'Active', 'select')->options(\App\Comments::lists("Active", "active")->all());

			$this->filter->add('name', 'Name', 'text');

			$this->filter->add('created_at', 'Created Date', 'datetime')->format('Y-m-d H:i:s', 'uk');

			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);

			$this->grid->add('active', 'Active', 'active');

			$this->grid->add('name', 'Name');
			$this->grid->add('comment', 'Comment');

			$this->grid->add('created_at', 'Created Date', 'created_at');
			$this->addStylesToGrid();
        
        return $this->returnView();
    }
    
    public function  edit($entity){      
        parent::edit($entity);


			$this->edit = \DataEdit::source(new \App\Comments());

			$this->edit->label('Edit Comment');

			$this->edit->add('active', 'Active', 'checkbox');

			/*its must be deleted*/
			$this->edit->add('comment_id','ID','select')->options(\App\News::lists('id', 'id')->toArray());
			$this->edit->add('name', 'Name', 'text');
			$this->edit->add('comment', 'Comment', 'text');
			/**/

        return $this->returnEditView();
    }    
}
