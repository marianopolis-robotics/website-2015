$(document).ready(function(){
  characterCount = 0;
  paragraphContent = [];
  $('.contentText').each(function(index, elm){
    paragraphContent.push( $(elm).html() );
    $(elm).html("");
  });

  index = 0;
  incrementCharacters = function(){
    if(index >= $('.contentText').length ){
      incrementCharacters = function(){};
    }

    if(characterCount > paragraphContent[index].length){
      // getting rid of the appended "_"
      $('.contentText').eq(index).html( paragraphContent[index] );

      index += 1;
      characterCount = 0;
    }

    characterCount += Math.round( Math.random()*4 );
    $('.contentText').eq(index).html( paragraphContent[index].substr(0, characterCount) + "_" );
  }

  window.setInterval(incrementCharacters, 50);

  bars = $('.bar');
  usual_width = [
    [120, 140],
    [90, 130],
    [10, 60]
  ];
  window.setInterval(function(){
    bars.each(function(i){
        var randomnumber = Math.floor(Math.random() * (usual_width[i][1] - usual_width[i][0] + 1)) + usual_width[i][0];
        bonus = Math.random()*25.0;
        $(this).animate({"width": randomnumber + bonus}, "slow");
    });
  }, 600);

  inc = 0;
  window.setInterval(function(){
    inc -= 15;
    inc = inc % 210;
    $('.earth').animate({'background-position': inc+"px"}, 200, 'linear');
  }, 200);

  window.setInterval(function(){
    randomTime1 = Math.random()*200;
    randomTime2 = Math.random()*500;
    window.setTimeout(function(){
      $('.marianopolisLogo').css({opacity: 0.5});
    }, randomTime1);

    window.setTimeout(function(){
      $('.marianopolisLogo').css({opacity: 0.2});
    }, randomTime1+randomTime2);

  }, 850);

  leftInc = 0;
  pictures = ['DSC_6033.png', 'DSC_6563.png', 'DSC_6628.png'];
  current = 1;
  window.setInterval(function(){
    leftInc -= 10;
    bool =  (-leftInc + $('.panoramaContainer').width() - 15 - $('.panoramaContainer').width() >= $('.firstPanorama').width());

    if (bool){
      current = (current + 1)% pictures.length;
      secondSrc  = $('.secondPanorama').attr('src');
      $('.firstPanorama').attr('src', secondSrc);
      $('.secondPanorama').attr('src', '../Images/journal/'+pictures[current]);
      leftInc = $('.panoramaContainer').width();
      $('.panorama').css({left: 0}, 1);
    }else{
      $('.panorama').animate({left: leftInc+"px"}, 249, 'linear');
    }
  }, 250);
});



