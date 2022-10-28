<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseController as Controller;
use App\Traits\ResourceTrait;

use Illuminate\Http\Request;

use App\Models\Lead;
use View,Redirect, DB;

class LeadController extends Controller
{
    use ResourceTrait;

    public function __construct()
    {
        parent::__construct();

        $this->model = new Lead;
        $this->route .= '.leads';
        $this->views .= '.leads';

        $this->permissions = ['list'=>'lead_listing', 'create'=>'', 'edit'=>'lead_closing', 'delete'=>'lead_deleting'];
        $this->resourceConstruct();

    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = $this->getCollection();
            if(request()->get('data'))
            {
                $collection = $this->applyFiltering($collection);
            }
            else
                $collection->where('status', 'Open');
            return $this->setDTData($collection)->make(true);
        } else {
            
            $search_settings = $this->getSearchSettings();
            return view::make($this->views . '.index', array('search_settings'=>$search_settings));
        }
    }

    protected function getCollection() {
        return $this->model->select('id', 'name', 'email', 'phone_number', 'lead_type', 'status', 'created_at', 'updated_at');
    }

    protected function setDTData($collection) {
        $route = $this->route;
        return $this->initDTData($collection)
            ->orderColumn('date', function ($query, $order) {
                     $query->orderBy('created_at', $order);
            })
            ->editColumn('status', function($obj) use($route) { 
                if($obj->status == 'Open')
                {
                    return '<span class="badge text-danger">Open</span>';
                }
                else{
                    return '<span class="badge text-success">Close</span>';
                }
            })
            ->addColumn('action_edit', function($obj) use ($route) { 
                return '<a href="'.route($route.'.show', [encrypt($obj->id)]).'" class="text-info" title="' . ($obj->updated_at ? 'Last updated at : ' . date('d/m/Y - h:i a', strtotime($obj->updated_at)) : ''). '" ><i class="fas fa-eye"></i></a>';
            })
            ->rawColumns(['action_edit', 'action_delete', 'status']);
    }

    public function update(Request $r)
    {
        $data = $r->all();
        $id = decrypt($data['id']);
        if($obj = $this->model->find($id)){
            $obj->update($data);

            return Redirect::to(route($this->route.'.show', array('id'=>encrypt($obj->id))))->withSuccess('Leas details successfully updated!');
        } else {
            return Redirect::back()
                        ->withErrors("Ooops..Something wrong happend.Please try again.") // send back all errors to the login form
                        ->withInput(Input::all());
        }
    }

    protected function getSearchSettings(){
        $filter = [];
        $lead_types = DB::table('leads')->select('lead_type')->groupBy('lead_type')->get();
        $filter['lead_types'] = $lead_types;
        return $filter;
    }

}
