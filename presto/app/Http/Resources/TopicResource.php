<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Support\Facades\Auth;


class TopicResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $response = parent::toArray($request);
        $answerStats = $this->getAnswersStats();

        $response['nrFollowers'] = $this->followers()->count();
        $response['nrQuestions'] = $this->questions()->count();
        $response['nrAnswers'] = $answerStats['number'];
        $response['related'] = $this->getRelatedTopics();

        $isFollowing = false;
        if (Auth::user() != null && Auth::user()->isFollowingTopic($request['topic']))
            $isFollowing = true;

        $response['isFollowing'] = $isFollowing;

        $response['questions'] = QuestionResource::collection($this->questions);

        if (Auth::user() != null)
            $response['isModerator'] = Auth::user()->is_moderator;
        else
            $response['isModerator'] = false;

        return $response;
    }
}
