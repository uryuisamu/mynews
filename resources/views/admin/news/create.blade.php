
   
       
        @extends('layouts.admin')
        <title>MyNews</title>
        
        @section('title', 'ニュースの新規作成')
        @section('content')
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <h2>ニュース新規作成</h2>
                    </div>
                </div>
            </div>
        @endsection    
   
    <body>
        <h1>Myニュース作成画面</h1>
        @foreach($newsList as $news)  
           {{$news}}<br>
        @endforeach
    </body>
