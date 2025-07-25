@csrf
     
        <label for=""> Title </label>
        <input type="text" name="title" value="{{old('title', $post ->title) }}">
        
        <label for=""> Slug </label>
        <input type="text" name="slug" value="{{old('slug', $post ->slug) }}">

        <label for=""> numero </label>
        <textarea name="numero"> {{old ('numero', $post->numero)}}</textarea>

        <label for=""> adress </label>
        <textarea name="adress"> {{old('adress', $post->adress)}}</textarea>

        <label for="">Category</label>
        <select name="category_id" required></textarea>
            <option value="" disabled selected> Seleccione una categoria </option>
            @foreach ($categories as $id => $title)
                {{-- <option {{ $post->category->id == $id ? 'selected' : ''}} value="{{ $id }}">{{ $title }}</option> --}}
                <option value="{{ $id }}" {{ old('category_id', $post->category_id) == $id ? 'selected' : '' }}>{{ $title }}</option>
            @endforeach
        </select>

        <label for=""> description </label>
        <textarea name="description"> {{old('description', $post->description)}}</textarea>

        <label for=""> content </label>
        <textarea name="content"> {{old('content', $post->content)}}</textarea>

        @if (isset($task) && $task == 'edit')    
            <label for=""> image </label>
            <input type="file" name="image">
        @endif
        
        {{-- <label for=""> image </label>
        <textarea name="image"> {{old('image', $post->image)}}</textarea>    --}}

        <label for=""> posted </label>
        <select name="posted" required>
            <option value="yes" {{  old ('posted', $post -> posted) == 'yes' ? 'selected' : ''}}> Yes</option>
            <option value="not" {{  old ('posted', $post -> posted) == 'not' ? 'selected' : ''}}> Not</option>

            {{-- <option {{$post -> posted == 'yes' ? 'selected' : ''}} value="yes"> yes</option>
                 <option {{$post -> posted == 'not' ? 'selected' : ''}} value="not"> not</option> --}}
        </select>        
        
        <button type="submit">Send</button>