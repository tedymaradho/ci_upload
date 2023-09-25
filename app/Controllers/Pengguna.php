<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;
use App\Models\PenggunaModel;

class Pengguna extends ResourceController
{
    use ResponseTrait;
    protected $penggunaModel;

    public function __construct(){
        $this->penggunaModel = new PenggunaModel;
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $pengguna = $this->penggunaModel->findAll();
        return $this->respond($pengguna, 200);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
    
        
            $nama = $this->request->getVar('nama');
            $alamat = $this->request->getVar('alamat');
            
            $this->penggunaModel->save([
                'nama' => $nama,
                'alamat' => $alamat,
            ]);

            return $this->respondCreated('ini metode post');
        
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
