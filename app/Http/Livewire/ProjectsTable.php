<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Kdion4891\LaravelLivewireTables\Column;
use Kdion4891\LaravelLivewireTables\TableComponent;

class ProjectsTable extends TableComponent
{
    public function query()
    {
        return Project::with('user_id');
    }

    public function columns()
    {
        return [
            Column::make('Client')->searchable()->sortable(),
            //Column::make('Posted')->searchable()->sortable(),
            Column::make()->view('cars.table-actions'),
            
        ];
    }
}
