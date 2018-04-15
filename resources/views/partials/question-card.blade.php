<div onclick="location.assign('/questions/{{$question->id}}');" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between flex-wrap-reverse">
        <h4 class="mb-1">{{substr($question->title,0,38)}}{{(strlen($question->title)>39? '...' : '')}}</h4>
        <small class="pb-1"><a href="{{Route('profile', $question->member->username)}}" class="btn-link"><img class="user-preview rounded-circle pr-1" width="36px" heigth="36px" src="{{$question->member->profile_picture}}">{{$question->member->name}}</a> <span class="text-muted">asked</span></small>
    </div>

    <small class="text-muted"><i class="far fa-tags"></i>
        @foreach($question->topics as $topic)
        <a href="{{Route('topic', $topic->name)}}" class="btn-link">{{$topic->name}}</a>{{$loop->last ? '' : ','}}

        @endforeach
    </small>
</div>