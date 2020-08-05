<p>
    <label for="name">@lang('home.name')</label>
    <input type="text" id="name" name="firstname" class="form-control" placeholder="@lang('home.name')" value="{{ $employee->firstname or '' }}" required />
</p>

<p>
    <label for="last">@lang('home.lastname')</label>
    <input type="text" id="last" name="lastname" class="form-control" placeholder="@lang('home.lastname')" value="{{ $employee->lastname or '' }}"  required/>
</p>

<p>
    <label for="email">@lang('home.email')</label>
    <input type="text" id="email" name="email" class="form-control" placeholder="@lang('home.email')" value="{{ $employee->email or '' }}"  />
</p>
<p>
    <label for="phone">@lang('home.phone')</label>
    <input type="text" id="phone" name="phone" class="form-control" placeholder="@lang('home.phone')" value="{{ $employee->phone or '' }}"  />
</p>
<p>
    <label for="company">Company</label>
    <select name="company_id" id="company" class="form-control">
        @foreach ($companies as $company)

            <option value="{{$company->id or ''}}"
                @isset( $employee->company_id )
                    @if ($company->id == $employee->company_id)
                    selected="selected"
                @endif
                    @endisset
            >{{$company->name or ''}}</option>

        @endforeach
    </select>
</p>