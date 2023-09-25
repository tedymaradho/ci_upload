<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Files\File;

class Upload extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        return view('upload_form', ['errors' => []]);
    }

    public function upload(){
        $validationRule = [
            'gambar' => [
                "label" => "gambar",
                "rules" => [
                    "uploaded[gambar]",
                    "is_image[gambar]",
                    "mime_in[gambar,image/jpg,image/png,image/jpeg]",
                ],
                ],
                ];
        if (! $this->validate($validationRule)){
            $data = ["errors" => $this->validator->getErrors()];
            return view('upload_form', $data);
        }

        $gambar = $this->request->getFile("gambar");
        $gambar->move('public/uploads');
        $data = $gambar->getName();
        d($data);
        return view('upload_form', ["errors" => []]);
    }
}
