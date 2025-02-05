$(document).ready(function() {


    var userFeed = new Instafeed({
        get: 'user',
        userId: '871037485',
        limit: 12,
        resolution: 'standard_resolution',
        accessToken: '871037485.1677ed0.bdda68d6361748c6a1480d15eb8c4242',
        sortBy: 'most-recent',
        template: '<div class="col-lg-3 instaimg"><a href="{{image}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-responsive"/></a></div>',
    });


    userFeed.run();

    
    // This will create a single gallery from all elements that have class "gallery-item"
    $('.gallery').magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });


});