<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JobModel;
use CodeIgniter\HTTP\ResponseInterface;

class SiteController extends BaseController
{
    public function index()
    {
        $jobs = new JobModel();
        $alljobs = $jobs->orderBy('created_at', 'DESC')
                           ->limit(6)
                           ->findAll();
        return view('site/index', compact('alljobs'));
    }

    public function todasVagas(){
        $jobModel = new JobModel();
    $totalJobs = $jobModel->countAllResults();
    $data = [
        'jobs' => $jobModel->orderBy('created_at', 'DESC')
                         ->paginate(5), // 5 itens por página
        'pager' => $jobModel->pager,
        'totalJobs' => $totalJobs
    ];
    
    return view('site/vagas', $data);
        
    }
    public function cadastre()
    {
        return view('site/cadastre');
    }
    public function contato()
    {
        return view('site/contato');
    }
    public function servicos(){
        return view('site/servicos');
    }
    public function sobre(){
        return view('site/sobre');
    }
}