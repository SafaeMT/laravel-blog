@extends ('layouts/main')

@section ( 'content' )
    <h2> {{ $post->post_title }} </h2>
    <h4> Author : {{ $author_name }} </h4>
    <p> {{ $post->post_content }} </p>
    <br>
    <h6 style="color: grey">Commentaires :</h6>

            <div style="margin-button:50px;" id="comments">
                <form action="{{route('un_commentaire')}}" method="post">
                    @csrf
                <textarea rows="1" name="user_id" placeholder="Votre pseudo" ></textarea>
                <textarea  rows="3" name="body" placeholder="Laisser un commentaire" > </textarea>
                <button  style="color: grey; margin-top:10px; border: 2px solid; border-radius: 10px; padding:3px" type="submit"> Envoyer commentaire</button>
                </form>
                <br><br>
                </div>              

            <br>
@endsection