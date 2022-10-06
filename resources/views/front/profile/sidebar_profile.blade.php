<div class="profile-page-aside col-xl-3 col-lg-4 col-md-6 center-section order-1">
    <div class="profile-box">
        <div class="profile-box-header">
            <div class="profile-box-avatar">
                <img src="{{ asset('assets/img/svg/user.svg') }}" alt="">
            </div>
            <button data-toggle="modal" data-target="#myModal" class="profile-box-btn-edit">
                <i class="fa fa-pencil"></i>
            </button>
            <!-- Modal Core -->
            <div class="modal-share modal-width-custom modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">تغییر نمایه کاربری شما</h4>
                        </div>
                        <div class="modal-body">
                            <ul class="profile-avatars default text-center">
                                <li>
                                    <img class="profile-avatars-item" src="assets/img/svg/user.svg"></img>
                                </li>
                                <li>
                                    <img class="profile-avatars-item" src="assets/img/svg/avatar-1.svg"></img>
                                </li>
                                <li>
                                    <img class="profile-avatars-item" src="assets/img/svg/avatar-2.svg"></img>
                                </li>
                                <li>
                                    <img class="profile-avatars-item" src="assets/img/svg/avatar-3.svg"></img>
                                </li>
                                <li>
                                    <img class="profile-avatars-item" src="assets/img/svg/avatar-4.svg"></img>
                                </li>
                                <li>
                                    <img class="profile-avatars-item" src="assets/img/svg/avatar-5.svg"></img>
                                </li>
                                <li>
                                    <img class="profile-avatars-item" src="assets/img/svg/avatar-6.svg"></img>
                                </li>
                                <li>
                                    <img class="profile-avatars-item" src="assets/img/svg/avatar-7.svg"></img>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Core -->
        </div>
        <div class="profile-box-username">بهرامی راد</div>
        <div class="profile-box-tabs">
            <a href="password-change.html" class="profile-box-tab profile-box-tab-access">
                <i class="now-ui-icons ui-1_lock-circle-open text-success"></i>
                تغییر رمز
            </a>
            <a href="#" class="profile-box-tab profile-box-tab--sign-out">
                <i class="now-ui-icons media-1_button-power text-danger"></i>
                خروج از حساب
            </a>
        </div>
    </div>
    <div class="profile-menu hidden-md">
        <div class="profile-menu-header">حساب کاربری شما</div>
        <ul class="profile-menu-items">
            <li>
                <a href="{{ route('profile.home') }}" {{ request()->is('profile') ? 'class=active' : '' }}>
                    <i class="now-ui-icons users_single-02"></i>
                    پروفایل
                </a>
            </li>
            <li>
                <a href="{{ route('profile.orders') }}" {{ request()->is('profile/order') ? 'class=active' : '' }} >
                    <i class="now-ui-icons shopping_basket"></i>
                    اخرین سفارش
                </a>
            </li>
            <li>
                <a href="profile-orders-return.html">
                    <i class="now-ui-icons files_single-copy-04"></i>
                    درخواست مرجوعی
                </a>
            </li>
            <li>
                <a href="profile-favorites.html">
                    <i class="now-ui-icons ui-2_favourite-28"></i>
                    لیست علاقمندی ها
                </a>
            </li>
            <li>
                <a href="profile-personal-info.html">
                    <i class="now-ui-icons business_badge"></i>
                    اطلاعات شخصی
                </a>
            </li>
            <li>
                <a href="{{ route('profile.towfactore') }}" {{ request()->is('towfactore') ? 'class=active' : '' }} >
                    <i class="now-ui-icons business_badge "></i>
                 احراز هویت دو مرحله ای
                </a>
            </li>
        </ul>
    </div>
</div>
