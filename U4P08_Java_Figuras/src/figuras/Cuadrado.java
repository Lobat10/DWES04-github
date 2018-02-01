package figuras;

public class Cuadrado extends Figura{
	
	private int lado;

	public Cuadrado(int lado, Color color) {
		super(color);
		this.lado = lado;
	}

	@Override
	public String imprimir() {
		return "Cuadrado: ladox: "+this.lado+", color: "+super.color.toString();
	}
}
