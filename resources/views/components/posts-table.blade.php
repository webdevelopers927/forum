           @props(["questions"])
           <div class="posts">
                <div class="posts__head">
                    <div class="posts__topic">Topic</div>
                    <div class="posts__category">Category</div>
                    <div class="posts__users">Users</div>
                    <div class="posts__replies">Replies</div>
                </div>
                    <div class="posts__body">
                    @foreach($questions as $question)
                        <x-post href="lol" :question="$question"/>
                    @endforeach
                 </div>
            </div>

        