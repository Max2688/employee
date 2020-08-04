<p>
    <label for="name">Name</label>
    <input type="text" id="name" name="name" class="form-control" placeholder="Name" value="{{ $company->name or '' }}" required />
</p>

<p>
    <label for="email">Email</label>
    <input type="text" id="email" name="email" class="form-control" placeholder="Email" value="{{ $company->email or '' }}"  />
</p>

<p>
    <label for="website">Website</label>
    <input type="text" id="website" name="website" class="form-control" placeholder="Website" value="{{ $company->website or '' }}"  />
</p>