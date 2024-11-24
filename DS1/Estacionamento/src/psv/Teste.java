package psv;

import java.sql.Connection;
import java.util.List;

public class Teste {
    public static void main(String[] args) {
        Connection con = Conexao.abrirConexao();
        CarroDAO dao = new CarroDAO(con);

        CarroBean carro = new CarroBean();
        carro.setPlaca("ABC1234");
        carro.setCor("Vermelho");
        carro.setDescricao("Carro esportivo");

        // Inserir
        System.out.println(dao.inserir(carro));

        // Alterar
        carro.setCor("Azul");
        System.out.println(dao.alterar(carro));

        // Listar todos
        List<CarroBean> lista = dao.listarTodos();
        for (CarroBean c : lista) {
            System.out.println("Placa: " + c.getPlaca() + ", Cor: " + c.getCor() + ", Descrição: " + c.getDescricao());
        }

        Conexao.fecharConexao(con);
    }
}
