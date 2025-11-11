<?php 


class TrabalhoComInterfaces implements IAluno {
    public $aluno;
    public $curso;
    public $formacao;

    function __construct($aluno, $curso)
    {
        $this->aluno = $aluno;
        $this->curso = $curso;
        $this->formacao = array();
    }

    public function Matricular($curso)
    {
        $this->aluno = $curso;
        echo "{$this->aluno} foi a matriculado no curso {$this->curso}</br>";
    }

    public function Formar()
    {
        $this->formacao[] = $this->curso;
        echo "{$this->aluno} formou-se no curso de {$this->curso}</br>";
    }
}