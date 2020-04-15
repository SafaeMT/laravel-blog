@extends ('layouts.app')

@section ( 'content' )
    <h2> {{ $post->post_title }} </h2>
    <h4> Author : {{ $author_name }} </h4>
    <p> {{ $post->post_content }} </p>
    <br>

    <div>
    <h6 style="color: grey; ">Saisissez votre commentaire :</h6>
    @foreach($errors->all() as $error)
        <ul>
            <li style="color:red;">{{ $error }}</li>
        </ul>
    @endforeach

    <div style="margin-button:50px;" id="comments">
    <form action="{{ route('comment') }}" method="post">
        @csrf
        @guest
            <textarea style=" height:2em; width:50%"rows="1" name="user_name" placeholder="Votre pseudo">{{ old('user_name') }}</textarea>
            <textarea style=" height:2em; width:50%"rows="1" name="email" placeholder="Votre email" >{{ old('email') }}</textarea>
        @endguest  
            <textarea  style=" height:2em; width:50%" rows="5" name="body" placeholder="Laisser un commentaire" >{{ old('body') }}</textarea>
                    <input type="hidden" name="post_id" value={{ $post->id }} />
                        <button class="hollow button" type="submit"> Envoyer commentaire</button>
                    </form>
                <br><br>
            </div>              
          </div>

     <h6 style="color: black">Lire les commentaires :</h6>
        <div style=" background-color:lightgrey";>
            @foreach($post->comments as $comment)
                <sub style = "color:darkslategray ; text-decoration: underline; "><i>   publié par <strong> {{$comment->user_name}} </strong> : </i></sub><br>
                    <table class = "card-section" style="color: darkblue;" >{{$comment->body}}
                </table>  
             @endforeach
                <br>
        </div>


@endsection