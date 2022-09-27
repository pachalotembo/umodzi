<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\innovations;
use Livewire\WithFileUploads;

class MultiStepForm extends Component
{

    use WithFileUploads;


    public $project_name;
    public $project_goals;
    public $other_services;
    public $individual_skills;
    public $raised_funding;
    public $project_registration;
    public $pending_funding;
    public $registration_type;
    public $project_type;
    public $organisation_services;
    public $development_stage;
    public $current_invest;
    public $support_needed = [];
    public $solve_problems;
    public $competitors;
    public $usefulness;
    public $cost;
    public $technological_idea;
    public $time_to_market;
    public $accessibility;
    public $market_type = [];
    public $documents;
    public $terms;


    public $totalSteps = 3;
    public $currentStep = 1;


    public function mount(){
        $this->currentStep = 1;
    }
 
    public function render()
    {
        return view('livewire.multi-step-form');
        // $innovations=innovations::all();      
        // return view('livewire.multi-step-form', compact('innovations'));
    }

    // public function updateinnovations($innoId){
    //     $this->innovations=innovations::where('innovations_id', $innoId)->get();
    // }

    public function increaseStep(){
        $this->resetErrorBag();
        $this->validateData();
         $this->currentStep++;
         if($this->currentStep > $this->totalSteps){
             $this->currentStep = $this->totalSteps;
         }
    }

    public function decreaseStep(){
        $this->resetErrorBag();
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }

    public function validateData(){
        if($this->currentStep == 1){
            $this->validate([
                'project_name'=>'required|string',
                'project_goals'=>'required|string',
                'other_services'=>'',
                'individual_skills'=>'',
                'raised_funding'=>'required',
                'pending_funding'=>'required',
                'project_registration'=>'required',
                'registration_type'=>'required'
                // 'age'=>'required|digits:2'
            ]);
        }
        elseif($this->currentStep == 2){
            $this->validate([
               'organisation_services'=>'',
               'project_type'=>'required',
               'development_stage'=>'required',
               'current_invest'=>'required|numeric',
               'solve_problems'=>'required',
               'support_needed'=>'required|array|min:1|max:3'
            //    'support_needed'=>'required|array|min:1|max:3',
            ]);
      }
//       elseif($this->currentStep == 3){
//         $this->resetErrorBag();
//         if($this->currentStep == 3)
//         $this->validate([
//             'usefulness'=>'required',
//             'cost'=>'required',
//             'technological_idea'=>'required',
//             'time_to_market'=>'required',
//             'accessibility'=>'required',
//             'competitors'=>'required',
//             'market_type'=>'required',
//             'documents'=>'mimes:doc,docx,pdf|max:1024',
//             'terms'=>'accepted'
//         ]);
//   }
    }

    public function register(){
        $this->resetErrorBag();
        if($this->currentStep == 3){
            $this->validate([
                // 'documents'=>'required|mimes:doc,docx,pdf|max:1024',
                'usefulness'=>'required',
                'cost'=>'required',
                'technological_idea'=>'required',
                'time_to_market'=>'required',
                'accessibility'=>'required',
                'competitors'=>'required',
                'market_type'=>'required|array|min:1|max:3',
                'documents'=>'mimes:doc,docx,pdf|max:1024',
                'terms'=>'accepted'
            ]);
        }

        // dd('form submitted');
            $documents_name = 'Documents_'.time().$this->documents->getClientOriginalName();
            $upload_document = $this->documents->storeAs('documents', $documents_name);

            if($upload_document){
                $values = array(
                    "project_name"=>$this->project_name,
                    "project_goals"=>$this->project_goals,
                    "other_services"=>$this->other_services,
                    "individual_skills"=>$this->individual_skills,
                    "raised_funding"=>$this->raised_funding,
                    "pending_funding"=>$this->pending_funding,
                    "project_registration"=>$this->project_registration,
                    "registration_type"=>$this->registration_type,
                    "organisation_services"=>$this->organisation_services,
                    "project_type"=>$this->project_type,
                    "development_stage"=>$this->development_stage,
                    "current_invest"=>$this->current_invest,
                    "solve_problems"=>$this->solve_problems,
                    "support_needed"=>json_encode($this->support_needed),
                    "usefulness"=>$this->usefulness,
                    "cost"=>$this->cost,
                    "technological_idea"=>$this->technological_idea,
                    "time_to_market"=>$this->time_to_market,
                    "accessibility"=>$this->accessibility,
                    "competitors"=>$this->competitors,
                    "market_type"=>json_encode($this->market_type),
                    "documents"=>$documents_name,
                );

                innovations::insert($values);
                   $this->reset();
                   $this->currentStep = 1;
            // $data = ['name'=>$this->first_name.' '.$this->last_name,'email'=>$this->email];
                return redirect()->route('submission_success');

            }
    }

}
