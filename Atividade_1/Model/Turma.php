
<?php
	require_once 'Aluno.php';

	class Turma{
		public $nomeTurma;
		protected $alunos;
		public $media=0.0;


		public function __construct($nomeTurma){
			$this->nomeTurma = $nomeTurma;
			 $this->alunos = array();
		}
		
		public function isBoolean(Aluno $alunos){
		 	$tamanho = count($this->alunos);
		 	if($tamanho <5){
		 		$this->alunos[] = $alunos;
		 		echo "O aluno <b>" .$alunos->getNome()."</b> foi inserido com sucesso na turma.<br> ";
		 		return true;	
		 	}else{
		 		echo "<p style='color:red;'><br><b>Error!! Turma cheia.<b></p>";
		 		return false;
		 	}
		}

		public function mediaTurma():float{
			$soma = 0;
			 for($i=0; $i<count($this->alunos); $i++){
				$soma += $this->alunos[$i]->getMediaAluno();
			}
				return $soma/$i;
		}

		public function setNomeTurma($nomeTurma){
 			$this->nomeTurma = $nomeTurma;
 		}

 		public function getNomeTurma(){
	 		return $this->nomeTurma;
	 	}
	}
?>