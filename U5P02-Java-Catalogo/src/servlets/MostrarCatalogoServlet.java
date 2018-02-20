package servlets;

import java.io.IOException;
import java.io.PrintWriter;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;

import javax.servlet.ServletContext;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import clases.Obra;

/**
 * Servlet implementation class MostrarCatalogoServlet
 */
@WebServlet("/MostrarCatalogo")
public class MostrarCatalogoServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;

	/**
	 * @see HttpServlet#HttpServlet()
	 */
	public MostrarCatalogoServlet() {
		super();
		// TODO Auto-generated constructor stub
	}

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse
	 *      response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		ServletContext contexto = getServletContext();
		request.setCharacterEncoding("UTF-8");
		response.setContentType("text/html;UTF-8");
		PrintWriter out = response.getWriter();
		out.println("<html><head><meta charset='UTF-8'/>out.println(\"<html><head><meta charset='UTF-8'/>" 
					+ "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>" 
					+ "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>"
					+ "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>"
					+ "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script><style>body{background-color:#212529; color:white;}</style>\");</head><body>");
		

		Connection conn = null;
		Statement sentencia = null;
		try {
			// Paso 1: Cargar el driver JDBC.
			Class.forName("org.mariadb.jdbc.Driver").newInstance();

			// Paso 2: Conectarse a la Base de Datos utilizando la clase Connection
			String userName = contexto.getInitParameter("usuario");
			String password = contexto.getInitParameter("password");
			String url = contexto.getInitParameter("url");
			conn = DriverManager.getConnection(url, userName, password);

			// Paso 3: Crear sentencias SQL, utilizando objetos de tipo Statement
			sentencia = conn.createStatement();

			// Paso 4: Ejecutar la sentencia SQL a través de los objetos Statement
			String order = "";
			out.println("<div class='container-fluid'><div class='row justify-content-md-center'><form action='"
					+ request.getRequestURI() + "' method='post'><div class='form-group'>");
			out.println("<input class='form-control' placeholder='Buscar' type='text' name='busqueda'/></div>");
			out.println(
					"<div class='form-check form-check-inline'><label class='form-check-label'>Autor<input type='radio' class='form-check-input' name='tipobusqueda' value='autor'><label class='form-check-label'></div>");
			out.println(
					"<div class='form-check form-check-inline'><label class='form-check-label'>Disco</label><input type='radio' class='form-check-input' name='tipobusqueda'  checked='checked' value='disco'></div>");
			out.println("<input type='submit' class='btn btn-primary' name='enviar' value='Enviar'/><span> </span>");
			out.println(
					" <a href='./MostrarCatalogo' ><input type='button' class='btn btn-secondary' style='color:black;' name='limpiar' value='Limpiar Filtros'/></a></form></div></div>");

			if (request.getParameter("order") != null) {
				if (request.getParameter("order").equals("1")) {
					order = " ORDER BY nombreObra ASC";
				} else if (request.getParameter("order").equals("2")) {
					order = " ORDER BY nombreObra DESC";
				} else if (request.getParameter("order").equals("3")) {
					order = " ORDER BY nombreAutor ASC";
				} else if (request.getParameter("order").equals("4")) {
					order = " ORDER BY nombreAutor DESC";
				}
			}
			if (request.getParameter("cod") != null) {

				String consulta = "SELECT * FROM autor WHERE autor.codigoAutor=" + request.getParameter("cod");
				ResultSet rset = sentencia.executeQuery(consulta);

				// Paso 5: Mostrar resultados
				if (!rset.isBeforeFirst()) {
					out.println("<h3>No hay resultados</p>");
				}
				out.println("<table class='table table-dark'>");
				out.println("<tr style='background-color: lightgreen'>");
				out.println("<th>Codigo autor</th>");
				out.println("<th>Nombre autor</th>");
				out.println("<th>Imagen autor</th>");
				out.println("</tr>");

				while (rset.next()) {

					out.println("<tr style='background-color: lightblue'>");
					out.println("<td>" + rset.getString("codigoAutor") + "</td>");
					out.println("<td>" + rset.getString("nombreAutor") + "</td>");
					out.println("<td><img src='img/" + rset.getString("foto") + "'></td>");
					out.println("</tr>");
				}
				out.println("</table>");
				consulta = "SELECT * FROM obra WHERE obra.codigoAutor=" + request.getParameter("cod") + " " + order;
				rset = sentencia.executeQuery(consulta);

				out.println("<h1>OBRAS</h1>");

				if (!rset.isBeforeFirst()) {
					out.println("<h3>No hay resultados</p>");
				}
				out.println("<table class='table table-dark'>");
				out.println("<tr style='background-color: black;color: white'>");
				out.println("<th>Codigo obra</th>");
				out.println("<th>Nombre obra<a href='./MostrarCatalogo?cod=" + request.getParameter("cod")
						+ "&order=1'>&#9650;</a><a href='./MostrarCatalogo?cod=" + request.getParameter("cod")
						+ "&order=2'>&#9660;</a></th>");
				out.println("<th>Imagen obra</th>");
				out.println("</tr>");

				while (rset.next()) {

					out.println("<tr style='background-color: purple;color: white'>");
					out.println("<td>" + rset.getString("codigoObra") + "</td>");
					out.println("<td>" + rset.getString("nombreObra") + "</td>");
					out.println("<td><img src='img/" + rset.getString("imagen") + "'></td>");
					out.println("</tr>");
				}
				out.println("</table>");

			} else {
				String consulta = "SELECT * FROM obra, autor WHERE obra.codigoAutor=autor.codigoAutor " + order;
				ResultSet rset = sentencia.executeQuery(consulta);

				// Paso 5: Mostrar resultados
				Obra obra;
				if (!rset.isBeforeFirst()) {
					out.println("<h3>No hay resultados</p>");
				}
				out.println("<table class='table table-dark'>");
				out.println("<tr style='background-color: lightgreen'>");
				out.println("<th>Nombre obra<a href='./MostrarCatalogo?order=1'>&#9650;</a>"
						+ "<a href='./MostrarCatalogo?order=2'>&#9660;</a></th>");
				out.println("<th>Nombre autor<a href='./MostrarCatalogo?order=3'>&#9650;</a>"
						+ "<a href='./MostrarCatalogo?order=4'>&#9660;</a></th>");
				out.println("</tr>");
				int cod, codAutor, duracion;
				String nombre, imagen;

				while (rset.next()) {

					cod = Integer.parseInt(rset.getString("codigoObra"));
					duracion = Integer.parseInt(rset.getString("duracion"));
					codAutor = Integer.parseInt(rset.getString("codigoAutor"));
					nombre = rset.getString("nombreObra");
					imagen = rset.getString("imagen");
					obra = new Obra(cod, duracion, codAutor, nombre, imagen);
					System.out.println(obra.toString());
					out.println("<tr style='background-color: lightblue'>");
					out.println("<td><a href='./MostrarObra?id=" + rset.getString("codigoObra") + "'>"
							+ rset.getString("nombreObra") + "</a></td>");
					out.println("<td><a href='./MostrarCatalogo?cod=" + rset.getString("codigoAutor") + "'>"
							+ rset.getString("nombreAutor") + "</a></td>");
					out.println("</tr>");
				}
				out.println("</table>");
			}
			// Paso 6: Desconexión
			if (sentencia != null)
				sentencia.close();
			if (conn != null)
				conn.close();
		} catch (Exception e) {
			e.printStackTrace();
		}
		out.println("<p><a href='./MostrarCatalogo'>Limpiar filtros</a></p>");
		out.println("</body></html>");
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse
	 *      response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
	}

}
