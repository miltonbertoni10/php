<?php
include("conexao.php");

class crud extends Conexao
{
    private $crud;
    private $contador;

    private function preparedStatements($query, $parametros){
		$this->contaParametros($parametros);
		$this->crud = $this->conecta()->prepare($query);

		for ($i = 1; $i <= $this->contador ; $i++) {
			$this->crud->bindValue($i, $parametros[$i - 1]);
		}
		$this->crud->execute();
    }
    
    public function contaParametros($parametros){
        $this->contador = count($parametros);
    }

    public function select($campos,$tabela,$condicoes,$parametros){
      $this->preparedStatements("SELECT {$campos} from {$tabela} {$condicoes}", $parametros);
      return $this->crud;
    }

    public function insert($tabela,$condicoes,$parametros){
      $this->preparedStatements("INSERT INTO {$tabela} VALUES {$condicoes}", $parametros);
      return $this->crud;
    }
    

}
