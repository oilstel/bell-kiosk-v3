$('#ring-the-bells').click(function(){

    $('.main-nav *').each(function(i){
        var row = $(this);
        setTimeout(function() {
          row.addClass('active');
          console.log(i);
          console.log(bells[i]);
          bells[i].play();
        }, 500*i);
        setTimeout(function() {
            row.removeClass('active');
        }, 500*i+500);
    });


});