<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'question' => 'required',
            'email' => 'required',
        ]);

        try {
            $question = new Question();
            $question->email = $request->email;
            $question->question = $request->question;
            $question->user_id = isset( Auth::user()->id)? Auth::user()->id : null;
            $question->save();
            session()->flash('success', __('site.added_successfully'));
            return redirect('/');
        }catch (\Exception $exception){
            dd($exception);
          //  return route('/');
        }
    }
}
