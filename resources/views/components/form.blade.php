{{-- <form action="{{$action}}" method="post"> --}}
<form action="" method="post" class="container form {{$class}}">
    @csrf
    {{$slot}}
</form>