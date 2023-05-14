@foreach($exhibitions as $exhibition)
    <div>
        <h2>{{ $exhibition->name }}</h2>
        <p>{{ $exhibition->description }}</p>
        <p>{{ $exhibition->start_date }} - {{ $exhibition->end_date }}</p>
    </div>
@endforeach