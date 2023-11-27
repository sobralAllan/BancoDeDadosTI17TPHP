<?php
    namespace POO\ProjetoBDPHP\DAO;

    require_once('Conexao.php');

    use POO\ProjetoBDPHP\DAO\Conexao;

    class Excluir{
        public function Deletar(Conexao $conexao, string $nomeTabela, int $cpf){
            try{
                $conn   = $conexao->Conectar();
                $sql    = "delete from $nomeTabela where cpf = '$cpf'";
                $result = mysqli_query($conn, $sql);
                
                if($result){
                    echo "<br><br> Excluido com sucesso!";
                }else{
                    echo "<br><br> Não excluído!";
                }

                mysqli_close($conn);
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do método
    }//fim da classe
?>