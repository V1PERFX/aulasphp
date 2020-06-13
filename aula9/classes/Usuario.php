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

    //login
    public function login($email, $senha){
        $sql = $this->pdo->prepare("SELECT * FROM usuarios WHERE email=:e AND senha=:s");
        $sql->bindValue(":e", $email);
        $sql->bindValue(":s", $senha);
        $sql->execute();

        if($sql->rowCount() > 0){
            $registro = $sql->fetch(PDO::FETCH_ASSOC);

            $_SESSION["id"] = $registro["id"];
            $_SESSION["nome"] = $registro["nome"];
            $_SESSION["email"] = $registro["email"];

            return true;
        }else{
            return false;
        }
    }

    //excluir
    public function excluirUsuario($id){
        $sql = $this->pdo->prepare("DELETE FROM usuarios WHERE id=:id");
        $sql->bindValue(":id", $id);
        $sql->execute();
    }

    //buscar por nome
    public function buscarUsuario($nome){
        $sql = $this->pdo->prepare("SELECT * FROM usuarios WHERE nome=:n");
        $sql->bindValue(":n", $nome);
        $sql->execute();

        //exibir o vetor de registro da tabela
        if($sql->rowCount() > 0){
            $registro = $sql->fetch(PDO::FETCH_ASSOC);
        return $registro;
        }else{
            return 0;
        }
    }

    //buscar like
    public function buscarUsuario2($nome){
        $n = "%$nome%";
        $sql = $this->pdo->prepare("SELECT * FROM usuarios WHERE nome LIKE :n");
        $sql->bindValue(":n", $n);
        $sql->execute();

        //exibir o vetor de registro da tabela
        
        $registro = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $registro;
    }

    //buscar por id
    public function buscarUsuarioId($id){
        $sql = $this->pdo->prepare("SELECT * FROM usuarios WHERE id=:id");
        $sql->bindValue(":id", $id);
        $sql->execute();

        //exibir o vetor de registro da tabela
        $registro = $sql->fetch(PDO::FETCH_ASSOC);
        return $registro;
    }

    //atualizar
    public function atualizarUsuario($id, $nome, $email, $senha){
        $sql = $this->pdo->prepare("UPDATE usuarios SET nome=:n, email=:e, senha=:s WHERE id=:id");
        $sql->bindValue(":id", $id);
        $sql->bindValue(":n", $nome);
        $sql->bindValue(":e", $email);
        $sql->bindValue(":s", $senha);
        $sql->execute();
    }
}
?>