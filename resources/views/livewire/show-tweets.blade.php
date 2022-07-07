<div>

    Show Tweets


    <form method="post" wire:submit.prevent="create">
        <input type="text" id="content" name="content" wire:model="content">

        <button type="submit" class="bg-blue-900 text-white p-2 pl-6 pr-6 rounded">Criar Tweet</button>
    </form>

    @error('content')
        {{ $message }}
    @enderror

    <hr />

    @foreach ($tweets as $tweet)

    {{ $tweet->user->name }} - {{ $tweet->content }} <br />

    @endforeach

    <hr />
    <div>
        {{ $tweets->links() }}
    </div>

</div>
