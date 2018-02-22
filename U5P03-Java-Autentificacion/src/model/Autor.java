package model;

public class Autor {
	int codigoAutor;
	String nombreAutor, foto;
	public Autor(int codigoAutor, String nombreAutor, String foto) {

		this.codigoAutor = codigoAutor;
		this.nombreAutor = nombreAutor;
		this.foto = foto;
	}
	
	public int getCodigoAutor() {
		return codigoAutor;
	}
	public void setCodigoAutor(int codigoAutor) {
		this.codigoAutor = codigoAutor;
	}
	public String getNombreAutor() {
		return nombreAutor;
	}
	public void setNombreAutor(String nombreAutor) {
		this.nombreAutor = nombreAutor;
	}
	public String getFoto() {
		return foto;
	}
	public void setFoto(String foto) {
		this.foto = foto;
	}

	@Override
	public String toString() {
		
		
		return "Autor [codigoAutor=" + codigoAutor + ", nombreAutor=" + nombreAutor + ", foto=" + foto + "]";
	}
	
	
}
