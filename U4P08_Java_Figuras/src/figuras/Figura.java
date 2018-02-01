package figuras;

public abstract class Figura{
	
	protected Color color;
	
	public Figura(Color color) {
		this.color=color;
	}
	
	public  Color getColor() {
		return color;
	}

	public void setColor(Color color) {
		this.color = color;
	}

	public abstract String imprimir();
}