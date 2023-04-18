
<section id="movie_description" class="flex flex-col flex-wrap min-h-screen text-xl items-center justify-center text-red-600 pt-20 px-20">
    <div class="md:self-start text-xl"> 
        <a href=" {{ Route('home') }} ">Kezdőlap &gt; </a>
        <a href=" {{ Route('all_movie') }} ">Filmek &gt; </a>
        {{ $singleMovie->title }}
    </div>
    <div class="text-4xl"> {{ $singleMovie->title }} </div>
    <iframe class="w-full max-w-screen-lg aspect-video" src="{{$singleMovie->trailer}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <div class="flex flex-row justify-between max-w-screen-md">
        <table class="table-auto">
            <tbody>
              <tr>
                <td>Eredeti cím:</td>
                <td>{{ $singleMovie->title }}</td>
              </tr>
              <tr>
                <td>Évszám</td>
                <td>{{ $singleMovie->year }}</td>
              </tr>
              <tr>
                <td>Műfaj</td>
                <td>{{ $singleMovie->genre }}</td>
              </tr>
              <tr>
                <td>Szereplők</td>
                <td>{{ $singleMovie->cast }}</td>
              </tr>
              <tr>
                <td>Rendező</td>
                <td>{{ $singleMovie->director }}</td>
              </tr>
              <tr>
                <td>Korhatár</td>
                <td>{{ $singleMovie->age }}</td>
              </tr>
              <tr>
                <td>Rendező</td>
                <td>{{ $singleMovie->director }}</td>
              </tr>
            </tbody>
          </table>
        <img src="{{ $singleMovie->cover_big }}">
    </div>
</section>