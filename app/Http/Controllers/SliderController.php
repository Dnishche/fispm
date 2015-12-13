<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class SliderController extends CrudController{

    public function all($entity){
        parent::all($entity); 

			$this->filter = \DataFilter::source(new \App\Slider);

			$this->filter->add('active', 'Active', 'select')->options(\App\Slider::lists("Active", "active")->all());
			$this->filter->add('weight', 'Weight', 'text');
			$this->filter->add('img_url', 'Image', 'text');


			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);

			$this->grid->add('active', 'Active', 'active');

			$this->grid->add('weight', 'Weight', 'weight');
			$this->grid->add('img_url', 'Image');
			$this->addStylesToGrid();
                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        parent::edit($entity);
	
			$this->edit = \DataEdit::source(new \App\Slider());

			$this->edit->label('Edit Slider');

			$this->edit->add('active', 'Active', 'checkbox');
		
			$this->edit->add('weight', 'Weight', 'text');

			$this->edit->add('img_url', 'Image', 'file')->move('uploads/images/slider/');	
       
        return $this->returnEditView();
    }    
}
