@foreach($themes as $theme)
    <div>
        <h2>{{ $theme->name }}</h2>
        <p>{{ $theme->description }}</p>
    </div>
@endforeach