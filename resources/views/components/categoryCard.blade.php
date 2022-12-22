<div class="col-lg-3 col-sm-6 py-1 px-1 mb-3">
    <article class="card bg-dark text-center text-white border-0 rounded-0 mb-18">
        <img class="card-img rounded-0 img-fluid" src="https://source.unsplash.com/random/600x600?{{ $title }}" alt="post-thumb">
        <div class="card-img-overlay">
            <div class="card-content">
                <h2 class="text-uppercase">{{$title}}</h2>
                <form action="/finds" method="POST">
                    @csrf
                    <input type="number" hidden name="id" value="{{ $id }}"/>
                    <input class="btn btn-outline-light" type="submit" value="Explore" />
                </form>
            </div>
        </div>
    </article>
</div>