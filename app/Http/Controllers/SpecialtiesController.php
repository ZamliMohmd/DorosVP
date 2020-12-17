<?php

namespace App\Http\Controllers;

use App\Models\Mainspecialtie;
use App\Models\Subspecialties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SpecialtiesController extends Controller
{
    public function index()
    {
        $specialties = Mainspecialtie::paginate(20);
        return view('dashboard.specialties.index' , compact('specialties'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name_ar' => 'required',
            'name_he' => 'required',
        ]);

        try {
            $specialties = new Mainspecialtie();
            $specialties->name_ar = $request->name_ar;
            $specialties->name_he = $request->name_he;
            $specialties->user_id = isset( Auth::user()->id)? Auth::user()->id : null;
            $specialties->save();
            session()->flash('success', __('site.added_successfully'));
            return redirect()->route('mainspecialties');
        }catch (\Exception $exception){
            return route('dashboard');
        }
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'name_ar' => 'required',
            'name_he' => 'required',
        ]);

        try {
            $specialties = Mainspecialtie::find($request->id);
            $specialties->name_ar = $request->name_ar;
            $specialties->name_he = $request->name_he;
            $specialties->user_id = isset( Auth::user()->id)? Auth::user()->id : null;
            $specialties->save();
            session()->flash('success', __('site.updated_successfully'));
            return redirect()->route('mainspecialties');
        }catch (\Exception $exception){
            return route('dashboard');
        }
    }

    public function destroy(Request $request)
    {
        Subspecialties::where('mainspecialtie_id' , $request->id)->delete();
        Mainspecialtie::where('id' , $request->id)->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('mainspecialties');
    }

    function searchAjax(Request $request)
    {

        if($request->ajax())
        {

            $output = '<tr>
                                  <th>الرقم</th>
                                  <th>الاسم بالعربية</th>
                                  <th>الاسم بالعبرية</th>
                                   <th>التخصصات الفرعية</th>
                                  <th>اسم المستخدم</th>
                                  <th>التحكم</th>
                                </tr>';
            $query = $request->get('query');
            if($query != '')
            {
                $data = DB::table('mainspecialties')
                    ->where('name_ar', 'like', '%'.$query.'%')
                    ->orWhere('name_he', 'like', '%'.$query.'%')
                    ->orderBy('id', 'desc')
                    ->get();

            }
            else
            {
                $data = DB::table('mainspecialties')
                    ->orderBy('id', 'asc')
                    ->get();

            }
            $total_row = $data->count();
            if($total_row > 0)
            {
                //   $total_row = City::count();
                foreach($data as $key => $row)
                {
                    $output .= '
         <tr style="font-weight: bold">
         <td>'.$row->id.'</td>
         <td>'.$row->name_ar.'</td>
         <td>'.$row->name_he.'</td>
            <td>'.$row->mainspecialties->name_ar.'</td>
          <td>'.$row->user_id.'</td>
          <td>  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#cityModal'.$row->id.'" data-whatever="@getbootstrap"><i class="fa fa-edit"></i>تعديل</button>

                                           <form action="'.url('/admin/mainspecialties/delete').'" method="post" style="display: inline-block;">

                                                '.csrf_field() .'
                                                        <input type="hidden" name="id" value="'.$row->id .'">
                                                        <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i>حذف</button>
                                                    </form> </td>
        </tr>
        ';
                }
            }
            else
            {
                $output = '
       <tr>
        <td align="center" colspan="5">لا يوجد بيانات</td>
       </tr>
       ';
            }

            $data = array(
                'table_data'  => $output,
                'total_data'  => $total_row
            );
            // echo    $data->links();
            echo json_encode($data);

        }
    }



    /***************************************  Sub specialties   **********************************************/



    public function subSpecialties($id)
    {
        $subSpecialties = Subspecialties::with('mainspecialties')->where('mainspecialtie_id' , $id)->paginate(50);

      //  dd($specialties);
        return view('dashboard.specialties.sub' , compact('subSpecialties' , 'id'));
    }


    function searchSubAjax(Request $request)
    {

        if($request->ajax())
        {

            $output = '<tr>
                                  <th>الرقم</th>
                                  <th>الاسم بالعربية</th>
                                  <th>الاسم بالعبرية</th>
                                  <th>اسم المستخدم</th>
                                  <th>التحكم</th>
                                </tr>';
            $query = $request->get('query');
            if($query != '')
            {
                $data = DB::table('subspecialties')
                    ->where('name_ar', 'like', '%'.$query.'%')
                    ->orWhere('name_he', 'like', '%'.$query.'%')
                    ->orderBy('id', 'desc')
                    ->get();

            }
            else
            {
                $data = DB::table('subspecialties')
                    ->orderBy('id', 'asc')
                    ->get();

            }
            $total_row = $data->count();
            if($total_row > 0)
            {
                //   $total_row = City::count();
                foreach($data as $key => $row)
                {
                    $output .= '
         <tr style="font-weight: bold">
         <td>'.$row->id.'</td>
         <td>'.$row->name_ar.'</td>
         <td>'.$row->name_he.'</td>
          <td>'.$row->user_id.'</td>
           <td></td>
          <td>  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#cityModal'.$row->id.'" data-whatever="@getbootstrap"><i class="fa fa-edit"></i>تعديل</button>

                                           <form action="'.url('/admin/mainspecialties/delete').'" method="post" style="display: inline-block;">

                                                '.csrf_field() .'
                                                        <input type="hidden" name="id" value="'.$row->id .'">
                                                        <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i>حذف</button>
                                                    </form> </td>
        </tr>
        ';
                }
            }
            else
            {
                $output = '
       <tr>
        <td align="center" colspan="5">لا يوجد بيانات</td>
       </tr>
       ';
            }

            $data = array(
                'table_data'  => $output,
                'total_data'  => $total_row
            );
            // echo    $data->links();
            echo json_encode($data);

        }
    }

    public function storeSub(Request $request)
    {
        $this->validate($request, [
            'name_ar' => 'required',
            'name_he' => 'required',
        ]);

        try {
            $specialties = new Subspecialties();
            $specialties->name_ar = $request->name_ar;
            $specialties->name_he = $request->name_he;
            $specialties->mainspecialtie_id = $request->mainspecialtie_id;
            $specialties->user_id = isset( Auth::user()->id)? Auth::user()->id : null;
            $specialties->save();
            session()->flash('success', __('site.added_successfully'));
            return redirect()->route('mainspecialties');
        }catch (\Exception $exception){
            return route('dashboard');
        }
    }


}
