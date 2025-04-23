{{-- <form action="{{$action}}" method="post"> --}}
<form action="" method="post" class="form {{$class}}">
    @csrf
    {{$slot}}
</form>