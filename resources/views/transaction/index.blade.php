<x-app-layout>
    <div id="content-page" class="content-page">
        <div class="nk-body npc-invest bg-lighter">
            <div class="nk-app-root">
              <div class="nk-wrap">
                <div class="nk-content nk-content-lg nk-content-fluid">
                  <div class="container-xl wide-lg">
                    <div class="nk-content-inner">
                      <div class="nk-content-body">
                        <div class="iq-card p-3">
                          <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                               <h4 class="card-title" style="font-weight: bold !important;">Transactions</h4>
                            </div>
                         </div>
                         <div class="iq-card-body">
                          <div class="table-responsive">
                            <table class="table table-striped table-borderless">
                              <tbody id="get_data">
                                  @if(count($deposits) >= 1 || count($transfers) >= 1)
                                  <thead>
                                    <tr>
                                      <th class="text-primary">Date</th>
                                      <th class="text-primary">Reference</th>
                                      <th class="text-primary">Amount</th>
                                      <th class="text-primary">Status</th>
                                      <th class="text-primary">Description</th>
                                    </tr>
                                  </thead>
                                  @foreach($deposits as $deposit)
                                  <tr>
                                      <td>{{ $deposit->created_at }}</td>
                                      <td style="font-size: 12px; font-weight: bold;">{{ $deposit->hash }}</td>
                                      <td>${{ $deposit->amount / 100 }}</td>
                                      <td style="font-size: 12px; font-weight: bold;"><p style="background-color: #ffbf43; color: #fff; width: fit-content; padding: 2px 5px; border-radius: 5px;">{{ $deposit->confirmation_status }}</p></td>
                                      <td>{{ $deposit->description }}</td>
                                    </tr>
                                  @endforeach
  
                                  @foreach($transfers as $transfer)
                                  <tr>
                                      <td>{{ $transfer->created_at }}</td>
                                      <td style="font-size: 12px; font-weight: bold;">{{ $transfer->hash }}</td>
                                      <td>${{ $transfer->amount / 100 }}</td>
                                      <td style="font-size: 12px; font-weight: bold;"><p style="background-color: #ffbf43; color: #fff; width: fit-content; padding: 2px 5px; border-radius: 5px;">{{ $transfer->status }}</p></td>
                                      <td>{{ $transfer->description }}</td>
                                    </tr>
                                  @endforeach
  
                                  @else
                                    <div class="w-100 text-center pt-5">
                                      <p>No transactions performed</p>
                                    </div>
                                  @endif
                              </tbody>
  
  
                            </table>
                            {{-- @if(count($transfers) == 0 && count($deposits) == 0)
                                    <tr>No transactions performed</tr>
                                  @endif --}}
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