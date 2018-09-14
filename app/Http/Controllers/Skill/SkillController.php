<?php

namespace App\Http\Controllers\Skill;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Skills;

class SkillController extends Controller
{
    public function index()
    {
        //
        return view('Skills.register');
    }

    public function store(Request $request)
    {
        Skills::create([
            'nombre'=> $request->skill,
        ]);
    }

    public function getSkills()
    {
        $skills = Skills::select('id','nombre')
        ->orderBy('id', 'desc')
        ->get();

        return $skills;
    }
}
