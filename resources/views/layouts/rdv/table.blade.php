
                            <table class="table table-bordered table-hover"  width="100%" cellspacing="0">

                                <tr>
                                <td>    </td><th colspan="2">:00</td> <th colspan="2" style="border-left: 5px double rgb(99, 99, 99)">:30 </td>
                                </tr>
                                <tr><th >9h</td> 
                                  
                                    @if (count($data["h91"])>=2)
                                    <td>{{$data["h91"][0]}} <div class="dropdown no-arrow float-right">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                                            <div class="dropdown-header">Voulez vous :</div>
                                            <a class="dropdown-item" href="#">Modifer</a>
                                            
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#" data-toggle="modal" onclick="changemodel({{$data["h91"][1]}})" data-target="#confirmDeleteModel" >Supprimer</a>
                                        </div>
                                    </div>
                                    </td>                          
                                    @endif
                                    @if (count($data["h91"])>=4)
                                   
                                    <td>{{$data["h91"][2]}}
                                        <div class="dropdown no-arrow float-right">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                                                <div class="dropdown-header">Voulez vous :</div>
                                                <a class="dropdown-item" href="#">Modifer</a>
                                                
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#" data-toggle="modal" onclick="changemodel({{$data["h91"][3]}})" data-target="#confirmDeleteModel" >Supprimer</a>
                                            </div>
                                        </div>
                                        </td>
                                @else 
                                
                                <td> <a href="{{URL::current()}}/91" class="btn btn-secondary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-arrow-right"></i>
                                    </span>
                                    <span class="text">Prendre RdV</span>
                                </a></td>
                                @if(count($data["h91"])==0) <td></td>
                                @endif 
                                @endif

                                <td style="border-left: 5px double rgb(99, 99, 99)">
                                @if (count($data["h92"])>=2)
                                {{$data["h92"][0]}} <div class="dropdown no-arrow float-right">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                                        <div class="dropdown-header">Voulez vous :</div>
                                        <a class="dropdown-item" href="#">Modifer</a>
                                        
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#" data-toggle="modal" onclick="changemodel({{$data["h92"][1]}})" data-target="#confirmDeleteModel" >Supprimer</a>
                                    </div>
                                </div>
                                </td>                          
                                @endif
                                @if (count($data["h92"])>=4)
                               
                                <td>{{$data["h92"][2]}}
                                    <div class="dropdown no-arrow float-right">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                                            <div class="dropdown-header">Voulez vous :</div>
                                            <a class="dropdown-item" href="#">Modifer</a>
                                            
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#" data-toggle="modal" onclick="changemodel({{$data["h92"][3]}})" data-target="#confirmDeleteModel" >Supprimer</a>
                                        </div>
                                    </div>
                                </td>
                            @else 
                            
								@if (count($data["h102"])>=2) 
								<td>
								@endif
                             <a href="{{URL::current()}}/92" class="btn btn-secondary btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-arrow-right"></i>
                                </span>
                                <span class="text">Prendre RdV</span>
                            </a></td>
                            @if(count($data["h92"])==0) <td></td>
                            @endif 
                        @endif
                               
                                </tr>   
                                <tr><th >10h</td> 
                                  
                                    @if (count($data["h101"])>=2)
                                    <td>{{$data["h101"][0]}} <div class="dropdown no-arrow float-right">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                                            <div class="dropdown-header">Voulez vous :</div>
                                            <a class="dropdown-item" href="#">Modifer</a>
                                            
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#" data-toggle="modal" onclick="changemodel({{$data["h101"][1]}})" data-target="#confirmDeleteModel" >Supprimer</a>
                                        </div>
                                    </div>
                                    </td>                          
                                    @endif
                                    @if (count($data["h101"])>=4)
                                   
                                    <td>{{$data["h101"][2]}}
                                        <div class="dropdown no-arrow float-right">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                                                <div class="dropdown-header">Voulez vous :</div>
                                                <a class="dropdown-item" href="#">Modifer</a>
                                                
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#" data-toggle="modal" onclick="changemodel({{$data["h101"][3]}})" data-target="#confirmDeleteModel" >Supprimer</a>
                                            </div>
                                        </div>
                                        </td>
                                @else 
                                
                                <td> <a href="{{URL::current()}}/101" class="btn btn-secondary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-arrow-right"></i>
                                    </span>
                                    <span class="text">Prendre RdV</span>
                                </a></td>
                                @if(count($data["h101"])==0) <td></td>
                                @endif 
                            @endif

                                <td style="border-left: 5px double rgb(99, 99, 99)">
                                @if (count($data["h102"])>=2)
                                {{$data["h102"][0]}} <div class="dropdown no-arrow float-right">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                                        <div class="dropdown-header">Voulez vous :</div>
                                        <a class="dropdown-item" href="#">Modifer</a>
                                        
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#" data-toggle="modal" onclick="changemodel({{$data["h102"][1]}})" data-target="#confirmDeleteModel" >Supprimer</a>
                                    </div>
                                </div>
                                </td>                          
                                @endif
                                @if (count($data["h102"])>=4)
                               
                                <td>{{$data["h102"][2]}}
                                    <div class="dropdown no-arrow float-right">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                                            <div class="dropdown-header">Voulez vous :</div>
                                            <a class="dropdown-item" href="#">Modifer</a>
                                            
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#" data-toggle="modal" onclick="changemodel({{$data["h102"][3]}})" data-target="#confirmDeleteModel" >Supprimer</a>
                                        </div>
                                    </div>
                                    </td>
                            @else 
                            
								@if (count($data["h102"])>=2) 
								<td>
								@endif
                             <a href="{{URL::current()}}/102" class="btn btn-secondary btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-arrow-right"></i>
                                </span>
                                <span class="text">Prendre RdV</span>
                            </a></td>
                            @if(count($data["h102"])==0) <td></td>
                            @endif 
                        @endif
                            
                            <tr><th >11h</td> 
                                  
                                @if (count($data["h111"])>=2)
                                <td>{{$data["h111"][0]}} <div class="dropdown no-arrow float-right">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                                        <div class="dropdown-header">Voulez vous :</div>
                                        <a class="dropdown-item" href="#">Modifer</a>
                                        
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#" data-toggle="modal" onclick="changemodel({{$data["h111"][1]}})" data-target="#confirmDeleteModel" >Supprimer</a>
                                    </div>
                                </div>
                                </td>                          
                                @endif
                                @if (count($data["h111"])>=4)
                               
                                <td>{{$data["h111"][2]}}
                                    <div class="dropdown no-arrow float-right">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                                            <div class="dropdown-header">Voulez vous :</div>
                                            <a class="dropdown-item" href="#">Modifer</a>
                                            
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#" data-toggle="modal" onclick="changemodel({{$data["h111"][3]}})" data-target="#confirmDeleteModel" >Supprimer</a>
                                        </div>
                                    </div>
                                    </td>
                            @else 
                            
                            <td> <a href="{{URL::current()}}/111" class="btn btn-secondary btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-arrow-right"></i>
                                </span>
                                <span class="text">Prendre RdV</span>
                            </a></td>
                                @if(count($data["h111"])==0) <td></td>
                                @endif 
                            @endif

                            <td style="border-left: 5px double rgb(99, 99, 99)">
                            @if (count($data["h112"])>=2)
                            {{$data["h112"][0]}} <div class="dropdown no-arrow float-right">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                                    <div class="dropdown-header">Voulez vous :</div>
                                    <a class="dropdown-item" href="#">Modifer</a>
                                    
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" onclick="changemodel({{$data["h112"][1]}})" data-target="#confirmDeleteModel" >Supprimer</a>
                                </div>
                            </div>
                            </td>                          
                            @endif
                            @if (count($data["h112"])>=4)
                           
                            <td>{{$data["h112"][2]}}
                                <div class="dropdown no-arrow float-right">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                                        <div class="dropdown-header">Voulez vous :</div>
                                        <a class="dropdown-item" href="#">Modifer</a>
                                        
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#" data-toggle="modal" onclick="changemodel({{$data["h112"][3]}})" data-target="#confirmDeleteModel" >Supprimer</a>
                                    </div>
                                </div>
                                </td>
                        @else 
                            @if (count($data["h112"])>=2) 
                            <td>
                            @endif
                         <a href="{{URL::current()}}/112" class="btn btn-secondary btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                            <span class="text">Prendre RdV</span>
                        </a></td>
                        @if(count($data["h112"])==0) <td></td>
                         
                    @endif
                        @endif
                           
                            </tr>    
                            <tr><th >12h</td> 
                                  
                                @if (count($data["h121"])>=2)
                                <td>{{$data["h121"][0]}} <div class="dropdown no-arrow float-right">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                                        <div class="dropdown-header">Voulez vous :</div>
                                        <a class="dropdown-item" href="#">Modifer</a>
                                        
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#" data-toggle="modal" onclick="changemodel({{$data["h121"][1]}})" data-target="#confirmDeleteModel" >Supprimer</a>
                                    </div>
                                </div>
                                </td>                          
                                @endif
                                @if (count($data["h121"])>=4)
                               
                                <td>{{$data["h121"][2]}}
                                    <div class="dropdown no-arrow float-right">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                                            <div class="dropdown-header">Voulez vous :</div>
                                            <a class="dropdown-item" href="#">Modifer</a>
                                            
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#" data-toggle="modal" onclick="changemodel({{$data["h121"][3]}})" data-target="#confirmDeleteModel" >Supprimer</a>
                                        </div>
                                    </div>
                                    </td>
                            @else 
                            
                            <td> <a href="{{URL::current()}}/121" class="btn btn-secondary btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-arrow-right"></i>
                                </span>
                                <span class="text">Prendre RdV</span>
                            </a></td>
                               @if(count($data["h121"])==0) <td></td>
                            @endif 
                        @endif
                            

                            <td style="border-left: 5px double rgb(99, 99, 99)">
                            @if (count($data["h122"])>=2)
                            {{$data["h122"][0]}} <div class="dropdown no-arrow float-right">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                                    <div class="dropdown-header">Voulez vous :</div>
                                    <a class="dropdown-item" href="#">Modifer</a>
                                    
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" onclick="changemodel({{$data["h122"][1]}})" data-target="#confirmDeleteModel" >Supprimer</a>
                                </div>
                            </div>
                            </td>                          
                            @endif
                            @if (count($data["h122"])>=4)
                           
                            <td>{{$data["h122"][2]}}
                                <div class="dropdown no-arrow float-right">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                                        <div class="dropdown-header">Voulez vous :</div>
                                        <a class="dropdown-item" href="#">Modifer</a>
                                        
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#" data-toggle="modal" onclick="changemodel({{$data["h122"][3]}})" data-target="#confirmDeleteModel" >Supprimer</a>
                                    </div>
                                </div>
                                </td>
                        @else 
                            @if (count($data["h122"])>=2) 
                            <td>
                            @endif
                         <a href="{{URL::current()}}/122" class="btn btn-secondary btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                            <span class="text">Prendre RdV</span>
                        </a></td>
                           @if(count($data["h122"])==0) <td></td>
                            @endif 
                        @endif
                           
                            </tr> 

                                <tr><th>13h</th><td colspan="4"><div class="text-center"> Pause Dejeuner </div> </td>

                                    <tr><th >14h</td> 
                                  
                                        @if (count($data["h141"])>=2)
                                        <td>{{$data["h141"][0]}} <div class="dropdown no-arrow float-right">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                                                <div class="dropdown-header">Voulez vous :</div>
                                                <a class="dropdown-item" href="#">Modifer</a>
                                                
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#" data-toggle="modal" onclick="changemodel({{$data["h141"][1]}})" data-target="#confirmDeleteModel" >Supprimer</a>
                                            </div>
                                        </div>
                                        </td>                          
                                        @endif
                                        @if (count($data["h141"])>=4)
                                       
                                        <td>{{$data["h141"][2]}}
                                            <div class="dropdown no-arrow float-right">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                                                    <div class="dropdown-header">Voulez vous :</div>
                                                    <a class="dropdown-item" href="#">Modifer</a>
                                                    
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" onclick="changemodel({{$data["h141"][3]}})" data-target="#confirmDeleteModel" >Supprimer</a>
                                                </div>
                                            </div>
                                            </td>
                                    @else 
                                    
                                    <td> <a href="{{URL::current()}}/141" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Prendre RdV</span>
                                    </a></td>
                                       @if(count($data["h141"])==0) <td></td>
                                    @endif 
                                @endif
                                    
    
                                    <td style="border-left: 5px double rgb(99, 99, 99)">
                                    @if (count($data["h142"])>=2)
                                    {{$data["h142"][0]}} <div class="dropdown no-arrow float-right">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                                            <div class="dropdown-header">Voulez vous :</div>
                                            <a class="dropdown-item" href="#">Modifer</a>
                                            
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#" data-toggle="modal" onclick="changemodel({{$data["h142"][1]}})" data-target="#confirmDeleteModel" >Supprimer</a>
                                        </div>
                                    </div>
                                    </td>                          
                                    @endif
                                    @if (count($data["h142"])>=4)
                                   
                                    <td>{{$data["h142"][2]}}
                                        <div class="dropdown no-arrow float-right">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                                                <div class="dropdown-header">Voulez vous :</div>
                                                <a class="dropdown-item" href="#">Modifer</a>
                                                
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#" data-toggle="modal" onclick="changemodel({{$data["h142"][3]}})" data-target="#confirmDeleteModel" >Supprimer</a>
                                            </div>
                                        </div>
                                        </td>
                                @else 
                                    @if (count($data["h142"])>=2) 
                                    <td>
                                    @endif
                                 <a href="{{URL::current()}}/142" class="btn btn-secondary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-arrow-right"></i>
                                    </span>
                                    <span class="text">Prendre RdV</span>
                                </a></td>
                                   @if(count($data["h142"])==0) <td></td>
                                    @endif 
                                @endif
                                   
                                    </tr> 
                                    <tr><th >15h</td> 
                                  
                                        @if (count($data["h151"])>=2)
                                        <td>{{$data["h151"][0]}} <div class="dropdown no-arrow float-right">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                                                <div class="dropdown-header">Voulez vous :</div>
                                                <a class="dropdown-item" href="#">Modifer</a>
                                                
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#" data-toggle="modal" onclick="changemodel({{$data["h151"][1]}})" data-target="#confirmDeleteModel" >Supprimer</a>
                                            </div>
                                        </div>
                                        </td>                          
                                        @endif
                                        @if (count($data["h151"])>=4)
                                       
                                        <td>{{$data["h151"][2]}}
                                            <div class="dropdown no-arrow float-right">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                                                    <div class="dropdown-header">Voulez vous :</div>
                                                    <a class="dropdown-item" href="#">Modifer</a>
                                                    
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" onclick="changemodel({{$data["h151"][3]}})" data-target="#confirmDeleteModel" >Supprimer</a>
                                                </div>
                                            </div>
                                            </td>
                                    @else 
                                    
                                    <td> <a href="{{URL::current()}}/151" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Prendre RdV</span>
                                    </a></td>
                                       @if(count($data["h151"])==0) <td></td>
                                    @endif 
                                @endif
                                    
    
                                    <td style="border-left: 5px double rgb(99, 99, 99)">
                                    @if (count($data["h152"])>=2)
                                    {{$data["h152"][0]}} <div class="dropdown no-arrow float-right">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                                            <div class="dropdown-header">Voulez vous :</div>
                                            <a class="dropdown-item" href="#">Modifer</a>
                                            
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#" data-toggle="modal" onclick="changemodel({{$data["h152"][1]}})" data-target="#confirmDeleteModel" >Supprimer</a>
                                        </div>
                                    </div>
                                    </td>                          
                                    @endif
                                    @if (count($data["h152"])>=4)
                                   
                                    <td>{{$data["h152"][2]}}
                                        <div class="dropdown no-arrow float-right">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                                                <div class="dropdown-header">Voulez vous :</div>
                                                <a class="dropdown-item" href="#">Modifer</a>
                                                
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#" data-toggle="modal" onclick="changemodel({{$data["h152"][3]}})" data-target="#confirmDeleteModel" >Supprimer</a>
                                            </div>
                                        </div>
                                        </td>
                                @else 
                                    @if (count($data["h152"])>=2) 
                                    <td>
                                    @endif
                                 <a href="{{URL::current()}}/152" class="btn btn-secondary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-arrow-right"></i>
                                    </span>
                                    <span class="text">Prendre RdV</span>
                                </a></td>
                                   @if(count($data["h152"])==0) <td></td>
                                    @endif 
                                @endif
                                   
                                    </tr> 
                                    <tr><th >16h</td> 
                                  
                                        @if (count($data["h161"])>=2)
                                        <td>{{$data["h161"][0]}} <div class="dropdown no-arrow float-right">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                                                <div class="dropdown-header">Voulez vous :</div>
                                                <a class="dropdown-item" href="#">Modifer</a>
                                                
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#" data-toggle="modal" onclick="changemodel({{$data["h161"][1]}})" data-target="#confirmDeleteModel" >Supprimer</a>
                                            </div>
                                        </div>
                                        </td>                          
                                        @endif
                                        @if (count($data["h161"])>=4)
                                       
                                        <td>{{$data["h161"][2]}}
                                            <div class="dropdown no-arrow float-right">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                                                    <div class="dropdown-header">Voulez vous :</div>
                                                    <a class="dropdown-item" href="#">Modifer</a>
                                                    
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" onclick="changemodel({{$data["h161"][3]}})" data-target="#confirmDeleteModel" >Supprimer</a>
                                                </div>
                                            </div>
                                            </td>
                                    @else 
                                    
                                    <td> <a href="{{URL::current()}}/161" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Prendre RdV</span>
                                    </a></td>
                                       @if(count($data["h161"])==0) <td></td>
                                    @endif 
                                @endif
                                    
    
                                    <td style="border-left: 5px double rgb(99, 99, 99)">
                                    @if (count($data["h162"])>=2)
                                    {{$data["h162"][0]}} <div class="dropdown no-arrow float-right">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                                            <div class="dropdown-header">Voulez vous :</div>
                                            <a class="dropdown-item" href="#">Modifer</a>
                                            
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#" data-toggle="modal" onclick="changemodel({{$data["h162"][1]}})" data-target="#confirmDeleteModel" >Supprimer</a>
                                        </div>
                                    </div>
                                    </td>                          
                                    @endif
                                    @if (count($data["h162"])>=4)
                                   
                                    <td>{{$data["h162"][2]}}
                                        <div class="dropdown no-arrow float-right">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                                                <div class="dropdown-header">Voulez vous :</div>
                                                <a class="dropdown-item" href="#">Modifer</a>
                                                
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#" data-toggle="modal" onclick="changemodel({{$data["h162"][3]}})" data-target="#confirmDeleteModel" >Supprimer</a>
                                            </div>
                                        </div>
                                        </td>
                                @else 
                                    @if (count($data["h162"])>=2) 
                                    <td>
                                    @endif
                                 <a href="{{URL::current()}}/162" class="btn btn-secondary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-arrow-right"></i>
                                    </span>
                                    <span class="text">Prendre RdV</span>
                                </a></td>
                                   @if(count($data["h162"])==0) <td></td>
                                    @endif 
                                @endif
                                   
                                    </tr> 




















                                </tr>      
                                </table>