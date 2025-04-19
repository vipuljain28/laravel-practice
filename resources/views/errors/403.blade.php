<x-app-layout>
    <div class="note-container single-note">
        <h1 class="text-3xl py-4">403</h1>
        <p class="text-xl">You are not authorized to access this page.</p>
        <a href="{{ route('note.index') }}" class="note-cancel-button">Back to Notes</a>
    </div>
</x-app-layout>