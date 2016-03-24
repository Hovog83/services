<aside id="left-panel">
    <!-- NAVIGATION : This navigation is also responsive-->
    <nav>
        <!--
        NOTE: Notice the gaps after each icon usage <i></i>..
        Please note that these links work a bit different than
        traditional href="" links. See documentation for details.
        -->

        <ul>
            <li class="">
                <a href="#" title="User"><i class="fa fa-lg fa-fw fa-users"></i> <span class="menu-item-parent">User</span></a>
                <ul>
                    <li class="{{ Menu::isActive('admin.index.index') }}">
                        <a href="/admin/user" title="List"><span class="menu-item-parent">List</span></a>
                    </li>

                </ul>
            </li>            
            <li class="">
                <a href="#" title="User"><i class="fa fa-lg fa-fw fa-users"></i> <span class="menu-item-parent">Categorie</span></a>
                <ul>
                    <li class="{{ Menu::isActive('admin.categorie.index') }}">
                        <a href="/admin/categorie/" title="List"><span class="menu-item-parent">List</span></a>
                    </li>
                    <li class="">
                        <a href="/admin/categorie/create" title="List"><span class="menu-item-parent">Create</span></a>
                    </li>

                </ul>
            </li>

        </ul>
    </nav>
    <span class="minifyme" data-action="minifyMenu">
        <i class="fa fa-arrow-circle-left hit"></i>
    </span>
</aside>