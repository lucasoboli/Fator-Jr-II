<footer>

	<!-- FOOTER -->
	<div class="footer_container">
		<a href="https://www.facebook.com/FatorJr/" target="_blank">
			<div class="footer_container_botao footer_container_botao_facebook">
				<i class="fa fa-facebook" id="footer_logo" aria-hidden="true"></i>
			</div>
		</a>
		<a href="https://pt.linkedin.com/company/fatorjr" target="_blank">
			<div class="footer_container_botao footer_container_botao_linkedin">
				<i class="fa fa-linkedin" id="footer_logo" aria-hidden="true"></i>
			</div>
		</a>
	</div>
	<div class="footer_texto">
		<p class="footer_texto1">@FatorJr</p>
		<p class="footer_texto2">copyright © 2017 Fator Júnior</p>
		<p class="footer_texto2">desenvolvido por byron.solutions</p>
	</div>
	<!-- END FOOTER -->

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


	<?php
	if(is_page('home')): ?>
	<script type="text/javascript">



		if($(window).width() < 600){
			$("html").removeClass("ajust_html");
			$("#bloginfo_name").css({
				"font-size":"4.5em",
				"transform":"translate(5%, -50%)"});

			var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = document.getElementById("navbar").offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
	if (window.scrollY >= (sticky-5)) {
		document.getElementById("navbar").classList.add("stick");
	} else {
		document.getElementById("navbar").classList.remove("stick");
	}
}
}
else if($(window).width() < 990 && $(window).width() > 600){
	$(".navbar-toggler").css("margin-left","27.3em");
	$(".text h4").css({
		"font-size":"1.2em",
		"font-weight":"bold"});
	
	var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = document.getElementById("navbar").offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
	if (window.scrollY >= (sticky-5)) {
		document.getElementById("navbar").classList.add("stick");
	} else {
		document.getElementById("navbar").classList.remove("stick");
	}
}
}
else{
	var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = document.getElementById("navbar").offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
	if (window.scrollY >= (sticky-260)) {
		document.getElementById("navbar").classList.add("stick");
	} else {
		document.getElementById("navbar").classList.remove("stick");
	}
}
$("html").addClass("ajust_html");
}

$("#image1").click(function(){
	window.location="http://vps1222.cloudpublic.com.br/#Contato";
});
$("#image2").click(function(){
	window.location="http://vps1222.cloudpublic.com.br/#Contato";
});
$("#image3").click(function(){
	window.location="http://vps1222.cloudpublic.com.br/#Contato";
});
$("#image4").click(function(){
	window.location="http://vps1222.cloudpublic.com.br/#Contato";
});
$("#image5").click(function(){
	window.location="http://vps1222.cloudpublic.com.br/#Contato";
});
$("#image6").click(function(){
	window.location="http://vps1222.cloudpublic.com.br/#Contato";
});

$("#port_button").click(function(){
	window.location="https://fatorjunior.com.br/wp-content/uploads/2017/10/Folder-Fator.pdf";
});

$('.navbar-collapse a').click(function(){
	$(".navbar-collapse").collapse('hide');
});

</script>

<?php else: ?>
	<script type="text/javascript">

		if($(window).width() < 600){
			$("html").addClass("ajust_html_mobile");
			$("h2").css("font-size","1.2em");
		}else if($(window).width() < 990 && $(window).width() > 600){
			$(".navbar-toggler").css("margin-left","27.3em");
			$("html").css("margin-top","10%");
		}
		else{
			$("html").removeClass("ajust_html_mobile");
		}
		$("#sidebar").addClass("stick_sidebar");
		$("#navbar").addClass("fixed-top");
		$("#navbar").removeClass("stick");

	</script>
<?php endif; ?>
</footer>

<?php wp_footer(); ?>
</body>
</html>