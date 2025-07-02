
<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.dashboard.index') }}">{{ config('page.system_page_full_name') }}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin.dashboard.index') }}">{{ config('page.system_page_short_name') }}</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Switch Page</li>
            <li style="padding: 0 20px;">
                <x-page.switcher id="switcher"></x-page.switcher>
            </li>
            @if(!request()->routeIs('auth.profile.*'))
                <li class="menu-header">Home</li>
                <li class="@if (request()->routeIs('admin.dashboard.*')) active @endif"><a class="nav-link" href="{{ route('admin.dashboard.index') }}"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
                @if(auth()->user()->hasBasePermissions('hospitality.master.data'))
                    <li class="menu-header">Master Data</li>
                    <li class="@if (request()->routeIs('admin.categories.*')) active @endif"><a class="nav-link" href="{{ route('admin.categories.index') }}"><i class="fas fa-list-alt"></i> <span>Category</span></a></li>
                    <li class="@if (request()->routeIs('admin.category-items.*')) active @endif"><a class="nav-link" href="{{ route('admin.category-items.index') }}"><i class="fas fa-list"></i> <span>Items</span></a></li>
                    <li class="@if (request()->routeIs('admin.product-types.*')) active @endif"><a class="nav-link" href="{{ route('admin.product-types.index') }}"><i class="fas fa-tag"></i> <span>Product Type</span></a></li>
                    <li class="@if (request()->routeIs('admin.unit-types.*') || request()->routeIs('admin.units.*')) active @endif"><a class="nav-link" href="{{ route('admin.unit-types.index') }}"><i class="fas fa-tint"></i> <span>Unit</span></a></li>
                @endif
                @if(auth()->user()->hasBasePermissions('hospitality.suppliers'))
                    <li class="@if (request()->routeIs('admin.suppliers.*')) active @endif"><a class="nav-link" href="{{ route('admin.suppliers.index') }}"><i class="fas fa-building"></i> <span>Supplier</span></a></li>
                @endif
                @if(auth()->user()->hasBasePermissions('hospitality.warehouse.product') || auth()->user()->hasBasePermissions('hospitality.warehouse.product-stock'))
                    <li class="menu-header">Inventory</li>
                @endif
                @if(auth()->user()->hasBasePermissions('hospitality.warehouse.product') || auth()->user()->hasBasePermissions('hospitality.warehouse.product-stock'))
                    <li class="@if (request()->routeIs('admin.products.*') || request()->routeIs('admin.product-stocks.*')) active @endif"><a class="nav-link" href="{{ route('admin.products.index') }}"><i class="fas fa-box"></i> <span>Warehouse</span></a></li>
                @endif
                @if(auth()->user()->hasBasePermissions('hospitality.purchasing'))
                    <li class="menu-header">Supply</li>
                    <li class="@if (request()->routeIs('admin.purchasings.*')) active @endif"><a class="nav-link" href="{{ route('admin.purchasings.index') }}"><i class="fas fa-download"></i> <span>Purchasing</span></a></li>
                @endif
                @if(
                    auth()->user()->hasBasePermissions('hospitality.incoming-goods') ||
                    auth()->user()->hasBasePermissions('hospitality.product-batches') ||
                    auth()->user()->hasBasePermissions('hospitality.purchasing-batches') ||
                    auth()->user()->hasBasePermissions('hospitality.outgoing-goods') ||
                    auth()->user()->hasBasePermissions('hospitality.return-goods')
                )
                    <li class="menu-header">Distribution</li>
                @endif
                @if(auth()->user()->hasBasePermissions('hospitality.incoming-goods'))
                    <li class="@if (request()->routeIs('admin.incoming-goods.*')) active @endif"><a class="nav-link" href="{{ route('admin.incoming-goods.index') }}"><i class="fas fa-warehouse"></i> <span>Incoming Goods</span></a></li>
                @endif
                @if(auth()->user()->hasBasePermissions('hospitality.product-batches') || auth()->user()->hasBasePermissions('hospitality.purchasing-batches'))
                    <li class="@if (request()->routeIs('admin.product-batches.*') || request()->routeIs('admin.purchasing-batches.stock')) active @endif"><a class="nav-link" href="{{ route('admin.product-batches.index') }}"><i class="fas fa-tasks"></i> <span>Product Batches</span></a></li>
                @endif
                @if(auth()->user()->hasBasePermissions('hospitality.outgoing-goods'))
                    <li class="@if (request()->routeIs('admin.outgoing-goods.*')) active @endif"><a class="nav-link" href="{{ route('admin.outgoing-goods.index') }}"><i class="fas fa-truck-loading flip-element"></i> <span>Outgoing Goods</span></a></li>
                @endif
                @if(auth()->user()->hasBasePermissions('hospitality.return-goods'))
                    <li class="@if (request()->routeIs('admin.return-goods.*')) active @endif"><a class="nav-link" href="{{ route('admin.return-goods.index') }}"><i class="fas fa-boxes"></i> <span>Return Goods</span></a></li>
                @endif
                @if(
                    auth()->user()->hasBasePermissions('hospitality.menus') ||
                    auth()->user()->hasBasePermissions('hospitality.menu-sales-histories') ||
                    auth()->user()->hasBasePermissions('hospitality.menu-sales') ||
                    auth()->user()->hasBasePermissions('hospitality.menu-sales-graphs')
                )
                    <li class="menu-header">Sales</li>
                @endif
                @if(auth()->user()->hasBasePermissions('hospitality.menus') || auth()->user()->hasBasePermissions('hospitality.menu-sales-histories'))
                    <li class="@if (request()->routeIs('admin.menus.*') || request()->routeIs('admin.menu-sales-histories.*')) active @endif"><a class="nav-link" href="{{ route('admin.menus.index') }}"><i class="fas fa-hamburger"></i> <span>Menu</span></a></li>
                @endif
                @if(auth()->user()->hasBasePermissions('hospitality.menu-sales'))
                    <li class="@if (request()->routeIs('admin.menu-sales.*')) active @endif"><a class="nav-link" href="{{ route('admin.menu-sales.index') }}"><i class="fas fa-money-bill-wave"></i> <span>Sales</span></a></li>
                @endif
                @if(auth()->user()->hasBasePermissions('hospitality.menu-sales-graphs'))
                    <li class="@if (request()->routeIs('admin.menu-sales-graphs.*')) active @endif"><a class="nav-link" href="{{ route('admin.menu-sales-graphs.index') }}"><i class="fas fa-chart-area"></i> <span>Graph</span></a></li>
                @endif
            @endif
            <li class="menu-header">Global Setting</li>
            <li><x-page.global-setting-link></x-page.global-setting-link></li>
        </ul>
    </aside>
</div>
