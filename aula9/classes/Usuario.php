<?php
class Usuario {
    //atributos
    private PDO $pdo;

    //contrustor
    public function __construct($servidor, $usuario, $senha) {
        try{
            $this->pdo = new PDO($servidor, $usuario, $senha);
        }catch(PDOException $e) {
            echo "Erro de conexão com o banco" . $e->getMessage();
        }
    }

    //métodos
    public function listarUsuarios(){
        $resultado = array(); //retorna um array vazio
        $sql = $this->pdo->query("SELECT * FROM usuarios ORDER BY nome");
        $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }

    public function cadastroUsuario($nome, $email, $senha){
        $sql = $this->pdo->prepare("INSERT INTO usuarios(nome, email, senha)
            VALUES(:nome, :email, :senha)");
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":senha", $senha);
        $sql->execute();
    }
}
?>