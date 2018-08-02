<?php

namespace App\Http\Controllers;

use App\Contracts\AffiliateRepositoryInterface;
use Illuminate\Http\Request;

class AffiliatesController extends Controller
{
    protected $affiliate = null;


    public function __construct(AffiliateRepositoryInterface $affiliate)
    {
        $this->affiliate = $affiliate;
    }

    /**
     * Display a listing of the affiliates.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $affiliates = $this->affiliate->all();
        return view('affiliates.index', compact('affiliates'));
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $affiliate = $this->affiliate->find($id);
        return view('affiliates.show', compact('affiliate'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @param Request $request
     */
    public function destroy($id, Request $request)
    {
        if($this->affiliate->destroy($id))
        {
            $request->session()->flash('success', 'Filiale supprimée avec succès');
        }
        else{
            $request->session()->flash('error', "La filiale n'a pas été supprimée");
        }
    }




}
