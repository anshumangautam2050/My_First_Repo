@extends('templates.veilingburo-lead.master')

@section('title', 'Meld jouw kavel hier aan')
@section('description', 'Particulier of via een bedrijf goederen verkopen via online veilingen? Meld je hier aan als verkoper en geef je gewenste kavel door.')


@section('content')
        <div class="kavel-form">
            <h1 class="text-center">Meld jouw kavel aan!</h1>
            <p class="text-center">Fijn dat ook u deel wil uitmaken van ons verkopersnetwerk.</p>
            @include('flash::errors')
            <p class="font-weight-bold">Wat voor verkoper bent u?</p>
            <form method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="subject" value="Aanmelding kavel">
                <div class="d-flex">
                    <div class="w-50">
                        <div class="custom-control custom-radio"> 
                            <input name="seller" value="1" {{old('seller')==1||empty(old('seller')) ? 'checked' : ''}} id="formCustomCheckbox125" type="radio" class="custom-control-input"> 
                            <label class="custom-control-label" for="formCustomCheckbox125">Particulier</label>                         
                        </div>
                    </div>
                    <div class="w-50">
                        <div class="custom-control custom-radio"> 
                            <input name="seller" value="company" {{old('seller')=="company" ? 'checked' : ''}} id="formCustomCheckbox126" type="radio" class="custom-control-input"> 
                            <label class="custom-control-label" for="formCustomCheckbox126">Bedrijf</label>                         
                        </div>                     
                    </div>
                </div>
                <div id="form-company" {{old('seller')==1||empty(old('seller')) ? 'style=display:none' : ''}}>
                    <div class="form-section d-flex justify-content-between align-items-center">
                        <label class="uwbedrijf">Uw Bedrijf</label>
                        <div class="form-hr"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group"> 
                                <input name="company" value="{{old('company')}}" type="text" class="form-control" placeholder="Bedrijfnaam"> 
                            </div>                     
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"> 
                                <input name="vat_number" value="{{old('vat_number')}}" type="text" class="form-control" placeholder="BTW-nummer"> 
                            </div>                     
                        </div>
                    </div>
                </div>
                <div class="form-section d-flex justify-content-between align-items-center">
                    <label class="uwgegevens">Uw Gegevens</label>
                    <div class="form-hr"></div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group"> 
                            <input name="first_name" value="{{old('first_name')}}" type="text" class="form-control" placeholder="Uw Voornaam"> 
                        </div>                     
                    </div>
                    <div class="col-md-6">
                        <div class="form-group"> 
                            <input name="last_name" value="{{old('last_name')}}" type="text" class="form-control" placeholder="Uw Achternaam"> 
                        </div>                     
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group"> 
                            <input name="email" value="{{old('email')}}" type="email" class="form-control" placeholder="Uw Email">
                            <div class="invalid-feedback">The email must be a valid email address.</div>                         
                        </div>                     
                    </div>
                    <div class="col-md-6">
                        <div class="form-group"> 
                            <input name="mobile" value="{{old('mobile')}}" type="text" class="form-control" placeholder="Uw mobiel nummer"> 
                        </div>                     
                    </div>
                </div>
                <div class="form-section d-flex justify-content-between align-items-center">
                    <label class="uwbedrijf">Uw Kavel</label>
                    <div class="form-hr"></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group"> 
                            <input type="text" class="form-control" placeholder="Titel van de kavel"> 
                        </div>                     
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group"> 
                            <input name="amount" value="{{old('amount')}}" type="number" class="form-control" placeholder="Aantal"> 
                        </div>                     
                    </div>
                    <div class="col-md-6">
                        <div class="form-group"> 
                            <input name="min_price" value="{{old('min_price')}}" type="number" class="form-control" placeholder="Min. verkooprijs per stuk"> 
                        </div>                     
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group"> 
                            <textarea name="description" class="form-control" rows="3" placeholder="Beschrijf je kavel">{{old('description')}}</textarea>                         
                        </div>                     
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="custom-file"> 
                            <input name="pictures[]" multiple accept="image/*" type="file" class="custom-file-input"> 
                            <label class="custom-file-label" for="custom-file1">Upload foto's</label>                         
                        </div>                     
                    </div>
                </div>
                <p class="privacy text-center">Wij respecteren uw <a href="privacy">privacy</a>. Uw gegevens worden altijd vertrouwelijk behandeld.</p>
                <button type="submit" class="btn text-white btn-orange btn-success">
                    <i class="fa fa-plus pr-2"></i>Kavel aanmelden
                </button>
            </form>
        </div>


        <div class="modal fade" id="commonModal" tabindex="-1" role="dialog" aria-labelledby="newsletterModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <form role="form">
                @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <div id="commonData"></div>    
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
</div>




@endsection