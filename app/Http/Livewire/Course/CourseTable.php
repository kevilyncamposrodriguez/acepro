<?php

namespace App\Http\Livewire\Course;

use App\Models\Course;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\Exportable;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridEloquent;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Rules\Rule;
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;

final class CourseTable extends PowerGridComponent
{
    use ActionButton;

    /*
    |--------------------------------------------------------------------------
    |  Datasource
    |--------------------------------------------------------------------------
    | Provides data to your Table using a Model or Collection
    |
    */
    public function datasource(): Builder
    {
        return Course::query()->where("team_id", Auth::user()->currentTeam->id);
    }

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |
    */
    public function setUp(): array
    {

        return [
            Exportable::make('export')
                ->striped()
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }


    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |

    */
    /**
     * PowerGrid Columns.
     *
     * @return array<int, Column>
     */
    public function columns(): array
    {
        return [
            Column::make('Nombre', 'name')
                ->searchable()
                ->sortable(),
            Column::make('Incio Matricula', 'start_date')
                ->sortable(),
            Column::make('Fin Matricula', 'end_date')
                ->sortable(),
            Column::make('Inicio Clases', 'class_date')
                ->sortable(),
        ];
    }
    public function actions(): array
    {
        return [
            Button::make('edit', 'Modificar')
                ->class('inline-flex items-center px-2 py-1 bg-purple-950 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-purple-700 focus:bg-purple-700 active:bg-purple-900 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 transition ease-in-out duration-150')
                ->emit('editCourse', ['id' => 'id']),
            Button::make('restore', 'Restaurar')
                ->class("inline-flex items-center px-2 py-1 bg-white border border-transparent rounded-md font-semibold text-xs text-pink-700 uppercase tracking-widest hover:bg-gray-200 focus:bg-gray-200 active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-pink-700 focus:ring-offset-2 transition ease-in-out duration-150")
                ->emit('restoreCourse', ['id' => 'id']),
            Button::make('delete', 'Eiminar')
                ->class('ml-1 inline-flex items-center px-2 py-1 bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150')
                ->emit('deleteCourse', ['id' => 'id']),
        ];
    }


    /*
    |--------------------------------------------------------------------------
    | Actions Rules
    |--------------------------------------------------------------------------
    | Enable the method below to configure Rules for your Table and Action Buttons.
    |
    */

    /**
     * PowerGrid course Action Rules.
     *
     * @return array<int, RuleActions>
     */


    public function actionRules(): array
    {
        return [
            //Hides delete button when row is trashed
            Rule::button('edit')
                ->when(fn ($course) => $course->active == false)
                ->hide(),
            //Hides delete button when row is trashed
            Rule::button('delete')
                ->when(fn ($course) => $course->active == false)
                ->hide(),

            //Hides restore button when row is not trashed
            Rule::button('restore')
                ->when(fn ($course) => $course->active == true)
                ->hide(),

            //Change row color for trashed rows
            Rule::rows()
                ->when(fn ($course) => $course->active == false)
                ->setAttribute('class', 'bg-pink-50 hover:bg-pink-100'),
        ];
    }
}
