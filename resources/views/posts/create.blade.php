<form action="/posts" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="text" name="title" placeholder="Enter Title">
    <textarea name="content" cols="30" rows="10"> </textarea>
    <input type="file" name="path">
    <input type="submit" name="submit" id="submit">
</form>

{{-- @if(count($errors) > 0)
<div class="alert">
    <ul>
        @foreach ($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </ul>
</div> --}}
