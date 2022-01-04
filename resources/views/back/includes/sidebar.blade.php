<div class="left main-sidebar">

    <div class="sidebar-inner leftscroll">

        <div id="sidebar-menu">

            <ul>
                <li class="submenu">
                    <a class="active" href="index.html">
                        <i class="fas fa-bars"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li class="submenu">
                    <a id="tables" href="#">
                        <i class="fas fa-table"></i>
                        <span> Users </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{ route('admin') }}"> <i class="fas fa-user-plus"></i>Add User</a>

                        </li>
                        <li>
                            <a href="#"> <i class="far fa-calendar-alt"></i>Manage User</a>
                        </li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="mail-all.html">
                        <span class="label radius-circle bg-danger float-right">18</span>
                        <i class="fas fa-envelope"></i>
                        <span> Messages </span>
                    </a>
                </li>

                <li class="submenu">
                    <a id="tables" href="#">
                        <i class="fas fa-table"></i>
                        <span> Product </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{ route('product.create') }}"> <i class="far fa-file-powerpoint"></i>Add Product</a>

                        </li>
                        <li>
                            <a href="#"> <i class="far fa-calendar-alt"></i>Monthly Attendance</a>
                        </li>
                    </ul>
                </li>
          
                <li class="submenu">
                    <a href="users.html">
                        <i class="fas fa-poll-h"></i>
                        <span> Reports </span>
                    </a>
                </li>
                <li class="submenu">
                    <a href="users.html">
                        <i class="fas fa-cog"></i>
                        <span> Setting</span>
                    </a>
                </li>

         

            </ul>

            <div class="clearfix"></div>

        </div>

        <div class="clearfix"></div>

    </div>

</div>
@push('name')
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
@endpush
users::wherebetween('crated_at',[$firstdate,$last_date])