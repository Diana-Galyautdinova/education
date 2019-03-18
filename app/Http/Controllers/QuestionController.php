<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::paginate();

        return view('question.index', ['questions' => $questions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        return view('question.show', ['question' => $question]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function answer(Request $request, Question $question)
    {
        if ($question->answers->count() > 1) {
            $status = Question::ANSWER_INVALID;
            foreach ($question->answers as $answer) {
                if ($answer->is_truth && $answer->text == $request->input('answer')) {
                    $status = Question::ANSWER_VALID;
                    break;
                }
            }
        } else {
            if ($request->input('answer') == $question->answers[0]->text) {
                $status = Question::ANSWER_VALID;
            } else {
                $status = Question::ANSWER_INVALID;
            }
        }

        return redirect()
            ->back()
            ->with('status', $status);
    }
}
