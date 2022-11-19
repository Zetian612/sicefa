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






    public function getAddData($doc){
        //return $doc;
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
            'document_number' => 'required',
            'document_type' => 'required',
            'first_name' => 'required',
            'first_last_name' => 'required',
            'eps_id' => 'required',
            'population_group_id' => 'required'
        ];
        $messages = [
            'document_number.required' => 'El N° de documento es requerido',
            'document_type.required' => 'El tipo de documento es requerido',
            'first_name.required' => 'El primer nombre es requerido',
            'first_last_name.required' => 'El primer apellido es requerido',
            'eps_id.required' => 'La eps es requerida',
            'population_group_id.required' => 'El grupo de votacion es requerido'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return redirect('sica/admin/people/data/add/'.$request->input('document_number'))->withErrors($validator)->with('message', 'Se ha producido un error.')->with('typealert', 'danger')->withInput();
        else:

            $p = new Person;
            $p->document_type = e($request->input('document_type'));
            $p->document_number = e($request->input('document_number'));
            $p->date_of_issue = $request->input('date_of_issue');
            $p->first_name = $request->input('first_name');
            $p->first_last_name = e($request->input('first_last_name'));
            $p->second_last_name = e($request->input('second_last_name'));
            $p->date_of_birth = e($request->input('date_of_birth'));
            // $p->blood_type = e($request->input('blood_type'));
            $p->gender = e($request->input('gender'));
            $p->eps_id = e($request->input('eps_id'));
            // $p->marital_status = e($request->input('marital_status'));
            // $p->military_card = e($request->input('military_card'));
            // $p->socioeconomical_status = e($request->input('socioeconomical_status'));
            $p->telephone1 = e($request->input('telephone1'));
            $p->personal_email = e($request->input('personal_email'));
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
            'document_number' => 'required',
            'document_type' => 'required',
            'first_name' => 'required',
            'first_last_name' => 'required',
            'eps_id' => 'required',
            'population_group_id' => 'required'
        ];
        $messages = [
            'document_number.required' => 'El N° de documento es requerido',
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
            $p->document_number = e($request->input('document_number'));
            $p->date_of_issue =  $request->input('date_of_issue',date('Y-m-d'));
            $p->first_name = e($request->input('first_name'));
            $p->first_last_name = e($request->input('first_last_name'));
            $p->second_last_name = e($request->input('second_last_name'));
            $p->date_of_birth = $request->input('date_of_birth',date('Y-m-d'));
            // $p->blood_type = e($request->input('blood_type'));
            $p->gender = e($request->input('gender'));
            $p->eps_id = e($request->input('eps_id'));
            // $p->marital_status = e($request->input('marital_status'));
            // $p->military_card = e($request->input('military_card'));
            // $p->socioeconomical_status = e($request->input('socioeconomical_status'));
            $p->telephone1 = e($request->input('telephone1'));
            $p->personal_email = e($request->input('personal_email'));
            $p->misena_email = e($request->input('misena_email'));
            $p->avatar = e($request->input('avatar'));
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
