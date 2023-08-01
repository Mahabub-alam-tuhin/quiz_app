<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
</head>

<body>

    @foreach ($questions as $question)
         
        <h4>name:{{ $question->name }}<br></h4>
        <h4>Question:{{ $question->Question }}<br></h4>
        <h4>option_1:{{ $question->option_1 }}<br></h4>
        <h4>option_2:{{ $question->option_2 }}<br></h4>
        <h4>option_3:{{ $question->option_3 }}<br></h4>
        <h4>option_4:{{ $question->option_4 }}<br></h4>
        <h4>Answer:{{ $question->Answer }}<br></h4>
        <h2>submitted_answer:{{ $question->submissions->submitted_answer }} <br></h2>
        <h2 @if($question->submissions->submitted_answer == $question->Answer) class="right_answer" @endif>
            @if($question->submissions->submitted_answer == $question->Answer)
                Right Answer
            @else
                Wrong Answer
            @endif
        </h2>
        @endforeach
    {{-- @foreach ($question->submissions as $item)
            {{$question->where('Answer',$question->Answer)->count()}} 
                {{ $item->where('Answer',$question->submitted_answer)->count()}} 
    @endforeach --}}





</body>

</html>
