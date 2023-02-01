<x-layout>
    <main>
        <div class="container">
            <div class="create">
                <div class="create__head">
                    <div class="create__title"><img src="fonts/icons/main/New_Topic.svg" alt="New topic">Create New Thread</div>
                    <span>Forum Guidelines</span>
                </div>
                <form action="/create-question/create" method="POST">
                    @csrf
                    <div class="create__section" id="title-section">
                        <label class="create__label" for="title">Thread Title</label>
                        <input type="text" class="form-control" style="border: 1px solid green;" name="title" id="title" placeholder="Add here">
                        <p class="opacity-50 mt-2"><span id="qty">10</span> More characters</p>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="create__section">
                                <label class="create__label" for="category">Select Category</label>
                                <label class="custom-select">
                                    <select id="category" name="category_id">
                                        <option value="null">Choose Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="create__section create__textarea">
                        <label class="create__label" for="category">Description</label>
                            
                        <textarea name="description" class="form-control" id="description" placeholder="Description..."></textarea>
                    </div>
                    <div class="create__section">
                        <input type="hidden" id="tags" name="tags" class="form-control" id="tags" placeholder="e.g. nature, science">
                    </div>
                    @foreach($tags as $tag)
                        <span id="tag-{{ $tag->id }}" onclick="addTag({{ $tag->id }})" class="border-2 px-5 py-2 rounded-2xl hover:cursor-pointer">{{ $tag->name }}</span>    	
                    @endforeach  
                    
                    <div class="create__footer">
                        <a href="#" class="create__btn-cansel btn">Cancel</a>
                        <button type="submit" class="bg-green-500 hover:bg-green-600 py-4 px-5 text-white">Create Thread</button>
                    </div>
                </form>
            </div>
            <x-posts-table :questions="$questions"/>
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            @endif
        </div>
    </main>
</x-layout>