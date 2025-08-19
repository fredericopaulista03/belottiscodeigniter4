<?php

namespace App\Controllers;
use App\Models\JobModel;
use App\Models\VagaModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class VagaController extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new JobModel();
    }

    // Lista todas as vagas
    public function index()
    {
        $jobs = new JobModel();
        $alljobs = $jobs->findAll();
        
        // $data = [
        //     'vagas' => $this->model->orderBy('data_publicacao', 'DESC')->findAll(),
        //     'title' => 'Gerenciamento de Vagas'
        // ];

        return view('dashboard/vagas/index', compact('alljobs'));
    }

    // Exibe apenas vagas públicas
    public function publicas()
    {
        $data = [
            'vagas' => $this->model->getVagasAtivas(),
            'title' => 'Vagas Disponíveis'
        ];

        return view('vagas/publicas', $data);
    }

    // Exibe uma vaga específica
    public function show($id)
    {
        $vaga = $this->model->find($id);

        if (empty($vaga)) {
            throw new PageNotFoundException('Vaga não encontrada');
        }

        $data = [
            'vaga' => $vaga,
            'titulo' => $vaga['titulo']
        ];

        return view('vagas/show', $data);
    }

    // Cria nova vaga (formulário)
    public function new()
    {
        $data = [
            'title' => 'Cadastrar Nova Vaga',
            'statusOptions' => [
                'rascunho' => 'Rascunho',
                'publicada' => 'Publicada',
                'arquivada' => 'Arquivada'
            ]
        ];

        return view('dashboard/vagas/new', $data);
    }

    // Salva a nova vaga
    public function create()
    {
        if (!$this->validate($this->model->validationRules, $this->model->validationMessages)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $dados = $this->request->getPost();
        $dados['data_publicacao'] = date('Y-m-d', strtotime($dados['data_publicacao']));

        $this->model->save($dados);

        return redirect()->to('/vagas')->with('message', 'Vaga cadastrada com sucesso!');
    }

    // Edita uma vaga (formulário)
    public function edit($id)
    {
        $vaga = $this->model->find($id);

        if (empty($vaga)) {
            throw new PageNotFoundException('Vaga não encontrada');
        }

        $data = [
            'vaga' => $vaga,
            'titulo' => 'Editar Vaga',
            'statusOptions' => [
                'rascunho' => 'Rascunho',
                'publicada' => 'Publicada',
                'arquivada' => 'Arquivada'
            ]
        ];

        return view('vagas/edit', $data);
    }

    // Atualiza a vaga
    public function update($id)
    {
        if (!$this->validate($this->model->validationRules, $this->model->validationMessages)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $dados = $this->request->getPost();
        $dados['id'] = $id;
        $dados['data_publicacao'] = date('Y-m-d', strtotime($dados['data_publicacao']));

        $this->model->save($dados);

        return redirect()->to('/vagas')->with('message', 'Vaga atualizada com sucesso!');
    }

    // Exclui uma vaga (soft delete)
    public function delete($id)
    {
        $vaga = $this->model->find($id);

        if (empty($vaga)) {
            throw new PageNotFoundException('Vaga não encontrada');
        }

        $this->model->delete($id);

        return redirect()->to('/vagas')->with('message', 'Vaga arquivada com sucesso!');
    }
}