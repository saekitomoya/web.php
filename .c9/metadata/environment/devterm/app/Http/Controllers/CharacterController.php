{"filter":false,"title":"CharacterController.php","tooltip":"/devterm/app/Http/Controllers/CharacterController.php","ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":13,"column":6},"end":{"row":13,"column":6},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"hash":"cf9cd6da962a1ac54632c1694d7be5d03ecd4f09","mime":"application/octet-stream","undoManager":{"mark":18,"position":18,"stack":[[{"start":{"row":8,"column":5},"end":{"row":8,"column":6},"action":"remove","lines":["/"],"id":2},{"start":{"row":8,"column":4},"end":{"row":8,"column":5},"action":"remove","lines":["/"]}],[{"start":{"row":8,"column":4},"end":{"row":21,"column":5},"action":"insert","lines":[" public function index(Request $request)","    {","        $posts = News::all()->sortByDesc('updated_at');","","        if (count($posts) > 0) {","            $headline = $posts->shift();","        } else {","            $headline = null;","        }","","        // news/index.blade.php ファイルを渡している","        // また View テンプレートに headline、 posts、という変数を渡している","        return view('news.index', ['headline' => $headline, 'posts' => $posts]);","    }"],"id":3}],[{"start":{"row":20,"column":24},"end":{"row":20,"column":25},"action":"remove","lines":["s"],"id":4},{"start":{"row":20,"column":23},"end":{"row":20,"column":24},"action":"remove","lines":["w"]},{"start":{"row":20,"column":22},"end":{"row":20,"column":23},"action":"remove","lines":["e"]},{"start":{"row":20,"column":21},"end":{"row":20,"column":22},"action":"remove","lines":["n"]}],[{"start":{"row":20,"column":21},"end":{"row":20,"column":22},"action":"insert","lines":["c"],"id":5},{"start":{"row":20,"column":22},"end":{"row":20,"column":23},"action":"insert","lines":["h"]},{"start":{"row":20,"column":23},"end":{"row":20,"column":24},"action":"insert","lines":["a"]},{"start":{"row":20,"column":24},"end":{"row":20,"column":25},"action":"insert","lines":["r"]},{"start":{"row":20,"column":25},"end":{"row":20,"column":26},"action":"insert","lines":["a"]}],[{"start":{"row":20,"column":21},"end":{"row":20,"column":26},"action":"remove","lines":["chara"],"id":6},{"start":{"row":20,"column":21},"end":{"row":20,"column":30},"action":"insert","lines":["character"]}],[{"start":{"row":10,"column":20},"end":{"row":10,"column":21},"action":"remove","lines":["s"],"id":7},{"start":{"row":10,"column":19},"end":{"row":10,"column":20},"action":"remove","lines":["w"]},{"start":{"row":10,"column":18},"end":{"row":10,"column":19},"action":"remove","lines":["e"]},{"start":{"row":10,"column":17},"end":{"row":10,"column":18},"action":"remove","lines":["N"]}],[{"start":{"row":10,"column":17},"end":{"row":10,"column":18},"action":"insert","lines":["C"],"id":8},{"start":{"row":10,"column":18},"end":{"row":10,"column":19},"action":"insert","lines":["h"]},{"start":{"row":10,"column":19},"end":{"row":10,"column":20},"action":"insert","lines":["a"]},{"start":{"row":10,"column":20},"end":{"row":10,"column":21},"action":"insert","lines":["r"]},{"start":{"row":10,"column":21},"end":{"row":10,"column":22},"action":"insert","lines":["a"]},{"start":{"row":10,"column":22},"end":{"row":10,"column":23},"action":"insert","lines":["c"]}],[{"start":{"row":10,"column":23},"end":{"row":10,"column":24},"action":"insert","lines":["t"],"id":9},{"start":{"row":10,"column":24},"end":{"row":10,"column":25},"action":"insert","lines":["e"]},{"start":{"row":10,"column":25},"end":{"row":10,"column":26},"action":"insert","lines":["r"]}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":1},"action":"insert","lines":["u"],"id":10},{"start":{"row":5,"column":1},"end":{"row":5,"column":2},"action":"insert","lines":["s"]},{"start":{"row":5,"column":2},"end":{"row":5,"column":3},"action":"insert","lines":["e"]}],[{"start":{"row":5,"column":3},"end":{"row":5,"column":4},"action":"insert","lines":[" "],"id":11}],[{"start":{"row":5,"column":4},"end":{"row":5,"column":5},"action":"insert","lines":["A"],"id":12},{"start":{"row":5,"column":5},"end":{"row":5,"column":6},"action":"insert","lines":["p"]},{"start":{"row":5,"column":6},"end":{"row":5,"column":7},"action":"insert","lines":["p"]},{"start":{"row":5,"column":7},"end":{"row":5,"column":8},"action":"insert","lines":["/"]}],[{"start":{"row":5,"column":8},"end":{"row":5,"column":9},"action":"insert","lines":["C"],"id":13},{"start":{"row":5,"column":9},"end":{"row":5,"column":10},"action":"insert","lines":["h"]},{"start":{"row":5,"column":10},"end":{"row":5,"column":11},"action":"insert","lines":["a"]}],[{"start":{"row":5,"column":11},"end":{"row":5,"column":12},"action":"insert","lines":["r"],"id":14},{"start":{"row":5,"column":12},"end":{"row":5,"column":13},"action":"insert","lines":["a"]},{"start":{"row":5,"column":13},"end":{"row":5,"column":14},"action":"insert","lines":["c"]},{"start":{"row":5,"column":14},"end":{"row":5,"column":15},"action":"insert","lines":["t"]},{"start":{"row":5,"column":15},"end":{"row":5,"column":16},"action":"insert","lines":["e"]},{"start":{"row":5,"column":16},"end":{"row":5,"column":17},"action":"insert","lines":["r"]}],[{"start":{"row":5,"column":17},"end":{"row":5,"column":18},"action":"insert","lines":[";"],"id":15}],[{"start":{"row":4,"column":28},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":16}],[{"start":{"row":6,"column":18},"end":{"row":7,"column":0},"action":"insert","lines":["",""],"id":17}],[{"start":{"row":6,"column":7},"end":{"row":6,"column":8},"action":"remove","lines":["/"],"id":18}],[{"start":{"row":6,"column":7},"end":{"row":6,"column":8},"action":"insert","lines":["\\"],"id":19}],[{"start":{"row":12,"column":60},"end":{"row":13,"column":0},"action":"remove","lines":["",""],"id":20}]]},"timestamp":1655218558242}