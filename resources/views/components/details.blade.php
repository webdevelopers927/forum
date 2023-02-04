<div>
    
    @props([
        "letter" => "A", 
        "editable" => 0,
        "profile_pic" => 0
    ])
    <div>
        @if(!$editable)
            <a href="#" {{ $attributes->merge(["class" => "avatar"]) }}><img class="rounded-full avatar" style="width: 144px; height: 32px;" src="{{ (isset($profile->profile_pic)) ? "/uploads/" . $profile->profile_pic : "/fonts/icons/avatars/$letter.svg" }}" alt="avatar"></a>
        @else 
            <form id="fileUpload">
                <a href="#" onclick="document.getElementById('upload_pic').click()" {{ $attributes->merge(["class" => "avatar"]) }} ><img id="output" style="width: 144px; height: 144px;" class="rounded-full avatar" src="{{ (isset($profile->profile_pic)) ? "/uploads/" . $profile->profile_pic : "/fonts/icons/avatars/$letter.svg" }}" alt="avatar"></a>
                <input class="hidden" type="file" name="upload_pic" id="upload_pic">
            </form>
        @endif

    </div>
</div>