<?php

namespace App\Http\Controllers;

use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UniversityController extends Controller
{
    public function index()
    {
        $universities = University::paginate(20);
        return view('dashboard.universities.index' , compact('universities'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name_ar' => 'required',
            'name_he' => 'required',
        ]);

        try {
            $university = new University();
            $university->name_ar = $request->name_ar;
            $university->name_he = $request->name_he;
            $university->user_id = isset( Auth::user()->id)? Auth::user()->id : null;
            $university->save();
            session()->flash('success', __('site.added_successfully'));
            return redirect()->route('cities');
        }catch (\Exception $exception){
            return route('dashboard');
        }
    }

    public function showEdit(Request $request)
    {
        $university = University::find($request->university_id);
        return view('dashboard.universities.edit' , compact('university'));
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'name_ar' => 'required',
            'name_he' => 'required',
        ]);

        try {
            $university = University::find($request->id);
            $university->name_ar = $request->name_ar;
            $university->name_he = $request->name_he;
            $university->user_id = isset( Auth::user()->id)? Auth::user()->id : null;
            $university->save();
            session()->flash('success', __('site.updated_successfully'));
            return redirect()->route('cities');
        }catch (\Exception $exception){
            return route('dashboard');
        }
    }

    public function destroy(Request $request)
    {
        University::where('id' , $request->city_id)->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('universities');
    }

    function searchAjax(Request $request)
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
                $data = DB::table('universities')
                    ->where('name_ar', 'like', '%'.$query.'%')
                    ->orWhere('name_he', 'like', '%'.$query.'%')
                    ->orderBy('id', 'desc')
                    ->get();

            }
            else
            {
                $data = DB::table('universities')
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
          <td>  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#cityModal'.$row->id.'" data-whatever="@getbootstrap"><i class="fa fa-edit"></i>تعديل</button>

                                           <form action="'.url('/admin/universities/delete').'" method="post" style="display: inline-block;">
                    <?php
                    csrf_filed();

                     ?>

                                                        <input type="hidden" name="city_id" value="'.$row->id .'">
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


}
