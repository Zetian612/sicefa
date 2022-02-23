<?php

namespace Modules\SICA\Http\Controllers\people;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\SICA\Entities\Person;
use Modules\SICA\Entities\EPS;
use Modules\SICA\Entities\PopulationGroup;

use Validator, Str;

class PersonalDataController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */



    // Buscar si los datos de la persona existen
    public function search_personal_data(Request $request)
    {
        $rules = [
            'search' => 'required'
        ];
        $messages = [
            'search.required' => 'El campo consulta es requerido.'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return redirect('sica/admin/people/data')->withErrors($validator)->with('message', 'Se ha producido un error.')->with('typealert', 'danger')->withInput();
        else:
        $doc =$request->input('search');
        $people = Person::where('document',$doc)->with('users')->first();
        
        switch ($people) {
            case '':
                return redirect('sica/admin/people/data/add/'.$doc);
                break;
            
            default:
            return redirect('sica/admin/people/data/'.$people->id.'/edit');
                break;
        }
    endif;

}


    public function getAddData($doc){

        $eps = Eps::pluck('name','id');
        $population_groups = PopulationGroup::pluck('name', 'id');
        $title = trans('sica::menu.Personal data Add');
        $data = ['doc'=>$doc,'title'=>$title, 'eps'=>$eps, 'population_groups' => $population_groups];

        return view('sica::admin.people.personal_data.add', $data);
        // return $data;
    }

    /**
     * Se agregan los datos de la persona si no existe.
     * @return Renderable
     */
    public function postAddData(Request $request)
    {
        $rules = [
            'document' => 'required',
            'document_type' => 'required',
            'first_name' => 'required',
            'first_last_name' => 'required',
            'eps_id' => 'required',
            'population_group_id' => 'required'
        ];
        $messages = [
            'document.required' => 'El N° de documento es requerido',
            'document_type.required' => 'El tipo de documento es requerido',
            'first_name.required' => 'El primer nombre es requerido',
            'first_last_name.required' => 'El primer apellido es requerido',
            'eps_id.required' => 'La eps es requerida',
            'population_group_id.required' => 'El grupo de votacion es requerido'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return redirect('sica/admin/people/data/add/'.$request->input('document'))->withErrors($validator)->with('message', 'Se ha producido un error.')->with('typealert', 'danger')->withInput();
        else:

            $p = new Person;
            $p->document_type = e($request->input('document_type'));
            $p->document = e($request->input('document'));
            $p->date_of_issue = $request->input('date_of_issue');
            $p->first_name = $request->input('first_name');
            $p->first_last_name = e($request->input('first_last_name'));
            $p->second_last_name = e($request->input('second_last_name'));
            $p->birthday = e($request->input('birthday'));
            // $p->blood_type = e($request->input('blood_type'));
            $p->gender = e($request->input('gender'));
            $p->eps_id = e($request->input('eps_id'));
            // $p->marital_status = e($request->input('marital_status'));
            // $p->military_card = e($request->input('military_card'));
            // $p->socioeconomic_status = e($request->input('socioeconomic_status'));
            $p->telephone1 = e($request->input('telephone1'));
            $p->email = e($request->input('email'));
            $p->misena_email = e($request->input('misena_email'));
            // $p->avatar = e($request->input('avatar'));
            $p->population_group_id = e($request->input('population_group_id'));
            if($p->save()){
                return redirect(route('sica.admin.people.personal_data'))->with('message', 'Creado con éxito')->with('typealert', 'success');
            }
        
    endif;
    }

  
    public function getEditData($id)
    {
        $people = Person::findOrFail($id);
        $eps = Eps::pluck('name','id');
        $population_groups = PopulationGroup::pluck('name', 'id');
        $title = trans('sica::menu.Personal data Add');
        $data = ['people'=>$people,'title'=>$title, 'eps'=>$eps, 'population_groups' => $population_groups];
        return view('sica::admin.people.personal_data.edit', $data);
    }

    
    public function postEditData(Request $request, $id)
    {
       
        $rules = [
            'document' => 'required',
            'document_type' => 'required',
            'first_name' => 'required',
            'first_last_name' => 'required',
            'eps_id' => 'required',
            'population_group_id' => 'required'
        ];
        $messages = [
            'document.required' => 'El N° de documento es requerido',
            'document_type.required' => 'El tipo de documento es requerido',
            'first_name.required' => 'El primer nombre es requerido',
            'first_last_name.required' => 'El primer apellido es requerido',
            'eps_id.required' => 'La eps es requerida',
            'population_group_id.required' => 'El grupo de votacion es requerido'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return redirect('sica/admin/people/data/'.$id.'/edit')->withErrors($validator)->with('message', 'Se ha producido un error.')->with('typealert', 'danger')->withInput();
        else:
           

            $p = Person::findOrFail($id);
            $p->document_type = e($request->input('document_type'));
            $p->document = e($request->input('document'));
            $p->date_of_issue =  $request->input('date_of_issue',date('Y-m-d'));
            $p->first_name = e($request->input('first_name'));
            $p->first_last_name = e($request->input('first_last_name'));
            $p->second_last_name = e($request->input('second_last_name'));
            $p->birthday = $request->input('birthday',date('Y-m-d'));
            // $p->blood_type = e($request->input('blood_type'));
            $p->gender = e($request->input('gender'));
            $p->eps_id = e($request->input('eps_id'));
            // $p->marital_status = e($request->input('marital_status'));
            // $p->military_card = e($request->input('military_card'));
            // $p->socioeconomic_status = e($request->input('socioeconomic_status'));
            $p->telephone1 = e($request->input('telephone1'));
            $p->email = e($request->input('email'));
            $p->misena_email = e($request->input('misena_email'));
            // $p->avatar = e($request->input('avatar'));
            $p->population_group_id = e($request->input('population_group_id'));
            if($p->save()){
                return redirect(route('sica.admin.people.personal_data'))->with('message', 'Modificado con éxito')->with('typealert', 'success');
            }
    endif;
    }

    // public function dateFormat(Request $request, $date){
    //     $date_of_issue =   $request->input($date);
    //     $ffini = date_create($date_of_issue);
    //     $ffini = date_format($ffini,"Y/m/d");

    //     return  $ffini ;
    // }

    public function destroy($id)
    {
        //
    }
}
