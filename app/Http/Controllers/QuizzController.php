<?php
  
  use App\http\Controllers\Controller;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\QueryException ;

class QuizzController extends Controller
{
    public function storeOrUpdate(Request $request)
    {
        $quizId = $request->input('quiz_id');

        if ($quizId) {
            $quiz = Quiz::findOrFail($quizId);
        } else {
            $quiz = new Quiz();
        }

        $quiz->name = $request->input('quiz_name');
        $quiz->description = $request->input('quiz_description');
        $quiz->save();

        return redirect('/quizzes');
    }
}
