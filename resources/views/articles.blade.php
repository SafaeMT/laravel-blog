@extends ('layouts/main')

@section ( 'content' )
    <h1> Articles </h1>
        <ul>
            <br>
            @foreach ( $posts as $post )
            <ul style="color: blue;"><strong> {{ $post->post_name }} </strong>- {{ $post->post_category }}</ul>
            <li>  {{ $post->post_title }}</li>
            <li>  {{ $post->post_content}}</li>
        <br>
            
            <h6 style="color: grey">Commentaires :</h6>
            @foreach ($posts as $comment)
            <div style="margin-button:50px;" id="comments">
                <textarea rows="1" name="user_id" placeholder="Votre pseudo" v-model="pseudo" ></textarea>
            <textarea class="form-control" rows="3" name="body" placeholder="Laisser un commentaire" v-model="commentBox"></textarea>
            <button class="btn btn-success" style="color: grey; margin-top:10px; border: 2px solid; border-radius: 10px; padding:3px" @click.prevent="postComment"> Envoyer commentaire</button>
            </div>
            <div class="media" style="margin-top:20px;" v-for="comment in comments";>
                <div class="media-left">
                    <a href="#"> 
                        <img class="media-object" src="http://placeimg.com/80/80" alt="...">
                    
                    </a>
                </div>
            @endforeach
            <br>
    
            @endforeach
</ul>
@endsection