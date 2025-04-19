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
                                                <h4 class="card-title" style="font-weight: bold !important;">
                                                    Transaction Details </h4>
                                            </div>
                                        </div>
                                        <div class="iq-card-body">
                                            <div class="table-responsive">
                                                <table class="table table-borderless">
                                                    <tbody id="get_data">
                                                        <tr>
                                                            <td><b>Amount</b>: ${{ $data->amount / 100 }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td><b>Date</b>: {{ $data->created_at }}</td>
                                                        </tr>
                                                        @if ($data->confirmation_status)
                                                            <tr>
                                                                <td><b>Payment Method</b>:
                                                                    {{ ucfirst($data->payment_method) }}</td>
                                                            </tr>
                                                        @endif
                                                        @if ($data->status)
                                                            <tr>
                                                                <td><b>To</b>:
                                                                    {{ ucfirst($data->receipient_name) }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>Account</b>:
                                                                    {{ ucfirst($data->account_number) }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>Destination Bank</b>:
                                                                    {{ ucfirst($data->receipient_bank) }}</td>
                                                            </tr>
                                                        @endif
                                                        @if ($data->swift_code)
                                                            <tr>
                                                                <td><b>SWIFT Code</b>:
                                                                    {{ $data->swift_code }}</td>
                                                            </tr>
                                                        @endif
                                                        <tr>
                                                            <td><b>Transaction Reference</b>: {{ $data->hash }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td><b>Description</b>: {{ $data->description }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span><b>Status</b>: </span>
                                                                @if ($data->confirmation_status)
                                                                    <span
                                                                        style="background-color: {{ $data->confirmation_status === 'pending' ? '#ffbf43' : '#22d172' }}; color: #fff; width: fit-content; padding: 2px 5px; border-radius: 5px; font-weight: bold;">{{ $data->confirmation_status === 'pending' ? 'Pending' : 'Successful' }}</span>
                                                                @else
                                                                    <span
                                                                        style="background-color: {{ $data->status === 'pending' ? '#ffbf43' : '#22d172' }}; color: #fff; width: fit-content; padding: 2px 5px; border-radius: 5px; font-weight: bold;">{{ $data->status === 'pending' ? 'Pending' : 'Successful' }}</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="w-100" style="text-align: end;">
                                                <a href="/transactions/receipt?data={{ $data }}">
                                                    <button type="submit" class="btn btn-primary mt-4"><i
                                                        class="ri-printer-fill mr-2"></i>Generate Receipt</button>
                                                </a>
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
