
$(document).ready(function() {

     var widget = SC.Widget(document.getElementById('soundcloud_widget'));
     widget.bind(SC.Widget.Events.READY, function() {
       console.log('Ready...');
     });



// PAUSE PLAY

     widget.bind(SC.Widget.Events.PAUSE,
     function paused() {
        // your code / function call
        console.log("Paused");
        $('#play-pause-SCP').html("Paused");
        $('#play-pause-button').html('<i class="fa fa-play" aria-hidden="true"></i>');
       }
     );
     widget.bind(SC.Widget.Events.PLAY,
     function playing() {
         $('#play-pause-SCP').html("Playing");
         $('#play-pause-button').html('<i class="fa fa-pause" aria-hidden="true"></i>');
         widget.getCurrentSound(function scCurrentSound(sound) {
           // this also binds getCurrent sound which is called
           // each time a new sound is loaded
           console.log(sound);
           $('#track-plays').html(sound.playback_count);
           $('#SCP-art').attr('src',sound.artwork_url);
           $('.display-track-name').html(sound.title);
           $('.display-description').html(sound.description);
           $('#likes-count').html(sound.likes_count);
          });
       }
     );

     $('#play-pause-button').click(function(){
         widget.toggle();

     });


     // TITLE THAT FITS TRACK list

     $('#TTF-track-1').click(function(){
         console.log("Playing: All Aboard the Feels Train");
         widget.load("https%3A//api.soundcloud.com/tracks/344452084&amp;color=%23ff5500&amp;auto_play=true");
         widget.play();
         isPlaying = true;
     });
     $('#TTF-track-2').click(function(){
         console.log("Playing: Up The Wall");
         widget.load("https%3A//api.soundcloud.com/tracks/252206469&amp;color=%23ff5500&amp;auto_play=true");
         widget.play();
     });
     $('#TTF-track-3').click(function(){
         console.log("Playing: Title that Fits");
         widget.load("https%3A//api.soundcloud.com/tracks/196790170&amp;color=%23ff5500&amp;auto_play=true");
         widget.play();
     });

     // DARK EMOJI TRACK list

     $('#DE-track-1').click(function(){
         console.log("Playing: Every Cliché, Ever");
         widget.load("https%3A//api.soundcloud.com/tracks/116419724&amp;color=%23ff5500&amp;auto_play=true");
         widget.play();
     });
     $('#DE-track-2').click(function(){
         console.log("Playing: Runaways (Matthew Posh Remix Edit)");
         widget.load("https%3A//api.soundcloud.com/tracks/121263591&amp;color=%23ff5500&amp;auto_play=true");
         widget.play();
     });
     $('#DE-track-3').click(function(){
         console.log("Playing: Counting Down The Days (Matthew Posh Remix)");
         widget.load("https%3A//api.soundcloud.com/tracks/234054066&amp;color=%23ff5500&amp;auto_play=true");
         widget.play();
     });

     // LUNAR ECLIPSE TRACK list

     $('#LE-track-1').click(function(){
         console.log("Playing: Stories They Tell");
         widget.load("https%3A//api.soundcloud.com/tracks/62102863&amp;color=%23ff5500&amp;auto_play=true");
         widget.play();
     });
     $('#LE-track-2').click(function(){
         console.log("Playing: Circles");
         widget.load("https%3A//api.soundcloud.com/tracks/80109405&amp;color=%23ff5500&amp;auto_play=true");
         widget.play();
     });
     $('#LE-track-3').click(function(){
         console.log("Playing: Somebody I Could Be");
         widget.load("https%3A//api.soundcloud.com/tracks/180714338&amp;color=%23ff5500&amp;auto_play=true");
         widget.play();
     });
     $('#LE-track-4').click(function(){
         console.log("Playing: Sweetest Sin");
         widget.load("https%3A//api.soundcloud.com/tracks/173301402&amp;color=%23ff5500&amp;auto_play=true");
         widget.play();
     });

});







//
