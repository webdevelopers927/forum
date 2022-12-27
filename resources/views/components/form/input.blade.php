                            @props(["name", "type" => "text"])
                            <div class="signup__section">
                                <label class="signup__label" for="{{ $name }}">{{ $name }}</label>
                                <input type="{{ $type }}" class="form-control" name="{{ $name }}" >
                            </div>