<?php

namespace App\Http\Livewire;

use App\App/Models/Project;
use Kdion4891\LaravelLivewireTables\Column;
use Kdion4891\LaravelLivewireTables\TableComponent;

class ProjectsTableAdmin extends TableComponent
{
    public function query()
    {
        return App/Models/Project::query();
    }

    public function columns()
    {
        return [
            Column::make('ID')->searchable()->sortable(),
            Column::make('Created At')->searchable()->sortable(),
            Column::make('Updated At')->searchable()->sortable(),
        ];
    }
}
