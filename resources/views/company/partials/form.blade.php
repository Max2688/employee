<p>
    <label for="name">@lang('home.name')</label>
    <input type="text" id="name" name="name" class="form-control" placeholder="@lang('home.name')" value="{{ $company->name or '' }}"  />
</p>

<p>
    <label for="email">@lang('home.email')</label>
    <input type="text" id="email" name="email" class="form-control" placeholder="@lang('home.email')" value="{{ $company->email or '' }}"  />
</p>

<p>
    <label for="website">@lang('home.website')</label>
    <input type="text" id="website" name="website" class="form-control" placeholder="@lang('home.website')" value="{{ $company->website or '' }}"  />
</p>