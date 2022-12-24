
@foreach ($employment as $empString)
    <x-basicCard
        heading="{{$empString['title']}}"
        company="{{$empString['company']}}"
        desc="{{$empString['description']}}"
        date="{{ $empString['date_of_joining'] }}"
        dateLeave="{{ $empString['date_of_leaving'] }}"
        location="{{ $empString['city'] }}, {{ $empString['country'] }}"
    ></x-basicCard>
@endforeach
