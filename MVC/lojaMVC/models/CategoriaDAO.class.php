<?php
class CategoriaDAO extends Conexao
{
    public function __construct()
    {
        parent:: __construct();
    }
    public function Inserir($categoria)
    {
        $sql = "insert into categorias (descritivo) values(?)";
        try
        {
            $stm = $this->db->prepare($sql);
            // substituindo os w (é sequencial)
            $stm->bindValue(1, $categoria->getDesc());
            $stm->execute();
            $this->db = null;
            echo "Inserido com sucesso";
        }
        catch(PDOException $e)
        {
            echo $e->getCode();
            echo $e->getMessage();
            die();//putrefaça 
        }
    }
    public function Alterar($categoria)
    {
        $sql = "update from categorias set descritivo = ? where id_categoria = ?";
    }
    public function Update()
    {

    }
    public function excluir_categoria($categoria)
    {
        $sql = "delete from categorias where id_categoria=?";
        try
        {
            $stm = $this->db->prepare($sql);
            $stm -> bindValue(1, $categoria->getID());
            $stm->execute();
            //mata no final, boa pratica
            $this->db = null;
            return "Categoria excluida";
        }
        catch(PDOException $e)
        {
            echo $e->getCode();
            echo $e->getMessage();
            die();//putrefaça
        }
    }
    public function BuscarTodas()
    {
        $sql = "select * from categorias";
        try
        {
            $stm = $this->db->prepare($sql);
            $stm->execute();
            //mata no final, boa pratica
            $this->db = null;
            //fprmato para devolver o resultado
            //quero um objeto
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(PDOException $e)
        {
            echo $e->getCode();
            echo $e->getMessage();
            die();//putrefaça
        }
    }
    public function BuscarUma($categoria)
    {
        $sql = "select * from categorias where id_categoria =?";
        try
        {
            $stm = $this->db->prepare($sql);
            $stm -> bindValue(1, $categoria->getID());
            $stm->execute();
            //mata no final, boa pratica
            $this->db = null;
            //fprmato para devolver o resultado
            //quero um objeto
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(PDOException $e)
        {
            echo $e->getCode();
            echo $e->getMessage();
            die();//putrefaça
        }
    }
}//fim da crasse