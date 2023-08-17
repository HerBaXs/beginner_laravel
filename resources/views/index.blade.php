<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

@extends("layouts.front")

@section("css")

@endsection

@section("content")

    <x-article>
        <x-slot:title2>Makele 2</x-slot:title2>
        <x-slot name="title">Makele 1</x-slot>
        <hr>
        <x-slot name="content">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab adipisci
            at autem culpa deleniti dicta dolor dolore dolorem dolorum eaque error et fuga
            harum illo in iusto magni minus molestiae natus necessitatibus, nemo nihil odit
            officiis omnis placeat praesentium quam qui saepe sint sunt vel vitae voluptates!
            Deserunt, sed!
        </x-slot>
    </x-article>

@endsection()

@section("js")

@endsection()

</body>
</html>
























{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Document</title>--}}
{{--</head>--}}
{{--<body>--}}

{{--        @extends("layouts.front")--}}

{{--        @section("css")--}}

{{--        @endsection--}}

{{--        @section("content")--}}
{{--            <hr>--}}
{{--            @php--}}
{{--                $placeholder = "Ad Soyad Giriniz";--}}
{{--                $color = "danger";--}}
{{--            @endphp--}}
{{--             <x-input-text :type="'text'" :placeholder="$placeholder" class="bg-warning" />--}}
{{--             <x-input-text2 :type="'text'" :placeholder="$placeholder" class="bg-" :color="$color" :error="true"/>--}}
{{--            <hr>--}}
{{--        @endsection()--}}

{{--        @section("js")--}}

{{--        @endsection()--}}

{{--</body>--}}
{{--</html>--}}



{{--
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
</head>
<body>

@extends("layouts.front")
@section("css")
@endsection

@section("content")

    <form action="" method="post">
        @csrf
        @auresMethod("put")
        <input type="text" name="fullname">
        <button type="submit">
            Gonder
        </button>
    </form>

    <hr>
    <h1>Hello World</h1>
    <hr>
    <h2>Welcome To Web Dizayn</h2>
    <hr>
    Gele Yas Degeri: {{ $age ?? $person->age }}
    <hr>
    Gelen 2 Deger: {{ $sfercan ?? @$person->age }} --}}
{{--  @ isaresi error bile verse o komutu yinede error vermeden sayfada goruntuluyor  --}}{{--

    <hr>
    @if(isset($person) && isset($person->age))
        @switch($person->age)
            @case(10)
            Cocuk
            @break
            @case(20)
            Genc
            @break
            @default
            Yaslandin
        @endswitch
    @else
        Dont Success!
    @endif
@endsection

@section("js")
@endsection


</body>
</html>
--}}
