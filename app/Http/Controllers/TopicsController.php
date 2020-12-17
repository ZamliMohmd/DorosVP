<?php

namespace App\Http\Controllers;

use App\Models\Maintopic;
use App\Models\Subtopic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TopicsController extends Controller
{

    public function index()
    {
        $mainTopics = Maintopic::paginate(20);
        return view('dashboard.topics.index' , compact('mainTopics'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name_ar' => 'required',
            'name_he' => 'required',
        ]);

        try {
            $mainTopics = new Maintopic();
            $mainTopics->name_ar = $request->name_ar;
            $mainTopics->name_he = $request->name_he;
            $mainTopics->user_id = isset( Auth::user()->id)? Auth::user()->id : null;
            $mainTopics->save();
            session()->flash('success', __('site.added_successfully'));
            return redirect()->route('mainTopics');
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
            $mainTopics = Maintopic::find($request->id);
            $mainTopics->name_ar = $request->name_ar;
            $mainTopics->name_he = $request->name_he;
            $mainTopics->user_id = isset( Auth::user()->id)? Auth::user()->id : null;
            $mainTopics->save();
            session()->flash('success', __('site.updated_successfully'));
            return redirect()->route('mainTopics');
        }catch (\Exception $exception){
            return route('dashboard');
        }
    }

    public function destroy(Request $request)
    {
        Subtopic::where('maintopic_id' , $request->id)->delete();
        Maintopic::where('id' , $request->id)->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('mainTopics');
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
                $data = DB::table('maintopics')
                    ->where('name_ar', 'like', '%'.$query.'%')
                    ->orWhere('name_he', 'like', '%'.$query.'%')
                    ->orderBy('id', 'desc')
                    ->get();

            }
            else
            {
                $data = DB::table('maintopics')
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



    public function subTopics($id)
    {
       // dd(Auth::user());
        $subtopics = Subtopic::with('maintopics')->where('maintopic_id' , $id)->paginate(50);

        //  dd($specialties);
        return view('dashboard.topics.sub' , compact('subtopics' , 'id'));
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
                $data = DB::table('subtopics')
                    ->where('name_ar', 'like', '%'.$query.'%')
                    ->orWhere('name_he', 'like', '%'.$query.'%')
                    ->orderBy('id', 'desc')
                    ->get();

            }
            else
            {
                $data = DB::table('$subtopics')
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
            $subtopic = new Subtopic();
            $subtopic->name_ar = $request->name_ar;
            $subtopic->name_he = $request->name_he;
            $subtopic->maintopic_id = $request->maintopic_id;
            $subtopic->user_id = isset( Auth::user()->id)? Auth::user()->id : null;
            $subtopic->save();
            session()->flash('success', __('site.added_successfully'));
            return redirect()->route('mainTopics');
        }catch (\Exception $exception){
            return route('dashboard');
        }
    }

    public function updateSubٍ(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'name_ar' => 'required',
            'name_he' => 'required',
        ]);

        try {
            $subTopic = Subtopic::find($request->id);
            $subTopic->name_ar = $request->name_ar;
            $subTopic->name_he = $request->name_he;
            $subTopic->user_id = isset( Auth::user()->id)? Auth::user()->id : null;
            $subTopic->save();
            session()->flash('success', __('site.updated_successfully'));
            return redirect()->route('subTopics');
        }catch (\Exception $exception){
            return route('dashboard');
        }
    }

    public function destroySub(Request $request)
    {
        Subtopic::where('id' , $request->id)->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('subTopics');
    }

}
