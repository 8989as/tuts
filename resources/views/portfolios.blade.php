<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>


    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">ALL</button>
        </li>
        @foreach ($categories as $category)
            <li class="nav-item" role="presentation">
            <button class="nav-link" id="cat" data-bs-toggle="tab" data-bs-target="#cat{{$category->id}}" type="button" role="tab" aria-controls="cat" aria-selected="false">{{$category->name}}</button>
            </li>
        @endforeach
    </ul>
      <div class="tab-content" id="myTabContent">
            @foreach ($portfolios as $portfolio )
                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" >
                    <h1>{{$portfolio->name}}</h1>
                    <h2>{{$portfolio->description}}</h2>
                </div>
            @endforeach

            @foreach ($portfolios as $portfolio )
            {{dd($portfolio);}}
                <div 
                    class="tab-pane fade" 
                    id="cat{{$portfolio->category_id}}" 
                    role="tabpanel" 
                    aria-labelledby="cat{{$portfolio->category_id}}">
                    <h1>{{$portfolio->name}}</h1>
                    <h2>{{$portfolio->description}}</h2>
                </div>
            @endforeach
        
      </div>





    {{-- 
        <h1>{{$portfolio->name}}</h1>
                    <h2>{{$portfolio->description}}</h2>
        --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
</body>

</html>
