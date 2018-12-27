<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>{{ config('app.name') }}</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
      <div class="container" id="app">
        
   
        <div class="box box-primary lead-form">
            <div class="box-header with-border">
                <h3 class="box-title">Lead form</h3>
            </div>
            @include('flash::message')
            @include('flash::errors')
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="subject" value="Aanmelding kavel">
                <div class="box-body">
                    <div class="form-group">
                        <label for="iscompany">Corporate</label>
                        <input name="is_company" type="hidden">
                        <input name="is_company" value="1" type="checkbox" class="form-control" id="iscompany" v-model="is_company" @change="checkCompany">
                    </div>
                    <div class="form-group">
                        <label for="isperson">Personal</label>
                        <input name="is_person" type="hidden">
                        <input name="is_person" value="1" type="checkbox" class="form-control" id="isperson" v-model="is_person" @change="checkPerson">
                    </div>
                    <div class="form-group" v-if="is_company">
                        <label for="company">Company name</label>
                        <input name="company" value="{{old('company')}}" type="text" class="form-control" id="companyname" placeholder="Enter company name">
                    </div>
                    <div class="form-group" v-if="is_company">
                        <label for="vat">VAT number</label>
                        <input name="vat_number" value="{{old('vat_number')}}" type="text" class="form-control" id="vat" placeholder="Enter vat number">
                    </div>
                    <div class="form-group">
                        <label for="firstname">First name</label>
                        <input name="first_name" value="{{old('first_name')}}" type="text" class="form-control" id="firstname" placeholder="Enter first name">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last name</label>
                        <input name="last_name" value="{{old('last_name')}}" type="text" class="form-control" id="lastname" placeholder="Enter last name">
                    </div>
                   
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input name="email" value="{{old('email')}}" type="email" class="form-control" id="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input name="mobile" value="{{old('mobile')}}" type="text" class="form-control" id="mobile" placeholder="Enter mobile">
                    </div>
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input name="amount" value="{{old('amount')}}" type="text" class="form-control" id="amount" placeholder="Enter amount">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input name="min_price" value="{{old('min_price')}}" type="text" class="form-control" id="price" placeholder="Enter price">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" rows="5" id="description" placeholder="Enter description">{{old('description')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="upload">Upload pictures</label>
                        <input name="pictures[]" type="file" id="upload" multiple accept="image/*">
                        <p class="help-block">Max 1 mb per picture</p>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </form>
        </div>
      </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js"></script>
      <script>
        new Vue({
            el: '#app',
            data: {
                is_company: false,
                is_person: true,
            },
            methods: {
                checkPerson: function (){
                    if(this.is_person==true)
                    {
                        this.is_company = false; 
                    }
                    else
                    {
                        this.is_company = true;
                    }
                },
                checkCompany: function (){
                    if(this.is_company==true)
                    {
                        this.is_person = false; 
                    }
                    else
                    {
                        this.is_person = true;
                    }
                },
            }
        });
      </script>
    </body>
</html>
