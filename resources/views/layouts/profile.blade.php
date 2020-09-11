@extends('layouts.app')

@section('content')

    <div class="wrapper">

        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Личный кабинет</h3>
            </div>

            <ul class="list-unstyled components">
{{--                <li class="active">--}}
{{--                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Настройки профиля</a>--}}
{{--                    <ul class="collapse list-unstyled" id="homeSubmenu">--}}
{{--                        <li>--}}
{{--                            <a href="#">Home 1</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#">Home 2</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#">Home 3</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
                <li>
                    @if (auth()->check())
                        <a href="{{route('user.profile', Auth::user()->id)}}">Настройки профиля</a>
                    @endif
                </li>

                <li>
                    <a href="{{'/home/user/profile/order/'}}">Заказы</a>
                </li>
                <li>
                    <a href="{{'/home/user/profile/anons/'}}">Участие в анонсах</a>
                </li>
                <li>
                    <a href="{{'/home/user/profile/product/'}}">Мои товары</a>
                </li>
                <li>
                    <a href="{{'/home/user/profile/message/'}}">Мои сообщения</a>
                </li>
                <li>
                    <a href="{{'/home/user/profile/report/'}}">Отчет</a>
                </li>
{{--                <li>--}}
{{--                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">Pages</a>--}}
{{--                    <ul class="collapse list-unstyled" id="pageSubmenu">--}}
{{--                        <li>--}}
{{--                            <a href="#">Page 1</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#">Page 2</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#">Page 3</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="#">Portfolio</a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="#">Contact</a>--}}
{{--                </li>--}}
            </ul>
        </nav>

        <!-- Page Content -->

            @yield('sidebar')


    </div>
@stop
