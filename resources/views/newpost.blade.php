@extends('base')

@section('content')
<br><br><br><br>
<div class="row">
    <div class="col-md-4 offset-md-4">
        <div class="card mt-5">
            <div class="card-header bg-blue bg-gradient text-black" style="background-color: rgb(142, 142, 241)">
                <h3 class="card-title" style="text-align:center;">New Post</h3>

                <div class="card-body">
                    <form action="{{url('/newpost')}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                        <div class="mb-3">
                            <label for="category_id">Categories</label>
                            <select name="category_id" id="category_id" class="form-select">
                                @foreach(App\Models\Category::all() as $c)
                                <option value="{{$c->id}}">{{$c->category}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="post">Post</label>
                            <textarea name="post" id="post" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <a href="/dashboard" class="btn btn-secondary">Back</a>
                        <button class="btn btn-blue bg-gradient float-end"  style="background-color: rgb(62, 62, 141)" type="submit" style="width: 100px">Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection

