<x-app-layout>
    <div id="content-page" class="content-page">
        <div class="nk-body npc-invest bg-lighter">
          <div class="nk-app-root">
            <div class="nk-wrap">
              <div class="nk-content nk-content-lg nk-content-fluid">
                <div class="container-xl wide-lg">
                  <div class="nk-content-inner">
                    @if(session('message'))
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <strong>{{ session('message') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                    @endif
                    <div class="iq-card">
                      <div class="iq-card p-3">
                        <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title" style="font-weight: bold !important;">Deposits</h4>
                          </div>
                       </div>
        
                      <div class="iq-card-body">
                        <p>Fill in the appropriate details below to deposit funds into your account.</p>
                        <div class="card-inner">
                          <p class="card-text mb-1 fw-medium">Amount:</p>
                          <form
                            class="form-validate is-alter"
                            method="post"
                            action="/deposit/initiate"
                          >
                            @csrf
                            <div class="form-control-wrap mb-3">
                              <div class="input-group">
                                <input type="text" name="amount" class="form-control" required />
                              </div>
                            </div>
                            <p class="card-text mb-1 fw-medium">Method:</p>
                            <div class="form-control-wrap">
                              <select
                                class="form-control invalid"
                                name="payment_method"
                                required
                              >
                                <option value="bitcoin">Bitcoin</option>
                                <option value="ethereum">Ethereum</option>
                                <option value="usdt">USDT</option>
                                <option value="binance">Binance Coin(BNB)</option>
                                <!-- <option value="litecoin">Litecoin</option> -->
                              </select>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4">Deposit</button>
                          </form>
                        </div>
                      </div>
        
                      <div class="iq-card-body">
                        <div class="card-header">
                          <h4 class="mb-0 py-1" style="font-weight: bold !important;">Pending Deposits</h4>
                          <div class="card-header-action"></div>
                        </div>
                        <div class="card-body p-0">
                          <div class="table-responsive">
                            <table class="table table-striped table-borderless">
                              <thead>
                                <tr>
                                  <th>Date</th>
                                  <th>Reference</th>
                                  <th>Amount</th>
                                  <th>Status</th>
                                  <th>Description</th>
                                </tr>
                              </thead>
        
                              <tbody id="get_data">
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
            </div>
          </div>
          </div>
        </div>
      </div>
      
</x-app-layout>