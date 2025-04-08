<x-app-layout>
    <div id="content-page" class="content-page">
        <div class="nk-body npc-invest bg-lighter">
            <div class="nk-app-root">
              <div class="nk-wrap">
                <div class="nk-content nk-content-lg nk-content-fluid">
                  <div class="container-xl wide-lg">
                    <div class="nk-content-inner">
                        @if(session('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('message') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        @endif
                      <div class="iq-card p-3">
                        <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title" style="font-weight: bold !important;">OTP Token</h4>
                          </div>
                       </div>
                        
                        <div class="iq-card-body">
                          <p>An OTP Token was sent to your email address. Please provide the token below to continue your transaction.</p>
                          <div class="card-inner">
                            <form
                              class="form-validate is-alter"
                              method="POST"
                              action="/international-transfer"
                            >
                              @csrf
                              
                              <input name="amount" value="{{ $amount }}" required="" hidden="">
                              <input name="account_number" value="{{ $account_number }}" required="" hidden="">
                              <input name="receipient_name" value="{{ $receipient_name }}" required="" hidden="">
                              <input name="receipient_bank" value="{{ $receipient_bank }}" required="" hidden="">
                              <input name="swift_code" value="{{ $swift_code }}" required="" hidden="">
                              <input name="description" value="{{ $description }}" required="" hidden="">

                              <p class="card-text mb-1 fw-medium">Token</p>
                              <div class="form-control-wrap mb-3">
                                <div class="input-group">
                                  <input
                                    type="text"
                                    name="otp_token"
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