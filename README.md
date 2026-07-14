uso de las carpetas

views: unicamente la vista (implementar solo el php necesario de ser posible evitarlo)
css: aplicar puro diseño (opcional se puede utilizar directamente las clases de bootstrap y tailwind en el html)
models: tendra las entidades que deben de coincidir con la tabla respectiva de la base de datos
controllers: estos recibiran la peticion y los datos para mandar a llamar el servicio
services: este tendra las reglas de negocio asi como la comunicacion con la base de datos


/* BASES DE DATOS */

INSERT INTO Users (Username, Password, Role, LastEditBy, LastEditDt)
VALUES ('miguelvitervo', '11', 'Admin', 'miguelvitervo', GETDATE())

Tablas:

CREATE TABLE Users (
	Id INT IDENTITY,
	Username VARCHAR(100),
	[Password] VARCHAR(100),
	[Role] VARCHAR(20),
	LastEditBy VARCHAR(100),
	LastEditDt DATETIME
)