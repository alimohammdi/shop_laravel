<nav>
    <ul class="sidebar-menu" data-widget="tree">
        <li class="{{  request()->is('dashboard') ? 'active' : '' }}"><a href="{{ route('dashboard.home') }}"><i class="zmdi zmdi-view-dashboard"></i><span>داشبورد</span></a></li>
        <li class="treeview @php if( (request()->is('dashboard/users')) || ( request()->is('dashboard/users/create'))){echo  'active';} @endphp">
            <a href="javascript:void(0)"><i class="zmdi zmdi-apps "></i> <span>مدیریت کاربران</span> <i class="fa fa-angle-left"></i></a>
            <ul class="treeview-menu">
                <li ><a href="{{ route('users.index') }}" style="{{ request()->is('dashboard/users') ? 'color:black' : ''}}">نمایش کاربران</a></li>
                <li ><a href="{{ route('users.create') }}" style="{{ request()->is('dashboard/users/create') ? 'color:black' : ''}}">اضافه کردن کاربر</a></li>
            </ul>
        </li>
        <li class="treeview @php if( (request()->is('dashboard/products')) || ( request()->is('dashboard/products/create'))){echo  'active';} @endphp">
            <a href="javascript:void(0)"><i class="zmdi zmdi-apps "></i> <span>مدیریت محصولات</span> <i class="fa fa-angle-left"></i></a>
            <ul class="treeview-menu">
                <li ><a href="{{ route('products.index') }}" style="{{ request()->is('dashboard/products') ? 'color:black' : ''}}">نمایش محصولات </a></li>
                <li ><a href="{{ route('products.create') }}" style="{{ request()->is('dashboard/products/create') ? 'color:black' : ''}}">اضافه کردن محصول</a></li>
            </ul>
        </li>
        <li class="treeview @php if( (request()->is('order/index')) ){echo  'active';} @endphp">
            <a href="javascript:void(0)"><i class="zmdi zmdi-apps "></i> <span>مدیریت سفارشات</span> <i class="fa fa-angle-left"></i></a>
            <ul class="treeview-menu">
                <li ><a href="{{ route('order.index') }}" style="{{ request()->is('order/index') ? 'color:black' : ''}}">نمایش سفارشات </a></li>
{{--                <li ><a href="{{ route('order.show') }}" style="{{ request()->is('order/show') ? 'color:black' : ''}}">اضافه کردن محصول</a></li>--}}
            </ul>
        </li>
        <li class="treeview @php if( (request()->is('dashboard/comment')) || ( request()->is('dashboard/comment/show'))){echo  'active';} @endphp">
            <a href="javascript:void(0)"><i class="zmdi zmdi-apps "></i> <span>مدیریت نظرات</span> <i class="fa fa-angle-left"></i></a>
            <ul class="treeview-menu">
                <li ><a href="{{ route('comment.index') }}" style="{{ request()->is('dashboard/comment') ? 'color:black' : ''}}">نمایش نظرات </a></li>
            </ul>
        </li>
        <li class="treeview @php if( (request()->is('dashboard/category')) || ( request()->is('dashboard/category/show'))){echo  'active';} @endphp">
            <a href="javascript:void(0)"><i class="zmdi zmdi-apps "></i> <span>مدیریت دسته بندی ها</span> <i class="fa fa-angle-left"></i></a>
            <ul class="treeview-menu">
                <li ><a href="{{ route('category.index') }}" style="{{ request()->is('dashboard/category') ? 'color:black' : ''}}">نمایش دسته بندی ها        </a></li>
                <li ><a href="{{ route('category.create') }}" style="{{ request()->is('dashboard/category/create') ? 'color:black' : ''}}">اضافه کردن دسته بندی جدید</a></li>
            </ul>
        </li>
        <li class="treeview @php if( (request()->is('dashboard/attribute')) || ( request()->is('dashboard/attribute/show'))){echo  'active';} @endphp">
            <a href="javascript:void(0)"><i class="zmdi zmdi-apps "></i> <span>مدیریت ویژگی ها</span> <i class="fa fa-angle-left"></i></a>
            <ul class="treeview-menu">
                <li ><a href="{{ route('attribute.index') }}" style="{{ request()->is('dashboard/attribute') ? 'color:black' : ''}}">نمایش ویژگی ها </a></li>
                <li ><a href="{{ route('attribute.create') }}" style="{{ request()->is('dashboard/attribute/create') ? 'color:black' : ''}}">اضافه کردن ویژگی جدید</a></li>
            </ul>
        </li>
        <li class="treeview @php if( (request()->is('dashboard/seo'))){echo  'active';} @endphp">
            <a href="javascript:void(0)"><i class="zmdi zmdi-apps "></i> <span>SEO</span> <i class="fa fa-angle-left"></i></a>
            <ul class="treeview-menu">
                <li ><a href="{{ route('seo.index') }}" style="{{ request()->is('dashboard/seo') ? 'color:black' : ''}}">نمایش seo محصولات سایت </a></li>

            </ul>
        </li>
        <li class="  @php if( (request()->is('brand/index'))){echo  'active';} @endphp">
            <a href="{{ route('brand.index') }}"><i class="zmdi zmdi-apps "></i> <span>مدیریت برند ها</span> <i class="fa fa-angle-left"></i></a>
        </li>

    </ul>
</nav>
