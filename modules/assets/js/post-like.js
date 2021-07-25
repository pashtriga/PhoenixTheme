
jQuery(document).ready(function($) {

    jQuery('.pp_like').click(function(e){
        e.preventDefault();
        var postid=jQuery(this).data('id');
        
        var data = {
            action: 'my_action',
            security : MyAjax.security,
            postid: postid
        };
        jQuery.post(MyAjax.ajaxurl, data, function(res) {
            var result=jQuery.parseJSON(res);
            // console.log(result);
            var likes="";
            likes=result.likecount;

            if(likes === 1){
                jQuery('#like-number').text(likes + ' like');
                jQuery('.post_like span').text(likes + ' like');
                console.log(jQuery('.likes-count > :not(".fa-thumbs-up")'));
            } else {
                jQuery('#like-number').text(likes + ' likes');
                jQuery('.post_like span').text(likes + ' likes');    
            }

            if(result.like == 1){
                jQuery('.pp_like').addClass('liked');
                jQuery('#thumb').removeClass('fa fa-thumbs-up');
                jQuery('#thumb').addClass('fa fa-thumbs-down');
            }

            if(result.dislike == 1){
                jQuery('.pp_like').removeClass('liked');
                jQuery('#thumb').removeClass('fa fa-thumbs-down');
                jQuery('#thumb').addClass('fa fa-thumbs-up');
            } 
            jQuery('.pp_like').show();
        });
    });
});