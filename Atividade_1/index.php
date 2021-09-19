<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>ATIVIDADE 1 - Sistemas para Internet - PROGRAMAÇÃO BACK END II - 53/2021</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
	</head>
	<body>
		<?php 
			require_once 'Model/Aluno.php';
			require_once 'Model/Turma.php';
			
			$turma = new Turma(' A-150');
			

			$aluno1 = new Aluno("Rafael A. Florindo", 19193471,8.5,9.2,4.3,9.5);
			$aluno2 = new Aluno("José de Abreu Silva", 19193472,8.5,9.5,10,9.5);
			$aluno3 = new Aluno("Romulo Arantes", 19193473,5.5,9.2,10,9.5);
			$aluno4 = new Aluno("Rita de Lemon", 19193474,8.5,9.5,2,9.5);
			$aluno5 = new Aluno("Josef Albert", 19193476,8.5,3.5,10,9.5);
			$aluno6 = new Aluno("Fabrício de Medeiros", 19193475,6.5,10,8.5,9.5);	
			

			$turma->isBoolean($aluno1);
			$turma->isBoolean($aluno2);
			$turma->isBoolean($aluno3);
			$turma->isBoolean($aluno4);
			$turma->isBoolean($aluno5);
			$turma->isBoolean($aluno6);
		?>
		
		<p class="destaque">Controle de Notas de Turma</p>
		<p class="destaque">Notas dos alunos da Turma<?php echo $turma->getNomeTurma();?></p>
		<p id="media">>><?php echo "Media Turma: ".$turma->mediaTurma();?></p>


		<p class="aluno">>><?php echo $aluno1->getNome();?></p>
		<table class="turma">
			<tr>
				<td class="notas">Nota1</td>
				<td class="notas">Nota2</td>
				<td class="notas">Nota3</td>
				<td class="notas">Nota4</td>
				<td class="notas">Media</td>
			</tr>
			<tr>
				<td><?php echo $aluno1->getNota1(); ?></td>
				<td><?php echo $aluno1->getNota2(); ?></td>
				<td><?php echo $aluno1->getNota3(); ?></td>
				<td><?php echo $aluno1->getNota4(); ?></td>
				<td><?php echo $aluno1->getMediaAluno();?></td>
			</tr>
		</table>

		<p class="aluno">>><?php echo $aluno2->getNome();?></p>
		<table class="turma">
			<tr>
				<td class="notas">Nota1</td>
				<td class="notas">Nota2</td>
				<td class="notas">Nota3</td>
				<td class="notas">Nota4</td>
				<td class="notas">Media</td>
			</tr>
			<tr>
				<td><?php echo $aluno2->getNota1(); ?></td>
				<td><?php echo $aluno2->getNota2(); ?></td>
				<td><?php echo $aluno2->getNota3(); ?></td>
				<td><?php echo $aluno2->getNota4(); ?></td>
				<td><?php echo $aluno2->getMediaAluno(); ?></td>
			</tr>	
		</table>
		
		<p class="aluno">>><?php echo $aluno3->getNome();?></p>
		<table class="turma">
			<tr>
				<td class="notas">Nota1</td>
				<td class="notas">Nota2</td>
				<td class="notas">Nota3</td>
				<td class="notas">Nota4</td>
				<td class="notas">Media</td>
			</tr>
			<tr>
				<td><?php echo $aluno3->getNota1(); ?></td>
				<td><?php echo $aluno3->getNota2(); ?></td>
				<td><?php echo $aluno3->getNota3(); ?></td>
				<td><?php echo $aluno3->getNota4(); ?></td>
				<td><?php echo $aluno3->getMediaAluno(); ?></td>
			</tr>
		</table>

		<p class="aluno">>><?php echo $aluno4->getNome();?></p>
		<table class="turma">
			<tr>
				<td class="notas">Nota1</td>
				<td class="notas">Nota2</td>
				<td class="notas">Nota3</td>
				<td class="notas">Nota4</td>
				<td class="notas">Media</td>
			</tr>
			<tr>
				<td><?php echo $aluno4->getNota1(); ?></td>
				<td><?php echo $aluno4->getNota2(); ?></td>
				<td><?php echo $aluno4->getNota3(); ?></td>
				<td><?php echo $aluno4->getNota4(); ?></td>
				<td><?php echo $aluno4->getMediaAluno(); ?></td>
			</tr>
		</table>

		<p class="aluno">>><?php echo $aluno5->getNome();?></p>
		<table class="turma">
			<tr>
				<td class="notas">Nota1</td>
				<td class="notas">Nota2</td>
				<td class="notas">Nota3</td>
				<td class="notas">Nota4</td>
				<td class="notas">Media</td>
			</tr>
			<tr>
				<td><?php echo $aluno5->getNota1(); ?></td>
				<td><?php echo $aluno5->getNota2(); ?></td>
				<td><?php echo $aluno5->getNota3(); ?></td>
				<td><?php echo $aluno5->getNota4(); ?></td>
				<td><?php echo $aluno5->getMediaAluno(); ?></td>
			</tr>	
		</table>
		
		<p>Desenvolvido por &#174; Fabrício de Medeiros Ra:1919347-5</p>
	</body>
</html>