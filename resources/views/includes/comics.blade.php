<div class="jumbo">
    <section class="container jumbo">
      <!-- titolo sezione (current series) -->
        <div class="blue-title">current series</div>
        <div class="comics-row row p-0">
            <!-- vetrina fumetti -->
            @foreach ($comics as $comic)
                <div class="card gy-5">
                    <div class="comic-cover">
                        <a href="{{route('detail')}}">
                            <img src="{{ $comic['thumb']}}" alt="">
                        </a>
                    </div>
                    <!-- titolo fumetto -->
                    <h3 class="fs-5 mt-2">{{$comic['title']}}</h3>
                </div>
            @endforeach
            <!-- tasto load more -->
            <div class="btn mt-5 mb-5 w-auto">Load More</div>
        </div>
    </section>
  </div>