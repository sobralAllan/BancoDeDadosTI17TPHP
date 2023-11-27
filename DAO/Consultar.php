<?php
    namespace POO\ProjetoBDPHP\DAO;

    require_once('Conexao.php');

    use POO\ProjetoBDPHP\DAO\Conexao;

    class Consultar{
        public function ConsultarIndividual(Conexao $conexao, string $nomeTabela, int $cpf){
            try{
                $conn   = $conexao->Conectar();
                $sql    = "select * from $nomeTabela where cpf = '$cpf'";
                $result = mysqli_query($conn, $sql);
                
                while($dados = mysqli_fetch_Array($result)){
                    if($dados["cpf"] == $cpf){
                        echo "<br><br>CPF: ".$dados["cpf"]."<br>Nome: ".$dados["nome"].
                        "<br>Telefone: ".$dados["telefone"]."<br>Endereço: ".$dados["endereco"].
                        "<br>Email: ".$dados["email"];
                    }
                }

                mysqli_close($conn);
            }catch(Except $erro){
                echo $erro;
            }//fim do catch
        }//fim do método

        public function ConsultarTudo(Conexao $conexao, string $nomeTabela){
            try{
                $conn   = $conexao->Conectar();
                $sql    = "select * from $nomeTabela";
                $result = mysqli_query($conn,$sql);
                
                while($dados = mysqli_fetch_Array($result)){
                    echo "<br><br>CPF: ".$dados["cpf"]."<br>Nome: ".$dados["nome"].
                        "<br>Telefone: ".$dados["telefone"]."<br>Endereço: ".$dados["endereco"].
                        "<br>Email: ".$dados["email"];
                }//fim do enquanto

                mysqli_close($conn);
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do método






    }//fim do consultar
?>