    $(window).on('load',function(){
        console.log('loadイベントが発生しました');
       });
    $(window).on({
        'scroll': () => {
        console.log('イベントが発生しました');
    }
    });