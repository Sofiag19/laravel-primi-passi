@extends ('cds')

@section('dischi')

  <div class="cds-container">

      @foreach ($dischi as $disco)
      <div class="cd">
          <img src="{{ $disco['poster'] }}" />

          <h3>{{ $disco['title'] }}</h3>
          <small>{{ $disco['author'] }}</small>
          <strong>{{ $disco['year'] }}</strong>
      </div>
      @endforeach

  </div>

@endsection
