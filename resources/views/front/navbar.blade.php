<style>
        /* Style for navigation links */
        .navlinks li:hover,
        .navlinks li.active {
            background-color: #fff; /* Change to the desired hover color */
        }

        /* Style for active link */
        .navlinks li.active {
            font-weight: bold; /* Change to the desired active link style */
        }

        /* Style for anchor tags */
        .navlinks li a {
            display: block;
            padding: 10px 15px;
            text-decoration: none;
            color: #fff; /* Change to the desired text color */
        }

        /* Style for anchor tags on hover */
        .navlinks li a:hover {
            color: #fff; /* Change to the desired text color on hover */
        }

</style>   
<header>
        <nav class="nav affix">
            <div class="menu_containter ContainerUnactive">
                <div class="logo">
                    <a href="{{ url('/') }}">W</a>
                </div>
                <div id="mainListDiv" class="main_list">
                    <ul class="navlinks">
                            <li class="{{ (request()->is('traditional_dance')? 'active' : '' ) }} ">
                                <a href="{{ url('/traditional_dance') }}">カンボジアの伝統料理</a>
                            </li>
                            <li class="{{ (request()->is('phumasia_activity')? 'active' : '' ) }}">
                                <a href="{{ url('/phumasia_activity') }}">クイアクティビティ</a>
                            </li>
                            <li><a href="{{ url('welcomepage') }}">プーマシア活動</a></li>
                            <li><a href="#">環境</a></li>
                            <li><a href="#">起業家精神</a></li>
                            <li><a href="#">コラボレーション</a></li>
                    </ul>
                </div>
                <div class="d-flex">
                    <a href="#"><div class="page_darection"><div class="sybol" style="background-image: url({{ asset('img/Flag_of_Cambodia.png') }});"></div></div></a>
                    <a href="#"><div class="page_darection un_active"><div class="sybol" style="background-image: url({{ asset('img/Flag_of_Myanmar.svg.png') }});"></div></div></a>
                </div>        
            </div>
                <span class="navTrigger unactive">
                    <i></i>
                    <i></i>
                    <i></i>
                </span>
        </nav>
    </header>