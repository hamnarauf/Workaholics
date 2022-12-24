@foreach ($education as $edString)
<x-basicCard
    heading="{{ $edString['institute'] }}"
    desc="{{ $edString['title'] }}"
    date="{{ $edString['date_of_graduation'] }}"
    location="{{ $edString['city'] }}, {{ $edString['country'] }}"
></x-basicCard>
@endforeach