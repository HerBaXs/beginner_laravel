@extends("layouts.front")
@section("css")
@endsection

@section("content")
    Content Sayfasi
    <hr>
    <div class="col-8 mx-auto">
        <form action="{{ route("contact", ["id" => 5, "name" => "aygun"]) }}" method="get">
            @csrf
            <input type="texet" class="form-control" name="fullname">
            <br>
            <input type="text" class="form-control" name="email">
            <br>
            <button class="btn btn-success" type="submit">Gonder</button>
        </form>
    </div>
        <h1 style="text-align: center;">Tab 2</h1>
    <div class="col-8 mx-auto">
        <form action="{{ route('support_form') }}" method="get">
            @csrf
            <input type="texet" class="form-control" name="fullname">
            <br>
            <input type="text" class="form-control" name="email">
            <br>
            <button class="btn btn-success" type="submit">Gonder</button>
        </form>
    </div>
        <h1 style="text-align: center;">Tab 3</h1>
    <div class="col-8 mx-auto">
        <form action="{{ route('user.update', ['id' => 9]) }}" method="post">
            @csrf
{{--            @method('PATCH')--}}
        {{ method_field("PATCH") }}
        <input type="texet" name="_method" value="{{ method_field("PATCH") }}" class="form-control" name="fullname">
            <br>
            <input type="text" class="form-control" name="email">
            <br>
            <button class="btn btn-success" type="submit">Gonder</button>
        </form>
    </div>
@endsection

@section("js")
@endsection
