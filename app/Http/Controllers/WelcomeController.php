<?php namespace App\Http\Controllers;

use App\Contato;
use App\Http\Requests\StoreContatoPostRequest;
use Illuminate\Support\Facades\Request;


class WelcomeController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Welcome Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders the "marketing page" for the application and
    | is configured to only allow guests. Like most of the other sample
    | controllers, you are free to modify or remove it as you desire.
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function teste(Request $request)
    {
        $contatos = new Contato();
        $all = $contatos->all();

        $input = Request::all();

        foreach ($all as $row) {
            echo ($row->nome) . '<br>';
            echo ($row->email) . '<br>';
        }

        if (Request::isMethod('post')) {
            if (Request::hasFile('photo')) {

                $file = Request::file('photo');
                $destinationPath = public_path();
                $filename = mt_rand() . '_' . $file->getClientOriginalName();
                $file->move($destinationPath, $filename);
            }
            $contatos->nome = 'John';
            $contatos->email = $input['email'];
            $contatos->save();
        }

        return view('teste');
    }

    public function create()
    {
        return view('create');
    }

    public function store(StoreContatoPostRequest $request, Contato $contatos){

    }

    public function edit(Request $request, $id)
    {
        $id = Request::input('id');
        $input = Request::all();

        return view('edit');
    }

    public function show()
    {
        return view('show');
    }

    public function delete()
    {
        return 'Deletado';
    }
}
