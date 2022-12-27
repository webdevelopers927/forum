<x-layout>
        <x-navbar />
        <x-posts-table :questions="$questions"/>
        <div class="mt-10">    
                {{ $questions->links() }}
        </div>
</x-layout>