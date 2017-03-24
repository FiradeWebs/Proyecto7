/**
 * jTinder initialization
 */
 var id = $('#id').val();

$("#tinderslide").jTinder({
	// dislike callback
    onDislike: function (item) {
    	var dec = "No";

    	$.ajax({
                    type: "POST",
                    url: "insert_interes.proc.php?dec=" + dec,
                    data: $("#cat_id").serialize(),// Adjuntar los campos del formulario enviado.
                    success: function(data){
                    	//var id = $('#id').val();
                    	 $('#status').html('Dislike image ' + (item.index()+1));

                                
            }
        });
	    // set the status text
        },
	// like callback
    onLike: function (item) {
    	var dec = "Si";
    	$.ajax({
                    type: "POST",
                    url: "insert_interes.proc.php?dec=" + dec,
                     // Adjuntar los campos del formulario enviado.
                    success: function(data){
                    	 $('#status').html('Like image ' + (item.index()+1));
                    	 

                                
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