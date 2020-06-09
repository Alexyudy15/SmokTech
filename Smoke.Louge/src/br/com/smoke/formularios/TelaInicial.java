package br.com.smoke.formularios;

import java.awt.BorderLayout;
import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import javax.swing.JMenuBar;
import javax.swing.JMenu;
import javax.swing.JMenuItem;
import javax.swing.JOptionPane;
import javax.swing.JCheckBox;
import javax.swing.ImageIcon;
import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;
import javax.swing.JDesktopPane;
import javax.swing.JLabel;
import java.awt.event.WindowAdapter;
import java.awt.event.WindowEvent;
import java.text.DateFormat;
import java.util.Date;

public class TelaInicial extends JFrame {

	private JPanel contentPane;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					TelaInicial frame = new TelaInicial();
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
	public TelaInicial() {

		setResizable(false);
		setTitle("Smoke");
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(300, 50, 756, 644);

		JMenuBar menuBar = new JMenuBar();
		setJMenuBar(menuBar);

		JMenu mnEssncias = new JMenu("Ess\u00EAncias");
		menuBar.add(mnEssncias);

		JMenu mnNarguiles = new JMenu("Reservas");
		menuBar.add(mnNarguiles);

		JMenuItem mntmNarguiles = new JMenuItem("Narguiles");
		mntmNarguiles.setIcon(null);
		mnNarguiles.add(mntmNarguiles);

		JMenuItem mntmReserva = new JMenuItem("Reservas");
		mntmReserva.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				Mesas mesas = new Mesas();
				mesas.setVisible(true);
				contentPane.add(mesas);
			}
		});
		mntmReserva.setIcon(null);
		mnNarguiles.add(mntmReserva);

		JMenu mnAjuda = new JMenu("Ajuda");
		menuBar.add(mnAjuda);

		JMenuItem mntmSobre = new JMenuItem("Sobre");
		mntmSobre.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				Sobre sobre = new Sobre();
				sobre.setVisible(true);
				contentPane.add(sobre);
			}
		});
		mntmSobre.setIcon(new ImageIcon(TelaInicial.class.getResource("/br/com/smoke/icones/sobre.png")));
		mnAjuda.add(mntmSobre);

		JMenuItem mntmContatenos = new JMenuItem("Fornecedores");
		mntmContatenos.setIcon(new ImageIcon(TelaInicial.class.getResource("/br/com/smoke/icones/relatorio.png")));
		mnAjuda.add(mntmContatenos);

		JMenuItem mntmSair = new JMenuItem("Sair");
		mntmSair.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				int confirma = JOptionPane.showConfirmDialog(null, "Tem certeza que deseja encerrar o aplicativo?",
						"Atenção", JOptionPane.YES_NO_OPTION);
				if (confirma == JOptionPane.YES_NO_OPTION) {
					dispose(); // fecha o aplicativo
				}

			}

		});
		mntmSair.setIcon(new ImageIcon(TelaInicial.class.getResource("/br/com/smoke/icones/sair.png")));
		mnAjuda.add(mntmSair);
		contentPane = new JPanel();
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
		setContentPane(contentPane);
		contentPane.setLayout(null);

		JDesktopPane desktopPane = new JDesktopPane();
		desktopPane.setBounds(0, 0, 533, 605);
		contentPane.add(desktopPane);

		JLabel lblNewLabel = new JLabel("New label");
		lblNewLabel.setIcon(new ImageIcon(TelaInicial.class.getResource("/br/com/smoke/icones/smokecopia.png")));
		lblNewLabel.setBounds(535, 514, 227, 69);
		contentPane.add(lblNewLabel);

		JLabel lblData = new JLabel("tempo");
		lblData.setBounds(539, 44, 211, 41);
		contentPane.add(lblData);

		// horario e data
		addWindowListener(new WindowAdapter() {
			@Override
			public void windowActivated(WindowEvent arg0) {
				// substituindo a label pela data/hora do sistema
				Date tempo = new Date();
				DateFormat formatador = DateFormat.getDateInstance(DateFormat.LONG);
				lblData.setText(formatador.format(tempo));

			}
		});

		// Menu Zomo
		JMenuItem mntmZomo = new JMenuItem("Zomo");
		mntmZomo.addActionListener(new ActionListener() {

			public void actionPerformed(ActionEvent e) {
				Zomo zomo = new Zomo();
				zomo.setVisible(true);
				desktopPane.add(zomo);
			}
		});
		mntmZomo.setIcon(new ImageIcon(TelaInicial.class.getResource("/br/com/smoke/icones/zomo(1).png")));
		mnEssncias.add(mntmZomo);

		// menu Adalya
		JMenuItem mntmAdalya = new JMenuItem("Adalya");
		mntmAdalya.addActionListener(new ActionListener() {

			public void actionPerformed(ActionEvent arg0) {
				Adalya adalya = new Adalya();
				adalya.setVisible(true);
				desktopPane.add(adalya);

			}
		});
		mntmAdalya.setIcon(new ImageIcon(TelaInicial.class.getResource("/br/com/smoke/icones/adalya(1).png")));
		mnEssncias.add(mntmAdalya);

		// menu Nay
		JMenuItem mntmNay = new JMenuItem("Nay");
		mntmNay.addActionListener(new ActionListener() {

			public void actionPerformed(ActionEvent e) {
				Nay nay = new Nay();
				nay.setVisible(true);
				contentPane.add(nay);
			}

		});
		mntmNay.setIcon(new ImageIcon(TelaInicial.class.getResource("/br/com/smoke/icones/nay(1).png")));
		mnEssncias.add(mntmNay);

		// Menu Mazaya
		JMenuItem mntmMazaya = new JMenuItem("Mazaya");
		mntmMazaya.addActionListener(new ActionListener() {

			public void actionPerformed(ActionEvent e) {
				Mazaya mazaya = new Mazaya();
				mazaya.setVisible(true);
				contentPane.add(mazaya);

			}
		});
		mntmMazaya.setIcon(new ImageIcon(TelaInicial.class.getResource("/br/com/smoke/icones/mazaya (1).png")));
		mnEssncias.add(mntmMazaya);

	}

}
