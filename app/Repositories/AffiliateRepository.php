<?php


namespace App\Repositories;




use App\Abstracts\AbstractRepository;
use App\Contracts\AffiliateRepositoryInterface;




class AffiliateRepository extends AbstractRepository implements AffiliateRepositoryInterface
{

    protected $modelClassName = '\App\Affiliate';





}