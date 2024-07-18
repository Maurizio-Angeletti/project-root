<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Announcement;
use App\Entities\AnnouncementEntity;
use CodeIgniter\Exceptions\PageNotFoundException;


class AnnouncementController extends BaseController
{
    private Announcement $model;

    public function __construct()
    {
        $this->model = new Announcement;
    }

    public function index()
    {
        

        $announcements = $this->model->findAll();

        return view("announcements/index" , compact("announcements"));
    }

    public function show($id)
    {
        

        $announcement = $this->getAnnouncementOr404($id);

        if ($announcement === null) {
            throw PageNotFoundException::forPageNotFound("l'annuncio con id $id non esiste");
        }

        return view("announcements/show" , compact("announcement"));

    }

    public function new()
    {
        $announcement = NEW AnnouncementEntity;

        return view("announcements/new", compact('announcement'));
    }

    public function create()
    {
        

        $announcement = new AnnouncementEntity($this->request->getPost());

        $id = $this->model->insert($announcement);

        If ($id === false) {
            return redirect()->back()
                            ->with("errors", $this->model->errors())
                            ->withInput();
        }

        return redirect()->to("/announcement/$id")
                        ->with("success", "Annuncio creato con successo");
    }

    public function edit($id)
    {
        

        $announcement = $this->getAnnouncementOr404($id);

        return view("announcements/edit" , compact("announcement"));
    }

    public function update($id)
    {
        

        $announcement = $this->getAnnouncementOr404($id);

        $announcement->fill($this->request->getPost());// assegniamo il valore corrispondente per ogni proprietà grazie al metodo fill

        if (! $announcement->hasChanged()){
            return redirect()->back()
                            ->with("message", "Nessun campo è stato modificato");
        }

        if ($this->model->save($announcement)) {
            return redirect()->to("announcement/$id")
                            ->with("success", "annuncio modificato correttamente");
        }

        return redirect()->back()
                        ->with("errors", $this->model->errors())
                        ->withInput();

    }

    public function delete ($id)
    {

        $announcement = $this->getAnnouncementOr404($id);

        if ($this->request->is("delete")) {// possiamo creare due rotte con lo stesso uri e lo stesso meteodo nel controller, l'importante che una  sia get e l'altra post o delete ecc.., il metodo is() ritorna un valore booleano cosi in base al metodo Http usato (post, get o delete).
            $this->model->delete($id);

            return redirect()->to("announcements/index")
                                ->with("message", "Annuncio cancellato");
        }

        return view("announcements/delete", compact("announcement"));
    }

    private function getAnnouncementOr404($id): AnnouncementEntity
    {
        $announcement = $this->model->find($id);//grazie alla classe entity il model find ora ritorna un oggetto.

        if ($announcement === null) {
            throw PageNotFoundException::forPageNotFound("l'annuncio con id $id non esiste");
        }

        return $announcement;
    }
}
