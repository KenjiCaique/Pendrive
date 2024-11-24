package psv;

import java.sql.*;
import java.util.*;

public class CarroDAO {

    private Connection con;

    public CarroDAO(Connection con) {
        this.con = con;
    }

    public String inserir(CarroBean carro) {
        String sql = "INSERT INTO carro(placa, cor, descricao) VALUES (?, ?, ?)";
        try {
            PreparedStatement ps = con.prepareStatement(sql);
            ps.setString(1, carro.getPlaca());
            ps.setString(2, carro.getCor());
            ps.setString(3, carro.getDescricao());
            if (ps.executeUpdate() > 0) {
                return "Inserido com sucesso.";
            }
        } catch (SQLException e) {
            return e.getMessage();
        }
        return "Erro ao inserir.";
    }

    public String alterar(CarroBean carro) {
        String sql = "UPDATE carro SET cor = ?, descricao = ? WHERE placa = ?";
        try {
            PreparedStatement ps = con.prepareStatement(sql);
            ps.setString(1, carro.getCor());
            ps.setString(2, carro.getDescricao());
            ps.setString(3, carro.getPlaca());
            if (ps.executeUpdate() > 0) {
                return "Alterado com sucesso.";
            }
        } catch (SQLException e) {
            return e.getMessage();
        }
        return "Erro ao alterar.";
    }

    public String excluir(CarroBean carro) {
        String sql = "DELETE FROM carro WHERE placa = ?";
        try {
            PreparedStatement ps = con.prepareStatement(sql);
            ps.setString(1, carro.getPlaca());
            if (ps.executeUpdate() > 0) {
                return "Excluído com sucesso.";
            }
        } catch (SQLException e) {
            return e.getMessage();
        }
        return "Erro ao excluir.";
    }

    public List<CarroBean> listarTodos() {
        String sql = "SELECT * FROM carro";
        List<CarroBean> lista = new ArrayList<>();
        try {
            PreparedStatement ps = con.prepareStatement(sql);
            ResultSet rs = ps.executeQuery();
            while (rs.next()) {
                CarroBean carro = new CarroBean();
                carro.setPlaca(rs.getString("placa"));
                carro.setCor(rs.getString("cor"));
                carro.setDescricao(rs.getString("descricao"));
                lista.add(carro);
            }
        } catch (SQLException e) {
            System.out.println(e.getMessage());
        }
        return lista;
    }
}
