<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\FilmRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class FilmCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class FilmCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Film::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/film');
        CRUD::setEntityNameStrings('film', 'films');
        $this->crud->addFields($this->getFieldsData());
    }

    /**
 * Define what happens when the List operation is loaded.
 *
 * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
 * @return void
 */
protected function setupListOperation()
{
    $this->crud->set('show.setFromDb', false);
    $this->crud->addColumns($this->getFieldsData(TRUE));

    /**
     * Columns can be defined using the fluent syntax or array syntax:
     * - CRUD::column('price')->type('number');
     * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
     */
}

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(FilmRequest::class);
        CRUD::setFromDb(); // set fields from db columns.

        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    private function getFieldsData($show = FALSE) {
        return [
            [
                'name'=> 'title',
                'label' => 'Title',
                'type'=> 'text'
            ],
            [
                'name' => 'year',
                'label' => 'Year',
                'type' => 'number'
            ],
            [
                'name' => 'genre',
                'label' => 'Genre',
                'type' => 'text'
            ],
            [
                'label' => "Film Image",
                'name' => "image",
                'type' => ($show ? 'view' : 'upload'),
                'view' => 'partials/image',
                'upload' => true,
            ]
        ];
    }
}
