<x-guest-layout>
    <header>
        <h1>Casamento Ana & João</h1>
        <p>Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod sit amet nisi euismod sed cursus arcu elementum ipsum arcu vivamus quis venenatis orci lorem ipsum et magna feugiat veroeros aliquam. Lorem ipsum dolor sit amet nullam dolore.</p>
    </header>
    <section class="tiles">
        @foreach($gifts as $gift)
            <article>
            <span class="image">
                <img src="{{ asset('image/imagem-presente.jpeg') }}" alt="" />
            </span>
                <a href="{{ route('item.description', ['giftId' => $gift->id]) }}">
                    <h2 class="main-title">{{$gift->name}}</h2>
                    <div class="content">
                        <p>{{$gift->description}}</p>
                    </div>
                </a>
            </article>
        @endforeach
    </section>
</x-guest-layout>
