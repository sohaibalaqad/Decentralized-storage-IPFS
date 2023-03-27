<?php

namespace App\Http\Controllers;

use Cloutier\PhpIpfsApi\IPFS;
use Illuminate\Http\Request;

class IpfsController extends Controller
{
    public function uploud(){
        $ipfs = new IPFS('217.147.1.178', '5002', '5001');
        $hash = $ipfs->add("Sohaib Alaqad");

        return $hash;
    }
}
