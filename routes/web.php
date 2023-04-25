<?php
use Illuminate\Http\Request;
use App\Models\Agendamentos;
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
    return view('index');
});

Route::get('/consulta', function (){
    $agendamentos = Agendamentos::all();
    return view('consulta', ['agendamentos' => $agendamentos]);
});
Route::post('/controller', function (){

    $agendamentos = new Agendamentos;
    $agendamentos->nome = $_POST['txtNome'];
    $agendamentos->telefone = $_POST['txtTelefone'];
    $agendamentos->origem = $_POST['txtOrigem'];
    $agendamentos->data_contato = $_POST['txtDataContato'];
    $agendamentos->observacao = $_POST['txtObservacao'];

    $agendamentos->save();

    echo "<script>alert('Registro incluído com sucesso!');document.location='../'</script>";

});
