            <div class="nav">
                <div class="nav__categories js-dropdown">
                    <x-dropdown class="dropdown__catalog" title="{{ request('category') ? request('category') : 'Category' }}" genre="menu"> 
                    	@foreach($categories as $category)
                    		<x-category href="?category={{ $category->slug }}&{{ http_build_query(request()->except('category')) }}" class="bg-f9bc64">{{ ucwords($category->name) }}</x-category>
                    	@endforeach
                    </x-dropdown>

                    <x-dropdown genre="tags" title="{{ request('tag') ? request('tag') : 'Tags' }}" class="tags">
                    	@foreach($tags as $tag)
                    		<x-link href="?tag={{ $tag->name }}&{{ http_build_query(request()->except('tag')) }}" class="bg-424ee8">{{ ucwords($tag->name) }}</x-link> 
                    	@endforeach
                    </x-dropdown>
                </div>
                <div class="nav__menu js-dropdown">
                    <ul>
                    	<x-menu>Latest</x-menu>
                    	<x-menu active="active">Unread</x-menu>
                    </ul>
                </div>
            </div>
