package figuras;

public class Elipse extends Figura{
	private int radioX, radioY;
	public Elipse(int radioX,int radioY, Color color) {
		super(color);
		this.radioX = radioX;
		this.radioY = radioY;
	}
	@Override
	public String imprimir() {
		return  "Elipse: radioX: "+this.radioX+" ,radioY: "+this.radioY+", color: "+super.color.toString();
	}
}