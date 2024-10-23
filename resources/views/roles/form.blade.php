   <div class="form-body">
       <div class="form-group">
           <label for="name"> @lang('trans.name')</label>
           {!! Form::text('name',null,[
           "class" => "form-control",
           ]) !!}
           @error('name')
           @foreach ($errors->get('name') as $message)
           <span class="text-danger">{{ $message }}</span>
           @endforeach
           @enderror
       </div>

       <div class="form-group">
           <label for="name"> @lang('trans.permissions')</label>
           <div class="row">
               @foreach ($groups as $key => $permissions)

               <div class="col-md-12 row">
                   <h4 class="col-md-12 mt-2 mb-2 bold">{{ __("trans.$key") }}</h4>
                   @foreach ($permissions as $permission )
                   <div class="col-md-2">
                       <div class="form-check">
                           {!! Form::checkbox('permissions[]', $permission->id, null, [
                           "class" => "form-check-input",
                           'id' => 'defaultCheck'.$permission->id,
                           ]) !!}
                           <label class="form-check-label" for="defaultCheck{{ $permission->id }}">
                               {{ __("trans.$permission->display_name") }}
                           </label>

                       </div>
                   </div>

                   @endforeach

               </div>

               @endforeach
               @error('permissions')

               @foreach ($errors->get('permissions') as $message)
               <span class="text-danger">{{ $message }}</span>
               @endforeach

               @enderror
           </div>


           <button type="submit" class="btn btn-md btn-success mt-2">
               <i class="la la-check-square-o"></i> @lang('trans.save')
           </button>


       </div>
