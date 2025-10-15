@props(['logo'=>'', 'title'=>''])
<button
    class="btn btn-default flex justify-center items-center gap-1"
>
    <img src="{{$logo}}" alt="" style="width: 20px"/>
    {{$title}}
</button>
