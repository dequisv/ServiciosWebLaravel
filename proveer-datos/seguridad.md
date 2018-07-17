## Habilitar SSL y Autenticación de Cliente con Certificado
Antes de empezar con esta guia, para poder habilitar el cifrado SSL, asegurese que cuenta con:
* [Llave privada](#llaveServidor.pem)
* [Certificado de servidor](#certificadoServidor.pem)
* [Certificado de autoridad certificadora (cadena de confianza)](#certificadoAC.pem)

Dentro del archivo httpd-ssl.conf se debe añadir un virtual host
```
<VirtualHost api01.minx.gob.sv:8443>
    ServerName api01.minx.gob.sv:8443
    DocumentRoot "C:\egob\xampp\htdocs\ServiciosWebLaravel\proveer-datos\public"

    SSLEngine on
    SSLProtocol -all +TLSv1.2
    SSLVerifyClient require
    SSLVerifyDepth 1
    SSLOptions +StdEnvVars

    SSLCACertificateFile "..\certificadoAC.pem"
    SSLCertificateFile "..\certificadoServidor.pem"
    SSLCertificateKeyFile "..\llaveServidor.pem"

</VirtualHost>
```

SSLEngine on -> para habilitar la autenticación SSL de manera única.

SSLCertificateFile -> para especificar el certificado público que el WebServer mostrará a los usuarios.

SSLCertificateKeyFIle -> para especificar la clave privada que se utilizará para encriptar los datos enviados.

SSLVerifyClient require -> para obligar la autenticación mediante certificado digital.

SSLProtocol -all +TLSv1.2 -> para indicar el protocolo de comunicación.

SSLVerifyDepth 1 -> para indicar que el certificado del cliente puede ser autofirmado o debe estar firmado por una CA que el servidor conoce directamente.