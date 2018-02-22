package model;

public class Usuario {
	String login, password, nombre, descripcion;
	Boolean administrador;
	public Usuario(String login, String password, String nombre, String descripcion, Boolean administrador) {
		super();
		this.login = login;
		this.password = password;
		this.nombre = nombre;
		this.descripcion = descripcion;
		this.administrador = administrador;
	}
	public String getLogin() {
		return login;
	}
	public void setLogin(String login) {
		this.login = login;
	}
	public String getPassword() {
		return password;
	}
	public void setPassword(String password) {
		this.password = password;
	}
	public String getNombre() {
		return nombre;
	}
	public void setNombre(String nombre) {
		this.nombre = nombre;
	}
	public String getDescripcion() {
		return descripcion;
	}
	public void setDescripcion(String descripcion) {
		this.descripcion = descripcion;
	}
	public Boolean getAdministrador() {
		return administrador;
	}
	public void setAdministrador(Boolean administrador) {
		this.administrador = administrador;
	}
	@Override
	public String toString() {
		
		if(administrador) {
			return "<p><ul class='list-group'><li class='list-group-item active'>login:" + login + "</li><li class='list-group-item'> password: " + password + "</li><li class='list-group-item'> nombre: " + nombre + "</li><li class='list-group-item'> descripcion: "
					+ descripcion + "</li><li class='list-group-item'> administrador: si </li></p></ul>";
		}else {
			return "<p><ul class='list-group'><li class='list-group-item active'>login:" + login + "</li><li class='list-group-item'> password: " + password + "</li><li class='list-group-item'> nombre: " + nombre + "</li><li class='list-group-item'> descripcion: "
					+ descripcion + "</li><li class='list-group-item'> administrador: no </li></p></ul>";
		}
		
		
	}
	
	
	
}
