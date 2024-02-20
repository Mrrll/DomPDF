<?php

use Dompdf\Dompdf;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
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
});
