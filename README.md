# DomPDF
Generando PDF en laravel

<a name="top"></a>

## Indice de Contenidos.

- [Instalación Dompdf](#item1)
- [Uso simple del Dompdf](#item2)

<a name="item1"></a>

## Instalación Dompdf.

> Typee: en la Consola:

```console

composer require dompdf/dompdf

```

[Subir](#top)

<a name="item2"></a>

## Uso simple del Dompdf.

> Abrimos el archivo `web.php` de las rutas

```php

    // Iniciamos el objeto Dompdf
    $dompdf = new Dompdf();
    // Pasamos el html
    $dompdf->loadHtml('Hola desde dompdf');
    // Render pinta en el documento el contenido de loadHtml
    $dompdf->render();
    // Genera una vista del documento pdf y le pasamos el nombre y con 'Attachment => false' le indicamos que no queremos que inicie la descargar
    $dompdf->stream('prueba.pdf', ['Attachment' => false]);
    // Podemos hacer la descargar del documento pdf en el disco pasándole la ruta con nombre o solo nombre y con 'output() le pasamos el contenido de pdf.
    Storage::disk('public')->put('/pdf/prueba.pdf', $dompdf->output());

```

**`NOTA::` No se olvide de importar la clase `Dompdf` a su archivo `use Dompdf\Dompdf;`.**


>Pues eso es todo espero que sirva. 👍

[Subir](#top)
