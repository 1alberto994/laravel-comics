<main>
   
    <section class="fumetti d-flex flex-wrap">
        @foreach($comics as $comic)
           
                <div class="card m-4" style="width: 18rem;">
                    <img src= "Vite::asset{{$comic ['thumb']}} "  class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"> {{$comic['title']}}</p>
                    </div>
                </div>
           
        @endforeach
    </section>
</main>