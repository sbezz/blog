<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{

    public function index()
    {
        //

        return view('blog.index');

    }

    public function postagens()
    {

        $postagens = [
            0 => 'Postagem 01 - Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis.',
            1 => 'Postagem 02 - Pra la, depois divoltis porris, paradis. Paisis, filhis, espiritis santis.',
            2 => 'Postagem 03 - Manduma pindureta quium dia nois paga. ',
            3 => 'Postagem 04 - Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.',
            4 => 'Postagem 05 - Mussum ipsum cacilds, vidis litro abertis.'

        ];

        return view('blog.index', compact('postagens'));

    }

}
