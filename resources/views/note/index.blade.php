<x-app-layout>
    <div class="note-container p-12">
        <a href="{{ route('note.create')}}" class="new-note-btn">
            New Note
        </a>
        <div class="notes">
            @foreach ($notes as $note)
                <div class="note">
                    <div class="note-body">
                        {{ Str::words($note->note,30) }}
                    </div>
                    <div class="note-buttons">


                        <a href="{{ route('note.show', $note->id)}}" class="note-edit-button">View</a>
                        <a href="{{ route('note.edit', $note->id)}}" class="note-edit-button">Edit</a>
                        <form action="{{ route('note.destroy', $note->id) }}" method="POST" >
                            @csrf
                            @method('DELETE')
                            <button class="note-delete-button">Delete</button>
                        </form>
                        
                    </div>
                </div>
            @endforeach
        </div>
       <div class="p-6"> {{  $notes->links() }}</div>
    </div>
</x-app-layout>
