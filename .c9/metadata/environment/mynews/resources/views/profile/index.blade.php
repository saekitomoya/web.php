{"filter":false,"title":"index.blade.php","tooltip":"/mynews/resources/views/profile/index.blade.php","ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":36,"column":58},"end":{"row":36,"column":58},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"hash":"8b7bd648208825733c770d1ccfb736987e1a7ba2","mime":"application/octet-stream","undoManager":{"mark":28,"position":28,"stack":[[{"start":{"row":0,"column":0},"end":{"row":58,"column":11},"action":"insert","lines":["@extends('layouts.front')","","@section('content')","    <div class=\"container\">","        <hr color=\"#c0c0c0\">","        @if (!is_null($headline))","            <div class=\"row\">","                <div class=\"headline col-md-10 mx-auto\">","                    <div class=\"row\">","                        <div class=\"col-md-6\">","                            <div class=\"caption mx-auto\">","                                <div class=\"image\">","                                    @if ($headline->image_path)","                                        <img src=\"{{ asset('storage/image/' . $headline->image_path) }}\">","                                    @endif","                                </div>","                                <div class=\"title p-2\">","                                    <h1>{{ str_limit($headline->title, 70) }}</h1>","                                </div>","                            </div>","                        </div>","                        <div class=\"col-md-6\">","                            <p class=\"body mx-auto\">{{ str_limit($headline->body, 650) }}</p>","                        </div>","                    </div>","                </div>","            </div>","        @endif","        <hr color=\"#c0c0c0\">","        <div class=\"row\">","            <div class=\"posts col-md-8 mx-auto mt-3\">","                @foreach($posts as $post)","                    <div class=\"post\">","                        <div class=\"row\">","                            <div class=\"text col-md-6\">","                                <div class=\"date\">","                                    {{ $post->updated_at->format('Y年m月d日') }}","                                </div>","                                <div class=\"title\">","                                    {{ str_limit($post->title, 150) }}","                                </div>","                                <div class=\"body mt-3\">","                                    {{ str_limit($post->body, 1500) }}","                                </div>","                            </div>","                            <div class=\"image col-md-6 text-right mt-4\">","                                @if ($post->image_path)","                                    <img src=\"{{ asset('storage/image/' . $post->image_path) }}\">","                                @endif","                            </div>","                        </div>","                    </div>","                    <hr color=\"#c0c0c0\">","                @endforeach","            </div>","        </div>","    </div>","    </div>","@endsection"],"id":1}],[{"start":{"row":35,"column":47},"end":{"row":35,"column":48},"action":"remove","lines":["e"],"id":3},{"start":{"row":35,"column":46},"end":{"row":35,"column":47},"action":"remove","lines":["t"]},{"start":{"row":35,"column":45},"end":{"row":35,"column":46},"action":"remove","lines":["a"]},{"start":{"row":35,"column":44},"end":{"row":35,"column":45},"action":"remove","lines":["d"]}],[{"start":{"row":35,"column":44},"end":{"row":35,"column":45},"action":"insert","lines":["n"],"id":4},{"start":{"row":35,"column":45},"end":{"row":35,"column":46},"action":"insert","lines":["a"]}],[{"start":{"row":35,"column":44},"end":{"row":35,"column":46},"action":"remove","lines":["na"],"id":5},{"start":{"row":35,"column":44},"end":{"row":35,"column":48},"action":"insert","lines":["name"]}],[{"start":{"row":36,"column":73},"end":{"row":36,"column":74},"action":"remove","lines":[")"],"id":6},{"start":{"row":36,"column":72},"end":{"row":36,"column":73},"action":"remove","lines":["'"]},{"start":{"row":36,"column":71},"end":{"row":36,"column":72},"action":"remove","lines":["日"]},{"start":{"row":36,"column":70},"end":{"row":36,"column":71},"action":"remove","lines":["d"]},{"start":{"row":36,"column":69},"end":{"row":36,"column":70},"action":"remove","lines":["月"]},{"start":{"row":36,"column":68},"end":{"row":36,"column":69},"action":"remove","lines":["m"]},{"start":{"row":36,"column":67},"end":{"row":36,"column":68},"action":"remove","lines":["年"]},{"start":{"row":36,"column":66},"end":{"row":36,"column":67},"action":"remove","lines":["Y"]},{"start":{"row":36,"column":65},"end":{"row":36,"column":66},"action":"remove","lines":["'"]},{"start":{"row":36,"column":64},"end":{"row":36,"column":65},"action":"remove","lines":["("]},{"start":{"row":36,"column":63},"end":{"row":36,"column":64},"action":"remove","lines":["t"]},{"start":{"row":36,"column":62},"end":{"row":36,"column":63},"action":"remove","lines":["a"]}],[{"start":{"row":36,"column":61},"end":{"row":36,"column":62},"action":"remove","lines":["m"],"id":7},{"start":{"row":36,"column":60},"end":{"row":36,"column":61},"action":"remove","lines":["r"]},{"start":{"row":36,"column":59},"end":{"row":36,"column":60},"action":"remove","lines":["o"]},{"start":{"row":36,"column":58},"end":{"row":36,"column":59},"action":"remove","lines":["f"]},{"start":{"row":36,"column":57},"end":{"row":36,"column":58},"action":"remove","lines":[">"]},{"start":{"row":36,"column":56},"end":{"row":36,"column":57},"action":"remove","lines":["-"]},{"start":{"row":36,"column":55},"end":{"row":36,"column":56},"action":"remove","lines":["t"]},{"start":{"row":36,"column":54},"end":{"row":36,"column":55},"action":"remove","lines":["a"]},{"start":{"row":36,"column":53},"end":{"row":36,"column":54},"action":"remove","lines":["_"]}],[{"start":{"row":36,"column":52},"end":{"row":36,"column":53},"action":"remove","lines":["d"],"id":8},{"start":{"row":36,"column":51},"end":{"row":36,"column":52},"action":"remove","lines":["e"]},{"start":{"row":36,"column":50},"end":{"row":36,"column":51},"action":"remove","lines":["t"]},{"start":{"row":36,"column":49},"end":{"row":36,"column":50},"action":"remove","lines":["a"]},{"start":{"row":36,"column":48},"end":{"row":36,"column":49},"action":"remove","lines":["d"]},{"start":{"row":36,"column":47},"end":{"row":36,"column":48},"action":"remove","lines":["p"]},{"start":{"row":36,"column":46},"end":{"row":36,"column":47},"action":"remove","lines":["u"]}],[{"start":{"row":36,"column":46},"end":{"row":36,"column":47},"action":"insert","lines":["n"],"id":9},{"start":{"row":36,"column":47},"end":{"row":36,"column":48},"action":"insert","lines":["a"]},{"start":{"row":36,"column":48},"end":{"row":36,"column":49},"action":"insert","lines":["m"]},{"start":{"row":36,"column":49},"end":{"row":36,"column":50},"action":"insert","lines":["e"]}],[{"start":{"row":36,"column":50},"end":{"row":36,"column":51},"action":"insert","lines":[","],"id":10}],[{"start":{"row":36,"column":51},"end":{"row":36,"column":52},"action":"insert","lines":["1"],"id":11},{"start":{"row":36,"column":52},"end":{"row":36,"column":53},"action":"insert","lines":["5"]},{"start":{"row":36,"column":53},"end":{"row":36,"column":54},"action":"insert","lines":["0"]}],[{"start":{"row":36,"column":51},"end":{"row":36,"column":52},"action":"insert","lines":[" "],"id":12}],[{"start":{"row":38,"column":48},"end":{"row":38,"column":49},"action":"remove","lines":["e"],"id":13},{"start":{"row":38,"column":47},"end":{"row":38,"column":48},"action":"remove","lines":["l"]},{"start":{"row":38,"column":46},"end":{"row":38,"column":47},"action":"remove","lines":["t"]},{"start":{"row":38,"column":45},"end":{"row":38,"column":46},"action":"remove","lines":["i"]},{"start":{"row":38,"column":44},"end":{"row":38,"column":45},"action":"remove","lines":["t"]}],[{"start":{"row":38,"column":44},"end":{"row":38,"column":45},"action":"insert","lines":["g"],"id":14},{"start":{"row":38,"column":45},"end":{"row":38,"column":46},"action":"insert","lines":["e"]},{"start":{"row":38,"column":46},"end":{"row":38,"column":47},"action":"insert","lines":["n"]},{"start":{"row":38,"column":47},"end":{"row":38,"column":48},"action":"insert","lines":["d"]},{"start":{"row":38,"column":48},"end":{"row":38,"column":49},"action":"insert","lines":["e"]},{"start":{"row":38,"column":49},"end":{"row":38,"column":50},"action":"insert","lines":["r"]}],[{"start":{"row":39,"column":60},"end":{"row":39,"column":61},"action":"remove","lines":["e"],"id":15},{"start":{"row":39,"column":59},"end":{"row":39,"column":60},"action":"remove","lines":["l"]},{"start":{"row":39,"column":58},"end":{"row":39,"column":59},"action":"remove","lines":["t"]},{"start":{"row":39,"column":57},"end":{"row":39,"column":58},"action":"remove","lines":["i"]},{"start":{"row":39,"column":56},"end":{"row":39,"column":57},"action":"remove","lines":["t"]}],[{"start":{"row":39,"column":56},"end":{"row":39,"column":57},"action":"insert","lines":["g"],"id":16},{"start":{"row":39,"column":57},"end":{"row":39,"column":58},"action":"insert","lines":["e"]},{"start":{"row":39,"column":58},"end":{"row":39,"column":59},"action":"insert","lines":["n"]},{"start":{"row":39,"column":59},"end":{"row":39,"column":60},"action":"insert","lines":["d"]},{"start":{"row":39,"column":60},"end":{"row":39,"column":61},"action":"insert","lines":["e"]},{"start":{"row":39,"column":61},"end":{"row":39,"column":62},"action":"insert","lines":["r"]}],[{"start":{"row":40,"column":38},"end":{"row":41,"column":0},"action":"insert","lines":["",""],"id":17},{"start":{"row":41,"column":0},"end":{"row":41,"column":32},"action":"insert","lines":["                                "]}],[{"start":{"row":41,"column":32},"end":{"row":43,"column":38},"action":"insert","lines":["<div class=\"gender\">","                                    {{ str_limit($post->gender, 150) }}","                                </div>"],"id":18}],[{"start":{"row":41,"column":49},"end":{"row":41,"column":50},"action":"remove","lines":["r"],"id":19},{"start":{"row":41,"column":48},"end":{"row":41,"column":49},"action":"remove","lines":["e"]},{"start":{"row":41,"column":47},"end":{"row":41,"column":48},"action":"remove","lines":["d"]},{"start":{"row":41,"column":46},"end":{"row":41,"column":47},"action":"remove","lines":["n"]},{"start":{"row":41,"column":45},"end":{"row":41,"column":46},"action":"remove","lines":["e"]},{"start":{"row":41,"column":44},"end":{"row":41,"column":45},"action":"remove","lines":["g"]}],[{"start":{"row":41,"column":44},"end":{"row":41,"column":45},"action":"insert","lines":["h"],"id":20},{"start":{"row":41,"column":45},"end":{"row":41,"column":46},"action":"insert","lines":["o"]},{"start":{"row":41,"column":46},"end":{"row":41,"column":47},"action":"insert","lines":["b"]},{"start":{"row":41,"column":47},"end":{"row":41,"column":48},"action":"insert","lines":["b"]},{"start":{"row":41,"column":48},"end":{"row":41,"column":49},"action":"insert","lines":["y"]}],[{"start":{"row":42,"column":61},"end":{"row":42,"column":62},"action":"remove","lines":["r"],"id":21},{"start":{"row":42,"column":60},"end":{"row":42,"column":61},"action":"remove","lines":["e"]},{"start":{"row":42,"column":59},"end":{"row":42,"column":60},"action":"remove","lines":["d"]},{"start":{"row":42,"column":58},"end":{"row":42,"column":59},"action":"remove","lines":["n"]},{"start":{"row":42,"column":57},"end":{"row":42,"column":58},"action":"remove","lines":["e"]},{"start":{"row":42,"column":56},"end":{"row":42,"column":57},"action":"remove","lines":["g"]}],[{"start":{"row":42,"column":56},"end":{"row":42,"column":57},"action":"insert","lines":["h"],"id":22},{"start":{"row":42,"column":57},"end":{"row":42,"column":58},"action":"insert","lines":["o"]},{"start":{"row":42,"column":58},"end":{"row":42,"column":59},"action":"insert","lines":["b"]},{"start":{"row":42,"column":59},"end":{"row":42,"column":60},"action":"insert","lines":["b"]},{"start":{"row":42,"column":60},"end":{"row":42,"column":61},"action":"insert","lines":["y"]}],[{"start":{"row":45,"column":59},"end":{"row":45,"column":60},"action":"remove","lines":["y"],"id":23},{"start":{"row":45,"column":58},"end":{"row":45,"column":59},"action":"remove","lines":["d"]},{"start":{"row":45,"column":57},"end":{"row":45,"column":58},"action":"remove","lines":["o"]},{"start":{"row":45,"column":56},"end":{"row":45,"column":57},"action":"remove","lines":["b"]}],[{"start":{"row":45,"column":56},"end":{"row":45,"column":68},"action":"insert","lines":["introduction"],"id":24}],[{"start":{"row":44,"column":47},"end":{"row":44,"column":48},"action":"remove","lines":["y"],"id":25},{"start":{"row":44,"column":46},"end":{"row":44,"column":47},"action":"remove","lines":["d"]},{"start":{"row":44,"column":45},"end":{"row":44,"column":46},"action":"remove","lines":["o"]},{"start":{"row":44,"column":44},"end":{"row":44,"column":45},"action":"remove","lines":["b"]}],[{"start":{"row":44,"column":44},"end":{"row":44,"column":56},"action":"insert","lines":["introduction"],"id":26}],[{"start":{"row":17,"column":68},"end":{"row":17,"column":69},"action":"remove","lines":["e"],"id":27},{"start":{"row":17,"column":67},"end":{"row":17,"column":68},"action":"remove","lines":["l"]},{"start":{"row":17,"column":66},"end":{"row":17,"column":67},"action":"remove","lines":["t"]},{"start":{"row":17,"column":65},"end":{"row":17,"column":66},"action":"remove","lines":["i"]},{"start":{"row":17,"column":64},"end":{"row":17,"column":65},"action":"remove","lines":["t"]}],[{"start":{"row":17,"column":64},"end":{"row":17,"column":65},"action":"insert","lines":["n"],"id":28},{"start":{"row":17,"column":65},"end":{"row":17,"column":66},"action":"insert","lines":["a"]},{"start":{"row":17,"column":66},"end":{"row":17,"column":67},"action":"insert","lines":["m"]},{"start":{"row":17,"column":67},"end":{"row":17,"column":68},"action":"insert","lines":["e"]}],[{"start":{"row":22,"column":79},"end":{"row":22,"column":80},"action":"remove","lines":["y"],"id":29},{"start":{"row":22,"column":78},"end":{"row":22,"column":79},"action":"remove","lines":["d"]},{"start":{"row":22,"column":77},"end":{"row":22,"column":78},"action":"remove","lines":["o"]},{"start":{"row":22,"column":76},"end":{"row":22,"column":77},"action":"remove","lines":["b"]}],[{"start":{"row":22,"column":76},"end":{"row":22,"column":88},"action":"insert","lines":["introduction"],"id":30}]]},"timestamp":1646049124178}