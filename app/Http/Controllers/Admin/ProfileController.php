public function add( )
{
    return view('admin.profile.create');
}

public function create( )
{
    return redirect('admin/profile/create');
}

public function edit ( )
{
    return view('admin.profile.adit');
}

public function update( )
{
    return redirect('admin/profile/edit');
}
