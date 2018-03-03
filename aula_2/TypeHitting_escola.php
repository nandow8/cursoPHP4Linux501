<?php 

class Aluno
{
	private $nome;
	private $email;

	public function __construct(string $nome,string $email){
		$this->nome = $nome;
		$this->email = $email;
	}

	public function getNome()
	{
	    return $this->nome;
	}
	
	public function setNome($nome)
	{
	    return $this->nome = $nome;
	}

	public function getEmail()
	{
	    return $this->email;
	}
	
	public function setEmail($email)
	{
	    return $this->email = $email;
	}
}

class Turma
{
	private $curso;
	private $periodo;

	public function __construct(string $curso,string $periodo){
		$this->curso = $curso;
		$this->periodo = $periodo;
	}

	public function getCurso()
	{
	    return $this->curso;
	}
	
	public function setCurso($curso)
	{
	    return $this->curso = $curso;
	}

	public function getPeriodo()
	{
	    return $this->periodo;
	}
	
	public function setPeriodo($periodo)
	{
	    return $this->periodo = $periodo;
	}

}

class Matricula
{
	private $aluno;
	private $turma; 

	public function __construct(Aluno $aluno, Turma $turma){
		$this->aluno = $aluno;
		$this->turma = $turma;
	}

	public function getAluno()
	{
	    return $this->aluno;
	}
	
	public function setAluno(Aluno $aluno)
	{
	    return $this->aluno = $aluno;
	}

	public function getTurma()
	{
	    return $this->turma;
	}
	
	public function setTurma(Turma $turma)
	{
	    return $this->turma = $turma;
	}
}

$aluno = new Aluno("Fernando", "f@mail.com");
$turma = new Turma("501", "All day");


$matricula = new Matricula($aluno, $turma);

echo $matricula->getAluno()->getNome();

echo "<br><pre>";
print_r($matricula->getAluno());