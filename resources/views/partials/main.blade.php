<main>
    <section>
        
        <div class="contanier">
            <div class="row">
                <div class="col-2">
                    @foreach ($comics as $comic)
                    {{$comic['title']}}
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</main>