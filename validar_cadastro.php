<?php
						if($senha != $csenha){
							echo "<p>Senhas não combinam, por favor, tente novamente.</p>";
							echo "<button type='submit' class='btn btn-warning' onClick='history.go(-1)'>Voltar</button>";
						}
					?>