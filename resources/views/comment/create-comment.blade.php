<div class="card">
<div class="card-block">
    <form method="POST" action="/posts/{{$post->id}}/comments"> {{ csrf_field() }}
        <div class="form-group">
            <textarea name="body" placeholder="Your comment here." class="form-control"></textarea>
        </div>
                <div class="form-group">
            <button type="submit" class="btn btn-default">Add comment</button>
        </div>
    </form>
</div>
</div>
