<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Question;
use \App\Topic;
use \App\QuestionRating;

class QuestionController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except(['show']);
    }

    public function show(Question $question){
        return view('pages.question.show', compact('question'));
    }

    public function store(){
        $this->validate(request(), [
            'title' => 'required',
            'tags'  => 'required'
        ]);

        $question = new Question();
        $question->title = request('title');
        $question->date = now();
        request()->user()->questions()->save($question);

        $tags = explode(',', request('tags'));
        foreach ($tags as $tag){
            // $topic[$tag] = Topic::where('name', 'ILIKE', $tag)->get();
            $topic = Topic::whereRaw('lower(name) ILIKE ?', array(trim($tag)))->get();

            if($topic->isEmpty()){
                $newTopic = new Topic();
                $newTopic->name = $tag;
                $newTopic->save();
                $question->topics()->attach($newTopic);
            } else {
                try{
                    $question->addTopic($topic->first());
                } catch (\Illuminate \Database\QueryException $e){

                }
            }
        }

        session()->flash('message','Your question has now been published');
        return redirect()->route('question', $question);
    }

    public function rate(Question $question)
    {
        $existing_rate = QuestionRating::withTrashed()->whereQuestionId($question->id)->whereMemberId(Auth::id())->first();

        if (is_null($existing_rate)) {
            QuestionRating::create([
                'question_id' => $question->id,
                'member_id' => Auth::id(),
                'rate' => request('rate')
            ]);
        } else {
            if (is_null($existing_rate->deleted_at)) {
                if($existing_rate->rate == request('rate')){
                    $existing_rate->delete();
                }
                else{
                    $existing_rate->rate = request('rate');
                    $existing_rate->save();
                }
            } else {
                $existing_rate->restore();
                $existing_rate->rate = request('rate');
                $existing_rate->save();
            }
        }

        return back();
    }
}