<div class="email-leftbar card">
    <a href="{{ route('message.create') }}" class="btn btn-danger btn-block waves-effect waves-light">
        جدید <i class="fa fa-plus" aria-hidden="true"></i>
    </a>
    <div class="mail-list mt-4">
        <a href="{{ route('message.index') }}" class="active"><i class="mdi mdi-email-outline font-size-16 align-middle me-2"></i> صندوق ورودی
            <span class="ms-1 float-end">({{ Redis::zScore('messages',"messageCount:user:" . Auth::id()) }})</span></a>
        <a href="javascript: void(0)"><i class="mdi mdi-file-outline font-size-16 align-middle me-2"></i>پیش نویس</a>
        <a href="#"><i class="mdi mdi-email-check-outline font-size-16 align-middle me-2"></i>ارسال شده</a>
        <a href="{{ route('message.trash') }}"><i class="mdi mdi-trash-can-outline font-size-16 align-middle me-2"></i>زباله دان</a>
    </div>


    <h6 class="mt-4">Labels</h6>

    <div class="mail-list mt-1">
        <a href="#"><span class="mdi mdi-circle-outline text-info float-end"></span>Theme Support</a>
        <a href="#"><span class="mdi mdi-circle-outline text-warning float-end"></span>Freelance</a>
        <a href="#"><span class="mdi mdi-circle-outline text-primary float-end"></span>Social</a>
        <a href="#"><span class="mdi mdi-circle-outline text-danger float-end"></span>Friends</a>
        <a href="#"><span class="mdi mdi-circle-outline text-success float-end"></span>Family</a>
    </div>

    <h6 class="mt-4">Chat</h6>

    <div class="mt-2">
        <a href="#" class="d-flex align-items-start">
            <img class="d-flex me-3 rounded-circle" src="http://minible-h-rtl.laravel.themesbrand.com/assets/images/users/avatar-2.jpg" alt="Generic placeholder image" height="36">
            <div class="flex-1 chat-user-box overflow-hidden">
                <p class="user-title m-0">Scott Median</p>
                <p class="text-muted text-truncate">Hello</p>
            </div>
        </a>

        <a href="#" class="d-flex align-items-start">
            <img class="d-flex me-3 rounded-circle" src="http://minible-h-rtl.laravel.themesbrand.com/assets/images/users/avatar-3.jpg" alt="Generic placeholder image" height="36">
            <div class="flex-1 chat-user-box overflow-hidden">
                <p class="user-title m-0">Julian Rosa</p>
                <p class="text-muted text-truncate">What about our next..</p>
            </div>
        </a>

        <a href="#" class="d-flex align-items-start">
            <img class="d-flex me-3 rounded-circle" src="http://minible-h-rtl.laravel.themesbrand.com/assets/images/users/avatar-4.jpg" alt="Generic placeholder image" height="36">
            <div class="flex-1 chat-user-box overflow-hidden">
                <p class="user-title m-0">David Medina</p>
                <p class="text-muted text-truncate">Yeah everything is fine</p>
            </div>
        </a>

        <a href="#" class="d-flex align-items-start">
            <img class="d-flex me-3 rounded-circle" src="http://minible-h-rtl.laravel.themesbrand.com/assets/images/users/avatar-6.jpg" alt="Generic placeholder image" height="36">
            <div class="flex-1 chat-user-box overflow-hidden">
                <p class="user-title m-0">Jay Baker</p>
                <p class="text-muted text-truncate">Wow that's great</p>
            </div>
        </a>

    </div>
</div>