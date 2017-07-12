<?php  include 'header.tpl.php' ?>

<div class="page-container">
	<div class="sidebar-menu">
		<div class="sidebar-menu-inner">
			
		</div>
	</div>
</div>

<script type="text/javascript">
	if(document.createStyleSheet) {
	  document.createStyleSheet('http://servidor/tu_archivo.css');
	}
	else {
	  var styles = "http://servidor/tu_archivo.css";
	  var newSS=document.createElement('link');
	  newSS.rel='stylesheet';
	  newSS.type='text/css';
	  newSS.href= styles;
	  document.getElementsByTagName("head")[0].appendChild(newSS);
	}
</script>

<?php  include 'footer.tpl.php' ?>