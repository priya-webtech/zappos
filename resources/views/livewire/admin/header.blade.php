<div class="admin_panel_header">
    <div class="header_site_name">
        <div class="hidden_desktop">
            <div class="open_side_menu mr-2 fs-20"><i class="fas fa-bars"></i></div>
        </div>
        <a href="#" class="site_title">Demo Estore</a>
    </div>
    <div class="header_site_search hidden_mobile">
        <form name="panel_search" id="panel_search" method="post">
            <button type="submit"><i class="fas fa-search"></i></button>
            <input type="text" name="search_from_panel" id="search_from_panel" placeholder="Search">
        </form>
    </div>
    <div class="header_user_name">


        <a class="header_user_profile" onclick="myFunction()">
            <img src="{{ URL::asset('/assets/images/avatar.png')}}">
            <h4>Demo Estore</h4>
        </a>
        <div style="display: none" id="myDIV">
            <ul style="list-style-type:none;">
                <li><a href="#">Manage Account</a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <input type="hidden" name="role" value="admin" />

                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            Log Out
                        </a>
                    </form>
                </li>

            </ul>
        </div>
    </div>
</div>
<style>
    .dropdown-divider {
        height: 0;
        margin: .5rem 0;
        overflow: hidden;
        border-top: 1px solid #e9ecef;
    }
</style>
<script type="text/javascript">
    function myFunction() {
        var x = document.getElementById("myDIV");
        if (x.style.display === "none") {
            x.style.display = "inline-block";
        } else {
            x.style.display = "none";
        }
    }
</script>
