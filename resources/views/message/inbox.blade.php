@extends('app')

@section('title')
    Inbox Messages
@stop

@section('content')

<div class="message-inbox">
    <div class="main">

        <div class="wrap">

            <div class="content container">

                {{-- title inbox --}}
                <h2 class="page-title">Private Messages<span>(Messages regarding to your ads)</span></h2>

                {{-- body inbox --}}
                <div class="row">

                    {{-- left side list inbox --}}
                    <div class="col-md-3 col-lg-2">

                        {{-- compose new message --}}
                        {{--<a href="#" id="compose-btn" class="btn btn-danger btn-block">Compose</a>--}}

                        <ul id="folders-list" class="nav nav-pills nav-stacked nav-email-folders mt-15">
                            <li class="active">
                                <a href="/message/inbox">Inbox</a>
                            </li>
                            <li class="">
                                <a href="/message/sent">Sent</a>
                            </li>
                        </ul>

                    </div>

                    {{-- right side view message --}}
                    <div class="col-md-9 col-lg-10">

                        {{-- pagination inbox --}}
                        <div class="clearfix mb-xs">

                            {{-- back arrow btn --}}
                            <a id="back-btn" class="btn btn-transparent btn-sm width-50 floatLeft hide" href="#">
                                <i class="fa fa-angle-left fa-lg"></i>
                            </a>

                            {{-- pagination list --}}
                            <div id="folders-stats" class="floatRight">
                                <p class="widget-email-count">Showing 1 -10 of 96 messages</p>
                                <ul class="pagination pagination-sm widget-email-pagination">
                                    <li class="prev disabled">
                                        <a href="#"><i class="fa fa-chevron-left"></i></a>
                                    </li>
                                    <li class="active">
                                        <a href="#">1</a>
                                    </li>
                                    <li>
                                        <a href="#">2</a>
                                    </li>
                                    <li class="next">
                                        <a href="#"><i class="fa fa-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        {{-- message inbox container --}}
                        <section id="rightcolumn" class="widget widget-email">

                            {{-- message header --}}
                            <header id="widget-email-header" class="mb-sm">
                                <div class="row">
                                    <div class="col-sm-6">

                                        {{-- trash button --}}
                                        <button type="submit" class="btn grey trash"><i class="fa fa-trash-o"></i>Delete</button>

                                        {{-- more select inbox action --}}
                                        <div id="aa" class="wrapper-dropdown-action floatLeft ml-15" tabindex="1">Actions
                                            <ul class="dropdown-select-category">
                                                <li>
                                                    <a href="#">
                                                        Mark as read
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Mark as unread
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <input id="mailbox-search" class="form-control input-sm width-200 pull-right" type="text" placeholder="Search Messages">
                                    </div>
                                </div>
                            </header>

                            {{-- message mailbox --}}
                            <div id="mailbox-content" class="widget-table-overflow">

                                <table id="folder-view" class="table table-stripped table-emails table-hover table-lg mb-sm">
                                    <thead>
                                        <tr>
                                            <th colspan="3">
                                                <div class="checkbox">
                                                    <input id="toggle-all" type="checkbox">
                                                    <label for="toggle-all"></label>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr id="view-message" class="unread">
                                            <td>
                                                <div class="checkbox">
                                                    <input id="checkbox1484525" class="selected-checkbox" type="checkbox">
                                                    <label for="checkbox1484525"></label>
                                                </div>
                                            </td>
                                            <td class="favorite">
                                                <span>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </td>
                                            <td class="name hidden-xs">Mark Infantado</td>
                                            <td class="subject">Hi, Welcome to google Mail</td>
                                            <td class="hidden-xs">
                                                <i class="fa fa-paperclip"></i>
                                            </td>
                                            <td class="date">8:00</td>
                                        </tr>

                                        <tr class="unread">
                                            <td>
                                                <div class="checkbox">
                                                    <input id="checkbox1014285" class="selected-checkbox" type="checkbox">
                                                    <label for="checkbox1014285"></label>
                                                </div>
                                            </td>
                                            <td class="favorite">
                                                <span class="starred">
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </td>
                                            <td class="name hidden-xs">Rodney Santos</td>
                                            <td class="subject">New Python question for this week!</td>
                                            <td class="hidden-xs">
                                                <i class="fa fa-paperclip"></i>
                                            </td>
                                            <td class="date">Aug 15</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <input id="checkbox232964" class="selected-checkbox" type="checkbox">
                                                    <label for="checkbox232964"></label>
                                                </div>
                                            </td>
                                            <td class="favorite">
                                                <span class="starred">
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                            </td>
                                            <td class="name hidden-xs">notifications@facebook.com</td>
                                            <td class="subject">Someone just commented on your photo!</td>
                                            <td class="hidden-xs"></td>
                                            <td class="date">Aug 7</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                        </section>

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>

@endsection