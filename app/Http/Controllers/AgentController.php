<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;

class AgentController extends Controller
{
    //
    public function index()
    {
        $agents = Agent::orderBy('id')->paginate(1000);
        // return view('agents.index', compact('agents'));
        return view('agentlist', ['title' => 'Agent List', 'menu1' => 'agent', 
            'description' => 'Explore our comprehensive list of authorized agents for Unity Skills College of Hospitality, your trusted partners in navigating the enrollment process and providing guidance on our courses. Connect with knowledgeable agents who can assist you in making informed decisions about your vocational education journey with us.',
            'keywords' => 'Unity Skills College of Hospitality agents, authorized agents, enrollment assistance, course guidance, application process, trusted agents, vocational education support',
            'agents' => $agents,
        ] );
    }

}
