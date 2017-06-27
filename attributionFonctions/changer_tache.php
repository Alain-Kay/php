<!doctype>
<html>
	<head>
		<title>Modifier tahe</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<?php include_once('head.php'); ?>
		
		<div>
			<form method="post" action="__changer_tache.php">
			<h2>Modification de tache</h2>
				<?php
					echo '<input type="hidden" name="id" value="'.$_GET['id'].'" />';
				?>
				<br/>
				<label for="description">Description :</label>
				<input type="text" name="description" id="description" /><br />
				<label for="datedebut">Date d�but :</label>
				<input type="date" name="datedebut" id="datedebut" /><br />
				<label for="datefin">Date fin :</label>
				<input type="date" name="datefin" id="datefin" /><br />
				<label for="idagent">Agent :</label>
				<select name="idagent" id="idagent">
				
				<?php 
					require_once('agent.class.php');
					require_once('agent.dao.php');
					
					$adao = new AgentDAO();
					$la = $adao->getAllAgent();
					
					foreach($la as $a) {
						echo '
							<option value="'.$a->getId().'">'.$a->getNom().'</option>
						';
					}
				
				?>
				
				</select><br />
				<input type="submit" value="Changer" />
			</form>
		</div>
		
		<?php include_once('foot.php'); ?>
	</body>
</html>