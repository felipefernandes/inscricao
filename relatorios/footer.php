	<div class="hidden-print" style="background:#f5f5f5; position:fixed; bottom:0; padding:10px; width:100%;">
		<div class="container">
			<div class="date pull-left">
				<small>Resultados atualizados: <?php echo date("D M d, Y G:i a"); ?></small>
			</div>
			<?php if (isset($cursoID)): ?>
			<div class="pull-right">				
				<a href="export.php?c= <?php echo $cursoID; ?>" class="btn"><i class="icon-download-alt"></i> Download</a></div>
			</div>
			<?php endif; ?>
		</div>
	</div>


	<!-- javascripts -->	
	<script type="text/javascript" src="../js/bootstrap.js"></script>
	<script type="text/javascript" src="../js/jquery.placeholder.js"></script>	
</body>

</html>