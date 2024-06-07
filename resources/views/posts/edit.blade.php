<x-main>

    <div class="container my-5 py-5">
        
        <h2 class="h1">Modifica l'articolo</h2>
        <p class="mb-5">Per modificare l'articolo entra nei cambi e fai le tue modifiche e poi clicca su salva</p>
        <form action="{{route('posts.update', compact('post'))}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-floating mb-3">
                <input class="form-control" id="title" value="{{ $post->title }}" name="title"
                type="text">
                <label for="title">Titolo post</label>
                @error('title')
                {{ $message }}
                @enderror
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" name="body" id="floatingTextarea2" rows="10" style="height: 300px;">{{$post->body}}</textarea>
                <label for="floatingTextarea2" class="form-label">Inserisci qui il testo</label>
                @error('body')
                {{ $message }}
                @enderror
            </div>
            @foreach ($tags as $tag)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="categories[]"
                 @checked($post->tags->contains($tag->id)) value="{{ $tag->id }}">
                <label class="form-check-label" for="category_id">{{ $tag->name }}</label>
            </div>
            @endforeach
            <div class="form-floating mb-3">
                <img src="{{Storage::url($post->image)}}" alt="">
                <input class="form-control" id="image" name="image" value type="file">
            </div>
            @error('image')
            {{ $message }}
            @enderror
            <div class="d-grid">
                <button class="btn btn-primary btn-lg" type="submit">Aggiorna</button>
            </div>
        </form>
    </div>

</x-main>