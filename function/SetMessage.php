<?php

function SetMessage () {
	
		if(isset($_SESSION['erreur'])) {

			echo '
			
				<div class="col-md-12">
					<div class="col-md-12 alert alert-danger center">
						<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				';
					echo $_SESSION['erreur'];
			echo '
					</div>
				</div>
				';
				
			unset($_SESSION['erreur']);
		}

		if(isset($_SESSION['valide'])) {
			
			echo '
			
				<div class="col-md-12">
					<div class="col-md-12 alert alert-success center">
						<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
				';
		

				echo $_SESSION['valide'];

			echo '
					</div>
				</div>
				';
			unset($_SESSION['valide']);
		}
}	
?>