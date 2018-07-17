## Habilitar SSL y Autenticación de Cliente con Certificado
Antes de empezar con esta guia, necesita contar con un certificado de cliente emitido por la CA, asegurese que cuenta con:
* [Llave privada](#llaveCliente.pem)
* [Certificado de servidor](#certificadoCliente.pem)
* [Certificado de autoridad certificadora (cadena de confianza)](#certificadoAC.pem)

El certificado de la autoridad debe ser instalado dentro del archivo php.ini
```
curl.cainfo = "../../certificadoAC.pem"
```

Dentro del controlador se debe llamar indicar la url que atiende las solicitudes HTTPS
```
    public function __construct()
    {
        $this->client = new Client([
			'base_uri' => 'https://api01.minx.gob.sv:8443/',
			'timeout'  => 2.0
		]);
    }
```

En la instancia de request se debe indicar el certificado y la llave de cliente
```
    protected function get($url)
    {
        $response = $this->client->request('GET', $url,
        ['cert' => '..\..\certificadoCliente.pem',   
        'ssl_key' => '..\..\llaveCliente.pem']);
        return json_decode($response->getBody()->getContents());
    }
```