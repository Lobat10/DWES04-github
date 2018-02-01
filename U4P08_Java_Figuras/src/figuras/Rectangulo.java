package figuras;

public class Rectangulo extends Figura{
	private int ladoX, ladoY;
	public Rectangulo(int ladoX, int ladoY, Color color) {
		super(color);
		this.ladoX = ladoX;
		this.ladoY = ladoY;
	}
	@Override
	public String imprimir() {
		return "Rectangulo: ladoX: "+this.ladoX+", ladoY: "+this.ladoY+", color: "+super.color.toString();
	}
}