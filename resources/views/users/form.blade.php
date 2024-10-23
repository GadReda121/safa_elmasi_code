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
           <label for="email"> @lang('trans.email')</label>
           {!! Form::email('email',null,[
           "class" => "form-control",
           ]) !!}
           @error('email')
           @foreach ($errors->get('email') as $message)
           <span class="text-danger">{{ $message }}</span>
           @endforeach
           @enderror
       </div>
       <div class="form-group">
           <label for="role"> @lang('trans.role')</label>
           {!! Form::select('role',
           [
           '' => '--'
           ] +
           $roles
           ,null,[
           "class" => "form-control",
           ]
           ) !!}
           @error('role')
           @foreach ($errors->get('role') as $message)
           <span class="text-danger">{{ $message }}</span>
           @endforeach
           @enderror
       </div>


       <div class="form-group">
           <label for="password"> @lang('trans.password')</label>
           {!! Form::password('password',[
           "class" => "form-control",
           ]) !!}
           @error('password')
           @foreach ($errors->get('password') as $message)
           <span class="text-danger">{{ $message }}</span>
           @endforeach
           @enderror
       </div>

       <div class="form-group">
           <label for="password_confirmation"> @lang('trans.password_confirmation')</label>
           {!! Form::password('password_confirmation',[
           "class" => "form-control",
           ]) !!}
           @error('password_confirmation')
           @foreach ($errors->get('password_confirmation') as $message)
           <span class="text-danger">{{ $message }}</span>
           @endforeach
           @enderror
       </div>
       <button type="submit" class="btn btn-md btn-success mt-2">
           <i class="la la-check-square-o"></i> @lang('trans.save')
       </button>


   </div>
