<x-app-layout>
    <div id="content-page" class="content-page">
        <div class="nk-body npc-invest bg-lighter">
          <div class="nk-app-root">
            <div class="nk-wrap">
              <div class="nk-content nk-content-lg nk-content-fluid">
                <div class="container-xl wide-lg">
                  <div class="nk-content-inner">
                    <div class="iq-card">
                      <div class="iq-card p-3 pb-4">
                        <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title" style="font-weight: bold !important;">Payment Page</h4>
                          </div>
                       </div>
        
                      <div class="iq-card-body text-center">
                        <form action="/deposit" method="post">
                            @csrf
                            <input name="amount" value="{{ $amount }}" required="" hidden="">
                        <input name="payment_method" value="{{ $payment_method }}" required="" hidden="">
                            <p> Make a transfer ${{ $amount }} to the company account below and click on "Process Payment" so your deposit will
                                be processed.</p>
                            <div class="card-inner">
                              <div class="col-12 col-md-12 col-lg-12 col-lg-6">
                                <div class="card">
                                    <h4 style="text-align: center; font-weight: bold;" class="mb-2">Transaction Details</h4>
    
                                    <p style="font-weight: bold; margin-bottom: 0;">Amount - ${{ $amount }}</p>
                                    <p style="font-weight: bold;" class="mb-3">Payment Method - {{ ucfirst($payment_method) }}</p>
    
    
                                    <div class="mx-auto">
                                      <input id="myInput" class="form-control" type="text" readonly="" style="color: grey;"
                                        value="{{ trim($wallet_address) }}"><a class="btn btn-primary" style="width: 100%;"
                                        onclick="myFunction1()"><span style="color:white;">Copy {{ ucfirst($payment_method) }} Address
                                        </span></a><br><br>
                                    </div>
    
                                    <hr>

                                    <div class="mt-2">
                                      <span>After making payment, input your transaction hash below for payment confirmation.</span><br>
    
                                          <input placeholder="Enter Transaction Hash" class="mx-auto mt-2 form-control" type="text" required="" style="color: grey;" name="payment_hash">
                                    </div>
                                      
    
    
                                </div>
    
                                <button type="submit" class="btn btn-primary mx-auto mt-2 p-3">Process Payment</button>
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
        </div>
      </div>

      <script>
        function myFunction1() {
            /* Get the text field */
            var copyText = document.getElementById("myInput");

            /* Select the text field */
            copyText.select();
            copyText.setSelectionRange(0, 99999); /*For mobile devices*/

            /* Copy the text inside the text field */
            document.execCommand("copy");

            /* Alert the copied text */
            alert("Copied Ethereum wallet: " + copyText.value);
        }
    </script>

      
</x-app-layout>