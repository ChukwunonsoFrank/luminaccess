<x-admin>
    <div class="container-fluid">
        <div class="row">
      
          <x-admin-navbar></x-admin-navbar>
      
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Dashboard</h1>
      
            <section class="row text-center placeholders">
              <div class="col-6 col-sm-3">
                <div class="panel panel-info">
                  <div class="panel-heading">Header</div>
                  <div class="panel-body">
                    <h4>123</h4>
                    <p>Data</p>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-3">
                <div class="panel panel-success">
                  <div class="panel-heading">Header</div>
                  <div class="panel-body">
                    <h4>123</h4>
                    <p>Data</p>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-3">
                <div class="panel panel-warning">
                  <div class="panel-heading">Header</div>
                  <div class="panel-body">
                    <h4>123</h4>
                    <p>Data</p>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-3">
                <div class="panel panel-danger">
                  <div class="panel-heading">Header</div>
                  <div class="panel-body">
                    <h4>123</h4>
                    <p>Data</p>
                  </div>
                </div>
              </div>
            </section>
      
      
      
            <h1 class="sub-header">
              <div class="btn-group pull-right" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-primary">Print</button>
              <button type="button" class="btn btn-primary">Export</button>
            </div>
              Table
            </h1>
            <div class="table-responsive">
              <table class="table table-hover table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Balance</th>
                    <th>Email</th>
                    <th>Account Number</th>
                    <th></th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($users as $user)
                    <tr>
                      <td>#</td>
                      <td>{{ $user->fullname }}</td>
                      <td>${{ $user->balance / 100 }}</td>
                      <td>{{ $user->email }}</td>
                      <td>{{ $user->account_number }}</td>
                      <td style="width: 50px;">
                        <a href="/admin/users/debit-or-credit?id={{ $user->id }}" class="btn btn-sm btn-warning">
                          Debit/Credit
                        </a>
                      </td>
                      <td style="width: 100px">
                        <a href="/admin/users/details?id={{ $user->id }}" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit user">
                          <span class="fas fa-pen"></span>
                        </a>
                        <a href="/admin/users/delete?id={{ $user->id }}" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="" onclick="return confirm('Are you sure?')" data-original-title="Delete user">
                          <span class="fas fa-trash"></span>
                        </a>
                      </td>
                      <td>
                        @if ($user->restricted)
                          <a href="/admin/users/suspend?id={{ $user->id }}" class="btn btn-sm btn-warning">
                            Unban
                          </a>
                        @else
                          <a href="/admin/users/suspend?id={{ $user->id }}" class="btn btn-sm btn-success">
                            Ban
                          </a>
                        @endif
                      </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
      
          </div>
      
      
      
      </div>
      </div>
</x-admin>