package figuras;

public class Circunferencia extends Figura{
	private int radioX;
	public Circunferencia(int radioX, Color color) {
		super(color);
		this.radioX = radioX;
	}
	@Override
	public String imprimir() {
		return "Circunferencia: radiox: "+this.radioX+", color: "+super.color.toString();
	}
}
