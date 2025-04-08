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
                      <div class="iq-card p-3">
                        <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title" style="font-weight: bold !important;">Domestic Transfer</h4>
                        </div>
                     </div>
                        <div class="iq-card-body">
                          <p>Fill in the appropriate details below to transfer funds from your account to another account.</p>
                          <div class="card-inner">
                            <form
                              class="form-validate is-alter"
                              method="POST"
                              action="/domestic-transfer/otp"
                            >
                              @csrf
                              <p class="card-text mb-1 fw-medium">Amount</p>
                              <div class="form-control-wrap mb-3">
                                <div class="input-group">
                                  <input
                                    type="text"
                                    name="amount"
                                    class="form-control" required
                                  />
                                </div>
                              </div>
                              <p class="card-text mb-1 fw-medium">Account Number</p>
                              <div class="form-control-wrap mb-3">
                                <div class="input-group">
                                  <input
                                    type="text"
                                    name="account_number"
                                    class="form-control" required
                                  />
                                </div>
                              </div>
                              <p class="card-text mb-1 fw-medium">Receipient Name</p>
                              <div class="form-control-wrap mb-3">
                                <div class="input-group">
                                  <input
                                    type="text"
                                    name="receipient_name"
                                    class="form-control" required
                                  />
                                </div>
                              </div>
                              <p class="card-text mb-1 fw-medium">Receipient Bank</p>
                              <div class="form-control-wrap mb-3">
                                <div class="input-group">
                                  <input
                                    type="text"
                                    name="receipient_bank"
                                    class="form-control" required
                                  />
                                </div>
                              </div>
                              <p class="card-text mb-1 fw-medium">Description</p>
                              <div class="form-control-wrap mb-3">
                                <div class="input-group">
                                  <input
                                    type="text"
                                    name="description"
                                    class="form-control" required
                                  />
                                </div>
                              </div>
                              <button type="submit" class="btn btn-primary mt-4">
                                Transfer
                              </button>
                            </form>
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