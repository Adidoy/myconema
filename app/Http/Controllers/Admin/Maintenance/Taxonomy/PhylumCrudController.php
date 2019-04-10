<?php

namespace App\Http\Controllers\Admin\Maintenance\Taxonomy;

use Backpack\CRUD\CrudPanel;
use App\Models\Admin\Maintenance\Taxonomy\Phylum;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\Admin\Maintenance\Taxonomy\PhylumRequest as StoreRequest;
use App\Http\Requests\Admin\Maintenance\Taxonomy\PhylumRequest as UpdateRequest;

/**
 * Class PhylumCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class PhylumCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel(Phylum::class);
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/maintenance/phylum');
        $this->crud->allowAccess('show');
        $this->crud->setEntityNameStrings('Phylum', 'Phyla');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        // $this->crud->setFromDb();

        $this->crud->setColumns(['phylumname', 'description', 'addedby']);
        $this->crud->addField([
	        'name' => 'phylumname',
            'label' => "Name",
            'type' => 'text',
            'attributes' => [
                'placeholder' => 'Phylum Name',
                'class' => 'form-control'
              ],
        ]);
        
        $this->crud->addField([
	        'name' => 'description',
            'label' => 'Description',
            'type' => 'text',
            'attributes' => [
                'placeholder' => 'Provide a description...',
                'class' => 'form-control'
              ],
        ]);
        
        $this->crud->addField([
            'name' => 'addedby',
            'type' => 'hidden',
            'default' => backpack_user()->id,
            'visibleInTable' => false
	    ]);
        
        $this->crud->setColumnDetails('phylumname',[
            'label' => "Phylum Name",
        ]);

        $this->crud->setColumnDetails('addedby',[
            'label' => "Added by",
            'type' => 'model_function',
            'function_name' => 'AddingUser'
        ]);

        // add asterisk for fields that are required in PhylumRequest
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
