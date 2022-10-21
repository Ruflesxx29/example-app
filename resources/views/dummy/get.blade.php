<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ruta get</title>
    </head>
    <body>
        <a href="{{ url('/') }}">main page</a>
        <hr>
        any con get
        <form action="{{ url('dummy/any') }}" method="get">
            <input type="submit" value="Submit"/>
        </form>
        <a href="{{ url('dummy/any') }}">any con get, sólo con get</a>
        <hr>
        any con delete
        <form action="{{ url('dummy/any') }}" method="post">
            @method('delete')
            @csrf
            <input type="submit" value="Submit"/>
        </form>    
        <hr>
        any con post
        <form action="{{ url('dummy/any') }}" method="post">
            @csrf
            <input type="submit" value="Submit"/>
        </form>    
        <hr>
        any con put
        <form action="{{ url('dummy/any') }}" method="post">
            @method('put')
            @csrf
            <input type="submit" value="Submit"/>
        </form>    
        <hr>
        get
        <form action="{{ url('dummy/get') }}" method="get">
            <input type="submit" value="Submit"/>
        </form>
        <a href="{{ url('dummy/get') }}">get con get, sólo con get</a>
        <hr>
        delete
        <form action="{{ url('dummy/delete') }}" method="post">
            @method('delete')
            @csrf
            <input type="submit" value="Submit"/>
        </form>    
        <hr>
        post
        <form action="{{ url('dummy/post') }}" method="post">
            @csrf
            <input type="submit" value="Submit"/>
        </form>    
        <hr>
        put
        <form action="{{ url('dummy/put') }}" method="post">
            @method('put')
            @csrf
            <input type="submit" value="Submit"/>
        </form>    
        <hr>
        put con el método post
        <form action="{{ url('dummy/put') }}" method="post">
            @csrf
            <input type="submit" value="Submit"/>
        </form>    
        <hr>
    </body>
</html>