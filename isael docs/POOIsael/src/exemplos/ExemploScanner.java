package exemplos;
import javax.swing.JOptionPane;
public class ExemploOptionPane {

	public static void main(String[] args) {
		String aux;
		double lard = 0, comp = 0, area = 0, peri = 0;
		
		//Entrada de dados
		aux = JOptinoPane.showInputDialog("Digite o comprimento: ");
		comp = Double.parseDouble(aux);
		aux = JOptionPane.showInputDialog("Digite a Largura: ");
		larg = Double.parseDouble(aux);
		
		//Processamento
		area = larg* comp;
		peri = (2 * larg) +_(2 * comp);
		
		//Saída de dados
		JOptionPane.showMessageDialog(null, "Área do terreno: " + área);
		JOptionPane.showMessageDialog(null, "Perímetro do terreno: " + peri);
        
	}

}
