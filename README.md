
# RemindMe

RemindMe es una aplicación especializada para ayudar a la gestión del cuidado de personas con problemas de memoria.



## Manual de instalación

Para poder usar el proyecto, se necesita tener una base de datos en local, o tener la IP pública
donde está enlazada la base de datos. Vamos a explicar las dos formas:

#### BASE DE DATOS LOCAL
Clone el proyecto en una carpeta local
```bash
  git clone https://github.com/Marck0005/RemindMe.git
```
Descargue MySQL si no lo tiene aún desde la siguiente web: https://www.mysql.com/downloads/
Cree una base de datos llamada "Usuarios", en la que sus columnas deben tener los siguientes atributos:

| Variable             | Tipo                                                               | Checks |
| ----------------- | ------------------------------------------------------------------ | ------------------ |
| idUsuarios | INT | PRIMARY_KEY |
| Correo | VARCHAR[255] | none |
| Contraseña | VARCHAR[255] | none |
| Nombre | VARCHAR[255] | none |
| Apellidos | VARCHAR[255] | none |
| Rol | VARCHAR[255] | none |

En tercer lugar, cambie el script "Connection.php" la IP que aparece por "localhost"


#### BASE DE DATOS REMOTA

Pregunte a Fernando Ramírez por la IP pública de la RaspberryPI. Esta clave pública se reinicia cada cierto tiempo, 
así que asegúrese de que pedirla al momento en que vaya a probar la aplicación

## Autores

- [Iker Rodríguez](https://www.github.com/ikerUFV)
- [Fernando Ramírez](https://www.github.com/fernando5514)
- [Andrés Arévalo](https://www.github.com/AndresUFV)
- [Samuel Juárez](https://www.github.com/samueljuarezgordon)
- [Yago Baamonde](https://www.github.com/AndresUFV)
- [Álvaro Ramos](https://www.github.com/AndresUFV)
- [Marcos Mela](https://www.github.com/AndresUFV)
- [Raúl Vara](https://www.github.com/AndresUFV)
- [Juan Ludovic Chinchilla](https://www.github.com/AndresUFV)
