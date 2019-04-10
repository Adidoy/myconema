<?php

namespace App\Http\Controllers\Admin\Maintenance\Taxonomy;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use Backpack\CRUD\CrudPanel;
use App\Models\Admin\Maintenance\Taxonomy\Kingdom;
use App\Http\Requests\Admin\Maintenance\Taxonomy\KingdomRequest as StoreRequest;
use App\Http\Requests\Admin\Maintenance\Taxonomy\KingdomRequest as UpdateRequest;

/**
 * Class KingdomCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class KingdomCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel(Kingdom::class);
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/maintenance/kingdom');
        $this->crud->setEntityNameStrings('Kingdom', 'Kingdoms');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        //$this->crud->setFromDb();

        $this->crud->setColumns(['kingdomname', 'description', 'addedby']);
        $this->crud->addField([
	        'name' => 'kingdomname',
            'label' => "Name",
            'type' => 'text',
            'attributes' => [
                'placeholder' => 'Kingdom Name',
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
        
        $this->crud->setColumnDetails('kingdomname',[
            'label' => "Kingdom Name",
        ]);

        $this->crud->setColumnDetails('addedby',[
            'label' => "Added by",
            'type' => 'model_function',
            'function_name' => 'AddingUser'
        ]);


        // add asterisk for fields that are required in KingdomRequest
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
