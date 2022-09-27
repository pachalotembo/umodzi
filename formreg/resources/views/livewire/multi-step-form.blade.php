<div>

    <form form wire:submit.prevent="register">


                 {{-- STEP 1 --}}

            @if ($currentStep == 1)
                
            
            <div class="step-one">
                <div class="card" style="margin-top: 10%;">
                    <div class="card-header bg-secondary text-white">STEP 1/3 - Innovation Details</div>
                    <div class="card-body">

                           
                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="project_name">Project Name</label>
                                    <input type="text" class="form-control" placeholder="Enter project name" wire:model="project_name">
                                    <span class="text-danger">@error('project_name'){{ $message }}@enderror</span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="project_goals">Project Goals</label>
                                    <input type="text" class="form-control" placeholder="Enter project goal" wire:model="project_goals">
                                    <span class="text-danger">@error('project_goals'){{ $message }}@enderror</span>
                                </div>
                            </div>
                        </div>
                        
                        @can('organisation-only') 
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="other_services">Other services you offer related to the idea (Optional)</label>
                                    <input type="text" class="form-control" placeholder="Enter service (Organisation only)" wire:model="other_services">
                                    <span class="text-danger">@error('other_services'){{ $message }}@enderror</span>
                                </div>
                            </div>
                        </div>
                        @endcan

                        @can('individual-only')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="individual_skills">Other skills you have related to the idea (Optional)</label>
                                    <input type="text" class="form-control" placeholder="Enter skill (Individual only)" wire:model="individual_skills">
                                    <span class="text-danger">@error('individual_skills'){{ $message }}@enderror</span>
                                </div>
                            </div>
                        </div>
                        @endcan

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Have you raised funding for your innovation?</label>
                                    <div class="form-control">
                                    <select  class="dropdown-item" wire:model="raised_funding">
                                        <option value="" selected>Select one answer</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                    </div>
                                 <span class="text-danger">@error('raised_funding'){{ $message }}@enderror</span>    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Do you have any pending funding application?</label>
                                    <div class="form-control">
                                    <select  class="dropdown-item" wire:model="pending_funding">
                                        <option value="" selected>Select one answer</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                    </div>
                                 <span class="text-danger">@error('pending_funding'){{ $message }}@enderror</span>    
                                </div>
                            </div>                                   
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Is your technology registered?</label>
                                    <div class="form-control">
                                    <select  class="dropdown-item" id="project_registration"  wire:model="project_registration">
                                        <option id="hide" value="" selected>Select one answer</option>

                                        {{-- @foreach ($innovations as $inno) --}}
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>   
                                        {{-- @endforeach --}}

                                    </select>
                                    </div>
                                 <span class="text-danger">@error('project_registration'){{ $message }}@enderror</span>    
                                </div>
                            </div>
                            {{-- @if (!is_null($innovations))
                                
                            @endif --}}
                            <div class="col-md-6">                                       
                                <div class="form-group hidden" >
                                    <label for="">If yes, under what type of registration?</label>
                                        <div class="form-control" >
                                            <select  class="dropdown-item"  wire:model="registration_type">
                                                <option value="" selected>Select one answer</option>
                                               
                                                {{-- @foreach ($innovations as $inno) --}}
                                                <option value="patent">Patent</option>
                                                <option value="trademark">Trademark</option>
                                                <option value="copyright">Copyright</option>
                                                {{-- @endforeach --}}

                                             </select>
                                        </div>
                                    <span class="text-danger">@error('registration_type'){{ $message }}@enderror</span>    
                                </div>                                                                          
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endif



            {{-- STEP 2 --}}


            @if ($currentStep == 2)
                
            
            <div class="step-two">
                <div class="card" style="margin-top: 10%;">
                    <div class="card-header bg-secondary text-white">STEP 2/3 - Technology & Finance Information</div>
                    <div class="card-body">

                        @can('organisation-only')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">What are the services offered by your organisation?</label>
                                    <input type="text" class="form-control" placeholder="Enter services (Organisation only)" wire:model="organisation_services">
                                    <span class="text-danger">@error('organisation_services'){{ $message }}@enderror</span>
                                </div>
                            </div>
                        </div>
                        @endcan

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">What is the technology related to your idea?</label>
                                    <div class="form-control">
                                    <select  class="dropdown-item" wire:model="project_type">
                                        <option value="" selected>Select one answer</option>
                                        <option value="information_technology">Information Technology</option>
                                        <option value="energy_and_renewable_resources">Energy and Renewable Resources</option>
                                        <option value="health">Health</option>
                                        <option value="algriculture">Algriculture</option>
                                        <option value="other">Other</option>
                                    </select>
                                    </div>
                                 <span class="text-danger">@error('project_type'){{ $message }}@enderror</span>    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">What is the current development stage of your idea?</label>
                                    <div class="form-control">
                                    <select  class="dropdown-item" wire:model="development_stage">
                                        <option value="" selected>Select one answer</option>
                                        <option value="idea">Idea</option>
                                        <option value="proof_of_concept">Proof of Concept</option>
                                        <option value="piloting">Piloting</option>
                                        <option value="research_and_development">Research and Development</option>
                                        <option value="prototype">Prototype</option>
                                        <option value="product_refinement">Product refinement</option>
                                        <option value="market_ready">Market ready</option>
                                        <option value="other">Other</option>
                                    </select>
                                    </div>
                                 <span class="text-danger">@error('development_stage'){{ $message }}@enderror</span>    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">How much have you invested in the idea to date?</label>
                                    <input type="text" class="form-control" placeholder="Enter amount (MWK)" wire:model="current_invest">
                                    <span class="text-danger">@error('current_invest'){{ $message }}@enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Does your idea solve any current problems?</label>
                                    <div class="form-control">
                                    <select  class="dropdown-item" wire:model="solve_problems">
                                        <option value="" selected>Select one answer</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                    </div>
                                 <span class="text-danger">@error('solve_problems'){{ $message }}@enderror</span>    
                                </div>
                            </div>
                            
                        </div>
                        What support do you expect from the relevant innovation hub business incubator?
                        <div class="support-needed d-flex flex-column align-items-left mt-2">
                            <label for="finance">
                                <input type="checkbox" id="finance" value="finance" wire:model="support_needed"> Finance
                            </label>`
                            <label for="promotion">
                                <input type="checkbox" id="promotion" value="promotion" wire:model="support_needed"> Promotion
                            </label>
                            <label for="advertisement">
                                <input type="checkbox" id="advertisement" value="advertisement" wire:model="support_needed"> Advertisement
                            </label>
                            <label for="scholarship">
                                <input type="checkbox" id="scholarship" value="scholarship" wire:model="support_needed"> Scholarship
                            </label>
                            <label for="other">
                                <input type="checkbox" id="other" value="other" wire:model="support_needed"> Other
                            </label>                           
                        </div>
                        <span class="text-danger">@error('support_needed'){{ $message }}@enderror</span>                       
                    </div>
                </div>
            </div>

            @endif



            {{-- STEP 3 --}}

            @if ($currentStep == 3)
                
            

            <div class="step-three">
                <div class="card" style="margin-top: 10%;">
                    <div class="card-header bg-secondary text-white">STEP 3/3 - Market & Competitive Advantage</div>
                    <div class="card-body">
                        
                        How will your product compare with your competitiors?
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Usefulness</label>
                                    <div class="form-control">
                                    <select  class="dropdown-item" wire:model="usefulness">
                                        <option value="" selected>Select one answer</option>
                                        <option value="bad">Bad</option>
                                        <option value="good">Good</option>
                                        <option value="very_good">Very Good</option>
                                        <option value="excellent">Excellent</option>
                                    </select>
                                    <span class="text-danger">@error('usefulness'){{ $message }}@enderror</span>
                                    </div>                   
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Cost</label>
                                    <div class="form-control">
                                    <select  class="dropdown-item" wire:model="cost">
                                        <option value="" selected>Select one answer</option>
                                        <option value="bad">Bad</option>
                                        <option value="good">Good</option>
                                        <option value="very_good">Very Good</option>
                                        <option value="excellent">Excellent</option>
                                    </select>
                                    <span class="text-danger">@error('cost'){{ $message }}@enderror</span>
                                    </div>                                 
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Technological Idea</label>
                                    <div class="form-control">
                                    <select  class="dropdown-item" wire:model="technological_idea">
                                        <option value="" selected>Select one answer</option>
                                        <option value="bad">Bad</option>
                                        <option value="good">Good</option>
                                        <option value="very_good">Very Good</option>
                                        <option value="excellent">Excellent</option>
                                    </select>
                                    <span class="text-danger">@error('technological_idea'){{ $message }}@enderror</span>
                                    </div>                                
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Time to Market</label>
                                    <div class="form-control">
                                    <select  class="dropdown-item" wire:model="time_to_market">
                                        <option value="" selected>Select one answer</option>
                                        <option value="bad">Bad</option>
                                        <option value="good">Good</option>
                                        <option value="very_good">Very Good</option>
                                        <option value="excellent">Excellent</option>
                                    </select>
                                    <span class="text-danger">@error('time_to_market'){{ $message }}@enderror</span>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Accessibility</label>
                                    <div class="form-control">
                                    <select  class="dropdown-item" wire:model="accessibility">
                                        <option value="" selected>Select one answer</option>
                                        <option value="bad">Bad</option>
                                        <option value="good">Good</option>
                                        <option value="very_good">Very Good</option>
                                        <option value="excellent">Excellent</option>
                                    </select>
                                    <span class="text-danger">@error('accessibility'){{ $message }}@enderror</span>
                                    </div>                                
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Do you have any market competitiors?</label>
                                    <div class="form-control">
                                    <select  class="dropdown-item" wire:model="competitors">
                                        <option value="" selected>Select one answer</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                    <span class="text-danger">@error('competitors'){{ $message }}@enderror</span>
                                    </div>                                     
                                </div>
                            </div>
                        </div>
                        What is the type of your market segmentation?
                        <div class="market-type d-flex flex-column align-items-left mt-2">
                            <label for="demographic">
                                <input type="checkbox" id="demographic" value="demographic" wire:model="market_type"> Demographic
                            </label>
                            <label for="psychographic">
                               <input type="checkbox" id="psychographic" value="psychographic" wire:model="market_type"> Psychographic
                           </label>
                           <label for="behavioral">
                               <input type="checkbox" id="behavioral" value="behavioral" wire:model="market_type"> Behavioral
                           </label>
                           <label for="geographic">
                               <input type="checkbox" id="geographic" value="geographic" wire:model="market_type"> Geographic
                           </label>  
                        </div>
                        <span class="text-danger">@error('market_type'){{ $message }}@enderror</span>
                        
                        <div class="form-group">
                            <label for="documents">Upload any relevant documents</label>
                            <input type="file" class="form-control" wire:model="documents">
                            <span class="text-danger">@error('documents'){{ $message }}@enderror</span>
                        </div> 
                         
                        <div class="form-group">
                            <label for="terms" class="d-block">
                                <input type="checkbox" id="terms" wire:model="terms"> You must agree with our <a href="#">Terms and Conditions</a>
                                <span class="text-danger">@error('terms'){{ $message }}@enderror</span>
                            </label>
                        </div>
                    </div>                    
                </div>
            </div>

            @endif
            
            {{-- <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">

                @if ($currentStep == 1)
                    <div></div>
                @endif

                @if ($currentStep == 1 || $currentStep == 2)
                    <button type="button" class="btn btn-md btn-primary" wire:click="increaseStep()">Next</button>
                @endif

                @if ($currentStep == 2 || $currentStep == 3)
                    <button type="button" class="btn btn-md btn-secondary" wire:click="decreaseStep()">Back</button>
                @endif
                
                @if ($currentStep == 3)
                    <button type="submit" class="btn btn-md btn-success">Submit</button>
                @endif

            </div> --}}

            <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">

                {{-- @if ($currentStep == 1)
                    <div></div>
                @endif --}}
    
                @if ($currentStep == 2 || $currentStep == 3)
                    <button type="button" class="btn btn-md btn-secondary" wire:click="decreaseStep()">Back</button>
                @endif
                
                @if ($currentStep == 1 || $currentStep == 2)
                    <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()">Next</button>
                @endif
                
                @if ($currentStep == 3)
                     <button type="submit" class="btn btn-md btn-primary">Submit</button>
                @endif
                    
                   
             </div>

    </form>

    
</div>