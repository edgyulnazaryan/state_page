<h1>REVIEWS PAGE</h1>

@foreach($data_review as $el)

    <div class="alert alert-info mt-3">
      <p><h3 align='center'>{{ $el->text }}</h3></p>
      <p><h3 align='center'>{{ $el->rate }}</h3></p>
      
  </div>


@endforeach
