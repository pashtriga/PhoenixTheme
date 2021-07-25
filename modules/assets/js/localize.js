(function($) {

    $(document).ready(function(){
        // Inspired by https://www.youtube.com/watch?v=PDd8shcLvHI
        if (vars.childCount == 0) {
            alert('We have NO CHILDREN on this page today!');
        } else {
            alert('We have %d CHILDREN on this page today!'.replace(/%d/g,vars.childCount) );
        }
    });

})(jQuery); // Fully reference jQuery after this point.