<html>
  <head>
  <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>GymSync</title>
  </head>
<body>
  <!--========== HEADER ==========-->
  <?php require_once "assets/nav/header.php";?>

<!--========== NAV ==========-->
<?php require_once "assets/nav/nav.php";?>

<!--========== CONTENTS ==========-->

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Nome: <input type="text" name="fname">
  <input type="submit" value="Fluxo de Caixa">
</form>

<?php

	require_once "conexao3.php";

	if ($_SERVER["REQUEST_METHOD"] == "POST")
        include './acoes/conexao3.php';
        $link = conectar();{

		public function insert($tipo_lancamento){
			
			$sql = "INSERT INTO tipo_lancamento ( desc_lancamento, data_cadastro, data_modificacao, ativo) VALUES ( :desc_lancamento, :data_cadastro, :data_modificacao, :ativo)";
			$stmt = $link->prepare($sql);

			$stmt->bindParam(':desc_lancamento', $tipo_lancamento->desc_tipo_lancamento);
			$stmt->bindParam(':data_cadastro', $tipo_lancamento->data_cadastro);
			$stmt->bindParam(':data_modificacao', $tipo_lancamento->data_cadastro);
			$stmt->bindParam(':ativo', $tipo_lancamento->ativo);

			return $stmt->execute();

		}

		public function update($tipo_lancamento){
			$sql = "UPDATE tipo_lancamento SET desc_lancamento = :desc_lancamento, data_modificacao = :data_modificacao, ativo = :ativo WHERE id_tipo_lancamento = :id_tipo_lancamento";
			$stmt = $link->prepare($sql);
			$stmt->bindParam(':id_tipo_lancamento', $tipo_lancamento->id_tipo_lancamento);
			$stmt->bindParam(':desc_tipo_lancamento', $tipo_lancamento->desc_tipo_lancamento);
			$stmt->bindParam(':data_modificacao', $tipo_lancamento->data_modificacao);
			$stmt->bindParam(':ativo', $tipo_lancamento->ativo);
			return $stmt->execute();

		}

		public function buscar($id_tipo_lancamento) {
			$sql = "SELECT * FROM tipo_lancamento WHERE id_tipo_lancamento = :id_tipo_lancamento";
			$stmt = $link->prepare($sql);
			$stmt->bindParam(':id_tipo_lancamento', $id_tipo_lancamento);
			$stmt->execute();
			return $stmt->fetch();
		}

		public function excluir($id_tipo_lancamento){
			$sql = "DELETE FROM tipo_lancamento WHERE id_tipo_lancamento = :id_tipo_lancamento";
			$stmt = $link->prepare($sql);
			$stmt->bindParam(':id_tipo_lancamento', $id_tipo_lancamento);
			return $stmt->execute();
		}
        

		
 } 	
 ?>

<?php

class TipoLancamento{
	public $id_tipo_lancamento;
    public $desc_tipo_lancamento;
    public $data_cadastro;
    public $data_modificacao;
    public $ativo;



    /*
     * @return mixed
     */
    public function getIdTipoLancamento()
    {
        return $this->id_tipo_lancamento;
    }

    /*
     * @param mixed $id_tipo_lancamento
     *
     * @return self
     */
    public function setIdTipoLancamento($id_tipo_lancamento)
    {
        $this->id_tipo_lancamento = $id_tipo_lancamento;

        return $this;
    }

    /*
     * @return mixed
     */
    public function getDescTipoLancamento()
    {
        return $this->desc_tipo_lancamento;
    }

    /*
     * @param mixed $desc_tipo_lancamento
     *
     * @return self
     */
    public function setDescTipoLancamento($desc_tipo_lancamento)
    {
        $this->desc_tipo_lancamento = $desc_tipo_lancamento;

        return $this;
    }

    /*
     * @return mixed
     */
    public function getDataCadastro()
    {
        return $this->data_cadastro;
    }

    /*
     * @param mixed $data_cadastro
     *
     * @return self
     */
    public function setDataCadastro($data_cadastro)
    {
        $this->data_cadastro = $data_cadastro;

        return $this;
    }

    /*
     * @return mixed
     */
    public function getDataModificacao()
    {
        return $this->data_modificacao;
    }

    /*
     * @param mixed $data_modificacao
     *
     * @return self
     */
    public function setDataModificacao($data_modificacao)
    {
        $this->data_modificacao = $data_modificacao;

        return $this;
    }

    /*
     * @return mixed
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    /*
     * @param mixed $ativo
     *
     * @return self
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;

        return $this;
    }
}
?>