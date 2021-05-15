<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    
    public function getAllProjects(){
        return Project::all();
    }
    public function getLastTenProjects(){
        return Project::take(10)
        ->orderBy('project_id', 'desc')
        ->get();
    }
    public function insertProject() {
        /*$project = new Project;
        $project->city_id = 1;
        $project->company_id = 1;
        $project->user_id = 1;
        $project->name = 'Nombre del proyecto';
        $project->execution_date = '2020-04-30';
        $project->is_active = 1;
        $project->save();
        */
        //otra manera, pero no olvidar hacer fillable en el modelo
        Project::create([
            'city_id' => 1,
            'company_id' => 1,
            'user_id' => 1,
            'name' => 'Vack project',
            'execution_date' => '2021-04-30',
            'is_active' => 1,
            
        ]);
        return "Guardado";
    }
    public function updateProject() {
             
       /*  $project = Project::find(11);
        $project->is_active = 0 ;
        $project->save(); */
        //actualizar registros con condición
        /* Project::where('is_active', 1)
            ->where('city_id', 1)
            ->update(['execution_date' => '2020-02-03']); */

        Project::where('is_active', 0)
        ->where('project_id', '<', 11)
        
        ->update(['execution_date' => '2022-04-03',
                 'name'=> 'Menores id de 11'          
                ]);
        
        return "actualizados con éxito";
    }
    public function deleteProject() {
        //1
        $project = Project::where('project_id', '>', 15)->delete();
        //2
        Project::destroy(1);
        Project::destroy(1, 2, 3);
        Project::destroy([1, 2, 3]);
        return "Registros eliminados";
        //3
        $project = Project::find(1);
        $project->delete();
    }

}
