<x-marketing>
    <div class="container">
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="fc_career_box rounded mt-0">
                <x-auth-session-status class="mb-4" :status="session('status')" />
                @if (session('message'))
                    <div class="alert alert-danger show" role="alert">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="site_logo mb-5 text-center">
                    <a class="site_link" href="{{ route('home') }}">
                        <img src="assets/images/site_logo/site_logo_black_3.svg" width="200" alt="Site Logo Black">
                    </a>
                </div>
                <h3 class="title_text text-black">Password Reset
                </h3>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group text-start">
                            <label for="email" class="mb-2 fw-bold" style="font-size: 14px;">Email Address</label>
                            <input class="form-control" type="email" id="email" name="email"
                                required autofocus>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn bg-dark rounded-pill" type="submit">
                            <span class="btn_label">Email Password Reset Link</span>
                            <span class="btn_icon"><svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.7071 8.70711C20.0976 8.31658 20.0976 7.68342 19.7071 7.29289L13.3431 0.928932C12.9526 0.538408 12.3195 0.538408 11.9289 0.928932C11.5384 1.31946 11.5384 1.95262 11.9289 2.34315L17.5858 8L11.9289 13.6569C11.5384 14.0474 11.5384 14.6805 11.9289 15.0711C12.3195 15.4616 12.9526 15.4616 13.3431 15.0711L19.7071 8.70711ZM0 9H19V7H0V9Z"
                                        fill="white" />
                                </svg></span>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div> 
</x-marketing>