<?php
require('header.php');
?>

<article id="main">
 <h1>Testimonials</h1>
<!--
<blockquote class="testi">
"Dr. Nazeef has been treating my whole family for the past 6 years and we are very satisfied. His skills and experience are well known and we are all very happy that we have a dentist who knows what he is doing but has no airs about himself. When we visited UK, my wife had a tooth accident but she adamantly refused to see anyone there and bore the pain until we came back to see Dr. Nazeef. Its just a matter of trust. I highly recommend him."
</blockquote>
<span class="tesi-namedates">
<cite>
skhan
</cite>
on 19-Mar-2011
</span>

<blockquote class="testi">
"A very competent dentist. Dr. Nazeef has been my dentist for the past 15 years and I absolutely trust his knowledge and skills. He helped me when my previous dentist had gotten me into so many complications with my fillings and extractions and then I went to him and he rectified all my problems. May God give him long life. I will recommend him to anyone who is in need of a competent and kind hearted dentist."
</blockquote>
<span class="tesi-namedates">
<cite>
mr_kyani
</cite>
on 05-Jan-2011
</span >
-->

<div id='ratingDiv'></div>

<div id="commentsDiv" ></div>
<script type='text/javascript'>
// Present the Rating plugin
	var ratingsParams =
    {
		categoryID: 'TestimonialsWiki', // Comments category ID (from Comments Setup page)
		streamID: 'ReviewsTest',
        containerID: 'ratingDiv', 
		linkedCommentsUI: 'commentsDiv' // link the Ratings plugin to the Comments plugin. 
									//The '# reviews' link becomes an anchor to the Comments plugin on the page. 
    }	
	gigya.comments.showRatingUI(ratingsParams);	
	
	// Present the Review(Comments) plugin
var params ={
	categoryID: 'TestimonialsWiki',
	streamID: 'ReviewsTest',
	containerID: 'commentsDiv',
	cid:'',
	enabledShareProviders: 'facebook,twitter,yahoo,linkedin'
}
gigya.comments.showCommentsUI(params);
</script>

</article>
<?php
require('footer.php');
?>