@extends('templates.main')
@section('content')
<div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">Liste Mails</h6>
    <div class=" text-muted pt-3">   
        @foreach ($mails as $item)
            <p>
             {{$item->title}}
            </p>
        @endforeach
    </div>     
  </div>


@endsection