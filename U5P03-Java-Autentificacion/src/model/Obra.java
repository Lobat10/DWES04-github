package model;

public class Obra {
	public int codObra, duracion, codAutor;
	public String nombre, imagen;
	
	public Obra(int codObra, int duracion, int codAutor, String nombre, String imagen) {
	
		this.codObra = codObra;
		this.duracion = duracion;
		this.codAutor = codAutor;
		this.nombre = nombre;
		this.imagen = imagen;
	}

	public int getCodObra() {
		return codObra;
	}

	public void setCodObra(int codObra) {
		this.codObra = codObra;
	}

	public int getDuracion() {
		return duracion;
	}

	public void setDuracion(int duracion) {
		this.duracion = duracion;
	}

	public int getCodAutor() {
		return codAutor;
	}

	public void setCodAutor(int codAutor) {
		this.codAutor = codAutor;
	}

	public String getNombre() {
		return nombre;
	}

	public void setNombre(String nombre) {
		this.nombre = nombre;
	}

	public String getImagen() {
		return imagen;
	}

	public void setImagen(String imagen) {
		this.imagen = imagen;
	}

	@Override
	public String toString() {
		return "Obra [codObra=" + codObra + ", duracion=" + duracion + ", codAutor=" + codAutor + ", nombre=" + nombre
				+ ", imagen=" + imagen + "]";
	}
	
}
