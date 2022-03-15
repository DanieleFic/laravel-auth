@dump($posts)

@foreach ($posts as $elemento)
    <ul>
        <li>{{$elemento->title}}</li>
        <li>{{$elemento->author}}</li>
        <li>{{$elemento->content}}</li>
        <li>{{$elemento->published}}</li>
        <li>{{$elemento->slug}}</li>
    </ul>
@endforeach