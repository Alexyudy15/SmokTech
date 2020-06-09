package br.com.smoke.formularios;

import java.awt.BorderLayout;
import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import javax.swing.JLabel;
import javax.swing.JOptionPane;
import javax.swing.JTextField;
import javax.swing.JButton;
import javax.swing.ImageIcon;

//importar recursos (Java.sql.*) e ModuloConexao
import java.sql.*;
import br.com.smoke.dal.moduloconexaoS;
import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;
import javax.swing.JPasswordField;

public class Login extends JFrame {
	// Váriaveis e objetos
	Connection conexao = null;
	PreparedStatement pst = null;
	ResultSet rs = null;

	/* método logar */

	private void logar() {
		String login = "select * from tb_funcionarios where login=? and senha=?";

		try {
		    pst = conexao.prepareStatement(login);
			pst.setString(1, txtUsuario.getText());
			pst.setString(2, txtSenha.getText());
			rs = pst.executeQuery();
			if (rs.next()) { // se existir usuário e senha correspondente
				TelaInicial telainicial = new TelaInicial();
				telainicial.setVisible(true);
				dispose();

			} else {
				JOptionPane.showMessageDialog(null, "Usuário e/ou Senha Inválido(s)");

			}

		} catch (Exception e) {
			System.out.println(e);
		}
	}

	private JPanel contentPane;
	private JTextField txtUsuario;
	private JPasswordField txtSenha;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					Login frame = new Login();
					frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}

	/**
	 * Create the frame.
	 */
	public Login() {
		setTitle("Smoke");
		setResizable(false);
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 389, 235);
		contentPane = new JPanel();
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
		setContentPane(contentPane);
		contentPane.setLayout(null);

		JLabel lblUsuario = new JLabel("Usu\u00E1rio:");
		lblUsuario.setBounds(36, 35, 49, 14);
		contentPane.add(lblUsuario);

		JLabel lblSenha = new JLabel("Senha:");
		lblSenha.setBounds(36, 73, 49, 42);
		contentPane.add(lblSenha);

		txtUsuario = new JTextField();
		txtUsuario.setBounds(87, 32, 249, 20);
		contentPane.add(txtUsuario);
		txtUsuario.setColumns(10);

		JButton btnLogin = new JButton("Login");
		btnLogin.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				logar();

			}
		});
		btnLogin.setBounds(284, 172, 89, 23);
		contentPane.add(btnLogin);

		JLabel lblStatus = new JLabel("");
		lblStatus.setIcon(new ImageIcon(Login.class.getResource("/br/com/smoke/icones/dberror.png")));
		lblStatus.setBounds(33, 163, 32, 32);
		contentPane.add(lblStatus);
		
		txtSenha = new JPasswordField();
		txtSenha.setBounds(83, 84, 253, 20);
		contentPane.add(txtSenha);
		// estabelecer a conexão com o banco dentro do construtor após criação de
		// objetos
		conexao = moduloconexaoS.conector();
		if (conexao != null) {
			lblStatus.setIcon(new ImageIcon(Login.class.getResource("/br/com/smoke/icones/dbok.png")));

		} else {
			lblStatus.setIcon(new ImageIcon(Login.class.getResource("/br/com/smoke/icones/dberror.png")));

		}
		/* Fim do método construtor */
	}
}
