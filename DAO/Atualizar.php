<?php
    namespace POO\ProjetoBDPHP\DAO;

    require_once('Conexao.php');

    use POO\ProjetoBDPHP\DAO\Conexao;

    class Atualizar{
        public function Atuali(Conexao $conexao, string $nomeTabela, int $cpf, string $campo, string $valor){
            try{
                $conn = $conexao->Conectar();
                $sql  = "update $nomeTabela set $campo = '$valor' where cpf = '$cpf'";
                $result = mysqli_query($conn, $sql);

                if($result){
                    echo "<br><br> Atualizado com sucesso!";
                }else{
                    echo "<br><br> Não atualizado!";
                }

                mysqli_close($conn);
            }catch(Except $erro){
                echo $erro;
            }//fim do catch
        }//fim do método




    }//fim da classe
?>