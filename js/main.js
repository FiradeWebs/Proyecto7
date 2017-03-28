/**
 * jTinder initialization
 */


$("#tinderslide").jTinder({
	// dislike callback
    onDislike: function (item) {
    	var dec = "No";
    	$.ajax({
                    type: "GET",
                    url: "insert_interes.proc.php?dec=" + dec + "&cat_id=" + item,
                    success: function(data){
                    	//var id = $('#id').val();
                    	 //$('#status').html('Dislike image ' + (item));

                                
            }
        });
	    // set the status text
        },
	// like callback
    onLike: function (item) {
    	var dec = "Si";
    	$.ajax({
                    type: "GET",
                    url: "insert_interes.proc.php?dec=" + dec + "&cat_id=" + item,
                    
                    success: function(data){
                    	 //$('#status').html('Like image ' + (item));
                    	 

                                
            }
        });
	    // set the status text
	   
    },
	animationRevertSpeed: 200,
	animationSpeed: 400,
	threshold: 1,
	likeSelector: '.like',
	dislikeSelector: '.dislike'
});

/**
 * Set button action to trigger jTinder like & dislike.
 */
$('.actions .like, .actions .dislike').click(function(e){
	e.preventDefault();
	$("#tinderslide").jTinder($(this).attr('class'));
});