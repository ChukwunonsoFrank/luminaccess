<x-app-layout>
    <div id="content-page" class="content-page">
        <div class="container-fluid">
           <div class="row">
              <div class="col-sm-6 col-md-6 col-lg-4">
                 <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-body iq-box-relative">
                       <div class="iq-box-absolute icon iq-icon-box rounded-circle iq-bg-primary">
                          <i class="ri-focus-2-line"></i>
                       </div>
                       <p class="text-secondary">Balance</p>
                       <div class="d-flex align-items-center justify-content-between">
                          <h4><b>${{ auth()->user()->balance / 100 }}</b></h4>
                          <div id="iq-chart-box1"></div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                 <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-body iq-box-relative">
                       <div class="iq-box-absolute icon iq-icon-box rounded-circle iq-bg-danger">
                          <i class="ri-pantone-line"></i>
                       </div>
                       <p class="text-secondary">Total Debit</p>
                       <div class="d-flex align-items-center justify-content-between">
                          <h4><b>${{ auth()->user()->total_withdrawn / 100 }}</b></h4>
                          <div id="iq-chart-box2"></div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                 <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-body iq-box-relative">
                       <div class="iq-box-absolute icon iq-icon-box rounded-circle iq-bg-success">
                          <i class="ri-database-2-line"></i>
                       </div>
                       <p class="text-secondary">Total Credit</p>
                       <div class="d-flex align-items-center justify-content-between">
                          <h4><b>${{ auth()->user()->total_deposited / 100 }}</b></h4>
                          <div id="iq-chart-box3"></div>
                       </div>
                    </div>
                 </div>
              </div>
              {{-- <div class="col-lg-12">
                 <div class="iq-card p-3 iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-header d-flex justify-content-between">
                       <div class="iq-header-title">
                          <h4 class="card-title" style="font-weight: bold !important;">Spendings Stats </h4>
                       </div>
                       <div class="iq-card-header-toolbar d-flex align-items-center">
                          <ul class="nav nav-pills">
                             <li class="nav-item">
                                <a href="#" class="nav-link active">Personal</a>
                             </li>
                             <li class="nav-item">
                                <a href="#" class="nav-link">Business</a>
                             </li>
                             <li class="nav-item">
                                <a href="#" class="nav-link">Credit</a>
                             </li>
                          </ul>
                       </div>
                    </div>
                    <div class="iq-card-body row m-0 align-items-center pb-0">
                       <div class="col-md-8">
                          <div id="iq-income-chart"></div>
                       </div>
                       <div class="col-md-4">
                          <div class="chart-data-block">
                             <h4><b>Total</b></h4>
                             <h2><b>${{ auth()->user()->total_deposited / 100 + auth()->user()->total_withdrawn / 100 }} </b></h2>
                             <p>Transactions This Week</p>
                             <div class="chart-box d-flex align-items-center justify-content-between mt-5 mb-5">
                                <div id="iq-chart-boxleft"></div>
                                <div id="iq-chart-boxright"></div>
                             </div>
                             <div class="mt-3 pr-3">
                                <div class="d-flex align-items-center justify-content-between">
                                   <div class="d-flex align-items-center">
                                      <span class="bg-primary p-1 rounded mr-2"></span>
                                      <p class="mb-0">Credit</p>
                                   </div>
                                   <h6><b>${{ auth()->user()->total_deposited / 100  }}</b></h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                   <div class="d-flex align-items-center">
                                      <span class="bg-danger p-1 rounded mr-2"></span>
                                      <p class="mb-0">Debit</p>
                                   </div>
                                   <h6><b>${{ auth()->user()->total_withdrawn / 100 }}</b></h6>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div> --}}
              <div class="col-lg-12">
                 <div class="iq-card p-3 iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-header d-flex justify-content-between">
                       <div class="iq-header-title">
                          <h4 class="card-title" style="font-weight: bold !important;">Pending Deposits</h4>
                       </div>
                       <div class="iq-card-header-toolbar d-flex align-items-center">
                          <div class="dropdown">
                             <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                             <i class="ri-more-fill"></i>
                             </span>
                             <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                                <a class="dropdown-item" href="/transactions"><i class="ri-eye-fill mr-2"></i>View more</a>
                                <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="iq-card-body">
                       <div class="table-responsive">
                          <table class="table mb-0">
                             <thead class="thead-light">
                                <tr>
                                   <th scope="col">Date</th>
                                   <th scope="col">Invoice</th>
                                   <th scope="col">Amount</th>
                                   <th scope="col">Status</th>
                                   <th scope="col">Description</th>
                                </tr>
                             </thead>
                             <tbody>
                                @if(count($pending_deposits) >= 1)
                                @foreach($pending_deposits as $deposit)
                                  <tr>
                                    <td>{{ $deposit->created_at }}</td>
                                    <td>{{ $deposit->hash }}</td>
                                    <td>${{ $deposit->amount / 100 }}</td>
                                    <td>
                                       <div class="badge badge-pill badge-warning">
                                        {{ $deposit->confirmation_status }}
                                       </div>
                                    </td>
                                    <td>{{ $deposit->description }}</td>
                                 </tr>
                                @endforeach
                                @else
                                 <td colspan="10" style="font-size: 12px; text-align: center;">You Have No Pending Deposits. </td>
                                @endif
                             </tbody>
                          </table>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h3 class="p-6 text-gray-900">Balance: ${{ auth()->user()->balance }}</h3>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-2">
                <h3 class="p-6 text-gray-900">Total Debit: ${{ auth()->user()->total_withdrawn }}</h3>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-2">
                <h3 class="p-6 text-gray-900">Total Credit: ${{ auth()->user()->total_deposited }}</h3>
            </div>
        </div>
    </div> --}}
</x-app-layout>
