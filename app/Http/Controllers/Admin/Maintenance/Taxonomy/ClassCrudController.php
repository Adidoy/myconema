<?php

namespace App\Http\Controllers\Admin\Maintenance\Taxonomy;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use Backpack\CRUD\CrudPanel;
use App\Models\Admin\Maintenance\Taxonomy\Phylum;
use App\Models\Admin\Maintenance\Taxonomy\ClassModel;
use App\Http\Requests\Admin\Maintenance\Taxonomy\ClassRequest as StoreRequest;
use App\Http\Requests\Admin\Maintenance\Taxonomy\ClassRequest as UpdateRequest;


/**
 * Class ClassCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class ClassCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel(ClassModel::class);
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/maintenance/class');
        $this->crud->setEntityNameStrings('Class', 'Classes');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        // $this->crud->setFromDb();

        $this->crud->setColumns(['classname', 'description', 'phylum', 'addedby']);
        $this->crud->addField([
	        'name' => 'classname',
            'label' => "Name",
            'type' => 'text',
            'attributes' => [
                'placeholder' => 'Class Name',
                'class' => 'form-control'
              ],
        ]);

        $this->crud->addField([
	        'name' => 'description',
            'label' => "Description",
            'type' => 'text',
            'attributes' => [
                'placeholder' => 'Description',
                'class' => 'form-control'
              ],
        ]);        

        $this->crud->addField([
            'label' => "Phylum",
            'placeholder' => 'Select Phylum...',
            'type' => 'select',
            'name' => 'id',
            'entity' => 'PhylumOfClass',
            'attribute' => 'phylumname',
            'model' => Phylum::class
        ]);

        $this->crud->addField([
            'name' => 'addedby',
            'type' => 'hidden',
            'default' => backpack_user()->id,
            'visibleInTable' => false
	    ]);        

        // add asterisk for fields that are required in ClassRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
