{"filter":false,"title":"17_01.js","tooltip":"/.c9/workspaceStorage/情報を適宣/javasprict/jquery/17_01.js","ace":{"folds":[],"scrolltop":47.20000076293945,"scrollleft":0,"selection":{"start":{"row":23,"column":35},"end":{"row":23,"column":35},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":3,"state":"start","mode":"ace/mode/javascript"}},"hash":"b733a95e3fa78c4af70f37f3f0a424736f81aece","mime":"application/javascript","undoManager":{"mark":16,"position":16,"stack":[[{"start":{"row":0,"column":0},"end":{"row":28,"column":3},"action":"insert","lines":["const apiKey = 'DEMO_KEY';","","$(function () {","  $('#update').click(function (event) {","    let param = {","      date: $('#image-date').val(),","      api_key: apiKey","    };","    console.log(param);","    // AjaxによりWeb APIを呼び出す処理","    $.ajax({","      type: 'GET',                                    // GETで送信","      data: param,                                    // リクエストパラメーター","      url: 'https://api.nasa.gov/planetary/apod',     // URL","      dataType: 'json',                              // データ型 JSON","    })","    .done(function (res) {","      // 成功した場合","      console.log(res.core);        // レスポンスフィールドの内容","      $('#apod-image').attr('src', res.url);","      $('#apod-title').html(res.title);","      $('#apod-desc').html(res.explanation);","    })","    .fail(function (res) {","      // 失敗した場合","      $('#apod').html('対象外の日付を入力したか通信エラーです<br>ブラウザをリロードしてください');","    });","  });","});"],"id":1}],[{"start":{"row":21,"column":44},"end":{"row":22,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":22,"column":0},"end":{"row":22,"column":6},"action":"insert","lines":["      "]}],[{"start":{"row":22,"column":6},"end":{"row":23,"column":0},"action":"insert","lines":["      $('#apod-desc').html(res.explanation);",""],"id":3}],[{"start":{"row":23,"column":0},"end":{"row":24,"column":0},"action":"insert","lines":["      $('#apod-desc').html(res.explanation);",""],"id":4}],[{"start":{"row":22,"column":10},"end":{"row":22,"column":12},"action":"remove","lines":["  "],"id":5},{"start":{"row":22,"column":8},"end":{"row":22,"column":10},"action":"remove","lines":["  "]},{"start":{"row":22,"column":6},"end":{"row":22,"column":8},"action":"remove","lines":["  "]}],[{"start":{"row":22,"column":18},"end":{"row":22,"column":19},"action":"remove","lines":["c"],"id":6},{"start":{"row":22,"column":17},"end":{"row":22,"column":18},"action":"remove","lines":["s"]},{"start":{"row":22,"column":16},"end":{"row":22,"column":17},"action":"remove","lines":["e"]},{"start":{"row":22,"column":15},"end":{"row":22,"column":16},"action":"remove","lines":["d"]}],[{"start":{"row":22,"column":15},"end":{"row":22,"column":24},"action":"insert","lines":["copyright"],"id":7}],[{"start":{"row":23,"column":18},"end":{"row":23,"column":19},"action":"remove","lines":["c"],"id":8},{"start":{"row":23,"column":17},"end":{"row":23,"column":18},"action":"remove","lines":["s"]},{"start":{"row":23,"column":16},"end":{"row":23,"column":17},"action":"remove","lines":["e"]}],[{"start":{"row":23,"column":16},"end":{"row":23,"column":17},"action":"insert","lines":["a"],"id":9},{"start":{"row":23,"column":17},"end":{"row":23,"column":18},"action":"insert","lines":["t"]},{"start":{"row":23,"column":18},"end":{"row":23,"column":19},"action":"insert","lines":["e"]}],[{"start":{"row":22,"column":46},"end":{"row":22,"column":47},"action":"remove","lines":["n"],"id":10},{"start":{"row":22,"column":45},"end":{"row":22,"column":46},"action":"remove","lines":["o"]},{"start":{"row":22,"column":44},"end":{"row":22,"column":45},"action":"remove","lines":["i"]},{"start":{"row":22,"column":43},"end":{"row":22,"column":44},"action":"remove","lines":["t"]},{"start":{"row":22,"column":42},"end":{"row":22,"column":43},"action":"remove","lines":["a"]},{"start":{"row":22,"column":41},"end":{"row":22,"column":42},"action":"remove","lines":["n"]},{"start":{"row":22,"column":40},"end":{"row":22,"column":41},"action":"remove","lines":["a"]},{"start":{"row":22,"column":39},"end":{"row":22,"column":40},"action":"remove","lines":["l"]},{"start":{"row":22,"column":38},"end":{"row":22,"column":39},"action":"remove","lines":["p"]},{"start":{"row":22,"column":37},"end":{"row":22,"column":38},"action":"remove","lines":["x"]},{"start":{"row":22,"column":36},"end":{"row":22,"column":37},"action":"remove","lines":["e"]}],[{"start":{"row":22,"column":36},"end":{"row":22,"column":37},"action":"insert","lines":["c"],"id":11},{"start":{"row":22,"column":37},"end":{"row":22,"column":38},"action":"insert","lines":["o"]}],[{"start":{"row":22,"column":38},"end":{"row":22,"column":39},"action":"insert","lines":["p"],"id":12}],[{"start":{"row":22,"column":39},"end":{"row":22,"column":40},"action":"insert","lines":["y"],"id":13},{"start":{"row":22,"column":40},"end":{"row":22,"column":41},"action":"insert","lines":["r"]}],[{"start":{"row":22,"column":41},"end":{"row":22,"column":42},"action":"insert","lines":["i"],"id":14},{"start":{"row":22,"column":42},"end":{"row":22,"column":43},"action":"insert","lines":["g"]}],[{"start":{"row":22,"column":43},"end":{"row":22,"column":44},"action":"insert","lines":["h"],"id":15},{"start":{"row":22,"column":44},"end":{"row":22,"column":45},"action":"insert","lines":["t"]}],[{"start":{"row":23,"column":41},"end":{"row":23,"column":42},"action":"remove","lines":["n"],"id":16},{"start":{"row":23,"column":40},"end":{"row":23,"column":41},"action":"remove","lines":["o"]},{"start":{"row":23,"column":39},"end":{"row":23,"column":40},"action":"remove","lines":["i"]},{"start":{"row":23,"column":38},"end":{"row":23,"column":39},"action":"remove","lines":["t"]},{"start":{"row":23,"column":37},"end":{"row":23,"column":38},"action":"remove","lines":["a"]},{"start":{"row":23,"column":36},"end":{"row":23,"column":37},"action":"remove","lines":["n"]},{"start":{"row":23,"column":35},"end":{"row":23,"column":36},"action":"remove","lines":["a"]},{"start":{"row":23,"column":34},"end":{"row":23,"column":35},"action":"remove","lines":["l"]},{"start":{"row":23,"column":33},"end":{"row":23,"column":34},"action":"remove","lines":["p"]},{"start":{"row":23,"column":32},"end":{"row":23,"column":33},"action":"remove","lines":["x"]},{"start":{"row":23,"column":31},"end":{"row":23,"column":32},"action":"remove","lines":["e"]}],[{"start":{"row":23,"column":31},"end":{"row":23,"column":32},"action":"insert","lines":["d"],"id":17},{"start":{"row":23,"column":32},"end":{"row":23,"column":33},"action":"insert","lines":["a"]},{"start":{"row":23,"column":33},"end":{"row":23,"column":34},"action":"insert","lines":["t"]},{"start":{"row":23,"column":34},"end":{"row":23,"column":35},"action":"insert","lines":["e"]}]]},"timestamp":1659418518799}