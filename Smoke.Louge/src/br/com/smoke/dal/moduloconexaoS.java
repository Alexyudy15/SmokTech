package br.com.smoke.dal;

// importa��o de biblioteca e recursos para trabalhar o sql no java
import java.sql.*;

public class moduloconexaoS {
	// m�todo est�tico com retorno
			//Connection -> Recurso para conex�o com o banco
	public static Connection conector() {
		Connection conexao = null;
		String driver = "com.mysql.jdbc.Driver";
		String url = "jdbc:mysql://192.168.1.15:3306/dbsmoke?useSSL=false";
		String user = "admin";
		String password = "12345678";
		try {
			Class.forName(driver);
			conexao = DriverManager.getConnection(url,user,password);
			return conexao;
		} catch (Exception e) {
			System.out.println(e);
			return null;
			
		}
	}}