<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{asset('images/admin_image//sidebar-1.jpg')}}">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="{{url('/')}}" target="_blank" class="simple-text logo-normal">
            GHI
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">

{{--            <li class="nav-item @if($url=="dashboard") active @endif">--}}
{{--                <a class="nav-link" href="{{url('home')}}">--}}
{{--                    <i class="material-icons">dashboard</i>--}}
{{--                    <p>Dashboard</p>--}}
{{--                </a>--}}
{{--            </li>--}}

            <li class="nav-item @if($url=="course") active @endif">
                <a class="nav-link" href="{{url('admin')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Course</p>
                </a>
            </li>
            <li class="nav-item @if($url=="member") active @endif">
                <a class="nav-link" href="{{url('admin/member')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Member</p>
                </a>
            </li>
            <li class="nav-item @if($url=="event") active @endif">
                <a class="nav-link" href="{{url('admin/event')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Event</p>
                </a>
            </li>
            <li class="nav-item @if($url=="blog") active @endif">
                <a class="nav-link" href="{{url('admin/blog')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Blog</p>
                </a>
            </li>
            <li class="nav-item @if($url=="teacher_account") active @endif">
                <a class="nav-link" href="{{url('admin/teacher_account')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Teacher Accout</p>
                </a>
            </li>
            <li class="nav-item @if($url=="enrollment") active @endif">
                <a class="nav-link" href="{{url('admin/eventStudent')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Enrollment list</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('logout')}}">
                    <i class="material-icons">logout</i>
                    <p>Logout</p>
                </a>
            </li>

        </ul>
    </div>
</div>